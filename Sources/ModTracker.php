<?php
/*
CREATE TABLE `smf_modtracker_mods` (
`ID_MOD` MEDIUMINT NOT NULL AUTO_INCREMENT ,
`modname` TINYTEXT NOT NULL ,
PRIMARY KEY ( `ID_MOD` )
) TYPE = innodb;
*/
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

CREATE TABLE `smf_modtracker_comments` (
  `ID_NOTE` int(11) NOT NULL auto_increment,
  `comment` text NOT NULL,
  `ID_MEMBER` mediumint(8) unsigned NOT NULL default '0',
  `date` int(10) unsigned NOT NULL default '0',
  `ID_REPORT` int(11) NOT NULL default '0',
  PRIMARY KEY  (`ID_NOTE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

*/



function ModTracker()
{
	loadtemplate('ModTracker');


	//Actions
	$subActions = array(
		'main' => 'View',
		'report' => 'ReportIssue',
		'report2' => 'ReportIssue2',
		'editreport' => 'EditReport',
		'editreport2' => 'EditReport2',
		'addcomment' => 'addcomment',
		'delcomment' => 'DeleteComment',
		'viewreport' => 'ViewReport',
		'delreport' => 'DeleteReport',
	);

	@$sa = $_GET['sa'];
	if (!empty($subActions[$sa]))
		$subActions[$sa]();
	else
		View();
}

function View()
{
	global $context;

	$context['page_title'] = 'SMFHacks.com - Modification Bug and Feature Tracker';


}
function ReportIssue()
{
	global $context;

	//No Guests please
	is_not_guest();

	$context['page_title'] = 'SMFHacks.com - Report issue or feature request';

	$context['sub_template']  = 'report';
}
function ReportIssue2()
{
	global $smcFunc, $ID_MEMBER, $sourcedir, $scripturl ;

	//No Guests please
	is_not_guest();


	$modname = (int) $_REQUEST['modname'];
	$reproducibility = htmlspecialchars($_REQUEST['reproducibility'],ENT_QUOTES);
	$summary = htmlspecialchars($_REQUEST['summary'],ENT_QUOTES);
	$reproducibility = htmlspecialchars($_REQUEST['reproducibility'],ENT_QUOTES);
	$description = htmlspecialchars($_REQUEST['description'],ENT_QUOTES);
	$severity = htmlspecialchars($_REQUEST['severity'],ENT_QUOTES);
	$viewstatus = $_REQUEST['viewstatus'];

	$viewfinal = 0;
	if ($viewstatus == 'private')
		$viewfinal = 1;
	else
		$viewfinal = 0;

	if ($summary == '')
		fatal_error("A summary of the issue/feature is required",false);
	if ($description == '')
		fatal_error("A description of the issue/feature is required",false);

		$newdate = time();
	$smcFunc['db_query']('', "INSERT INTO {db_prefix}modtracker_reports
								(ID_MOD, summary,description,reproducibility,severity,
								date, status, ID_MEMBER,private)
							VALUES ($modname,'$summary','$description','$reproducibility',
							'$severity','$newdate','Open',$ID_MEMBER,'$viewfinal')");

	$modid = db_insert_id();

	// Check to send email on new comment


	 	require_once($sourcedir . '/Subs-Post.php');
	 	sendmail('vbgamer45@gmail.com','Mod Tracker Issue', $summary . "\n" . $scripturl . '?action=modtracker;sa=viewreport;id=' . $modid);


	redirectexit('action=modtracker');
}
function EditReport()
{
	global $context, $smcFunc, $ID_MEMBER;

	//No Guests please
	is_not_guest();

	$id = (int) $_REQUEST['id'];


	// Check Permission
	$dbresult = $smcFunc['db_query']('', "SELECT
	r.ID_REPORT, r.severity, r.ID_MEMBER,r.date,r.status,
	r.summary, r.private
	FROM {db_prefix}modtracker_reports as r WHERE ID_REPORT = $id LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$smcFunc['db_free_result']($dbresult);
	$isadmin = allowedTo('admin_forum');
	if ($isadmin == false && $ID_MEMBER != $row['ID_MEMBER'])
	{
		fatal_error("You do not own this listing to edit",false);
	}




	$context['sub_template']  = 'editreport';
	$context['page_title'] = 'SMFHacks.com - ' . $row['summary'];
}
function EditReport2()
{
	global $smcFunc,  $ID_MEMBER;

	// No Guests please
	is_not_guest();


	// Check permission
	$id = (int) $_REQUEST['id'];
	$dbresult = $smcFunc['db_query']('', "SELECT
	r.ID_REPORT, r.severity, r.ID_MEMBER
	FROM {db_prefix}modtracker_reports as r WHERE ID_REPORT = $id LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$smcFunc['db_free_result']($dbresult);
	$isadmin = allowedTo('admin_forum');
	if ($isadmin == false && $ID_MEMBER != $row['ID_MEMBER'])
	{
		fatal_error("You do not own this listing to edit",false);
	}



	$modname = (int) $_REQUEST['modname'];
	$reproducibility = htmlspecialchars($_REQUEST['reproducibility'],ENT_QUOTES);
	$summary = htmlspecialchars($_REQUEST['summary'],ENT_QUOTES);
	$reproducibility = htmlspecialchars($_REQUEST['reproducibility'],ENT_QUOTES);
	$description = htmlspecialchars($_REQUEST['description'],ENT_QUOTES);
	$viewstatus = $_REQUEST['viewstatus'];
	$severity = htmlspecialchars($_REQUEST['severity'],ENT_QUOTES);


	$viewfinal = 0;
	if ($viewstatus == 'private')
		$viewfinal = 1;
	else
		$viewfinal = 0;

	if ($summary == '')
		fatal_error("A summary of the issue/feature is required",false);
	if ($description == '')
		fatal_error("A description of the issue/feature is required",false);

	$lastupdatedate = time();

	// Update the Table
	$smcFunc['db_query']('', "UPDATE {db_prefix}modtracker_reports SET
	ID_MOD = $modname, summary = '$summary',description = '$description',reproducibility = '$reproducibility',
	severity = '$severity',  private = '$viewfinal', lastupdatedate = '$lastupdatedate'
	WHERE ID_REPORT = $id LIMIT 1");


	redirectexit('action=modtracker;sa=viewreport;id=' . $id);
}
function addcomment()
{
	global $context, $smcFunc, $ID_MEMBER, $sourcedir;

	/*CREATE TABLE `smf_modtracker_comments` (
  `ID_NOTE` int(11) NOT NULL auto_increment,
  `comment` text NOT NULL,
  `ID_MEMBER` mediumint(8) unsigned NOT NULL default '0',
  `date` int(10) unsigned NOT NULL default '0',
  `ID_REPORT` int(11) NOT NULL default '0',
  PRIMARY KEY  (`ID_NOTE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
*/

	//No Guests please
	is_not_guest();


	$id = (int) $_REQUEST['id'];
	$newdate = time();
	$comment = htmlspecialchars($_REQUEST['comment'], ENT_QUOTES);

	if ($comment == '')
		fatal_error("You need to enter some information for the note.",false);

	// Insert the data
	$smcFunc['db_query']('', "INSERT INTO {db_prefix}modtracker_comments
								(comment, ID_MEMBER,date,ID_REPORT)
							VALUES ('$comment',$ID_MEMBER,'$newdate',$id)");

	$isadmin = allowedTo('admin_forum');

	if ($isadmin)
	{
		$status = htmlspecialchars($_REQUEST['status'],ENT_QUOTES);
		// Update the status of the report

		// Get the title and member of the person who filed the report

		$result = $smcFunc['db_query']('', "SELECT summary, ID_MEMBER FROM {db_prefix}modtracker_reports

	WHERE ID_REPORT = $id LIMIT 1");
		$row = $smcFunc['db_fetch_assoc']($result);
		$smcFunc['db_free_result']($result);

			// Update the Table
			$smcFunc['db_query']('', "UPDATE {db_prefix}modtracker_reports SET
			 Status = '$status'
			WHERE ID_REPORT = $id LIMIT 1");

		// Send the user a pm
		require_once($sourcedir . '/Subs-Post.php');


		$pm_recipients = array(
			'to' => $row['ID_MEMBER'],
			'bcc' => array(),
		);
			$pm_from = array(
				'id' => 0,
				'username' => 'SMFHacks Mod Tracker',
				'name' => 'SMFHacks Mod Tracker',
			);
		sendpm($pm_recipients, 'Modtracker report has been updated for ' . $row['summary'] , 'There has been a response to your modtracker report for ' . $row['summary'] . '\nReview your report at http://www.smfhacks.com/index.php?action=modtracker;sa=viewreport;id=' . $id,false,$pm_from);
	}



	// Redirect back to the report
	redirectexit('action=modtracker;sa=viewreport;id=' . $id);
}

function ViewReport()
{
	global $smcFunc, $context, $ID_MEMBER;

	$id = (int) $_REQUEST['id'];

	$dbresult = $smcFunc['db_query']('', "SELECT
	r.ID_REPORT, r.severity, r.ID_MEMBER,r.date,r.status,
	r.summary, r.private
	FROM {db_prefix}modtracker_reports as r WHERE ID_REPORT = $id LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$smcFunc['db_free_result']($dbresult);
	$context['tracker_reportid'] = $id;

	// Check if private
	$isadmin = allowedTo('admin_forum');
	if ($isadmin == false && $ID_MEMBER != $row['ID_MEMBER'] && $row['private'] == 1)
			{
				fatal_error("This is a private report",false);
			}


	$context['page_title'] = 'SMFHacks.com - ' . $row['summary'];

	$context['sub_template']  = 'viewreport';
}
function DeleteReport()
{
	global $smcFunc;

	isAllowedTo('admin_forum');

	$id = (int) $_REQUEST['id'];


	// Delete all comments from the report
	$smcFunc['db_query']('', "DELETE FROM {db_prefix}modtracker_comments
	WHERE ID_REPORT = $id");

	// Delete the report it self
	$smcFunc['db_query']('', "DELETE FROM {db_prefix}modtracker_reports
	WHERE ID_REPORT = $id LIMIT 1");


	redirectexit('action=modtracker');
}
function DeleteComment()
{
	global $smcFunc;

	isAllowedTo('admin_forum');

	$id = (int) $_REQUEST['id'];

	$smcFunc['db_query']('', "DELETE FROM {db_prefix}modtracker_comments
	WHERE ID_NOTE = $id LIMIT 1");

	redirectexit('action=modtracker');

}
?>