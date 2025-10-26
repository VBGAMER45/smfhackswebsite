<?php
$ssi_ban = true;
require(dirname(__FILE__) . '/SSI.php');

$forumurl = "";

if (isset($_REQUEST['forumurl']))
{
	$forumurl = htmlspecialchars(base64_decode($_REQUEST['forumurl']),ENT_QUOTES);
}

global $context;

$context['page_title_html_safe'] = 'SMFHacks.com - Copyright Removal for Modifications. Purchase copyright removal for modifications at SMFHacks.com helps keep visitors on your website.';
$context['meta_keywords'] = 'copyright,removal,branding,branding free';
$context['page_title'] = 'SMFHacks.com - Copyright Removal for Modifications';


     				$modname = (int) $_REQUEST['modname'];
     				$result = $smcFunc['db_query']('', "
			SELECT ID_MOD, modname, copyrightprice FROM {db_prefix}modtracker_mods
			WHERE ID_MOD = $modname limit 1
			");
     	$row = $smcFunc['db_fetch_assoc']($result);

     	if (empty($row['ID_MOD']))
     		die("No Mod selected");


     		$smcFunc['db_free_result']($result);

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
     		<?php


     		?>


			<div align="center">
			     		<br />
     		<b>Copyright removal for <?php echo $row['modname']; ?></b>

     		<table border="0">
     			<tr>
     				<td>
     				<?php


     			echo '
     			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick" />
				<input type="hidden" name="notify_url" value="https://www.smfhacks.com/copyright-ipn.php" />
				<input type="hidden" name="business" value="sales@visualbasiczone.com" />
				<input type="hidden" name="item_name" value="', $row['modname'],' Copyright Link Removal" />
				<input type="hidden" name="item_number" value="9000" />
				<input type="hidden" name="amount" value="', $row['copyrightprice'],'.00" />
				<input type="hidden" name="no_shipping" value="2" />
				<input type="hidden" name="return" value="https://www.smfhacks.com/copyright_removal_thanks.php" />
				<input type="hidden" name="no_note" value="1" />
				<input type="hidden" name="currency_code" value="USD" />
				<input type="hidden" name="bn" value="PP-BuyNowBF" />
				<input type="hidden" name="custom" value="' . $user_info['id'] . '|' . $modname . '" />
				<table><tr><td>
				<input type="hidden" name="on0" value="Forum Url">
				</td><td>';

     			if (empty($forumurl))
     				echo 'Forum Url<br /><input type="text" name="os0" maxlength="200" size="50" />
     				<br /><span class="smalltext">Example: <i>https://www.mysite.com/forum/</i></span>';
     			else
     				echo '<input type="hidden" name="os0" value="' . $forumurl . '" />';

     			echo '
				</td></tr>

				</table>

				<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but23.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!" />
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				</form>';

				?>
     				</td>
     			</tr>

     		</table>



<br /><br />

     		</div>

     		</td>

     	</tr>


     </table>
<?php
template_footer();
?>