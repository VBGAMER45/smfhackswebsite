<?php
/*
Contact Page
Version 2.0
by:vbgamer45
http://www.smfhacks.com
*/
function template_main()
{
	global $scripturl, $txt, $context;

echo '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ',  $txt['smfcontact_contact'], '
        </h3>
  </div>
<form method="post" action="', $scripturl, '?action=contact;sa=save" accept-charset="', $context['character_set'], '">
<table align="center" width="100%">
<tr>
	<td colspan="2" class="windowbg">
	<h2>Services that we can provide</h2>
SMF Upgrades from SMF 1.1.x to newer versions. And also minor updates.<br />
Conversions to SMF from other forum software<br />
Handle mod conflicts on installing modifications<br />
Fix errors that being logged by modifications<br />
Performance improvements by optimizing your SMF/Hosting environment<br />
Installing SSL and make sure your forum is https<br />
Upgrade PHP get a performance boost by switching to PHP 7.x from old versions of PHP<br />
Other troubleshooting/customizing SMF<br />
Upgrade SMF 1.1.x to PHP7+<br />
Custom programming billed by the hour.<br />
Due to lack of time: Hourly rate is <b>$300</b> USD an hour minimum <b>3</b> hours paid via Zelle or Crypto up front.
</td>
</tr>
  <tr>
    <td width="28%"  class="windowbg2"><b>',$txt['smfcontact_name'],'</b></td>
    <td width="72%"  class="windowbg2"><input type="text" name="from" size="64" /></td>
  </tr>
  <tr>
    <td width="28%"" class="windowbg2"><b>',$txt['smfcontact_subject'],'</b></td>
    <td width="72%"" class="windowbg2"><input type="text" name="subject" size="64" /></td>
  </tr>
  <tr>
    <td width="28%"  valign="top" class="windowbg2"><b>',$txt['smfcontact_body'],'</b></td>
    <td width="72%"  class="windowbg2"><textarea rows="6" name="message" cols="54"></textarea></td>
  </tr>';
	// Is visual verification enabled?
	if ($context['require_verification'])
	{



		echo '
							<tr class="windowbg2">
								<td align="right" valign="top"', !empty($context['post_error']['need_qr_verification']) ? ' style="color: red;"' : '', '>
									<b>', $txt['verification'], ':</b>
								</td>
								<td>
									', template_control_verification($context['visual_verification_id'], 'all'), '
								</td>
							</tr>';
	}


echo '
  <tr>
    <td width="28%"" class="windowbg2"><span class="gen"><b>',$txt['smfcontact_emailaddress'],'</b></span></td>
    <td width="72%"" class="windowbg2"><input type="text" name="email" size="64" /></td>
  </tr>
  <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
    <input type="text" style="display:none;" class="form-control" id="brokerage_name2" name="full_name2" value="" />
    <input type="submit" value="',$txt['smfcontact_sendemail'],'" name="submit" /></td>

  </tr>
</table>
</form>
';

	// Copyright link requird unless removal purchase is made
	echo '<br /><div align="center"><span class="smalltext">Powered by <a href="http://www.smfhacks.com" target="blank">Contact Page</a></span></div>';
}

function template_send()
{
	global $scripturl, $txt;
echo '
<div>
	<table border="0" width="80%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="titlebg">
			<td>',$txt['smfcontact_messagesent'],'</td>
		</tr>

		<tr class="windowbg">
			<td style="padding: 3ex;">
				',$txt['smfcontact_messagesent_click'],'<a href="', $scripturl, '">',$txt['smfcontact_messagesent_return'] ,'
			</td>
		</tr>
	</table>
</div>';

	// Copyright link requird unless removal purchase is made
	echo '<br /><div align="center"><span class="smalltext">Powered by <a href="http://www.smfhacks.com" target="blank">Contact Page</a> by <a href="http://www.createaforum.com" title="Forum Hosting">CreateAForum.com</a></span> </div>';
}
?>