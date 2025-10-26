<html>
<head>
<title>SMF Classifieds - Help and Information</title>
</head>
<body>
<h1 align="center">SMF Classifieds Help</h1>
<hr />
	<table align="center" width="95%">
		<tr>
			<td width="20%" valign="top">
			<a href="#intro">Introduction</a><br />
			<a href="#install">Installing</a><br />
			<a href="#permissions">Permission Setup</a><br />
			<a href="#settings">Settings Information</a><br />
			<a href="#customtheme">Custom Themes</a><br />
			<a href="#languages">Other Languages</a><br />
			</td>
			<td width="80%">
			<a name="intro"><b>Introduction:</b></a><br /><br />
			SMF Classifieds is a classifieds system for SMF (Simple Machines Forum). A classifieds system allows users to place listings for items to sell.
			<br /><br />

			<a name="install"><b>Installing:</b></a><br /><br />
			Requirements for SMF Classifieds:<br />
			To have SMF 1.1.x installed, paypal business account (for paid listings and upgrades), fsockopen enabled (for paid listings and upgrades) and that your PHP has GD support for resizing thumbnails.<br />
			If you do not know if your current host supports GD ask them or in SMF go to your Admin section of your forum and click on Support and Credits and it may say the GD version if it is installed.<br />
			<br />
			Install is simple you can download the package from the SMFHacks.com site and upload it to your packages directory on your SMF forum.<br />

			<br />
			Once you have the package in your packages folder go to the Package Manager in the admin section of your SMF forum.<br />
			Then find SMF Classifieds and click on [ Apply Mod ].<br />
			After you click on apply you see if it was able to be installed on all files.<br />
			If you are using a custom theme you may see some errors installing on index.template.php<br />
			The install will still go fine except you will need to add a button or link to the classifieds in the menu of your custom theme.<br />
			You can access the classifieds via http://www.yoursite.com/index.php?action=classifieds if you do not have a link or button on your theme.<br />
			If you need some information on creating a custom menu link for the classifieds visit the <a href="#customtheme">Custom Themes</a> section.<br />
			<br />
			After the package is applied you are ready to go. Click on Button/Menu Link to view the classifieds.
			The first thing you need to do is create a new category for your images.
			<br />
			I would also check that the classifieds has read and write permissions to the classifieds folder. This is needed in order to upload pictures to your website.<br />
			For an IIS server you will need to set the classifieds folder with permissions for the Internet Guest Account with having read, write, and modify permissions. Check out this <a href="http://www.smfhacks.com/smfgallery/help/guestaccount.PNG" target="blank">image</a>.<br />
			<br />
			Finally, the last thing you need to check is the membergroup permissions for the classifieds. This will be discussed in the <a href="#permissions">Permission Setup</a> section.<br />
			<br />


			<a name="permissions"><b>Permission Setup:</b></a><br /><br />
			SMF Classifieds has many built in permissions to help control what membergroup can do a certain action<br>
			<br />
			Permissions
			<ul>
				<li>View Classifieds</li>
				<li>Bid on Listing</li>
				<li>Add Listing</li>
				<li>Add Comments</li>
				<li>Edit own Comment</li>
				<li>Auto Approve Comments</li>
				<li>Admin Classifieds</li>
			</ul>
			<br />
			View Classifieds permission allows the user to view the classifieds.<br />
			<br />
			Bid on Listing allows a user to bid on listings/auctions <br />
			<br />
			Add Listing allows the user to add listings and auctions<br />
			<br />
			Add Comments permission allows the users to leave comments on a listings<br />
			<br />
			Edit own Comment allows a user to edit their own comments<br />
			<br />
			Auto Approve Comments if given allows a persons comments not needed to be approved.<br />
			<br />
			Admin Classifieds permission should only be given to admins or people you trust to manage the classifieds.<br />
			<br />
			<br />
			<i>Changing permissions in SMF</i>
			To change permissions for a group in SMF go to your admin section on your forum.<br />
			Then click on Edit Permissions.<br />
			For each group you will need add the permissions that they need. You can do this by clicking <a href="http://www.smfhacks.com/smfgallery/help/modifypermissions.PNG" target="blank">modify</a><br />
			Then checking the classifieds permissions that the membergroup needs.<br />

			<br />
			<br />
			<a name="settings"><b>Settings Information:</b></a><br /><br />
			SMF Classifieds comes with options to help configure your forum<br /><br />
			Settings:<br />
			<i>Classifieds Path</i> - Path on the server to the classifieds files<br />
			<i>Classifieds Url</i> - Web address of the classifieds files<br />
			<i>Items per page </i> - Number of images per page on a classifieds category<br />
			<i>Max thumbnail width</i> - The max width of a thumbnail image<br />
			<i>Max thumbnail height</i> - The max height of a thumbnail image<br />
			<i>Contact Email:</i> - email used for all contacts on the classifieds<br />
			<i>PayPal Email</i> - the PayPal email used for your classifieds <br />
			<i>Receive copy of sales email</i > - Sends a copy of the sales email to contact email<br />
			<i>Counts child categories product totals</i><br />
			<i>Display newest comments first</i> - The order in which comments are displayed. If checked newest comments are first.<br />
			<i>Show who is viewing listing/category</i> - Shows who is viewing a listing/category<br />


			<br />
			<a name="customtheme"><b>Custom Themes:</b></a><br /><br />
			If you are using a custom theme other than the default that SMF is using then the link/button image for the classifieds will not appear.<br />
			Be <b>warned you should create a backup of your index.template.php</b> of the theme you are editing before you make any changes to the file.<br />
			For editing themes you should be sort of familiar with php and html. I also suggest to have a text editor with syntax highlighting so you can find mistakes such as ZendStudio.<br /><br />
			In order to add a button for a custom theme you will need to edit the index.template.php of your custom theme.<br />


			<br />
			<a name="languages"><b>Other Languages:</b></a><br /><br />
			For using languages other than English the first thing to do is check the SMF Classifieds forums and see if someone has translated SMF Classifieds to your language already.<br />
			If not there are three files that will be need to be translated, these files are located in your themes languages folder.<br />
			classifieds.english.php or classifieds.english-utf8.php if you are using a UTF based language.<br />
			To translate just open up the file and replace all the text inside the single quotes.<br />
			$txt['class_something'] = 'REPLACETEXTHERE';<br />
			And then save the file as your SMF language file name<br />
			For example if you were using Spanish as your language.<br />
			You would save your changes as classifieds.spanish.php or classifieds.spanish-utf8.php if you have a UTF enabled forum.<br />
			<br />
			Next, you will need to translate modificiations.english.php or modifications.spanish-utf8.php <br />
			To translate just open up the file and replace all the text inside the single quotes.<br />
			$txt['class_something'] = 'REPLACETEXTHERE';<br />
			And then save the file as your SMF language file name<br />
			For example if you were using Spanish as your language.<br />
			You would save your changes as modifications.spanish.php or modifications.spanish-utf8.php if you have a UTF enabled forum.<br />
			You only have to worry about the UTF files if you are running SMF 1.1.x or higher and have UTF enabled.<br />
			<br />
			Last, you need to translate Who.english.php find $txt['whoall_classifieds'] and translate and place that in Who.yourlanguage.php
			You will now have all the language strings that SMF Classifieds needs translated

			</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><hr />
			<b>Copyright SMFHacks.com 2008</b></td>
		</tr>
	</table>


</body>

</html>