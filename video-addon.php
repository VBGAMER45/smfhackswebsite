<?php
$ssi_ban = true;
require(dirname(__FILE__) . '/SSI.php');

global $context;

$context['page_title_html_safe'] = 'Video Addon for SMF Gallery Pro - Allows videos to be added to the Gallery';
$context['meta_keywords'] = '';
$context['page_title'] = 'Video Addon for SMF Gallery Pro';

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
     			<h3 align="center"><span itemprop="name">Video Addon for SMF Gallery Pro</span></h3>
				<br />

				<b>Information:</b><br />
				<span itemprop="description">
				A video addon for SMF Gallery Pro. Allows users to uploads videos to the gallery. Or enter a url to videos on either YouTube or Google Video.
				</span>
				<br />
				<b>Requires</b><br />
				SMF Gallery Pro 1.3 or higher (SMF 2.0.x SMF 1.1.x)<br />
				Access to php settings if you want to enable uploading videos greater than 2mb<br />
 				<br />
				<br />
				<b>Features:</b><br />
				<ul>
					<li>Upload formats supported: avi,flv,mov,mpg,ram,rm,rpm,swf,wmv</li>
					<li>Supports YouTube and Google Video Links such as http://www.youtube.com/watch?v=EDIP71Lviys and http://video.google.com/videoplay?docid=-3755578433803905218</li>
					<li>Can have a user uploaded thumbnail if none is specified uses generic video image</li>
					<li>Settings to set the max file size, player height, player width, show download link, show html linking codes</li>
					<li>Membergroup level permission to control which group can upload videos.</li>
					<li>And more!</li>
				</ul>
				<br />
				<b>Order:</b><br />
				<span itemprop="offers" itemscope itemtype="http://schema.org/Offer">

				Price $<span itemprop="price">30</span> owned license<br />
				<meta itemprop="priceCurrency" content="USD" />
				</span>

				License: For one instance on a forum.<br />

				<div align="center">
				<b>Requires SMF Gallery Pro 1.3 or higher <br />You need access to your php settings to upload large video files</b>
				<br>
				<b>No longer sold part of SMF Gallery Pro</b>

	<br />
				<br />Licenses are non refundable and you must ensure that your hosting meets the above requirements.<br />
				<img src="payment.gif" alt="Payment Choices" border="1" /><br />

				</div>

				<br />
				<b>Common Support Questions:</b><br />

				<b>How do I change the php max upload settings?</b><br />
				In Windows you would edit the php.ini file<br />
				Find something such as:<br />
				upload_max_filesize = 2M<br />
				<br />
				And change the 2M limit to a higher value such as 30MB to allow a video size of 30mb<br />
				upload_max_filesize = 30M<br />
				<br />
				Be sure to also restart your web server after you adjust the php settings for them to take affect.

				<br />
				There are a couple other factors that affect the download limit such as Apache and IIS time out settings as well<br />
				<br />
				<b>MIME types and IIS</b><br />
				IIS will only serve files that are in it's MIME database.<br />
				This example will show you how to add support for .flv files to IIS.<br />
				<br />
				Open up IIS<br />
				Next, click on properties of the website that you want to add the MIME type to.<br />
				Then click on the HTTP Headers tab.<br />
				Now click on the MIME types button.<br />
				Click on the new button on the MIME types screen.<br />
				For the extension enter .flv and for the "MIME type" enter video/x-flv<br />
				Click ok and the mime type is now added and your webserver now supports flv videos.<br />
				<br />
				<br />
				To check if it is a mime type issue try to visit a url on your site that has a a video such as .flv and if it results in a 404 error then it probably is a MIME type issue.



				<br /><br />
     		</td>
     		<td width="20%" class="windowbg2" valign="top">
     				<br /><br /><div align="center">
					<b>Screenshots</b><br />
<a href="https://www.smfhacks.com/gallery/1_29_09_07_6_04_51_1.PNG"><img itemprop="image" src="https://www.smfhacks.com/gallery/thumb_1_29_09_07_6_04_51_1.PNG" /></a>
			<br />
			<span class="smalltext">Settings</span>
			<br />
<a href="https://www.smfhacks.com/gallery/1_29_09_07_6_04_50_0.PNG"><img itemprop="image" src="https://www.smfhacks.com/gallery/thumb_1_29_09_07_6_04_50_0.PNG" /></a>
			<br />
			<span class="smalltext">Add Video</span>
			<br />
<a href="https://www.smfhacks.com/gallery/1_29_09_07_6_04_51_2.PNG"><img itemprop="image" src="https://www.smfhacks.com/gallery/thumb_1_29_09_07_6_04_51_2.PNG" /></a>
			<br />
			<span class="smalltext">YouTube Video Example</span>
			<br />
					</div>

     		</td>
     	</tr>


     </table>
     </div>
<?php
template_footer();
?>
