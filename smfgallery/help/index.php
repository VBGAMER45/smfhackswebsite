<html>
<head>
<title>SMF Gallery - Help and Information</title>
</head>
<body>
<h1 align="center">SMF Gallery Help</h1>
<div align="center"><i>For Lite and Pro Editions</i></div>
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
			SMF Gallery is a gallery system for SMF. Allows users to upload pictures to the gallery and comment on them.<br />
			SMF Gallery comes in two editions SMF Gallery Lite and SMF Gallery Pro.<br />
			The Lite Edition is primary for people who do not have many pictures or are on a limited budget.<br />
			The Pro Edition supports multiple pages of images and some additional features.<br /><br />

			<a name="install"><b>Installing:</b></a><br /><br />
			Requirements for SMF Gallery Lite or Pro:<br />
			To have SMF 2.1.x, SMF 2.0.x, SMF 1.1.x or SMF 1.0.x installed and that your PHP has GD support.<br />
			If you do not know if your current host supports GD ask them or in SMF go to your Admin section of your forum and click on Support and Credits and it may say the GD version if it is installed.<br />
			<br />

			Lite Edition: Install is simple you can download the package from the SMFHacks.com site and upload it to your packages directory on your SMF forum.<br />
			Or you can add the SMFHacks.com package server with the server address of www.smfhacks.com and download it directly to forum. Shown in this <a href="http://www.smfhacks.com/pserver.PNG" target="blank">picture</a>.<br />
			<br />
			Once you have the package in your packages folder go to the Package Manager in the admin section of your SMF forum.<br />
			Then find SMF Gallery and click on [ Apply Mod ].<br />
			After you click on apply you see if it was able to be installed on all files.<br />
			If you are using a custom theme you may see some errors installing on index.template.php<br />
			The install will still go fine except you will need to add a button or link to the gallery in the menu of your custom theme.<br />
			You can access the gallery via http://www.yoursite.com/?action=gallery if you do not have a link or button on your theme.<br />
			If you need some information on creating a custom menu link for the gallery visit the <a href="#customtheme">Custom Themes</a> section.<br />
			<br />
			After the package is applied you are ready to go. Click on Button/Menu Link to view the gallery.
			The first thing you need to do is create a new category for your images.
			<br />
			I would also check that the gallery has read and write permissions to the gallery folder. This is needed in order to upload pictures to your website.<br />
			For an IIS server you will need to set the gallery folder with permissions for the Internet Guest Account with having read, write, and modify permissions. Check out this <a href="http://www.smfhacks.com/smfgallery/help/guestaccount.PNG" target="blank">image</a>.<br />
			<br />
			Finally, the last thing you need to check is the membergroup permissions for the gallery. This will be discussed in the <a href="#permissions">Permission Setup</a> section.<br />
			<br />


			<a name="permissions"><b>Permission Setup:</b></a><br /><br />
			SMF Gallery has many built in permissions to help control what membergroup can do a certain action<br>
			<br />
			Permissions
			<ul>
				<li>View SMF Gallery</li>
				<li>Add Picture</li>
				<li>Bulk Uploads (Pro Edition)</li>
				<li>Edit own Picture</li>
				<li>Delete own Picture</li>
				<li>Rate Picture (Pro Edition)</li>
				<li>Leave Comments</li>
				<li>Edit own Comment (Pro Edition)</li>
				<li>Report Pictures/Comments</li>
				<li>Auto Approve Comments (Pro Edition)</li>
				<li>Auto Approve Pictures</li>
				<li>Personal Gallery (Pro Edition)</li>
				<li>Manage Gallery</li>
			</ul>
			<br />
			View SMF Gallery permission allows the user to view the gallery and images.<br />
			<br />
			Add Picture permission allows the user to add pictures to a gallery<br />

			<br />
			Bulk Uploads (Pro Edition) Allows the user to upload multiple pictures at one time though the bulk upload form<br />
			<br />
			Edit own Picture permission allows the user to edit their own pictures that they have uploaded to the site. <br />
			If they do not have auto approve image permission then their picture will be unapproved till it is approved by an admin.<br />
			<br />
			Delete own Picture permission allows the user to delete their own pictures.<br />
			<br />
			Rate Picture (Pro Edition) allows a user to rate a picture on a scale of 1 to 5 <br />
			<br />
			Leave Comments permission allows the users to leave comments on a picture if the allow comments on the picture is set.<br />
			<br />
			Edit own Comment (Pro Edition) allows a user to edit their own comments<br />
			<br />
			Report Pictures/Comments permission allows a user to report a bad picture and if you have the pro edition report comments as well.<br />
			<br />
			Auto Approve Comments (Pro Edition) if given allows a persons comments not needed to be approved.<br />
			<br />
			Auto Approve Pictures permission allows all people in that membergroup to have their pictures autoapproved and will instantly appear in the gallery.<br />
			<br />
			Personal Gallery (Pro Edition) if a user is allowed to have a personal gallery of their own.<br />
			<br />
			Manage Gallery permission should only be given to admins or people you trust to manage the gallery.<br />
			With manage gallery they can add and delete categories, delete pictures, approve and unapprove pictures, and delete user comments.<br />
			<br />
			<br />
			<i>Changing permissions in SMF</i>
			To change permissions for a group in SMF go to your admin section on your forum.<br />
			Then click on Edit Permissions.<br />
			For each group you will need add the permissions that they need. You can do this by clicking <a href="http://www.smfhacks.com/smfgallery/help/modifypermissions.PNG" target="blank">modify</a><br />
			Then checking the gallery permissions that the membergroup needs.<br />
			<img src="http://www.smfhacks.com/smfgallery/help/permissions.PNG" />
			<br />
			<br />
			<a name="settings"><b>Settings Information:</b></a><br /><br />
			SMF Gallery comes with options to help configure your forum<br /><br />
			Settings:<br />
			<i>Max allowed image height</i> - The max height of an image allowed in pixels<br />
			<i>Max allowed image width</i> - The max width of an image allowed in pixels<br />
			<i>Max image filesize</i> - The biggest image that is able to be uploaded in bytes<br />
			<i>Gallery Path</i> - Path on the server to the gallery image files<br />
			<i>Gallery Url</i> - Web address of the gallery image files<br />
			<i>Images per page (Pro Edition)</i> - Number of images per page on a gallery listing<br />
			<i>Max thumbnail width (Pro Edition)</i> - The max width of a thumbnail image<br />
			<i>Max thumbnail height: (Pro Edition)</i> - The max height of a thumbnail image<br />
			<i>Max display image width (Pro Edition)</i><br />
			<i>Max display image height: (Pro Edition)</i><br />
			<i>Max category width (Pro Edition)</i> - The max width of a category image<br />
			<i>Max category height: (Pro Edition)</i> - The max height of a category image<br />
			<i>Resize Images if too large (Pro Edition)</i> - Auto resizes the picture if it is larger than the limits<br />
			<i>Counts child categories picture totals (Pro Edition)</i><br />
			<i>Display who is viewing a picture</i> - Shows which members or number of guests viewing a picture or a gallery<br />
			<i>Display newest comments first (Pro Edition)</i> - The order in which comments are displayed. If checked newest comments are first.<br />
			<i>Show pictures ratings (Pro Edition)</i> - Shows the pictures rating when you view a picture<br />
			<i>Enable multiple folders for picture storage (Pro Edition)</i><br />
			<i>Disable highslide javascript functions on image display (Pro Edition)</i><br />
			<i>Show top rated pictures on the main page (Pro Edition)</i><br />
			<i>Show the most recent images on the main page (Pro Edition)</i><br />
			<i>Show the most viewed images on the main page (Pro Edition)</i><br />
			<i>Show the most commented images on the main page (Pro Edition)</i><br />
			<i>Show the index blocks on top of gallery (Pro Edition)</i><br />
			<i>Show user gallery category on gallery index (Pro Edition)</i><br />
			<i>Allow the user to toggle if comments can be shown or a picture or not.</i><br />
			Thumbnail Settings:<br />
			<i>Show total views (Pro Edition)</i><br />
			<i>Show filesize (Pro Edition)</i><br />
			<i>Show date (Pro Edition)</i><br />
			<i>Show comment total (Pro Edition)</i><br />
			<i>Show username (Pro Edition)</i><br />
			<i>Show rating (Pro Edition)</i><br />
			Image Display Settings:<br />
			<i>Show image height and size (Pro Edition)</i><br />
			<i>Show previous and next links (Pro Edition)</i><br />
			<i>Show description (Pro Edition)</i><br />
			<i>Show title (Pro Edition)</i><br />
			<i>Show views (Pro Edition)</i><br />
			<i>Show posted by (Pro Edition)</i><br />
			<i>Show date (Pro Edition)</i><br />
			<i>Show filesize (Pro Edition)</i><br />
			<i>Show rating (Pro Edition)</i><br />
			<i>Show Keywords (Pro Edition)</i><br />

			Watermark Settings:<br />
			<i>Watermark Enabled (Pro Edition)</i> - wether watermarking is enabled or not<br />
			<i>Watermark Image path (Pro Edition)</i> - file path on the your webhost to where the watermark image is<br />
			<i>Watermark Image Percent (Pro Edition)</i> - how much percent to make it transparent<br />
			<i>Watermark Text (Pro Edition)</i> - text to show for the watermark<br />
			<i>Watermark Text Color (Pro Edition)</i> - text color of the watermark text<br />
			<i>Watermark Vertical Alignment (Pro Edition)</i><br />
			<i>Watermark Horizontal Alignment (Pro Edition)</i><br />


			<br />
			<a name="customtheme"><b>Custom Themes:</b></a><br /><br />
			If you are using a custom theme other than the default that SMF is using then the link/button image for the gallery will not appear.<br />
			Be <b>warned you should create a backup of your index.template.php</b> of the theme you are editing before you make any changes to the file.<br />
			For editing themes you should be sort of familiar with php and html. I also suggest to have a text editor with syntax highlighting so you can find mistakes such as ZendStudio.<br /><br />
			In order to add a button for a custom theme you will need to edit the index.template.php of your custom theme.<br />


			For Pro Edition customers I have some button images for certain SMF themes that you can use in the customers only Add On board in the forums.<br />
			<br />
			<a name="languages"><b>Other Languages:</b></a><br /><br />
			For using languages other than English the first thing to do is check the SMF Gallery forums and see if someone has translated SMF Gallery to your language already.<br />
			If not there are three files that will be need to be translated, these files are located in your themes languages folder.<br />
			Gallery.english.php or Gallery.english-utf8.php if you are using a UTF based language.<br />
			To translate just open up the file and replace all the text inside the single quotes.<br />
			$txt['gallery_something'] = 'REPLACETEXTHERE';<br />
			And then save the file as your SMF language file name<br />
			For example if you were using Spanish as your language.<br />
			You would save your changes as Gallery.spanish.php or Gallery.spanish-utf8.php if you have a UTF enabled forum.<br />
			<br />
			Next, you will need to translate modificiations.english.php or modifications.spanish-utf8.php <br />
			To translate just open up the file and replace all the text inside the single quotes.<br />
			$txt['gallery_something'] = 'REPLACETEXTHERE';<br />
			And then save the file as your SMF language file name<br />
			For example if you were using Spanish as your language.<br />
			You would save your changes as modifications.spanish.php or modifications.spanish-utf8.php if you have a UTF enabled forum.<br />
			You only have to worry about the UTF files if you are running SMF 1.1.x or higher and have UTF enabled.<br />
			<br />
			Last, you need to translate Who.english.php find $txt['whoall_gallery'] and translate and place that in Who.yourlanguage.php
			You will now have all the language strings that SMF Gallery needs translated

			</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><hr />
			<b>Copyright SMFHacks.com</b></td>
		</tr>
	</table>


</body>

</html>