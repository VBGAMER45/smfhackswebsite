<?

function template_main()
{
	global $scripturl, $smcFunc, $context;

	if (!isset($_REQUEST['product']))
	{

	echo '
    <div class="cat_bar">
		<h3 class="catbg centertext">
        SMFHacks.com Site Showcase
        </h3>
  </div>

    <div class="tborder">


		<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
		<tr class="titlebg">
				<td>Product Name</td>
				<td>Total Listed Sites</td>
		</tr>
		';

		$dbresult = $smcFunc['db_query']('', "SELECT
		p.productname, p.ID_PRODUCT
		FROM {db_prefix}products as p");
		while ($row = $smcFunc['db_fetch_assoc']($dbresult))
		{
			$dbresult2 = $smcFunc['db_query']('', "SELECT
							COUNT(*) as total FROM {db_prefix}license WHERE listinlinks = 1 AND ID_PRODUCT  = " . $row['ID_PRODUCT']);
							$row2 = $smcFunc['db_fetch_assoc']($dbresult2);
				$smcFunc['db_free_result']($dbresult2);

			if (empty($row2['total']))
				continue;

			echo '<tr>';
				echo '<td><a href="', $scripturl, '?action=showcase;product=',$row['ID_PRODUCT'],'">',$row['productname'],'</a></td>';



				echo '<td>',$row2['total'],'</td>';

			echo '</tr>';

			echo '<tr class="windowbg2">
		<td colspan="2">&nbsp;<span class="smalltext"></span></td>
		</tr>';
		}
		$smcFunc['db_free_result']($dbresult);

		echo '</table>';

	}
	else
	{
		echo '
            <div class="cat_bar">
		<h3 class="catbg centertext">
        Listed sites for ',$context['productname'],'
        </h3>
  </div>

        <div class="tborder">

    	<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%">
		<tr class="titlebg">
				<td></td>
				<td>Site Link</td>
		</tr>';

		if (!empty($_REQUEST['site']))
		{
		$site = (int) $_REQUEST['site'];
			$smcFunc['db_query']('', "UPDATE {db_prefix}license SET listinlinks = 0 WHERE listinlinks = 1 AND ID_LICENSE  = " . $site  . "");
		}


		$context['start'] = (int) $_REQUEST['start'];


		// Get Total Pages
		$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}license
		WHERE listinlinks = 1 AND ID_PRODUCT  = " . $context['productid']);
		$row = $smcFunc['db_fetch_assoc']($dbresult);
		$total = $row['total'];

		$smcFunc['db_free_result']($dbresult);

		$dbresult = $smcFunc['db_query']('', "SELECT
		startdate,domain, ID_PRODUCT, ID_LICENSE
		FROM {db_prefix}license WHERE listinlinks = 1 AND ID_PRODUCT  = " . $context['productid'] . "

		ORDER BY ID_LICENSE DESC LIMIT $context[start],30");
		global $boarddir, $user_info;
		$showcasepath = $boarddir . '/showcase/';

$count = 0;
		while($row = $smcFunc['db_fetch_assoc']($dbresult))
		{
			if ($count == 0)
			{
			echo '<tr class="windowbg">';
				$count = 1;
			}
			else
			{
		echo '<tr class="cat_bar">';
				$count = 0;
			}



			$finaldomain = str_replace('http://','',$row['domain']);
			$finaldomain = str_replace('www.','',$finaldomain);

/*
			$siteurl = 'http://' . str_replace('http://','',$finaldomain);
			if (isValidUrl($siteurl) === false)
			{
			echo 'Bad Site: ' . $siteurl;
			$smcFunc['db_query']('', "UPDATE {db_prefix}license SET listinlinks = 0 WHERE listinlinks = 1 AND ID_LICENSE  = " . $row['ID_LICENSE'] . "");
			}
			*/
			if (!file_exists($showcasepath .'thumb_' . $finaldomain . '.jpg'))
				echo '<td></td>';
			else
				echo '<td><a href="http://' . str_replace('http://','',$row['domain']) . '" target="_blank" rel="nofollow"><img src="https://www.smfhacks.com/showcase/thumb_' . $finaldomain . '.jpg' . '" /></a></td>';

			echo '<td><a href="http://' . str_replace('http://','',$row['domain']) . '" target="_blank" rel="nofollow">' . $row['domain'] . '</a></td>';



			if ($user_info['is_admin'])
				echo '<td><a href=', $scripturl, '?action=showcase;product=',$row['ID_PRODUCT'] . "&site="   . $row['ID_LICENSE']   . '">[Hide]</a>';

			echo '</tr>';
		}
		$smcFunc['db_free_result']($dbresult);


		echo '<tr class="windowbg">
					<td align="left" colspan="2">Pages:
					';

					$context['page_index'] = constructPageIndex($scripturl . '?action=showcase;product=' . $context['productid'] , $_REQUEST['start'], $total, 30);
					echo $context['page_index'];

			echo '
					</td>
				</tr>

				<tr>
				<td align="center" colspan="2"><a href="' . $scripturl . '?action=showcase">Return to Showcase</a></td>
				</tr>

		</table>';
	}
}



    function isValidUrl($url){
        // first do some quick sanity checks:


        // the next bit could be slow:
        if(getHttpResponseCode_using_curl($url) != 200){
//      if(getHttpResponseCode_using_getheaders($url) != 200){  // use this one if you cant use curl
            return false;
        }
        // all good!
        return true;
    }

    function getHttpResponseCode_using_curl($url, $followredirects = true){
        // returns int responsecode, or false (if url does not exist or connection timeout occurs)
        // NOTE: could potentially take up to 0-30 seconds , blocking further code execution (more or less depending on connection, target site, and local timeout settings))
        // if $followredirects == false: return the FIRST known httpcode (ignore redirects)
        // if $followredirects == true : return the LAST  known httpcode (when redirected)

        $ch = curl_init($url);
        if($ch === false){
            return false;
        }

        @curl_setopt($ch, CURLOPT_HEADER         ,true);    // we want headers
        @curl_setopt($ch, CURLOPT_NOBODY         ,true);    // dont need body
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER ,true);    // catch output (do NOT print!)
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if($followredirects){
            @curl_setopt($ch, CURLOPT_FOLLOWLOCATION ,true);
            @curl_setopt($ch, CURLOPT_MAXREDIRS      ,10);  // fairly random number, but could prevent unwanted endless redirects with followlocation=true
        }else{
            @curl_setopt($ch, CURLOPT_FOLLOWLOCATION ,false);
        }
      @curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,7);   // fairly random number (seconds)... but could prevent waiting forever to get a result
      @curl_setopt($ch, CURLOPT_TIMEOUT        ,7);   // fairly random number (seconds)... but could prevent waiting forever to get a result
      @curl_setopt($ch, CURLOPT_USERAGENT      ,"Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1");   // pretend we're a regular browser
        curl_exec($ch);
        if(curl_errno($ch)){   // should be 0
        echo 'cerr: ' . curl_errno($ch);
            curl_close($ch);
            return false;
        }
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE); // note: php.net documentation shows this returns a string, but really it returns an int
        echo 'code: ' . $code;
        curl_close($ch);
        return $code;
    }

    function getHttpResponseCode_using_getheaders($url, $followredirects = true){
        // returns string responsecode, or false if no responsecode found in headers (or url does not exist)
        // NOTE: could potentially take up to 0-30 seconds , blocking further code execution (more or less depending on connection, target site, and local timeout settings))
        // if $followredirects == false: return the FIRST known httpcode (ignore redirects)
        // if $followredirects == true : return the LAST  known httpcode (when redirected)

        $headers = @get_headers($url);
        if($headers && is_array($headers)){
            if($followredirects){
                // we want the last errorcode, reverse array so we start at the end:
                $headers = array_reverse($headers);
            }
            foreach($headers as $hline){
                // search for things like "HTTP/1.1 200 OK" , "HTTP/1.0 200 OK" , "HTTP/1.1 301 PERMANENTLY MOVED" , "HTTP/1.1 400 Not Found" , etc.
                // note that the exact syntax/version/output differs, so there is some string magic involved here
                if(preg_match('/^HTTP\/\S+\s+([1-9][0-9][0-9])\s+.*/', $hline, $matches) ){// "HTTP/*** ### ***"
                    $code = $matches[1];
                    return $code;
                }
            }
            // no HTTP/xxx found in headers:
            return false;
        }
        // no headers :
        return false;
    }
