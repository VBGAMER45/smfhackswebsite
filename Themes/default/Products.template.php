<?php
function template_main()
{
	global $scripturl,$smcFunc,$modSettings,$boardurl;

	if(empty($modSettings['gallery_url']))
	{
		$modSettings['gallery_url'] = $boardurl . '/gallery/';
	}

		echo '
        <div class="cat_bar">
		<h3 class="catbg">
        Products for your SMF Forum
        </h3>
  </div>

        <div class="tborder" style="margin-bottom: 2px;">

		<div class="windowbg" style="padding: 4px;">

			<div align="left">
			<table>
			<tr>
			<td colspan="2">
			<ul><a href="https://www.smfhacks.com/community-suite.php"><b>Community Suite</b></a><br />
				<li>All products by SMF Hacks and any new products that are released</li>
				<li>SMF Gallery Pro, SMF Store, SMF Classifieds, Downloads System Pro, Ad Seller Pro, Newsletter Pro</li>
				<li>Lower cost and lower renewal fees</li>
				<li><a href="https://www.smfhacks.com/community-suite.php">Click here fore more information and features</a></li>
			</ul>
			</td>
			</tr>

			<tr>
			<td>
			<ul><a href="https://www.smfhacks.com/smf-gallery-pro.php"><b>SMF Gallery Pro</b></a><br />
				<li>Integrated with SMF</li>
				<li>User Galleries</li>
				<li>Easy to use and quick setup</li>
				<li><a href="https://www.smfhacks.com/smf-gallery-pro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
			<td>';


	//$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 1 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM smfstoredemo.smf_gallery_pic WHERE approved = 1 AND ID_CAT = 4 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");

	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/smf-gallery-pro.php"><img src="https://www.smfhacks.com/storedemo/gallery/',   $row['thumbfilename'] ,'" alt="SMF Gallery" /></a>';

		echo '
			</td>
			</tr>

			<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/smf-store.php"><b>SMF Store</b></a><br />
				<li>Integrated with SMF</li>
				<li>Supports digital and physical products</li>
				<li>Uses PayPal as the payment processor</li>
				<li>Easy to use and quick setup</li>
				<li><a href="https://www.smfhacks.com/smf-store.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 2 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/smf-store.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="SMF Store" /></a>';

		echo '
			</td>

			</tr>


<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/smf-classifieds.php"><b>SMF Classifieds</b></a><br />

				<li>Integrated with SMF</li>
				<li>A classifieds system for SMF were users can place listings and auctions</li>
				<li>Supports free and paid listings using PayPal</li>
				<li>Easy to use and quick setup</li>
				<li><a href="https://www.smfhacks.com/smf-classifieds.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 3 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/smf-classifieds.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="SMF Classifieds" /></a>';

		echo '
			</td>

			</tr>';

/*
echo '

<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/video-addon.php"><b>Video Addon for SMF Gallery Pro</b></a><br />

				<li>Integrated with SMF Gallery Pro 1.3 or higher</li>
				<li>Formats supported: avi,flv,mov,mpg,ram,rm,rpm,wmv</li>
				<li>Supports YouTube and Google Video Links</li>
				<li><a href="https://www.smfhacks.com/video-addon.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 5 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/video-addon.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" /></a>';

		echo '
			</td>
			</tr>';

		*/

	echo '

<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/download-system-pro.php"><b>Downloads System Pro</b></a><br />

				<li>Credit system buy download credits using PayPal</li>
				<li>Images/Screenshots can be added to downloads</li>
				<li>Set wait time in between downloads, max downloads per day</li>
				<li><a href="https://www.smfhacks.com/download-system-pro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 7 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/download-system-pro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Download System Pro" /></a>';

		echo '
			</td>
			</tr>




<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/ad-seller-pro.php"><b>Ad Seller Pro</b></a><br />

				<li>Built in ad selling system with ad packages integrated with PayPal</li>
				<li>Ad placement system built into default theme to optimize ad revenue</li>
				<li>Supports Banners Ads, Text Ads with Editor, and Custom Code such as javascript for ads</li>
				<li><a href="https://www.smfhacks.com/ad-seller-pro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 8 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/ad-seller-pro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" /></a>';

		echo '
			</td>
			</tr>


<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/prettyurls-seo-pro.php"><b>Pretty Urls SEO Pro</b></a><br />

					<li>SEO Friendly urls for boards, topics, profiles and actions!</li>
					<li>Sitemap system for Google, Bing, and Yahoo</li>
					<li>.htaccess Editor</li>
					<li>Custom 404 page editor</li>
					<li>Robots.txt Management</li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 17 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/prettyurls-seo-pro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Pretty Urls SEO Pro" /></a>';

		echo '
			</td>
			</tr>



<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/message-editor-pro.php"><b>Message Editor Pro</b></a><br />

					<li>Uses the SCEditor with SMF editions same one in SMF 2.1</li>
					<li>Includes a justify bbc code and has both a WYWSIWYG editor and the option to view code</li>
					<li>Option in admin area under Post Settings to enable or disable</li>
				<li><a href="https://www.smfhacks.com/message-editor-pro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 16 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/message-editor-pro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Message Editor Pro" /></a>';

		echo '
			</td>
			</tr>




<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/newsletter-pro.php"><b>Newsletter Pro</b></a><br />

				<li>Adds new features to the newsletter system</li>
				<li>Upgraded message editor</li>
				<li>Track views, clicks and optouts</li>
				<li><a href="https://www.smfhacks.com/newsletter-pro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 6 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/newsletter-pro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Newsletter Pro" /></a>';

		echo '
			</td>
			</tr>';


        /*
  echo '
			<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/social-login-pro.php"><b>Social Login Pro</b></a><br />

				<li>Integrated login and registration for social networking accounts</li>
				<li>Supports Facebook, Twitter, Myspace, Google and many more!</li>
				<li>Increase your membership and user participation</li>
				<li><a href="https://www.smfhacks.com/social-login-pro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 9 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/social-login-pro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" /></a>';

		echo '
			</td>
			</tr>';
*/







echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/forumtoolbox.php"><b>Forum ToolBox</b></a><br />
					<li>Multiple Accounts Detector</li>
					<li>Topic Ban -  Allow members to ban other people from posting in their topic</li>
					<li>Member Likes - Allow members to like other members</li>
					<li>Miserable Users - Discourage a user from using a forum  useful against trolls</li>
				<li><a href="https://www.smfhacks.com/forumtoolbox.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT IN(20,21,22,23) GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/forumtoolbox.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Forum ToolBox" /></a>';

		echo '
			</td>
			</tr>';







echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/awesomepostratings.php"><b>Awesome Post Ratings</b></a><br />
					<li>15 rating types pre installed!</li>
					<li>Ajax based rating system does not require any page reloads</li>
					<li>Displays ratings on the post and a popup link to a list of all people who rated the post if there are ratings</li>
				<li><a href="https://www.smfhacks.com/awesomepostratings.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 13 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/awesomepostratings.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Badge Awards" /></a>';

		echo '
			</td>
			</tr>';



echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/badgeawards.php"><b>Badge Awards</b></a><br />
					<li>Over 50+ badges that can be earned by members for all different actions such as posting, registration date, avatars, signatures, and more!</li>
					<li>Awards are auto added to members when they are earned</li>
					<li>Support for creating custom Badge Awards to allow expansion</li>
				<li><a href="https://www.smfhacks.com/badgeawards.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 11 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/badgeawards.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Badge Awards" /></a>';

		echo '
			</td>
			</tr>';





echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/s3systemforsmf.php"><b>S3 System For SMF</b></a><br />
					<li>Stores your forums attachments on Amazon S3</li>
					<li>Files are stored securely on Amazon S3 with a private ACL</li>
					<li>Attachments that are deleted are also deleted on S3 if they are linked</li>
					<li>Sync system to automatically copy existing attachments to your S3 Bucket</li>
				<li><a href="https://www.smfhacks.com/s3systemforsmf.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 25 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/s3systemforsmf.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="S3 System For SMF" /></a>';

		echo '
			</td>
			</tr>';






echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/gdprpro.php"><b>GDPR Pro</b></a><br />
					<li>Consent for the privacy policy on registration</li>
					<li>Ability for the users to export their profile information in (csv,html,xml) format and posts</li>
					<li>Clears information from database tables when an account is deleted</li>
				<li><a href="https://www.smfhacks.com/gdprpro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 14 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/gdprpro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="GDPR Pro" /></a>';

		echo '
			</td>
			</tr>';


echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/emojipro.php"><b>Emoji Pro</b></a><br />
					<li>Over 1600 emoji\'s added to SMF with groupings</li>
					<li>Works for both the text editor and wysiwyg editor in SMF</li>
					<li>Adds to any full editor spot in SMF such as new topic, reply, personal messaging</li>
				<li><a href="https://www.smfhacks.com/emojipro.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 15 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/gdprpro.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Emoji Pro" /></a>';

		echo '
			</td>
			</tr>';




echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/hashtags.php"><b>HashTags</b></a><br />
					<li>Easy to use # interface with auto complete/suggest for hashtags entered in the system</li>
					<li>Hashtag list that you can search for tags by the letter they start with</li>
					<li>Permissions for viewing hashtags list, adding tags, and deleting tags on membergroup level</li>
				<li><a href="https://www.smfhacks.com/hashtags.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 18 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/hashtags.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="HashTags" /></a>';

		echo '
			</td>
			</tr>';




echo '
<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/zapierforsmf.php"><b>Zapier for SMF</b></a><br />
					<li>Allows registration of a member from Zapier. We support the following fields: username,password,email,displayname</li>
					<li>Allows creation of topics,replies from Zapier. We support the following fields: subject,message,boardid,memberid,topicid</li>
					<li>Fetching of data recent posts, recent topics both can be filtered by board id, and latest member registrations</li>
					<li>Get access to over 2000+ apps with workflow.</li>
				<li><a href="https://www.smfhacks.com/zapierforsmf.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';

	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 19 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/hashtags.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Zapier for SMF" /></a>';

		echo '
			</td>
			</tr>';




/*
			<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/tweet-topics-system.php"><b>Tweet Topics/FB Post System</b></a><br />

					<li>Supports both Facebook or Twitter for Topic Posting</li>
					<li>Select which boards to tweet/post</li>
					<li>Link shortining support for topic link with Bitly for Twitter</li>
					<li>No Footer Copyright link at all!</li>
				<li><a href="https://www.smfhacks.com/tweet-topics-system.php">Click here fore more information and features</a></li>
			</ul>
			</td>
<td>';



	$request = $smcFunc['db_query']('', "SELECT thumbfilename,ID_PICTURE FROM {db_prefix}gallery_pic WHERE approved = 1 AND ID_CAT = 10 GROUP BY thumbfilename ORDER BY RAND() LIMIT 1");
	$row = $smcFunc['db_fetch_assoc']($request);
	$smcFunc['db_free_result']($request);
	echo' <a href="https://www.smfhacks.com/tweet-topics-system.php"><img src="',  $modSettings['gallery_url'] . $row['thumbfilename'] ,'" alt="Tweet Topics/FB Post System" /></a>';

		echo '
			</td>
			</tr>';

		*/
echo '

<tr>
			<td>
			<br />
			<ul><a href="https://www.smfhacks.com/copyright_removal.php"><b>Copyright Removal for Modifications</b></a><br />

				<li>Allows you to remove links to smfhacks.com</li>
				<li>Keep your visitors on your site</li>
				<li>Give website a more professional feel</li>
				<li><a href="https://www.smfhacks.com/copyright_removal.php">Click here for more information</a></li>
			</ul>
			</td>
<td>&nbsp;
</td></tr>




<tr>
			<td>
			<br />
			<ul><a href="https://www.smfmobile.com"><b>SMF4Mobile From SMFSMFMobile.com</b></a><br />

				<li>Enhancing users experience on smart phones and tablets.</li>
				<li>Valid for unlimited sites owned by you!</li>
				<li>For SMF 2.0.x only</li>
				<li><a href="https://www.smfmobile.com">Click here for more information</a></li>
			</ul>
			</td>
<td>&nbsp;
</td></tr>


			</table>
			<br />


			</div>

		</div>
		</div>';
}
?>