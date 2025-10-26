<?php
die("no longer used");
require 'SSI.php';

$prodid =  (int)  $_REQUEST['prodid'];
$lic = htmlspecialchars($_REQUEST['lic'],ENT_QUOTES);

	$dbresult = db_query("SELECT ID_MEMBER,license_key, ID_PRODUCT FROM {$db_prefix}license WHERE ID_PRODUCT = $prodid AND license_key = '$lic' LIMIT 1", __FILE__, __LINE__);
	$count = db_affected_rows();

	$row = mysql_fetch_assoc($dbresult);





	if($count == 0)
	{
		echo 'false';
	}
	else
		echo 'true';


?>