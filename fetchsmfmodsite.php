<?php
require dirname(__FILE__)  . '/SSI.php';

//exit;
//$context['debug_curl'] =1;
//$data = RunCurlQuery('https://custom.simplemachines.org/packages/mods/','',0,1,0,array("Content-Type: text/xml"));


/*
 * CREATE TABLE `smf_db_version_checker` (
  `ID_MOD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PACKER_SERVER` int(10) DEFAULT '0',
  `packageid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `versionfor` varchar(1000) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`ID_MOD`),
  KEY `VERSION` (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
 */

// First get the categoreis
$modSettings['disableQueryCheck'] = 1;
$xmlData = simplexml_load_file("https://custom.simplemachines.org/packages/mods/?xml");


//print_r($xmlData);
$modCategories = array();

foreach($xmlData->section as $section)
	{
		//print_r($section);
		// get the remote attribute
		foreach($section->remote[0]->attributes() as $a => $b) {
			//echo $a,'="',$b,"\"\n";

			if ($a == 'href')
				$modCategories[] = (int) $b;


		}


	}

//print_r($modCategories);

// now fetch
$totalMods = 0;
foreach($modCategories as $category)
{
	$start = 0;
	$done = false;
	$count = 0;

	while($done === false)
	{
	sleep(1);
		$xmlData = simplexml_load_file("https://custom.simplemachines.org/packages/mods/" . $category . '?xml;start=' . $start);
		foreach($xmlData->section->modification as $mod)
		{
			$modTitle = addslashes($mod->name);
			$id = addslashes($mod->id);
			$filename = addslashes($mod->filename);
			$modVersion = addslashes($mod->version);
			$modSMFVersionFor = '';

			foreach($mod->version[0]->attributes() as $a => $b)
			{
				//echo $a,'="',$b,"\"\n";

				if ($a == 'for')
					$modSMFVersionFor = addslashes($b);

			}

			$modAuthor = addslashes($mod->author);
			$modDescription = addslashes($mod->description);
			flush();
			echo "id: " . $id . "<br>\n";

			$count++;

			if (empty($id))
				continue;

			$totalMods++;

/*
			$smcFunc['db_query']('', "INSERT INTO {db_prefix}db_version_checker
						(packageid,title,filename,version,versionfor,author,description)
					VALUES ('$id','$modTitle','$filename','$modVersion','$modSMFVersionFor','$modAuthor','$modDescription')
					ON DUPLICATE KEY UPDATE packageid = '$id',title = '$modTitle',filename = '$filename',version = '$modVersion',versionfor = '$modSMFVersionFor',author = '$modAuthor',description = '$modDescription';
					");

			*/

			$result = mysqli_query($db_connection,"INSERT INTO smfhacks.smf_db_version_checker
						(packageid,title,filename,version,versionfor,author,description,category)
					VALUES ('$id','$modTitle','$filename','$modVersion','$modSMFVersionFor','$modAuthor','$modDescription','$category')
					ON DUPLICATE KEY UPDATE packageid = '$id',title = '$modTitle',filename = '$filename',version = '$modVersion',versionfor = '$modSMFVersionFor',author = '$modAuthor',description = '$modDescription', category = '$category'");
		if (!$result)
			echo mysqli_error($db_connection) ;


		}

		// no more mods found
		if ($count == 0)
			$done = true;


		$count = 0;
		$start += 50;

	}
}


echo 'Total Mods:' . $totalMods;



function RunCurlQuery($url,$fields = '',$sleep = 1, $userAgent = 0, $timeoutConnectSeconds = 0,$headers = array(), $CustomRequestType = '', $BasicAutenicationUsernamePassword = '')
{
    global $lastCurlHeaderCode, $context, $ez_logs_path, $curlCookiefile;
    if (!empty($sleep))
		sleep($sleep);

	$ch = curl_init($url);

	curl_setopt($ch,	CURLOPT_RETURNTRANSFER, 1);


	if ($userAgent == 1)
		curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36");

	if (!empty($timeoutConnectSeconds))
    {
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeoutConnectSeconds);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeoutConnectSeconds);

    }

    if (!empty($headers))
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	//echo 'Headers:  ' . print_R($headers,true);
    if (!empty($context['debug_curl']))
    {
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_STDERR, fopen('curl.txt', 'w+'));
    }
	if (!empty($curlCookiefile))
	{
		curl_setopt($ch, CURLOPT_COOKIEJAR, $curlCookiefile);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $curlCookiefile);

	}

    if (!empty($BasicAutenicationUsernamePassword ))
	{
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($ch, CURLOPT_USERPWD, $BasicAutenicationUsernamePassword); // "$username:$password");
	}
	if (!empty($CustomRequestType))
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,$CustomRequestType);

    if ($CustomRequestType == 'POST'  && !empty($fields))
        curl_setopt($ch, CURLOPT_POST, 1);

    if ($CustomRequestType == 'PUT'  && !empty($fields))
        curl_setopt($ch, CURLOPT_PUT, 1);

	//curl_setopt($ch,	CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	//curl_setopt($ch,	CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch,	CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); // IPV4 only

	if (!empty($fields))
	curl_setopt($ch,	CURLOPT_POSTFIELDS, $fields);
	$data = trim(curl_exec($ch));
    $lastCurlHeaderCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);


	return $data;

}



