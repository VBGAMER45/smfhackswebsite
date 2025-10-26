<?php
/*
Awesome Post Ratings
Version 1.0
by:vbgamer45
http://www.smfhacks.com

License Information:
Links to http://www.smfhacks.com must remain unless
branding free option is purchased.
*/

function template_settings()
{
	global $scripturl, $modSettings, $txt, $currentVersion;

echo '
<div class="cat_bar">
		<h3 class="catbg">
        ', $txt['awepost_txt_settings'], '
        </h3>
  </div> 

	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
',$txt['awepost_txt_yourversion'] , $currentVersion, '&nbsp;',$txt['awepost_txt_latestversion'],'<span id="lastver" name="lastver"></span>
			<br />
			<form method="post" action="' . $scripturl . '?action=admin;area=awesome;sa=adminset2">
				<input type="checkbox" name="apr_enabled" ' . ($modSettings['apr_enabled'] ? ' checked="checked" ' : '') . ' />' . $txt['apr_enabled'] . '<br />
				<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4">
				<tr><td width="30%">' . $txt['apr_path'] . '</td><td><input type="text" name="apr_path" value="' .  $modSettings['apr_path'] . '" size="50" /></td></tr>
				<tr><td width="30%">' . $txt['apr_url'] . '</td><td><input type="text" name="apr_url" value="' .  $modSettings['apr_url'] . '" size="50" /></td></tr>

				</table>';

				if (!is_writable($modSettings['apr_path']))
					echo '<font color="#FF0000"><b>' . $$txt['apr_write_error']  . $modSettings['apr_path'] . '</b></font>';

				echo '

				<input type="submit" name="savesettings" value="' . $txt['awepost_txt_savesettings'] . '" />
			</form>


			<script language="JavaScript" type="text/javascript" src="http://www.smfhacks.com/versions/awe_version.js?t=' . time() . '"></script>
			<script language="JavaScript" type="text/javascript">

			function AwePostCurrentVersion()
			{
				if (!window.aweVersion)
					return;

				storespan = document.getElementById("lastver");

				if (window.aweVersion != "' . $currentVersion . '")
				{
					setInnerHTML(storespan, "<b><font color=\"red\">" + window.aweVersion + "</font>&nbsp;' . $txt['awepost_txt_version_outofdate'] . '</b>");
				}
				else
				{
					setInnerHTML(storespan, "' . $currentVersion . '")
				}
			}

			//
			AwePostCurrentVersion();

			</script>

			</td>
		</tr>
</table>
';
}

function template_ratingstypelist()
{
	global $scripturl, $txt, $context, $modSettings;
	
echo '	
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', $txt['awepost_ratingstypelist'], '
        </h3>
  </div>
<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
			<form method="post" action="', $scripturl, '?action=admin;area=awesome;sa=bulkactions" accept-charset="', $context['character_set'], '">
			<table cellspacing="0" align="center" cellpadding="4" class="tborder">
				<tr class="titlebg">
					<td>',$txt['awe_text_title'],'</td>
					<td>',$txt['awe_text_icon'],'</td>
					<td>',$txt['awe_text_enabled'],'</td>
					<td>',$txt['awe_text_orderpos'],'</td>
					<td>',$txt['awe_text_options'],'</td>
					
				</tr>
				';

                $styleClass = 'windowbg';
				foreach($context['awe_ratingtypeslist'] as $row)
				{
					echo '<tr class="' . $styleClass  . '">';

					echo '<td><a href="' . $scripturl . '?action=admin;area=awesome;sa=edit&id=' . $row['id_ratetype'] . '">', $row['title'], '</a></td>';
					echo '<td><img src="' . $modSettings['apr_url'] . $row['icon'] . '" alt="" /></td>';
					
					echo '<td>', ($row['enabled'] ? $txt['awe_text_yes'] : $txt['awe_text_no']), '</td>';
					echo '<td><input type="text" name="roworder[', $row['id_ratetype'], ']" value="', $row['roworder'], '" /></td>';
					echo '<td><a href="' . $scripturl . '?action=admin;area=awesome;sa=edit&id=' . $row['id_ratetype'] . '">', $txt['awe_text_edit'], '</a></td>';
					echo '</tr>';
                    
                    if ($styleClass == 'windowbg')
            		  $styleClass = 'windowbg2';
            		else 
            		  $styleClass = 'windowbg';
                    
				}


			echo '
				<tr>
					<td colspan="5" align="center">
						<a href="' . $scripturl . '?action=admin;area=awesome;sa=add">' . $txt['awepost_addratingtype'] . '</a>
					</td>
				</tr>
			
				</table>
				<br />
				<div align="center"><input type="submit" value="' . $txt['awe_text_updateorder'] . '" /></div>
				</form>

			</td>
		</tr>

</table>';

	
}

function template_addratingtype()
{
	global $scripturl, $txt, $context, $modSettings;
	
	echo '
     <div class="cat_bar">
		<h3 class="catbg centertext">
        ',  $txt['awepost_addratingtype'], '
        </h3>
  </div>
<form method="post" enctype="multipart/form-data" name="catform" id="catform" action="' . $scripturl . '?action=admin;area=awesome;sa=add2" accept-charset="', $context['character_set'], '">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="28%" class="windowbg2" align="right"><b>' . $txt['awe_text_title'] .'</b>&nbsp;</td>
    <td width="72%" class="windowbg2"><input type="text" name="title" size="64" maxlength="100" /></td>
  </tr>
   <tr>
    <td width="28%" class="windowbg2" align="right"><b>' . $txt['awe_text_icon'] . '</b>&nbsp;</td>
    <td width="72%" class="windowbg2">';

		// Warn the user if the category image path is not writable
		if (!is_writable($modSettings['apr_path']))
			echo '<font color="#FF0000"><b>' . $txt['apr_write_error']  . $modSettings['apr_path'] . '</b></font>';

echo '
    <input type="file" size="48" name="picture" /><br />' . $txt['awepost_txt_imagesizerecommend'] . '</td>
  </tr>
  <tr>
    <td width="28%" class="windowbg2" align="right"><b>' .   $txt['awe_text_enabled'] . '</b>&nbsp;</td>
    <td width="72%" class="windowbg2"><input type="checkbox" name="enabled" checked="checked" /></td>
  </tr>

  <tr>
    <td width="28%" class="windowbg2" align="right"><b>' . $txt['awe_text_orderpos'] . '</b>&nbsp;</td>
    <td width="72%" class="windowbg2"><input type="text" name="roworder" size="10" maxlength="10" value="' . $context['awe_maxid'] . '" /></td>
  </tr>
  <tr>
    <td width="28%" colspan="2"  align="center" class="windowbg2">
    	<input type="submit" value="', $txt['awepost_addratingtype'], '" name="submit" />
	</td>
  </tr>
</table>
</form>';
	
}

function template_editratingtype()
{
	global $scripturl, $txt, $context, $modSettings;
	
	echo '
     <div class="cat_bar">
		<h3 class="catbg centertext">
        ',  $txt['awepost_editratingtype'], '
        </h3>
  </div>
<form method="post" enctype="multipart/form-data" name="catform" id="catform" action="' . $scripturl . '?action=admin;area=awesome;sa=edit2" accept-charset="', $context['character_set'], '">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="28%" class="windowbg2" align="right"><b>' . $txt['awe_text_title'] .'</b>&nbsp;</td>
    <td width="72%" class="windowbg2"><input type="text" name="title" size="64" maxlength="100" value="' . $context['awe_ratingtype']['title'] . '" /></td>
  </tr>
   <tr>
    <td width="28%" class="windowbg2" align="right"><b>' . $txt['awe_text_icon'] . '</b>&nbsp;</td>
    <td width="72%" class="windowbg2">';
    
    
    echo '<img src="' . $modSettings['apr_url'] . $context['awe_ratingtype']['icon'] . '" />&nbsp;';

		// Warn the user if the category image path is not writable
		if (!is_writable($modSettings['apr_path']))
			echo '<font color="#FF0000"><b>' . $txt['apr_write_error']  . $modSettings['apr_path'] . '</b></font>';

echo '
    <input type="file" size="48" name="picture" /><br />' . $txt['awepost_txt_imagesizerecommend'] . '</td>
  </tr>
  <tr>
    <td width="28%" class="windowbg2" align="right"><b>' .   $txt['awe_text_enabled'] . '</b>&nbsp;</td>
    <td width="72%" class="windowbg2"><input type="checkbox" name="enabled" ' . ($context['awe_ratingtype']['enabled'] == 1 ? ' checked="checked" ' : '') .' /></td>
  </tr>

  <tr>
    <td width="28%" class="windowbg2" align="right"><b>' . $txt['awe_text_orderpos'] . '</b>&nbsp;</td>
    <td width="72%" class="windowbg2"><input type="text" name="roworder" size="10" maxlength="10" value="' . $context['awe_ratingtype']['roworder'] . '" /></td>
  </tr>
  <tr>
    <td width="28%" colspan="2"  align="center" class="windowbg2">
    	<input type="hidden" name="id" value="' . $context['awe_ratingtype']['id_ratetype'] . '" />
    	<input type="submit" value="', $txt['awepost_editratingtype'], '" name="submit" />
	</td>
  </tr>
</table>
</form>';
}

function template_viewratings()
{
	global $scripturl, $txt, $context, $modSettings;
	
echo '	
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', $txt['awepost_text_viewratings'], '
        </h3>
  </div>
<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
			<table cellspacing="0" align="center" cellpadding="4" class="tborder">
				';

                $styleClass = 'windowbg';
				foreach($context['viewratingslist'] as $row)
				{
					echo '<tr class="' . $styleClass  . '">';

					echo '<td><img src="' . $modSettings['apr_url'] . $row['icon'] . '" />&nbsp;', $row['title'], '</td>';

					if (empty($row['real_name']))
					{
						echo '<td>',$txt['awe_text_guest'],'</td>';
					}
					else
					{
						echo '<td><a href="',$scripturl,'?action=profile;u=', $row['ID_MEMBER'], '">', $row['real_name'], '</a></td>';
					}

					echo '<td>', $row['logdate'], '</td>';
					echo '</tr>';
                    
                    if ($styleClass == 'windowbg')
            		  $styleClass = 'windowbg2';
            		else 
            		  $styleClass = 'windowbg';
                    
				}


			echo '
					</td>
				</tr>
				</table>

			</td>
		</tr>

</table>';

	
}

?>