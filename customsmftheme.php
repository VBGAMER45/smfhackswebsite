<?php
die("disabled no longer offered");
$ssi_ban = true;
require(dirname(__FILE__) . '/SSI.php');


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Custom SMF Theme Development/Design - Let us build a custom theme for your SMF forum</title>
		<meta name="description" content="Custom SMF Theme Development/Design - Let us build a custom theme for your SMF forum" />
		<meta name="keywords" content="custom theme,smftheme,design smf, smf design, custom smf theme, build smf theme, buy smf theme" />
		<?php

	echo '
<link rel="stylesheet" type="text/css" href="https://www.smfhacks.com/Themes/babylon/style.css?rc3" />		<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/script.js"></script>
		<style type="text/css">
			body
			{
				margin: 1ex;
			}';

	if ($context['browser']['needs_size_fix'])
		echo '
			@import(', $settings['default_theme_url'], '/fonts-compat.css);';

	echo '
		</style>';

?>
	</head>
	<body>
	<div id="headerarea" style="padding: 12px 30px 4px 30px;">
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="position: relative;">
			<tr>
				<td colspan="2" valign="bottom" align="center" style="padding: 5px; white-space: nowrap;">

					<span style="font-family: Georgia, sans-serif; font-size: xx-large;">SMFHacks.com</span>
				</td>
			</tr>
		</table>
		<?php
		echo '<div align="center">';
		ssi_menubar();
		flush();
		echo '</div>';
		?>
	</div>
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
     			<h3 align="center"><span itemprop="name">Custom SMF Theme</span></h3>
				<br />
<span itemprop="description">
<b>With this package you get:</b><br />
<b>Features:</b><br />
<ul>
<li>A custom theme coded and designed according to your needs</li>
<li>Free integration of all SMFHacks mods</li>
<li>Free installation of the theme</li>
<li>Various features</li>
</ul>
<b>Features available:</b><br />
<ul>
<li>Social media integration</li>
<li>Advanced Post Profile, with 3 positions to choose from</li>
<li>Custom layout on board</li>
<li>Advanced forum layout</li>
<li>jQuery plugins integration (if possible)</li>
</ul>
<b>Estimated duration:</b><br />
<br />
Making a custom theme should take 7 days. Please note that it depends on amount of work. (For example, dark themes usually take longer to code)<br />
<br />
<b>Portfolio:</b><br />
<a href="https://www.smfhacks.com/custom/ozb.jpg" target="_blank"><img src="https://www.smfhacks.com/custom/small_ozb.jpg" alt="Site 1" /></a>
<a href="https://www.smfhacks.com/custom/minecraft.jpg" target="_blank"><img src="https://www.smfhacks.com/custom/small_minecraft.jpg" alt="Site 2" /></a>
<a href="https://www.smfhacks.com/custom/view-1024x809.png" target="_blank"><img src="https://www.smfhacks.com/custom/small_view-1024x809.png" alt="Site 3" /></a>
<a href="https://www.smfhacks.com/custom/invivo2.png" target="_blank"><img src="https://www.smfhacks.com/custom/small_invivo2.png" alt="Site 4" /></a>


</span>


				<br />
				<b>Requires</b><br />
				SMF 2.0.x<br />
				<b>Order:</b><br />
				<span itemprop="offers" itemscope itemtype="http://schema.org/Offer">

				Price $<span itemprop="price">99</span><br />
				<meta itemprop="priceCurrency" content="USD" />

				</span>




				<div align="center">

<b>No longer offred</b>


				</form>


	<br />



				<br />
				<img src="payment.gif" alt="Payment Choices" border="1" /><br />

				</div>

				<br />



				<br /><br />
     		</td>
     		<td width="20%" class="windowbg2" valign="top">
     				<br /><br /><div align="center">
					<?php



					?>


					</div>

     		</td>
     	</tr>


     </table>
     </div>
	<div align="center" class="catbg"><span class="smalltext">Copyright SMFHacks.com <?php echo date("Y"); ?></span></div>

	</body>
</html>