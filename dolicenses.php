<?php

// SMFHacks License cron to demote members
require(dirname(__FILE__) . '/SSI.php');

// Loop though all the members
$t = time();

$tf = (365 * 24 * 60 * 60);

	$dbresult = $smcFunc['db_query']('', "SELECT l.startdate, p.productname, l.ID_PRODUCT,
	l.ID_LICENSE, l.ID_MEMBER, m.real_name,l.domain
	FROM ({db_prefix}license as l, {db_prefix}products as p)
	LEFT JOIN {db_prefix}members as m on (l.ID_MEMBER = m.ID_MEMBER)
	WHERE  p.ID_PRODUCT = l.ID_PRODUCT and l.expired = 0  and l.ID_MEMBER <> 0 AND $t > ((l.startdate + $tf))
	");
	$count = 0;
	while ($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo $row['real_name'] . ' Product name: ' . $row['productname'] . ' Expire date: ' . timeformat($row['startdate']);
		// Now check if they have any other licenses for this product
		$dbresult2 = $smcFunc['db_query']('', "SELECT l.startdate,l.ID_PRODUCT,
		l.ID_LICENSE, l.ID_MEMBER
		FROM {db_prefix}license as l
		WHERE l.ID_MEMBER = " . $row['ID_MEMBER'] . ' AND l.ID_PRODUCT = ' . $row['ID_PRODUCT'] . ' AND l.expired = 0 AND l.ID_LICENSE <> ' .$row['ID_LICENSE']
		);
		$num_lic = $smcFunc['db_num_rows']($dbresult2 );
		$row2= $smcFunc['db_fetch_assoc']($dbresult2);
		echo $row['ID_LICENSE'];
		if ($num_lic)
		{
			// There are licenses for the sameproduct

			echo '<b>MORE!!! ',$num_lic,'</b>';
		}
		else
		{
			// There are no other licenses
			$groupid = 0;

			// Remove the member from the group
			$product = $row['ID_PRODUCT'];
			if ($product == 1)
				$groupid = 9;
			if ($product == 2)
				$groupid = 10;
			if ($product == 3)
				$groupid = 11;
			if ($product == 4)
				$groupid = 12;
			if ($product == 6)
				$groupid = 13;
			if ($product == 7) // newsletter pro
				$groupid = 14;

			if ($product == 8) // Ad Seller Pro
				$groupid =18;

			if ($product == 9) // Community Suite
				$groupid =19;

			if ($product == 10) // Social Login Pro
				$groupid =21;

			if ($product == 11) // Tweet Topics
				$groupid =22;

			if ($product == 12) // Badge Awards
				$groupid =24;

			if ($product == 13) //SMF Articles Pro
				$groupid =28;

			if ($product == 14) // Awesome Post Ratings
				$groupid =29;

			if ($product == 15) // GDPR Pro
				$groupid =31;

			if ($product == 16) // Hash Tags
				$groupid =30;

			if ($product == 17) // Message Editor Pro
				$groupid =32;


			if ($product == 18) // Emjoi Pro
				$groupid =33;

			if ($product == 19) // Alerts Pro
				$groupid =34;

			if ($product == 20) // Pretty Url SEO Pro
				$groupid = 35;

			if ($product == 22) // Zapier
				$groupid = 37;


			if ($product == 23) // Forum toolbox
				$groupid = 38;

			if ($product == 24) // S3 System
				$groupid = 39;


			require_once($sourcedir . '/Subs-Membergroups.php');
			if (!empty($groupid))
				removeMembersFromGroups($row['ID_MEMBER'],$groupid,true);

		}

		// Update the current license as expired
		$dbresult3 = $smcFunc['db_query']('', "UPDATE {db_prefix}license
		SET expired = 1
		WHERE ID_LICENSE = " .$row['ID_LICENSE']
		);

		// Send the user a pm to renew their group

		$pm_register_recipients = array(
			'to' => array($row['ID_MEMBER']),
			'bcc' => array(),
		);

	require_once($sourcedir . '/Subs-Post.php');

	$accepted_body = 'Updates and customer forums has expired for ' . $row['productname'];
	$accepted_body .= "\nFor site: " . $row['domain'];
	$accepted_body .= "\nTo renew this license [url=https://www.smfhacks.com/renew.php?id=" .$row['ID_LICENSE'] . "]click here[/url]";
	$accepted_body .= "\n\nRenewing allows you to download the latest updates and have access to the customer forums.";

	$pm_from = array(
			'id' => 0,
			'username' => 'License System',
			'name' => 'License System',
		);
	sendpm($pm_register_recipients, 'Updates has expired for ' . $row['productname'], $accepted_body,false,$pm_from);



		echo '<br />';


		$count ++;
	}
	echo '<br /><br />Total: ' . $count;
	$smcFunc['db_free_result']($dbresult);


echo 'Rebuilding files';
flush();
		global $sourcedir,$boarddir;

	if (empty($modSettings['down_path']))
		$modSettings['down_path'] = $boarddir . '/downloads/';


		require_once($sourcedir . '/Downloads2.php');
		// Load the Download System Settings
		LoadDownloadSettings();


	$dbresult = $smcFunc['db_query']('', "
	SELECT
		f.filename, f.fileurl, f.orginalfilename, f.approved, f.credits, f.ID_CAT,
		f.ID_MEMBER, f.filesize, f.purged, f.ID_FILE
	FROM {db_prefix}down_file as f
	WHERE f.ID_MEMBER = 1");
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		Downloads_RebuildFiles($row['ID_FILE']);
	}

function Downloads_RebuildFiles($id = 0)
{
	global $smcFunc, $modSettings, $txt, $context, $downloadSettings, $user_info;




	// Get the download information
	$dbresult = $smcFunc['db_query']('', "
	SELECT
		f.filename, f.fileurl, f.orginalfilename, f.approved, f.credits, f.ID_CAT,
		f.ID_MEMBER, f.filesize, f.purged
	FROM {db_prefix}down_file as f
	WHERE f.ID_FILE = $id");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$smcFunc['db_free_result']($dbresult);






	// Download File or Redirect to the download location
	if ($row['fileurl'] != '')
	{


	}
	else
	{
		$lastdownload = time();
		// Update download count
		$dbresult = $smcFunc['db_query']('', "
		UPDATE {db_prefix}down_file
			SET totaldownloads = totaldownloads + 1, lastdownload  = '$lastdownload'
		WHERE ID_FILE = $id LIMIT 1");



		$real_filename = $row['orginalfilename'];
		$filename = $modSettings['down_path'] . $row['filename'];


		$contents = file_get_contents($filename);

		$row['orginalfilename'] = str_replace(" ","-",$row['orginalfilename']);
		IF (!empty($row['orginalfilename']))
			file_put_contents($modSettings['down_path'] . "mod" . $id . '.zip' ,$contents);



	}



}


exit;

?>