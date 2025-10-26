<?php
/*
GDPR Helper
Version 1.0
by:vbgamer45
https://www.smfhacks.com
Copyright 2018 SMFHacks.com

############################################
License Information:

Links to https://www.smfhacks.com must remain unless
branding free option is purchased.
#############################################

*/

function template_privacypolicy_admin()
{
	global $scripturl, $modSettings, $txt, $context, $settings, $boarddir;

	// Load the spell checker?
	if ($context['show_spellchecking'])
		echo '
									<script language="JavaScript" type="text/javascript" src="' . $settings['default_theme_url'] . '/scripts/spellcheck.js"></script>';


	echo '
<div class="cat_bar"><h3 class="catbg">', $txt['gdpr_privacypolicy'], '        </h3></div>';


		// Is there more than one language to choose from?
	if (count($context['editable_privacypolicys']) > 1)
	{
	    	echo '
		<div class="windowbg2" id="registration_agreement">
			<span class="topslice"><span></span></span>
			<div class="content">';
		echo '
				<div class="information">
					<form action="', $scripturl, '?action=admin;area=gdpr;sa=privacyadmin" id="change_reg" method="post" accept-charset="', $context['character_set'], '" style="display: inline;">
						<strong>', $txt['admin_agreement_select_language'], ':</strong>&nbsp;
						<select name="agree_lang" onchange="document.getElementById(\'change_reg\').submit();" tabindex="', $context['tabindex']++, '">';

		foreach ($context['editable_privacypolicys'] as $file => $name)
			echo '
							<option value="', $file, '" ', $context['current_privacypolicy'] == $file ? 'selected="selected"' : '', '>', $name, '</option>';

		echo '
						</select>
						<div class="righttext">
							<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '" />
							<input type="submit" name="change" value="', $txt['admin_agreement_select_language_change'], '" tabindex="', $context['tabindex']++, '" class="button_submit" />
						</div>
					</form>
				</div>';

		echo '</div></div>';
	}



	echo '
    <form method="post" name="picform" id="picform" action="' . $scripturl . '?action=admin;area=gdpr&sa=privacyadmin2" onsubmit="submitonce(this);">
<table border="0" cellpadding="0" cellspacing="0" width="100%">';

	// Check if cache folder is writable
	if (!is_writable($boarddir . "/privacypolicy.txt"))
	{
		echo '<tr>
	    <td width="50%" colspan="2"  align="center" class="windowbg2">
	    ' . $txt['gdpr_err_writable_policy'] . ' ' . $boarddir . '/privacypolicy.txt
	    </td>
	    </tr>';

	}

	echo '
  <tr class="windowbg2">
  	<td colspan="2"><table width="100%">
   ';

 	if (!function_exists('getLanguages'))
	{
		// Showing BBC?
		if ($context['show_bbc'])
		{
			echo '
								<tr class="windowbg2">

									<td colspan="2" align="center">
										', template_control_richedit($context['post_box_name'], 'bbc'), '
									</td>
								</tr>';
		}

		// What about smileys?
		if (!empty($context['smileys']['postform']))
			echo '
								<tr class="windowbg2">

									<td colspan="2" align="center">
										', template_control_richedit($context['post_box_name'], 'smileys'), '
									</td>
								</tr>';

		// Show BBC buttons, smileys and textbox.
		echo '
								<tr class="windowbg2">

									<td colspan="2" align="center">
										', template_control_richedit($context['post_box_name'], 'message'), '
									</td>
								</tr>';
	}
	else
	{
		echo '
								<tr class="windowbg2">
		<td>';
			// Showing BBC?
		if ($context['show_bbc'])
		{
			echo '
					<div id="bbcBox_message"></div>';
		}

		// What about smileys?
		if (!empty($context['smileys']['postform']) || !empty($context['smileys']['popup']))
			echo '
					<div id="smileyBox_message"></div>';

		// Show BBC buttons, smileys and textbox.
		echo '
					', template_control_richedit($context['post_box_name'], 'smileyBox_message', 'bbcBox_message');


		echo '</td></tr>';
	}




		echo '
			</table>';

     	if ($context['show_spellchecking'])
     		echo '
     									<br /><input type="button" value="', $txt['spell_check'], '" onclick="spellCheck(\'picform\', \'privacypolicy\');" />';




echo '
  <tr class="windowbg2">
    <td width="100%" colspan="2"  align="center" class="windowbg2">
    <input type="hidden" name="agree_lang" value="', $context['current_privacypolicy'], '" />
    <input type="submit" value="' . $txt['gdpr_txt_update'] . '" name="submit" />
	</div>
    </td>
  </tr>
</table>

		</form>
';

	if ($context['show_spellchecking'])
			echo '<form action="', $scripturl, '?action=spellcheck" method="post" accept-charset="', $context['character_set'], '" name="spell_form" id="spell_form" target="spellWindow"><input type="hidden" name="spellstring" value="" /></form>';

}


function template_gdpr_settings()
{
	global $scripturl, $modSettings, $txt, $currentVersion, $context;

echo '
<div class="cat_bar">
		<h3 class="catbg">
        ', $txt['gdpr_text_settings'], '
        </h3>
</div>
	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
			    ',$txt['gdpr_txt_yourversion'] , $currentVersion, '&nbsp;',$txt['gdpr_txt_latestversion'],'<span id="lastgdpr" name="lastgdpr"></span>';



			$isSecure = false;
			if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
			    $isSecure = true;
			}
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
			    $isSecure = true;
			}
			$REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';

			// Warn the user if they are category image path is not writable
			if ($isSecure == false)
				echo '<br /><font color="#FF0000"><b>' . $txt['gdpr_err_no_ssl']. '</b></font><br />';

            // Fix delete account permission warning
			if ($context['gdpr_delete_acct_total'] > 0)
            {
                $message = $txt['gdpr_warning_nodeleteaccount'] ;

                $message = str_replace("%link",$scripturl . '?action=admin;area=gdpr;sa=fixdeleteacct',$message);

                echo '<br /><b>' . $message . '</b>';
            }


			    echo '
				<form method="post" action="' . $scripturl . '?action=admin;area=gdpr;sa=settings2">

				<input type="checkbox" name="gdpr_enable_privacy_policy" ' . ($modSettings['gdpr_enable_privacy_policy'] ? ' checked="checked" ' : '') . ' />' . $txt['gdpr_enable_privacy_policy'] . '<br />
				<input type="checkbox" name="gdpr_showprivacypolicylink" ' . ($modSettings['gdpr_showprivacypolicylink'] ? ' checked="checked" ' : '') . ' />' . $txt['gdpr_showprivacypolicylink'] . '<br />
				
				
		
				
				<input type="checkbox" name="gdpr_force_privacy_agree" ' . ($modSettings['gdpr_force_privacy_agree'] ? ' checked="checked" ' : '') . ' />' . $txt['gdpr_force_privacy_agree'] . '<br />
				<input type="checkbox" name="gdpr_force_agreement_agree" ' . ($modSettings['gdpr_force_agreement_agree'] ? ' checked="checked" ' : '') . ' />' . $txt['gdpr_force_agreement_agree'] . '<br />
				<input type="checkbox" name="gdpr_clear_memberinfo" ' . ($modSettings['gdpr_clear_memberinfo'] ? ' checked="checked" ' : '') . ' />' . $txt['gdpr_clear_memberinfo'] . '<br />
				<input type="checkbox" name="gdpr_allow_export_userdata" ' . ($modSettings['gdpr_allow_export_userdata'] ? ' checked="checked" ' : '') . ' />' . $txt['gdpr_allow_export_userdata'] . '<br />
                ' . $txt['gdpr_messageexport_limit'] . ' <input type="text" name="gdpr_messageexport_limit" value="' . $modSettings['gdpr_messageexport_limit'] . '" /><br />




                <br />
				<input type="submit" name="savesettings" value="' . $txt['gdpr_save_settings']. '" />
			</form>

			</td>
		</tr>

</table>
		<script language="JavaScript" type="text/javascript" src="https://www.smfhacks.com/versions/gdpr.js?t=' . time() . '"></script>
			<script language="JavaScript" type="text/javascript">

              function gdprCurrentVersion()
			{
				if (!window.gdprVersion)
					return;

				gdprspan = document.getElementById("lastgdpr");

				if (window.gdprVersion != "' . $currentVersion . '")
				{
					setInnerHTML(gdprspan, "<b><font color=\"red\">" + window.gdprVersion + "</font>&nbsp;' . $txt['gdpr_txt_version_outofdate'] . '</b>");
				}
				else
				{
					setInnerHTML(gdprspan, "' . $currentVersion . '");
				}
			}

			// Override on the onload function
			window.onload = function ()
			{
				gdprCurrentVersion();
			}
			</script>
';

}

function template_view_privacypolicy()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
		<form action="', $scripturl, '?action=gdpr;sa=privacypolicy;save=1" method="post" accept-charset="', $context['character_set'], '" id="registration">
			<div class="cat_bar">
				<h3 class="catbg">', $txt['gdpr_privacypolicy'], '</h3>
			</div>
			<span class="upperframe"><span></span></span>
			<div class="roundframe">
				<p>', parse_bbc($context['privacy_policy_data']),'</p>
			</div>
			<span class="lowerframe"><span></span></span>';

    if (isset($_REQUEST['reagree']))
    {
        echo '
			<div id="confirm_buttons">';

        echo '
				<input type="submit" name="accept_view_privacypolicy" value="', $txt['gdpr_policy_agree'], '" class="button_submit" />

				<input type="submit" name="decline" value="', $txt['gdpr_txt_privacy_decline'], '" class="button_submit"  /><br />
                ' . $txt['gdpr_modify_profile'] . '';

        echo '
			</div>';
    }

			echo '
			<input type="hidden" name="step" value="1" />
		</form>';

}

function template_view_registrationagreement()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	echo '
		<form action="', $scripturl, '?action=gdpr;sa=registeragreement;save=1" method="post" accept-charset="', $context['character_set'], '" id="registration">
			<div class="cat_bar">
				<h3 class="catbg">', $txt['gdpr_registration_agreement'], '</h3>
			</div>
			<span class="upperframe"><span></span></span>
			<div class="roundframe">
				<p>', parse_bbc($context['registrationagreement_data']),'</p>
			</div>
			<span class="lowerframe"><span></span></span>';

    if (isset($_REQUEST['reagree']))
    {
        echo '
			<div id="confirm_buttons">';

        echo '
				<input type="submit" name="accept_view_registeragreement" value="', $txt['gdpr_agreement_agree'], '" class="button_submit" />
				<input type="submit" name="decline" value="', $txt['gdpr_agreement_decline'], '" class="button_submit"   /><br />
                ' . $txt['gdpr_modify_profile'] . '';

        echo '
			</div>';
    }

			echo '
			<input type="hidden" name="step" value="1" />
		</form>';

}