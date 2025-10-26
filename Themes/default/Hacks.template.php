<?php
/*
Copyright 2005-2009 SMFHacks.com
*/

if (!defined('SMF'))
	die('Hacking attempt...');

function template_main()
{
	global $scripturl, $smcFunc, $context,$ID_MEMBER;


	@$catid= (int) $_GET['cat'];


	if(empty($catid))
	{

		echo '<div class="tborder" style="margin-bottom: 2px;">
		<div class="titlebg" style="padding: 4px; font-weight: bold;">Hacks and Mods Categories</div><div class="windowbg" style="padding: 4px;">
		<a href="https://www.smfhacks.com/addhack.html">Add a Hack</a>  <a href="https://www.smfhacks.com/controlpanel.html">Manage your SMFHacks</a> <br />
		<br />';

		//Get catagory listing
			$q = "SELECT id, name, description FROM {db_prefix}hacks_cats";
			$res = $smcFunc['db_query']('',$q);

			while($arr = $smcFunc['db_fetch_assoc']($res))
			{

				echo '<a href="https://www.smfhacks.com/hacks-' . $arr['id'] . '.html"><h3><u>' . $arr['name'] . '</u></h3></a> - ' . $arr['description'] . '<br />';
			}
			$smcFunc['db_free_result']($res);

		echo '
		</div>
		</div></div>';
	}
	else
	{

		echo '<div class="tborder" style="margin-bottom: 2px;">
		<div class="titlebg" style="padding: 4px; font-weight: bold;">Hacks and Mods - ' . $context['hackcatname'] . '</div><div class="windowbg" style="padding: 4px;">
		<a href="https://www.smfhacks.com/hacks.html">SMFHacks Categories</a> - <b>' . $context['hackcatname'] . '</b><br />
		<a href="https://www.smfhacks.com/addhack.html">Add a Hack</a><br />
		<hr />';

		@$p = (int) $_GET['p'];
		if(empty($p))
			$p=0;

		$pageno=$p*10;


			$res = $smcFunc['db_query']('', "SELECT id FROM {db_prefix}hacks where  catid='$catid'");

			$count=db_affected_rows();

			$pages=floor($count / 10);
			$pages++;


		$p2 = $p +1;

		echo "Page $p2 of $pages  ";

		$nextpage=$p;
		$nextpage++;
		$prevpage=$p;
		$prevpage--;
		if($p <= ($pages-2) )
			echo "<a href=\"$scripturl?action=hacks;sa=view&cat=$catid&p=$nextpage\">Next Page</a> ";
		if($pageno >0)
			echo "<a href=\"$scripturl?action=hacks;sa=view&cat=$catid&p=$prevpage\">Previous Page</a>";

		echo '<br />';
		//Now List all the hacks
			$q = "SELECT h.id, h.ID_MEMBER, hl.title HACKLink, h.modname, h.author, h.approved, h.shortdesc,h.version,h.catid
			FROM {db_prefix}hacks AS h, {db_prefix}hacks_lookup AS hl WHERE  hl.ID_HACK = h.id  AND  h.catid='$catid'  ORDER BY id DESC  LIMIT $pageno , 10";
			$res = $smcFunc['db_query']('',$q);

				echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
					<tr>

						<th class="catbg" width="50%">Name</td>
						<th class="catbg" width="20%" align="center">Author</td>
						<th class="catbg" width="30%">SMF Version</td>

					</tr>';


			while($arr = $smcFunc['db_fetch_assoc']($res))
			{
				echo '<tr>';
				echo '<td class="windowbg2"><b><a href="https://www.smfhacks.com/hacks/' . $arr['HACKLink'] . '.html">' . $arr['modname'] . '</a></b>';
				if($ID_MEMBER == $arr['ID_MEMBER'])
				{
					echo '&nbsp;<b><a href="' . $scripturl . '?action=hacks;sa=updatehack&id=' . $arr['id'] . '">[Edit]</a>&nbsp;<a href="' . $scripturl . '?action=hacks;sa=deletehack&id=' . $arr['id'] . '">[Delete]</a></b>';

				}

				echo '<br />';
				echo stripslashes($arr['shortdesc']) . '</td>';
				echo '<td class="windowbg2" align="center">' . stripslashes($arr['author']) . '</td>';




				echo '<td class="windowbg2">' . $arr['version'] . '</td>';
				echo '</tr>';
			}
			//Ads heh
			echo '<tr>
			<td class="windowbg2" colspan="3" align="center">

</td>
			</tr>';

		$smcFunc['db_free_result']($res);

		echo '</table><br />';

		echo "Page $p2 of $pages  ";
		if($p <= ($pages-2) )
			echo "<a href=\"$scripturl?action=hacks;sa=view&cat=$catid&p=$nextpage\">Next Page</a> ";
		if($pageno >0)
			echo "<a href=\"$scripturl?action=hacks;sa=view&cat=$catid&p=$prevpage\">Previous Page</a>";


		echo '</div></div></div>';

	}

}

function template_view_hack()
{
	global $smcFunc, $scripturl, $ID_MEMBER;

	@$title=$_GET['title'];

	$id = ' ';
	if(empty($title))
	{
		@$id= (int) $_GET['id'];
		if(empty($id))
			fatal_error('No Hack selected to view.', false);
	}
	else
	{
		$title=addslashes($title);
		$res = $smcFunc['db_query']('', "SELECT ID_HACK FROM {db_prefix}hacks_lookup WHERE title='$title'");
		$arr = $smcFunc['db_fetch_assoc']($res);
			$id = $arr['ID_HACK'];

	}

	$q = "SELECT h.id, h.ID_MEMBER, h.description, h.modname, h.demourl, h.authorsite, h.author, h.created, h.lastupdated, h.approved, h.shortdesc,h.version,h.catid, m.real_name FROM ({db_prefix}hacks AS h) LEFT JOIN {db_prefix}members AS m ON (h.ID_MEMBER = m.ID_MEMBER)  WHERE id='$id'";
	$res = $smcFunc['db_query']('',$q);
	$arr = $smcFunc['db_fetch_assoc']($res);

echo '<div class="tborder">
<b><font size="5">' . stripslashes($arr['modname']) .'</font></b>';
//See if the user owns this posting
if($ID_MEMBER == $arr['ID_MEMBER'])
{
	echo '<b>[<a href="' . $scripturl . '?action=hacks;sa=updatehack&id=' . $id . '">[Edit]</a>&nbsp;<a href="' . $scripturl . '?action=hacks;sa=deletehack&id=' . $id . '">[Delete]</a></b>';

}

echo '
<br />
<b>Author:</b> ' . stripslashes($arr['author']) . '<br />
<b>Submitted by:</b> <a href="' . $scripturl . '?action=profile;u=' . $arr['ID_MEMBER'] . '">' .$arr['real_name'] . '</a><br />

';


if($arr['authorsite']!='')
{

	if(substr($arr['authorsite'], 0,7) != "http://")
		$arr['authorsite'] = 'http://' . $arr['authorsite'];

	echo '<b>Author Website:</b><a href="' . $arr['authorsite'] . '" rel="nofollow" target="_blank">' . $arr['authorsite'] . '</a><br />';
}

echo '<b>Date Submitted:</b> ' . $arr['created'] . '<br />
<b>Last Updated:</b> ' . $arr['lastupdated'] . '<br />';

if($arr['demourl']!='')
{
	if(substr($arr['demourl'], 0,7) != "http://")
		$arr['demourl'] = 'http://' . $arr['demourl'];
	echo'<b>Demo Url:</b><a href="' . $arr['demourl'] . '" target="blank">' . $arr['demourl'] . '</a><br />';
}





echo '<b>Supported Versions:</b> ' . $arr['version'] . '<br />
<b>Short Description</b><br />';
echo parse_bbc($arr['shortdesc']);
echo '
<br />
<b>Downloads:</b><br />
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
 ';

 	$q2 = "SELECT id, hacksid, filename, downloads,filesize  FROM {db_prefix}hacks_files where hacksid='$id'";
 	$res2 = $smcFunc['db_query']('',$q2);
 		 echo '<tr>
 			<th width="54%"align="center" class="catbg">
 		 <b>Title</b></th>
 		 <th width="23%" align="center" class="catbg"><b>Downloads</b></th>
 		 <th width="23%" align="center" class="catbg"><b>FileSize (bytes)</b></th>
		 </tr>';

	while($arr2 = $smcFunc['db_fetch_assoc']($res2))
	{

		 echo '<tr>
			<td width="54%"align="center" class="windowbg2">';
		 echo '<b><a href="'.$scripturl.'?action=hacks;sa=down&id=' . $arr2['id'] . '">' . $arr2['filename'] . '</a></b></td>';
		 echo '<td width="23%" align="center" class="windowbg2"><b>' . $arr2['downloads'] . '</b></td>';
		 echo '<td width="23%" align="center" class="windowbg2"><b>' . $arr2['filesize'] . '</b></td>';
		 echo '</tr>';
	}
	$smcFunc['db_free_result']($res2);

 echo '
</table>
<br />
<b>Detailed Description:</b><br />';
echo stripslashes(parse_bbc($arr['description']));


echo '<div align="center">
<br />
</div>';

echo '<br />
<b>Bookmarks:</b><br />';

					$encode_sub = urlencode(stripslashes($arr['modname']));
					$bb_url = 'https://www.smfhacks.com/hacks/' . stripslashes($title) . '.html';
					echo '
 <a href="http://digg.com/submit?phase=2&url=' . $bb_url . '">Digg it</a>&nbsp;


					';

echo '<br />
<b>Latest Ratings:</b>&nbsp;<a href="'.$scripturl.'?action=hacks;sa=rating&id=' . $arr['id'] . '">[Add Rating]</a><br />';

 //Get the latest ratings
 $q3 = "SELECT r.ID_HACK, r.ID,r.ID_MEMBER, m.real_name, r.date, r.value,r.description FROM {db_prefix}ratings AS r, {db_prefix}members AS m  WHERE r.ID_MEMBER = m.ID_MEMBER AND r.ID_HACK='$id' ORDER BY r.ID DESC LIMIT 5";
 $res3 = $smcFunc['db_query']('',$q3);
 while($arr3 = $smcFunc['db_fetch_assoc']($res3))
 {

 	if($arr3['value'] == 1)
 		$rate_icon = 'thumbup.gif';
 	else if($arr3['value'] == -1)
 		$rate_icon = 'thumbdown.gif';
 	else
 		$rate_icon = 'xx.gif';


 	echo '
	<div class="titlebg" style="padding: 4px; font-weight: bold;"><img src="https://www.smfhacks.com/Themes/babylon/images/post/' . $rate_icon . '" />&nbsp;' . timeformat($arr3['date']) . '&nbsp;<a href="'.$scripturl.'?action=profile;u=' . $arr3['ID_MEMBER'] . '">' . $arr3['real_name'] . '</a>&nbsp;wrote:</div>
	<div class="windowbg" style="padding: 4px; ">' . nl2br($arr3['description']) . '</div>';

 }

echo '</div>';

}

function template_add_hack()
{
	global $scripturl, $smcFunc;
	require("class.upload.php");
					//file upload
			$input_field_name = "file";
			$accepted_mime_types = array('application/x-zip-compressed', 'application/octet-stream','application/zip','application/force-download','application/x-zip');


		$upload = new upload($input_field_name);

		$upload->set_max_file_size(5000000);
		$upload->set_accepted_mime_types($accepted_mime_types);

echo '<div class="tborder">
<p><a href="'.$scripturl.'?action=hacks;sa=controlpanel">Return to Hack Control Panel</a></p>
<p><b><font size="5">Add Hack</font></b></p>
<p><font color="#FF0000">* Required</font></p>
One rule only submit the hacks that you have made.<br />
<form method="POST" action="'.$scripturl.'?action=hacks;sa=addhack2" enctype="multipart/form-data">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="163">
  <tr>
    <td width="16%" >Title <font color="#FF0000">* </font></td>
    <td width="84%" ><input type="text" name="title" size="40"></td>
  </tr>
  <tr>
    <td width="16%"  valign="top">Short Description (100 Characters Max) <font color="#FF0000">* </font></td>
    <td width="84%" ><input type="text" name="sdes" size="40" maxlength="100"></td>
  </tr>
  <tr>
  <tr>
    <td width="16%"  valign="top">Description <font color="#FF0000">* </font></td>
    <td width="84%" ><textarea rows="5" name="description" cols="52"></textarea></td>
  </tr>
  <tr>
    <td width="16%" >Author <font color="#FF0000">*</font></td>
    <td width="84%" ><input type="text" name="author" size="40"></td>
  </tr>
  <tr>
    <td width="16%" >Author Website</td>
    <td width="84%" >
    <input type="text" name="authorwebsite" size="40"></td>
  </tr>
  <tr>
    <td width="16%" >Demo Url</td>
    <td width="84%" ><input type="text" name="demourl" size="40"></td>
  </tr>
  <tr>
    <td width="16%" height="20">Category <font color="#FF0000">* </font></td>
    <td width="84%" height="20"><select size="1" name="category">';

		//Get catagory listing
			$q = "SELECT id, name, description FROM {db_prefix}hacks_cats";
			$res = $smcFunc['db_query']('',$q);

			while($arr = $smcFunc['db_fetch_assoc']($res))
			{

				echo '<option value="' . $arr['id'] . '">' . $arr['name'] . '</option>';
			}


echo '</select></td>
  </tr>
  <tr>
    <td width="16%" >SMF Version</td>
    <td width="84%" ><input type="text" name="version" size="40"></td>
  </tr>
  <tr>
    <td width="16%" height="19" valign="top">Upload <font color="#FF0000">*</font></td>
    <td width="84%" height="19">
    Notes: Zip files are only supported. Be sure to zip up your hack before
    uploading. After you upload your first hack, and create your hack. You can visit update hack to upload more than one file.<p>
    ';
    //<input type="file" name="file" size="20">
    $upload->draw_form('Upload', ''); //the second argument is optional

    echo '
    </p>
    <br />&nbsp;</td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="100%" align="center">
    <input type="submit" value="Add Hack" name="cmdAddHack"></td>
  </tr>
</table>
</form>
</div>
';

}

function template_update_hack()
{
global $scripturl, $smcFunc, $ID_MEMBER;

@$id= (int) $_GET['id'];
if(empty($id))
	fatal_error('No Hack selected to updated', false);

//Get the information
$q = "SELECT id, modname, description, shortdesc, author, authorsite, demourl, ID_MEMBER, version FROM {db_prefix}hacks where id='$id'";
$res = $smcFunc['db_query']('',$q);
$arr = $smcFunc['db_fetch_assoc']($res);

if ($ID_MEMBER!= $arr['ID_MEMBER'])
	fatal_error('This Hack does not belong to you! You are a very bad person.', false);



echo '
<p><a href="'.$scripturl.'?action=hacks;sa=controlpanel">Return to Hack Control Panel</a></p>
<p><b><font size="5">Update Hack</font></b></p>
<p><font color="#FF0000">* Required</font></p>
<form method="POST" action="'.$scripturl.'?action=hacks;sa=updatehack2" enctype="multipart/form-data">
<input type="hidden" name="id" value="' . $id . '">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="163">
  <tr>
    <td width="16%" >Title <font color="#FF0000">* </font></td>
    <td width="84%" ><input type="text" name="title" size="40" value="'. $arr['modname'] . '" /></td>
  </tr>
  <tr>
    <td width="16%"  valign="top">Short Description (100 Characters Max) <font color="#FF0000">* </font></td>
    <td width="84%" ><input type="text" name="sdes" size="40" maxlength="100" value="' . $arr['shortdesc'] . '" /></td>
  </tr>
  <tr>
  <tr>
    <td width="16%"  valign="top">Description <font color="#FF0000">* </font></td>
    <td width="84%" ><textarea rows="5" name="description" cols="52">' . $arr['description'] . '</textarea></td>
  </tr>
  <tr>
    <td width="16%" >Author <font color="#FF0000">*</font></td>
    <td width="84%" ><input type="text" name="author" size="40" value="'. $arr['author'] . '" /></td>
  </tr>
  <tr>
    <td width="16%" >Author Website</td>
    <td width="84%" >
    <input type="text" name="authorwebsite" size="40" value="' . $arr['authorsite'] .  '" /></td>
  </tr>
  <tr>
    <td width="16%" >Demo Url</td>
    <td width="84%" ><input type="text" name="demourl" size="40" value="'. $arr['demourl'] . '" /></td>
  </tr>
  <tr>
    <td width="16%" height="20">Category <font color="#FF0000">* </font></td>
    <td width="84%" height="20"><select size="1" name="category">';

		//Get catagory listing
			$q2 = "SELECT id, name, description FROM {db_prefix}hacks_cats";
			$res2 = $smcFunc['db_query']('',$q2);

			while($arr2 = $smcFunc['db_fetch_assoc']($res2))
			{

				$selected='';
				if($arr2['id'] == $arr['catid'])
					$selected = ' selected';

				echo '<option value="' . $arr2['id'] . '"' . $selected . '>' . $arr2['name'] . '</option>';
			}


echo '</select></td>
  </tr>
  <tr>
    <td width="16%" >SMF Version</td>
    <td width="84%" ><input type="text" name="version" size="40" value="' . $arr['version'] . '"></td>
  </tr>
</table>
<br />
<b><a href="'.$scripturl.'?action=hacks;sa=addfile&id=' . $id . '">Add a download</a></b>
<br />
<br />
<b>Current Downloads:</b><br />
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
';

 	$q2 = "SELECT id, hacksid, filename, downloads,filesize  FROM {db_prefix}hacks_files where hacksid='$id'";
 	$res2 = $smcFunc['db_query']('',$q2);
 		 echo '<tr>
 			<th width="54%"align="center">
 		 <b>Title</b></th>
 		 <th width="13%" align="center"><b>Downloads</b></th>
 		 <th width="13%" align="center"><b>FileSize (bytes)</b></th>
 		 <th width="20%" align="center"><b>Options</b></th>
		 </tr>';

	while($arr2 = $smcFunc['db_fetch_assoc']($res2))
	{

		 echo '<tr>
			<td width="54%"align="center">';
		 echo '<b><a href="'.$scripturl.'?action=hacks;sa=down&id=' . $arr2['id'] . '">' . $arr2['filename'] . '</a></b></td>';
		 echo '<td width="13%" align="center"><b>' . $arr2['downloads'] . '</b></td>';
		 echo '<td width="13%" align="center"><b>' . $arr2['filesize'] . '</b></td>';
		 echo '<td width="20%"><a href="'.$scripturl.'?action=hacks;sa=updatefile&id=' . $arr2['id'] .'&hacksid=' . $arr2['hacksid'] . '">Update</a>  <a href="'.$scripturl.'?action=hacks;sa=deletefile&id=' . $arr2['id'] . '&hacksid=' . $arr2['hacksid'] . '">Delete</a></td>';
		 echo '</tr>';
	}

 echo '
</table><br />

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="100%" align="center">
    <input type="submit" value="Update Hack" name="cmdUpdateHack"></td>
  </tr>
</table>
</form>
';
}

function template_delete_hack()
{
	global $scripturl, $ID_MEMBER, $smcFunc;

@$id= (int) $_GET['id'];
if(empty($id))
	fatal_error('No Hack selected to updated', false);

//Get the information
$q = "SELECT id, modname,ID_MEMBER FROM {db_prefix}hacks where id='$id'";
$res = $smcFunc['db_query']('',$q);
$arr = $smcFunc['db_fetch_assoc']($res);

if($ID_MEMBER!= $arr['ID_MEMBER'])
	fatal_error('This Hack does not belong to you! You are a very bad person.', false);



echo '
<form method="POST" action="'.$scripturl.'?action=hacks;sa=deletehack2">
  Are you sure you want to delete this hack? - ' . $arr['modname'] .  '</p>
  <p align="center">
  <input type="hidden" name="id" value="' . $id . '">
  <input type="submit" value="Delete Hack" name="cmdDeleteHack"></p>
</form>';
}
function template_search_hack()
{

}
function template_hack_controlpanel()
{
	global $scripturl, $smcFunc, $ID_MEMBER;
	echo '<div class="tborder"><div class="titlebg" style="padding: 4px; font-weight: bold;">
	Manage Hacks</div>
	<div class="windowbg" style="padding: 4px; ">
	<p><b><a href="'.$scripturl.'?action=hacks;sa=addhack">Add a new SMF Hack</a></b></p>
	<p>Your Hacks:</p>
	<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
	 <tr>
	 	<th width="40%">Hack Name</th>
	 	<th width="10%">Approved</th>
	 	<th width="45%" align="center">Options</th>
	 </tr>

	 ';

	//Get hack listing
	$q = "SELECT h.id, h.modname, hl.title HACKLink, h.approved, h.description,h.ID_MEMBER FROM {db_prefix}hacks as h, {db_prefix}hacks_lookup AS hl WHERE  hl.ID_HACK = h.id AND h.ID_MEMBER='$ID_MEMBER'";
	$res = $smcFunc['db_query']('',$q);
	$background = 'windowbg';
	while($arr = $smcFunc['db_fetch_assoc']($res))
	{
		if($arr['approved']==0)
			$r='Pending';
		if($arr['approved']==1)
			$r='YES';
		if($arr['approved']==2)
			$r='NO';

	  echo '<tr class="',$background, '">';
		echo '<td width="40%"><a href="https://www.smfhacks.com/hacks/' . $arr['HACKLink'] . '.html" target="blank">' . $arr['modname'].'</a></td>';
		echo '<td width="10%">' . $r .'</td>';
		echo'<td width="45%" align="center"><a href="'.$scripturl.'?action=hacks;sa=updatehack&id=' . $arr['id'] . '">Update Hack</a>&nbsp;&nbsp; <a href="'.$scripturl.'?action=hacks;sa=deletehack&id=' . $arr['id'] .'">Delete Hack</a></td>';
	  echo '</tr>';
	  if($background == 'windowbg')
	  	$background = 'windowbg2';
	  else
	  	$background = 'windowbg';
	}
	$smcFunc['db_free_result']($res);


	 echo'
	</table>
	<p><b><a href="'.$scripturl.'?action=style;sa=addstyle">Add a new Style/Theme</a></b></p>
	<p>Your Styles/Themes:</p>
	<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
	 <tr>
	 	<th width="40%">Style/Theme Name</th>
	 	<th width="10%">Approved</th>
	 	<th width="45%" align="center">Options</th>
	 </tr>

	 ';

	//Get hack listing
	$q = "SELECT s.ID_STYLE, s.stylename, sl.title stylelink, s.approved, s.description,s.ID_MEMBER FROM {db_prefix}style as s, {db_prefix}style_lookup AS sl WHERE  sl.ID_STYLE = s.ID_STYLE AND s.ID_MEMBER='$ID_MEMBER'";
	$res = $smcFunc['db_query']('',$q);

	while($arr = $smcFunc['db_fetch_assoc']($res))
	{
		if($arr['approved']==0)
			$r='Pending';
		if($arr['approved']==1)
			$r='YES';
		if($arr['approved']==2)
			$r='NO';

	  echo '<tr class="',$background, '">';
		echo '<td width="40%"><a href="https://www.smfhacks.com/styles/' . $arr['stylelink'] . '.html" target="blank">' . $arr['stylename'].'</a></td>';
		echo '<td width="10%">' . $r .'</td>';
		echo'<td width="45%" align="center"><a href="'.$scripturl.'?action=style;sa=updatestyle&id=' . $arr['ID_STYLE'] . '">Update Theme</a>&nbsp;&nbsp; <a href="'.$scripturl.'?action=styles;sa=deletestyle&id=' . $arr['ID_STYLE'] .'">Delete Style</a></td>';
	  echo '</tr>';
	  if($background == 'windowbg')
	  	$background = 'windowbg2';
	  else
	  	$background = 'windowbg';
	}
	$smcFunc['db_free_result']($res);

	 echo'
	</table>

	</div></div>';
}

function template_error()
{
	global $context;

		echo '<div class="tborder" style="margin-bottom: 2px;">
			<div class="titlebg" style="padding: 4px; font-weight: bold;">Error</div><div class="windowbg" style="padding: 4px;">
			 <br />
			';

			echo $context['hackerror'];

		echo '<br /><a href="javascript:history.go(-1)">Go Back</a></div></div>';
}

function template_addfile()
{
	global $scripturl, $smcFunc, $boarddir;

	@$id= (int) $_GET['id'];
	if($id=='')
	fatal_error('No Hack selected to add', false);

			require("class.upload.php");
					//file upload
			$input_field_name = "file";
			$accepted_mime_types = array('application/x-zip-compressed', 'application/octet-stream','application/zip','application/force-download','application/x-zip');


			$upload = new upload($input_field_name);

			$upload->set_max_file_size(5000000);
			$upload->set_accepted_mime_types($accepted_mime_types);

	echo '<p><a href="'.$scripturl.'?action=hacks;sa=controlpanel">Return to Hack Control Panel</a></p>
	<p><b><font size="5">Add File</font></b></p>
	<form method="POST" action="'.$scripturl.'?action=hacks;sa=addfile2" enctype="multipart/form-data">
		<input type="hidden" name="id" value="' . $id . '">';

    $upload->draw_form('Upload', ''); //the second argument is optional


	echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
	  <tr>
		<td width="100%">
		<p align="center"><input type="submit" value="Add File" name="cmdAddFile"></td>
	  </tr>
	</table>
	</form>
	';

}

function template_updatefile()
{
	global $scripturl, $smcFunc, $boarddir;

	@$id= (int) $_GET['id'];
	if($id=='')
	fatal_error('No file selected to updated', false);


			require("class.upload.php");
					//file upload
			$input_field_name = "file";
			$accepted_mime_types = array('application/x-zip-compressed', 'application/octet-stream','application/zip','application/force-download','application/x-zip');


			$upload = new upload($input_field_name);

			$upload->set_max_file_size(5000000);
			$upload->set_accepted_mime_types($accepted_mime_types);

	echo '<p><a href="'.$scripturl.'?action=hacks;sa=controlpanel">Return to Hack Control Panel</a></p>
		<p><b><font size="5">Update File</font></b></p>
	<form method="POST" action="'.$scripturl.'?action=hacks;sa=updatefile2" enctype="multipart/form-data">
		<input type="hidden" name="id" value="' . $id . '">';

		    $upload->draw_form('Upload', ''); //the second argument is optional



	echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
	  <tr>
		<td width="100%">
		<p align="center"><input type="submit" value="Update File" name="cmdUpdateFile"></td>
	  </tr>
	</table>
	</form>
		';

}
function template_latesthacks()
{
global $scripturl, $smcFunc, $context,$ID_MEMBER;
		echo '<div class="tborder" style="margin-bottom: 2px;">
		<div class="titlebg" style="padding: 4px; font-weight: bold;">Hacks and Mods - Latest Hacks</div><div class="windowbg" style="padding: 4px;">
		<a href="https://www.smfhacks.com/hacks.html">SMFHacks Categories</a> - <b>Latest Hacks</b><br />

		<a href="https://www.smfhacks.com/addhack.html">Add a Hack</a><br />
		<hr />';

		@$p= (int) $_GET['p'];
		if(empty($p))
			$p=0;

		$pageno=$p*10;

			$q = "SELECT id FROM {db_prefix}hacks";
			$smcFunc['db_query']('',$q);

			$count=db_affected_rows();

			$pages=floor($count / 10);
			$pages++;

		$p2 = $p +1;

		echo "Page $p2 of $pages  ";

		$nextpage=$p;
		$nextpage++;
		$prevpage=$p;
		$prevpage--;
		if($p <= ($pages-2) )
			echo "<a href=\"$scripturl?action=hacks;sa=viewlatest&p=$nextpage\">Next Page</a> ";
		if($pageno >0)
			echo "<a href=\"$scripturl?action=hacks;sa=viewlatest&p=$prevpage\">Previous Page</a>";

		echo '<br />';

		//Now List all the hacks
			$q = "SELECT h.id, h.ID_MEMBER, hl.title HACKLink, h.modname, h.author, h.approved, h.shortdesc,h.version,h.catid FROM {db_prefix}hacks as h, {db_prefix}hacks_lookup AS hl WHERE  hl.ID_HACK = h.id ORDER BY id desc LIMIT $pageno , 10";
			$res = $smcFunc['db_query']('',$q);

				echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
					<tr>

						<th class="catbg" width="50%">Name</td>
						<th class="catbg" width="20%" align="center">Author</td>
						<th class="catbg" width="30%">SMF Version</td>

					</tr>';


			while($arr = $smcFunc['db_fetch_assoc']($res))
			{
				echo '<tr>';
				echo '<td class="windowbg2"><b><a href="https://www.smfhacks.com/hacks/' . $arr['HACKLink'] . '.html">' . $arr['modname'] . '</a></b>';
				if($ID_MEMBER == $arr['ID_MEMBER'])
				{
					echo '&nbsp;<b><a href="' . $scripturl . '?action=hacks;sa=updatehack&id=' . $arr['id'] . '">[Edit]</a>&nbsp;<a href="' . $scripturl . '?action=hacks;sa=deletehack&id=' . $arr['id'] . '">[Delete]</a></b>';

				}
				echo '<br />';
				echo stripslashes($arr['shortdesc']) . '</td>';
				echo '<td class="windowbg2" align="center">' . stripslashes($arr['author']) . '</td>';





				echo '<td class="windowbg2">' . $arr['version'] . '</td>';
				echo '</tr>';
			}
			$smcFunc['db_free_result']($res);
			//Ads heh
			echo '<tr>
			<td class="windowbg2" colspan="3" align="center">

</td>
			</tr>';


		echo '</table><br />';

		echo "Page $p2 of $pages  ";


		if($p <= ($pages-2) )
			echo "<a href=\"$scripturl?action=hacks;sa=viewlatest&p=$nextpage\">Next Page</a> ";
		if($pageno >0)
			echo "<a href=\"$scripturl?action=hacks;sa=viewlatest&p=$prevpage\">Previous Page</a>";


		echo '
		</div>
		</div></div>';
}
function template_topten()
{
	global $scripturl, $smcFunc, $context,$ID_MEMBER;
		echo '<div class="tborder" style="margin-bottom: 2px;">
		<div class="titlebg" style="padding: 4px; font-weight: bold;">Hacks and Mods - Topten 10 Most Popular SMF Mods</div><div class="windowbg" style="padding: 4px;">
		<a href="https://www.smfhacks.com/hacks.html">SMFHacks Categories</a> - <b>Topten 10 Most Popular SMF Mods</b><br />

		<a href="https://www.smfhacks.com/addhack.html">Add a Hack</a><br />
		<hr />';


		echo '<br />';
		//Now List all the hacks
			$q = "SELECT h.id, h.ID_MEMBER, hl.title HACKLink, f.downloads, h.modname, h.author, h.approved, h.shortdesc, h.version, h.catid FROM {db_prefix}hacks AS h, {db_prefix}hacks_lookup AS hl, {db_prefix}hacks_files AS f WHERE f.hacksid = h.id AND hl.ID_HACK = h.id ORDER BY f.downloads DESC LIMIT 10";
			$res = $smcFunc['db_query']('',$q);

				echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
					<tr>

						<th class="catbg" width="50%">Name</td>
						<th class="catbg" width="10%" align="center">Author</td>
						<th class="catbg" width="10%" align="center">Downloads</td>
						<th class="catbg" width="30%">SMF Version</td>

					</tr>';


			while($arr = $smcFunc['db_fetch_assoc']($res))
			{
				echo '<tr>';
				echo '<td class="windowbg2"><b><a href="https://www.smfhacks.com/hacks/' . $arr['HACKLink'] . '.html">' . $arr['modname'] . '</a></b>';
				if($ID_MEMBER == $arr['ID_MEMBER'])
				{
					echo '&nbsp;<b><a href="' . $scripturl . '?action=hacks;sa=updatehack&id=' . $arr['id'] . '">[Edit]</a>&nbsp;<a href="' . $scripturl . '?action=hacks;sa=deletehack&id=' . $arr['id'] . '">[Delete]</a></b>';

				}
				echo '<br />';
				echo stripslashes($arr['shortdesc']) . '</td>';
				echo '<td class="windowbg2" align="center">' . stripslashes($arr['author']) . '</td>';


				echo '<td class="windowbg2" align="center">' . $arr['downloads'] . '</td>';

				echo '<td class="windowbg2">' . $arr['version'] . '</td>';
				echo '</tr>';
			}
			$smcFunc['db_free_result']($res);
			//Ads heh
			echo '<tr>
			<td class="windowbg2" colspan="4" align="center">

</td>
			</tr>';


		echo '</table><br />';

		echo '
		</div>
		</div></div>';
}
function template_rating()
{
	global $context, $scripturl, $smcFunc, $ID_MEMBER;
	echo '<div class="tborder"><div class="titlebg" style="padding: 4px; font-weight: bold;">
	Add Rating</div>
	<div class="windowbg" style="padding: 4px; ">
	<form method="POST" action="'.$scripturl.'?action=hacks;sa=rating2">
  <h5>Rate This Mod</h2>
  <input type="radio" value="1" name="rate" /> <b>
  Excellent Mod</b><br />
  <input type="radio" value="0" name="rate" /> <b>Average Mod</b><br />
  <input type="radio" value="-1" name="rate" /><b>
  Poor Mod</b><br />
  <h5>Leave a short comment to justify your rating</h2>
  <textarea rows="9" name="comment" cols="45"></textarea><br /><br />
  <input type="hidden" name="id" value="' . $context['rateid'] . '" />
  <input type="submit" value="Add Rating" name="cmdsubmit" />
  </form></div></div>';
}
?>