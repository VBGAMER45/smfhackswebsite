<?php
/*
CREATE TABLE `smf_modtracker_reports` (
`ID_REPORT` INT NOT NULL AUTO_INCREMENT ,
`summary` TEXT NOT NULL ,
`reproducibility` TINYTEXT NOT NULL ,
`severity` TINYTEXT NOT NULL ,
`description` TEXT NOT NULL ,
`private` SMALLINT NOT NULL ,
`ID_MEMBER` MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
`date` INT( 10 ) UNSIGNED NOT NULL ,
`status` TINYTEXT NOT NULL ,
`ID_MOD` MEDIUMINT NOT NULL ,
PRIMARY KEY ( `ID_REPORT` )
) TYPE = MYISAM ;
*/

function template_main()
{
	global $smcFunc, $scripturl, $user_info;


	$isadmin = allowedTo('admin_forum');
	echo '
	<div class="tborder">


	<h1 align="center">Modification Tracker</h1>
	<div align="center"><b>Current Issues and Feature Requests</b></div>

	<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
	<tr><td colspan="7">
<a href="' . $scripturl . '?action=modtracker;sa=report">Report Issue or Feature Request</a>

	</td>
	</tr>

	<tr class="catbg">
				<td>Summary</td>
				<td>Type</td>
				<td>Modification Name</td>
				<td>Status</td>
				<td>Reported By</td>
				<td>Date</td>
				<td>Options</td>
		</tr>

				';
	// List all the reports
	$dbresult = $smcFunc['db_query']('', "SELECT
	s.ID_MOD, s.modname, r.ID_REPORT, r.severity, r.ID_MEMBER, m.real_name,r.date,r.status,
	r.summary, r.private
	FROM ({db_prefix}modtracker_reports as r, {db_prefix}modtracker_mods as s)
	LEFT JOIN {db_prefix}members as m ON (r.ID_MEMBER = m.ID_MEMBER)
	WHERE r.ID_MOD = s.ID_MOD ORDER BY  r.ID_REPORT DESC");
	while ($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		// Hide the private reports
		if ($isadmin == false && $user_info['id'] != $row['ID_MEMBER'] && $row['private'] == 1)
			continue;
		echo '<tr>';
		echo '<td><a href="',$scripturl,'?action=modtracker;sa=viewreport;id=',$row['ID_REPORT'],'">',$row['summary'], '</a></td>';
		echo '<td>',$row['severity'], '</td>';
		echo '<td>',$row['modname'], '</td>';
		echo '<td>',$row['status'], '</td>';
		echo '<td><a href="',$scripturl,'?action=profile;u=',$row['ID_MEMBER'],'">',$row['real_name'], '</a></td>';
		echo '<td>',timeformat($row['date']), '</td>';
		echo '<td>';

		if ($isadmin == true ||  $user_info['id'] == $row['ID_MEMBER'])
		{
			echo '<a href="',$scripturl,'?action=modtracker;sa=editreport;id=',$row['ID_REPORT'],'">[Edit]</a>';
			if ($isadmin == true)
				echo '&nbsp;&nbsp;<a href="',$scripturl,'?action=modtracker;sa=delreport;id=',$row['ID_REPORT'],'">[Delete]</a>';
		}
		echo '</td>
		</tr>
		';
	}
	$smcFunc['db_free_result']($dbresult);


	echo '</table>';


	echo '<br />
	<br />


	</div>';
}
function template_report()
{
	global $scripturl, $smcFunc;
/*
CREATE TABLE `smf_modtracker_mods` (
`ID_MOD` MEDIUMINT NOT NULL AUTO_INCREMENT ,
`modname` TINYTEXT NOT NULL ,
PRIMARY KEY ( `ID_MOD` )
) TYPE = innodb;
*/

	echo '<div class="tborder">
		<form method="post" action="' . $scripturl . '?action=modtracker;sa=report2">
			<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
				<tr class="catbg">
				<td colspan="2">Report Issue or Feature Request</td>
				</tr>
				<tr class="windowbg">
					<td align="right">Modification Name</td>
					<td><select name="modname">';
	$dbresult = $smcFunc['db_query']('', "SELECT
	ID_MOD, modname
	FROM {db_prefix}modtracker_mods");
	while ($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '<option value="',$row['ID_MOD'], '">',$row['modname'], '</option>';
	}
	$smcFunc['db_free_result']($dbresult);

	echo '           </select></td>
				</tr>
				<tr class="windowbg">
					<td align="right">Reproducibility</td>
					<td>	<select tabindex="2" name="reproducibility">
			<option value="always">always</option><option value="sometimes">sometimes</option><option value="random">random</option><option value="have not tried">have not tried</option><option value="unable to reproduce">unable to reproduce</option><option value="N/A">N/A</option>		</select>
				</td>
				</tr>
				<tr class="windowbg">
					<td align="right">Severity</td>
					<td><select tabindex="3" name="severity">
			<option value="feature">feature</option><option value="trivial">trivial</option><option value="text">text</option><option value="tweak">tweak</option><option value="minor" selected="selected" >minor</option><option value="major">major</option><option value="crash">crash</option><option value="block">block</option>		</select>
				</td>
				</tr>

				<tr class="windowbg">
					<td align="right">Summary</td>
					<td><input tabindex="5" type="text" name="summary" size="105" maxlength="128" value="" />
				</td>
				</tr>
				<tr class="windowbg">
					<td align="right">Description</td>
					<td><textarea tabindex="6" name="description" cols="80" rows="10" wrap="virtual"></textarea>
				</td>
				</tr>
				<tr class="windowbg">
					<td align="right">View Status</td>
					<td>
					<input type="radio" name="viewstatus" value="public" checked="checked">Public<input type="radio" name="viewstatus" value="private">Private
				</td>
				</tr>

				<tr>
					<td align="center" colspan="2"><input type="submit" value="Report Issue" ></td>
				</tr>
				</table>
				</form>
				<br />
				<div align="center"><a href="' . $scripturl . '?action=modtracker"><b>Return to the Modification Tracker</b></a></div>


				</div>';




}
function template_search()
{

}
function template_addcomment()
{

}
function template_editreport()
{
	global $scripturl, $smcFunc;
}
function template_viewreport()
{
	global $smcFunc, $scripturl, $context;

	$isadmin = allowedTo('admin_forum');

	$dbresult = $smcFunc['db_query']('', "SELECT
	r.ID_REPORT, r.severity, r.ID_MEMBER,r.date,r.status, s.modname,
	r.summary, r.private, r.reproducibility, r.description, m.real_name, r.ID_MOD
	FROM ({db_prefix}modtracker_reports as r , {db_prefix}modtracker_mods as s)
	LEFT JOIN {db_prefix}members as m ON (r.ID_MEMBER = m.ID_MEMBER)
	WHERE r.ID_MOD = s.ID_MOD AND r.ID_REPORT = " . $context['tracker_reportid'] . " LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$smcFunc['db_free_result']($dbresult);
	//$context['tracker_reportid']
	echo '
	<div class="tborder">
	<div align="center"><a href="' . $scripturl . '?action=modtracker"><b>Return to the Modification Tracker</b></a></div>

	<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
				<tr>
				<td><b>Severity</b></td>
				<td>',$row['severity'],'</td>
				<td><b>Reproducibility</b></td>
				<td>',$row['reproducibility'],'</td>

				</tr>
				<tr>
				<td><b>Date</b></td>
				<td><b>',timeformat($row['date']),'</b></td>
				<td><b>Status</b></td>
				<td>',$row['status'],'</td>

				</tr>
				<tr>
				<td><b>Modification</b></td>
				<td>',$row['modname'],'</td>
				<td><b>Reported by</b></td>
				<td><a href="',$scripturl,'?action=profile;u=',$row['ID_MEMBER'],'">',$row['real_name'], '</a></td>

				</tr>
				<tr>
				<td colspan="4"><hr /></td>
				</tr>
				<tr>
				<td><b>Issue:</b></td>
				<td colspan="3"><b>',$row['summary'],'</b></td>
				</tr>
				<tr>
					<td><b>Description:</b></td>
					<td colspan="3">',$row['description'],'</td>
				</tr>
	</table>

	';


	// Show add note form
	echo '
	<hr />
	<form method="post" action="' . $scripturl . '?action=modtracker;sa=addcomment">
	<table>
	<tr>
	<td align="center" colspan="2"><b>Add Note</b></td>
	</tr>
	<tr>
	<td width="20%"><b>Information</b></td>
	<td><textarea tabindex="6" name="comment" cols="80" rows="10" wrap="virtual"></textarea></td>
	</tr>';

	if ($isadmin)
	echo '
	<td width="20%"><b>Status</b></td>
	<td><select name="status">
	<option value="Pending">Pending</option>
	<option value="OnHold">On Hold</option>
	<option value="Closed">Closed</option>
	</select>
	</td>
	</tr>';

	echo '
	<tr>
	<td align="center" colspan="2">
	<input type="hidden" name="id" value="',$context['tracker_reportid'],'" />
	<input type="submit" value="Add Note" /></td>
	</tr>
	</table>
	</form>';

	// Show comments for this report
	echo
	'<hr /><div align="center"><b>Notes</b></div><br />

	<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
	';
			$dbresult = $smcFunc['db_query']('', "SELECT
	c.ID_MEMBER, c.comment, c.date, c.ID_NOTE, m.real_name
	FROM {db_prefix}modtracker_comments as c
	LEFT JOIN {db_prefix}members as m ON (c.ID_MEMBER = m.ID_MEMBER)
	WHERE c.ID_REPORT = " . $context['tracker_reportid'] );
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '<tr>
		<td valign="top" width="20%" class="windowbg"><a href="',$scripturl,'?action=profile;u=',$row['ID_MEMBER'],'">',$row['real_name'],$row['real_name'], '</a><br >',timeformat($row['date']),'<br />
		<a href="' . $scripturl . '?action=modtracker;sa=delcomment;id=' . $row['ID_NOTE'] . '">[Delete]</a>
		</td>
		<td valign="top" width="80%" class="windowbg2">',$row['comment'],'</td>
		</tr>';
	}
	$smcFunc['db_free_result']($dbresult);
	echo '</table>

		<br />
				<div align="center"><a href="' . $scripturl . '?action=modtracker"><b>Return to the Modification Tracker</b></a></div>
				';


	echo '</div>';
}
?>