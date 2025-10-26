<?php
global $ssi_guest_access;
$ssi_guest_access = 1;
require(dirname(__FILE__) . '/SSI.php');
/*
echo 'CREATE TABLE `uninstall_feedback` (
`ID_FEEDBACK` INT( 10 ) NOT NULL AUTO_INCREMENT ,
`MODNAME` TINYTEXT NOT NULL ,
`Reason` TEXT NOT NULL ,
`Date` TINYTEXT NOT NULL ,
`IP` TINYTEXT NOT NULL ,
PRIMARY KEY ( `ID_FEEDBACK` )
) TYPE = MYISAM ;';
*/
$modName = '';

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'send')
{
	$note = htmlspecialchars($_REQUEST['note'],ENT_QUOTES);
	$modname = htmlspecialchars($_REQUEST['modname'],ENT_QUOTES);

	$ip = $_SERVER['REMOTE_ADDR'];

	$dateAdded = time();

	if (!empty($note))
	$smcFunc['db_query']('', "INSERT INTO smfhacks.uninstall_feedback
				 (MODNAME, Reason, Date, IP)
				 VALUES ('$modname', '$note','$dateAdded','$ip')");

	echo '<b>Thank you for your feedback! For critical issues please post on <a href="https://www.smfhacks.com">https://www.smfhacks.com</a> for fast support!</b>';


	if (substr_count(strtolower($note),"smf media") > 0 || substr_count(strtolower($note),"aeva") > 0  )
	{
		echo '<h1>Special offer for SMF Media users!</h1>';

		echo 'SMF Gallery Pro only <b>$30!</b> features user galleries, audio/video support and more!
		<br />Details at
		<a href="https://www.smfhacks.com/smf-gallery-pro.php">https://www.smfhacks.com/smf-gallery-pro.php</a>

		Mention Promo: PROMEDIA' . date("Y");

	}

	if (substr_count(strtolower($note),"copyright") > 0 )
	{
		echo '<h1>Copyright Removal Options</h1>';

		echo 'One time payment. We can help with removing the copyright
		<br />Details at
		<a href="https://www.smfhacks.com/copyright_removal.php">https://www.smfhacks.com/copyright_removal.php</a>
		';

	}

	if (substr_count(strtolower($note),"copyright") > 0 )
	{
		echo '<h1>Copyright Removal Options</h1>';

		echo 'One time payment. We can help with removing the copyright
		<br />Details at
		<a href="https://www.smfhacks.com/copyright_removal.php">https://www.smfhacks.com/copyright_removal.php</a>
		';

	}


	if (substr_count(strtolower($note),"fuck") > 0 || substr_count(strtolower($note),"shit") > 0 )
	{
		echo '<h1>Have a great day!</h1>';

		echo 'Life is too short to be upset about a free mod.
		';

	}


}
else
{
	if (isset($_REQUEST['modname']))
	$modName = base64_decode($_REQUEST['modname']);

	$modName = htmlspecialchars($modName,ENT_QUOTES);

// Show the form
echo '<html>
<body>
<b>Uninstall Feedback for ' . $modName . '</b><br />
<table>
<tr>
<td width="50%">
If you are uninstalling this modification for a certain reason please let us know.<br />
If it is due to a bug or a feature that is missing, any feedback that you can offer is greatly appreciated.
<form method="POST" action="https://www.smfhacks.com/uninstall.php?action=send">
<textarea name="note" cols="50" rows="5"></textarea>
<br />
<input type="hidden" name="modname" value="' . $modName . '" />
<input type="submit" value="Send Feedback" />

</form>
</td>
<td width="50%" valign="top">
		<b>Like the software that I provide? </b>
<br />
		 Support me at <a href="https://www.patreon.com/vbgamer45/" target="_blank">https://www.patreon.com/vbgamer45</a><br />
<br><b>Stay Up To Date on ALL Your SMF Mods<b/><br>

<a href="https://custom.simplemachines.org/index.php?mod=4335" target="_blank">Modification Update Version Checker!!</a>



</td>
</tr>
</table>
</body>
</html>';
}


die('');
?>