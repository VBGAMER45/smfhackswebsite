<?php

require(dirname(__FILE__) . '/SSI.php');

if (isset($_REQUEST['mod']))
	$mod = (int) $_REQUEST['mod'];
else
	$mod = 0;

if (isset($_REQUEST['board']))
$board = htmlspecialchars($_REQUEST['board'],ENT_QUOTES);
else
	$board = "";

global $context;

$context['page_title_html_safe'] = 'SMFHacks.com - Copyright Removal for Modifications. Purchase copyright removal for modifications at SMFHacks.com helps keep visitors on your website';
$context['meta_keywords'] = 'copyright,removal,branding,branding free';
$context['page_title'] = 'SMFHacks.com - Copyright Removal for Modifications';

template_header();
?>
<div id="bodyarea" style="padding: 10px 8px 0px 8px;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
           	<td bgcolor="#6B8EAE">

           	</td>

        </tr>
     	<tr>
     		<td width="100%"  valign="top" class="windowbg2">
     		<h1 align="center">Copyright Removal for Modifications at SMFHacks.com</h1>

     		<table align="center">
     		<tr>
     		<td>
     		Information:<br />
				Allows you to remove the copyright html links to (https://www.smfhacks.com) from .template.php for the modification<br />
				Valid for a single instance/install of the modification<br />
				Copyright information must remain in the code.<br />
				Useful if you are running a business or professional site and to keep users on your forum<br />
			</td></tr>
			</table>
			</div>
			<div align="center">
			     		<br />
     		<b>Copyright removal modification select</b>
     		<form method="POST" action="copyright_removal_purchase.php">
     		<table border="0">
     			<tr>
     				<td>Modification Name:</td>
     				<td>
     				<select name="modname">
     				<?php


     				$result = $smcFunc['db_query']('', "
			SELECT ID_MOD, modname, copyrightprice FROM {db_prefix}modtracker_mods
			WHERE copyrightprice > 0
			");
     				while($row = $smcFunc['db_fetch_assoc']($result))
     				{
     					echo '<option value="', $row['ID_MOD'],'"' . ($mod == $row['ID_MOD'] ? ' selected="selected" ' : "") . '>', $row['modname'],' $', $row['copyrightprice'], '</option>';


     				}
     				$smcFunc['db_free_result']($result);

     				?>
     				</select>
     				</td>
     			</tr>
     			<tr>
     				<td colspan="2" align="center">
     				<?php

     				echo '<input type="hidden" name="forumurl" value="' . $board . '" />';

     				?>
     				<input type="submit" name="submit" value="Next Step" />
     				</td>
     			</tr>
     		</table>
     		</form>



<br /><br />

     		</div>

     		</td>

     	</tr>


     </table>
<?php
template_footer();
?>