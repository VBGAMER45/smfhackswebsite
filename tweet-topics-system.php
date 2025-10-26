<?php
global $ssi_guest_access;
$ssi_guest_access = 1;
$ssi_ban = true;
require(dirname(__FILE__) . '/SSI.php');

global $context;

$context['page_title_html_safe'] = 'Tweet Topics/FB Post System for SMF - Automatically Tweet Topics and Post Topics to Facebook';
$context['meta_keywords'] = 'tweet smf, twitter smf, tweet topics, fb post, facebook post';
$context['page_title'] = 'Tweet Topics/FB Post System for SMF - Automatically Tweet Topics and Post Topics to Facebook';

template_header();
?>
<div id="bodyarea" style="padding: 10px 8px 0px 8px;">
<div itemscope itemtype="http://schema.org/Product">

        <table width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
           	<td bgcolor="#6B8EAE" colspan="3">

           	</td>

        </tr>
     	<tr>
     		<td width="20%" valign="top" class="windowbg2">

     		</td>
     		<td width="60%" class="windowbg2">
     			<h3 align="center"><span itemprop="name">Tweet Topics/FB Post System</span></h3>
				<br />

				<b>Information:</b><br />
				<span itemprop="description">
				This system allows your forum to automatically facebook post and or tweet topics from selected boards. Each tweet or facebook post contains the topic title along with a link back to the topic on your forum. Expand the reach and gain traffic though facebook/twitter and keep your followers up to date on the latest happenings on your forum.
				</span>
				<br />
				<b>Requires</b><br />
				<b><u>PHP 5 with cURL extension installed</u></b><br />
				Supports SMF 2.0.x (MySQL) And SMF 1.1.x<br />

				<br />
				<br />
				<b>Features:</b><br />
				<ul>
					<li>Automatically post topics from Facebook and or Twitter</li>
					<li>Select which boards to tweet/post</li>
					<li>Link shortening support for topic link with Bitly for Twitter</li>
					<li>No Footer Copyright link at all!</li>
				</ul>
				<br />
				<b>Order:</b><br />
				<span itemprop="offers" itemscope itemtype="http://schema.org/Offer">

				Price $<span itemprop="price">25</span> owned license (One year of updates)<br />
				<meta itemprop="priceCurrency" content="USD" />

				</span>

				License: For one instance on an online forum.<br />
				<b><u>Requires: PHP 5</u></b><br />


				<div align="center">

				<?php
				echo 'No longer offered';
				/*

	<form action="https://www.e-junkie.com/ecom/gb.php?i=TweetTopics&c=single&cl=601" method="post">
				<input type="hidden" name="on0" value="Domain for Tweet Topics System">Domain for Tweet Topics System:<input type="text" name="os0" maxlength="200"><br />
				<input type="image" src="https://www.smfhacks.com/paypalbuynow.jpg" style="border:0 none;" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				</form>
		*/

		?>

	<br />



				<br />Licenses are non refundable and you must ensure that hosting meets the above requirements.<br />


				</div>

				<br />



				<br /><br />
     		</td>
     		<td width="20%" class="windowbg2" valign="top">
     				<br /><br /><div align="center">
					<b>Screenshots</b><br />
					<?php

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE,title FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 10 ");
	while($row = $smcFunc['db_fetch_assoc']($request))
	{
	echo' <a href="https://www.smfhacks.com/index.php?action=gallery;sa=view;id='  . $row['ID_PICTURE'] . '"><img itemprop="image" src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" /></a>
		<br />
		<span class="smalltext">' . $row['title'] . '</span><br />
	';
	}
	$smcFunc['db_free_result']($request);


					?>


					</div>

     		</td>
     	</tr>


     </table>
     </div>
<?php
template_footer();
?>
