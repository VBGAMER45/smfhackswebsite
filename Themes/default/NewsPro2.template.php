<?php
/*
Newsletter Pro
Version 3.0
by:vbgamer45
http://www.smfhacks.com
Copyright 2009-2012 SMFHacks.com

############################################
License Information:
Newsletter Pro is NOT free software.
This software may not be redistributed.

The license is good for a single instance / install on a website.
You are allowed only one active install for each license purchase.

Links to http://www.smfhacks.com must remain unless
branding free option is purchased.
#############################################
*/
function template_settings()
{
	global $txt, $context, $scripturl, $modSettings, $currentVersion;
	
	echo '<form action="', $scripturl, '?action=newspro;sa=settings2" method="post" accept-charset="', $context['character_set'], '">
		<table width="80%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td colspan="2">',$txt['newspro_settings'] ,'</td>
					</tr>
					<tr class="windowbg2">
						<td colspan="2" align="center">
						',$txt['newspro_txt_yourversion'] , $currentVersion, '&nbsp;',$txt['newspro_txt_latestversion'],'<span id="lastnewspro" name="lastnewspro"></span>
						<hr />
						<br />
						<input type="checkbox" name="newspro_set_nounsubscribe" ' . ($modSettings['newspro_set_nounsubscribe'] ? ' checked="checked" ' : '') . ' />' . $txt['newspro_set_nounsubscribe'] . '<br />
						<input type="checkbox" name="newspro_set_optinconfirmlink" ' . ($modSettings['newspro_set_optinconfirmlink'] ? ' checked="checked" ' : '') . ' />' . $txt['newspro_set_optinconfirmlink'] . '<br />

						</td>
					</tr>
					<tr class="windowbg2">
						<td colspan="2" align="center"><input type="submit" name="cmdsave" value="',$txt['newspro_save_settings'],'" /></td>
					</tr>
				</table>
						<script language="JavaScript" type="text/javascript" src="http://www.smfhacks.com/versions/newspro_version.js?t=' . time() . '"></script>
						<script language="JavaScript" type="text/javascript">
						
						function NewsProCurrentVersion()
						{
							if (!window.newsproVersion)
								return;
							
							newsprospan = document.getElementById("lastnewspro");
								
							if (window.newsproVersion != "' . $currentVersion . '")
							{
								setInnerHTML(newsprospan, "<b><font color=\"red\">" + window.newsproVersion + "</font>&nbsp;' . $txt['newspro_txt_version_outofdate'] . '</b>");
							}
							else
							{
								setInnerHTML(newsprospan, "' . $currentVersion . '")
							}
						}
						
						// Override on the onload function
						window.onload = function ()
						{
							NewsProCurrentVersion();
						}
						</script>
				
			</td>
			</tr>
		</table>
		</form>
';
	
	
	newspro_copyright();
}
function template_managelinks()
{
	global $txt, $context, $smcFunc, $scripturl;
	
echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						
						<td>',$txt['newspro_txt_linkurl'],'</td>
						<td>',$txt['newspro_txt_hits'],'</td>
						<td>',$txt['newspro_options'],'</td>
		
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];

	
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_links");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

	
				// Get the links
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_LINK,link, hits 
			  	FROM {db_prefix}newspro_links
			 
			  	ORDER BY ID_LINK DESC LIMIT $context[start],20");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					
					echo '<td><a href="' . $row['link'] . '" target="_blank">' . $row['link'] . '</a></td>';
					echo '<td>' . $row['hits'] . '</td>';
					echo '<td><a href="', $scripturl,'?action=admin;area=newspro;sa=modifylink;id=', $row['ID_LINK'], '">',$txt['newspro_txt_modifylink'],'</a></td>';

					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="3">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=managelinks', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
		
';
	

	newspro_copyright();
}

function template_newsletters_messages()
{
	global $txt, $context, $scripturl, $smcFunc;
	

	$context['newspro']['buttons_set']['addmessage'] =  array(
								'text' => 'newspro_txt_add_message',
								'url' => $scripturl . '?action=admin;area=newspro;sa=addmessage',
								'lang' => true,
								'is_selected' => true,
						);				
						
						
		echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
							<tr>
								<td style="padding-right: 1ex;" align="right" >
								<table cellpadding="0" cellspacing="0" align="left"  >
										<tr>
							', NewsPro_DoToolBarStrip($context['newspro']['buttons_set'], 'bottom'), '
								</tr>
								</table>
					</td>
							</tr>
						</table>';
	echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						
						<td>',$txt['newspro_subject'],'</td>
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];
				
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_messages
					WHERE removed = 0
					");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

				// Get all newsletter messages
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_MESSAGE, title, dateadded  
			  	FROM {db_prefix}newspro_messages 
			  	WHERE removed = 0 
			  	ORDER BY ID_MESSAGE DESC LIMIT $context[start],10");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=viewmsg;id=' . $row['ID_MESSAGE'] . '">' . $row['title'] .'</a></td>';
					
					echo '<td>',timeformat($row['dateadded']),'</td>';
					echo '<td>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=editmessage;id=' . $row['ID_MESSAGE'] . '">' . $txt['newspro_edit_link'] .'</a> 
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=deletemessage;id=' . $row['ID_MESSAGE'] . '">' . $txt['newspro_delete_link'] .'</a>
					</td>';
							
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="3">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=newsletters', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
		
';
	newspro_copyright();
}

function template_view_reports()
{
	global $txt, $context, $scripturl, $smcFunc;
	
	echo '<form action="', $scripturl, '" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						
						<td>',$txt['newspro_subject'],'</td>
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_sent'],'</td>
						<td>',$txt['newspro_views'],'</td>
						<td>',$txt['newspro_clicks'],'</td>
						<td>',$txt['newspro_optouts'],'</td>
						<td>',$txt['newspro_txt_forwards'],'</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];

	
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_newsletters");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

	
				// Get all newsletter reports
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		l.ID_LIST, n.date, n.views, n.clicks,  n.forwards, n.sent, n.optouts, n.subject, n.ID_LETTER   
			  	FROM {db_prefix}newspro_newsletters as n, {db_prefix}newspro_lists as l
			  	WHERE l.tablename = n.tablename  
			  	ORDER BY n.ID_LETTER DESC LIMIT $context[start],10");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=viewlist;id=' . $row['ID_LIST'] . '">' . $row['subject'] .'</a></td>';
					
					
					echo '<td>',timeformat($row['date']),'</td>';
					echo '<td>', $row['sent'], '</td>';
					echo '<td>', $row['views'], '</td>';
					echo '<td>', $row['clicks'], '</td>';
					echo '<td>', $row['optouts'], '</td>';
					echo '<td>', $row['forwards'], '</td>';
					
					
					echo '<td>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=deletereport;id=' . $row['ID_LETTER']. '">' . $txt['newspro_delete_link'] . '</a>
					</td>';
					
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="8">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=reports', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
		</form>
';
	
	
	newspro_copyright();
}

function template_delete_report()
{
	global $txt, $context, $scripturl;
	
		echo '<form action="' . $scripturl .  '?action=newspro;sa=deletereport2" method="post">
		<input type="hidden" name="id" value="',$context['report_id'],'" />
		<table width="50%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
				<tr><td>
	
					<table border="0" cellspacing="0" cellpadding="4" width="100%" align="center">
						<tr class="titlebg">
							<td  align="center">',$txt['newspro_delete_report'] ,'</td>
						</tr>
						<tr class="windowbg2">
						<td  align="center">
						<b>',$txt['newspro_warn_deletereport'],'</b>
						</td>
						</tr>
						<tr class="windowbg2">
							<td align="center"><input type="submit" name="cmddelete" value="',$txt['newspro_delete_report'],'" /></td>
						</tr>
					</table>
				</td>
				</tr>
			</table>
			</form>
	';
	
	newspro_copyright();
}

function template_view_list()
{
	global $txt, $context, $smcFunc, $scripturl;
	
	/*$smcFunc['db_query']('', "CREATE TABLE IF NOT EXISTS `{$temptable}` (
ID_EMAIL int(11) NOT NULL auto_increment,
ID_LETTER int(11) NOT NULL,
ID_MEMBER mediumint(8) unsigned NOT NULL default '0',
email tinytext NOT NULL,
isClicker tinyint(4) NOT NULL default '0',
isViewer tinyint(4) NOT NULL default '0',
isOptout tinyint(4) NOT NULL default '0',
PRIMARY KEY  (ID_EMAIL)) ENGINE=MyISAM ");
*/
	
$context['newspro']['buttons_set']['addemail'] =  array(
								'text' => 'newspro_txt_add_email',
								'url' => $scripturl . '?action=admin;area=newspro;sa=addemail&id=' . $context['newsletter_id'],
								'lang' => true,
								'is_selected' => true,
						);				
						
						
		echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
							<tr>
								<td style="padding-right: 1ex;" align="right" >
								<table cellpadding="0" cellspacing="0" align="left"  >
										<tr>
							', NewsPro_DoToolBarStrip($context['newspro']['buttons_set'], 'bottom'), '
								</tr>
								</table>
					</td>
							</tr>
						</table>';
	
	echo '<form action="', $scripturl, '" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td>',$txt['newspro_email_address'],'</td>
						<td>',$txt['newspro_membername'],'</td>
						<td>',$txt['newspro_is_viewer'],'</td>
						<td>',$txt['newspro_is_clicker'],'</td>
						<td>',$txt['newspro_is_optout'], '</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];

	
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM " . $context['tablename']);
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

	
				// Get all emails in the list
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		l.email, m.real_name, m.ID_MEMBER, l.isClicker,  l.isViewer, l.isOptout, l.ID_LETTER, l.ID_EMAIL  
			  	FROM (" . $context['tablename'] . "  AS l)
			  	LEFT JOIN {db_prefix}members AS m ON (l.email = m.email_address) 
			  	
			  	ORDER BY l.ID_EMAIL DESC LIMIT $context[start],20");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a></td>';
					
					if ($row['real_name'] != '')
						echo '<td><a href="' . $scripturl . '?action=profile;u=' . $row['ID_MEMBER'] . '">'  . $row['real_name'] . '</a></td>';
					else 
						echo '<td>'  . $txt['newspro_no_member'] . '</td>';
					
					echo '<td>', ($row['isViewer'] == 1 ? '<a href="' . $scripturl . '?action=admin;area=newspro;sa=viewviews;c=' . $row['ID_LETTER'] . ';e=' . $row['ID_EMAIL'] . '">' .$txt['newspro_status_true'] . '</a>' : $txt['newspro_status_false']) , '</td>';
					echo '<td>', ($row['isClicker'] == 1 ? '<a href="' . $scripturl . '?action=admin;area=newspro;sa=viewclicks;c=' . $row['ID_LETTER'] . ';e=' . $row['ID_EMAIL'] . '">' .$txt['newspro_status_true'] . '</a>' : $txt['newspro_status_false']), '</td>';
					echo '<td>', ($row['isOptout'] == 1 ? $txt['newspro_status_true'] : $txt['newspro_status_false']), '</td>';
					
					
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=deleteemail;l=' . $context['newsletter_id'] . '&id=' . $row['ID_EMAIL'] . '">'  .$txt['newspro_delete_link'] . '</a></td>';
					
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="6">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=viewlist;id=' . $context['newsletter_id'], $_REQUEST['start'], $total, 10);
							echo $context['page_index'];

					echo '
							</td>
						</tr>';
				}
			
				echo '<tr class="titlebg">
							<td colspan="6" align="center">
								<a href="' . $scripturl . '?action=admin;area=newspro;sa=reports">',$txt['newspro_return_to_reports'],'</a>
							</td>
						</tr>
				</table>
			</td>
			</tr>
		</table>
		</form>
';
	
	newspro_copyright();
}

function template_view_views()
{
	global $txt, $context, $smcFunc, $scripturl;
	
echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_ipaddress'],'</td>
		
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];

				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_viewlog 
					WHERE ID_EMAIL = " .$context['id_email'] . " AND ID_LETTER = " . $context['id_letter']);
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

				//  Get log
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ipaddress, date 
			  	FROM {db_prefix}newspro_viewlog 
			  	WHERE ID_EMAIL = " . $context['id_email'] . " AND ID_LETTER = " . $context['id_letter'] . " 
			  
			  	ORDER BY ID_VIEW DESC LIMIT $context[start],20");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';					
					echo '<td>',timeformat($row['date']),'</td>';
					echo '<td><a href="', $scripturl,'?action=trackip;searchip=', $row['ipaddress'], '">',$row['ipaddress'],'</a> ' .  GetCountryFlag(GetCountryCode($row['ipaddress'])) . '</td>';
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="2">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=viewviews;e=' . $context['id_email'] . ';c=' . $context['id_letter'], $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
';
	
	newspro_copyright();
}

function template_view_clicks()
{
	global $txt, $context, $smcFunc, $scripturl;
	
echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
					    <td>',$txt['newspro_txt_linkurl'],'</td>
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_ipaddress'],'</td>
		
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];

				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_clicklog 
					WHERE ID_EMAIL = " .$context['id_email'] . " AND ID_LETTER = " . $context['id_letter']);
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

				//  Get log
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		l.ipaddress, l.date, n.link  
			  	FROM {db_prefix}newspro_clicklog AS l 
			  	LEFT JOIN  {db_prefix}newspro_links AS n ON (l.ID_LINK = n.ID_LINK) 
			  	WHERE l.ID_EMAIL = " . $context['id_email'] . " AND l.ID_LETTER = " . $context['id_letter'] . " 
			  
			  	ORDER BY l.ID_CLICK DESC LIMIT $context[start],20");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="',$row['link'],'" target="_blank">',$row['link'],'</a></td>';			
					echo '<td>',timeformat($row['date']),'</td>';
					echo '<td><a href="', $scripturl,'?action=trackip;searchip=', $row['ipaddress'], '">',$row['ipaddress'],'</a> ' .  GetCountryFlag(GetCountryCode($row['ipaddress'])) . '</td>';
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="3">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=viewviews;e=' . $context['id_email'] . ';c=' . $context['id_letter'], $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
';
	
	newspro_copyright();
}

function template_view_newsletter_message()
{
	global $txt, $context, $scripturl;
	

	$context['newspro']['buttons_set']['editmessage'] =  array(
								'text' => 'newspro_txt_edit_message',
								'url' => $scripturl . '?action=admin;area=newspro;sa=editmessage&id=' . $context['newspro_msg_id'],
								'lang' => true,
								'is_selected' => true,
						);		
						
	$context['newspro']['buttons_set']['deletemessage'] =  array(
								'text' => 'newspro_txt_delete_message',
								'url' => $scripturl . '?action=admin;area=newspro;sa=deletemessage&id=' . $context['newspro_msg_id'],
								'lang' => true,
								'is_selected' => true,
						);				
								
						
						
		echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
							<tr>
								<td style="padding-right: 1ex;" align="right" >
								<table cellpadding="0" cellspacing="0" align="left"  >
										<tr>
							', NewsPro_DoToolBarStrip($context['newspro']['buttons_set'], 'bottom'), '
								</tr>
								</table>
					</td>
							</tr>
						</table>';
	
	echo '
		<table width="80%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td colspan="2">',$txt['newspro_viewmessage'] ,'</td>
					</tr>
					<tr class="windowbg2">
						<td colspan="2">
						<iframe src="' . $scripturl . '?action=admin;area=newspro;sa=viewmsgiframe;id=' . $context['newspro_msg_id'] . '" width="700" height="500" scrolling="yes"></iframe>
						</td>
					</tr>
				</table>
			</td>
			</tr>
		</table>
';
	
	newspro_copyright();
}

function template_resubscribe()
{
	global $txt, $context;
	
	newspro_copyright();
}

function template_unsubscribe_list()
{
	global $txt, $context, $smcFunc, $scripturl;
	
echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td>',$txt['newspro_email_address'],'</td>
						<td>',$txt['newspro_membername'],'</td>
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_ipaddress'],'</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];

				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_unsubscribe");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

				// Get optout emails
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		u.ID_OPTOUT, u.emailaddress, u.date, m.ID_MEMBER, m.real_name, u.ipaddress  
			  	FROM {db_prefix}newspro_unsubscribe AS u 
			  	LEFT JOIN {db_prefix}members AS m ON (u.emailaddress = m.email_address) 
			  	ORDER BY u.ID_OPTOUT DESC LIMIT $context[start],20");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="mailto:' . $row['emailaddress'] . '">' . $row['emailaddress'] . '</a></td>';
					
					
					if($row['real_name'] != '')
						echo '<td><a href="' . $scripturl . '?action=profile;u=' . $row['ID_MEMBER'] . '">'  . $row['real_name'] . '</a></td>';
					else 
						echo '<td>'  . $txt['newspro_no_member'] . '</td>';
					
					echo '<td>',timeformat($row['date']),'</td>';
					echo '<td><a href="', $scripturl,'?action=trackip;searchip=', $row['ipaddress'], '">',$row['ipaddress'],'</a> ' .  GetCountryFlag(GetCountryCode($row['ipaddress'])) . '</td>';

					
					echo '<td>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=deleteunsubscribe;id=' . $row['ID_OPTOUT'] . '">' . $txt['newspro_delete_link'] .'</a>
					</td>';
					
					
					echo '</tr>';
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="5">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=unsubscribelist', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
';
	
	newspro_copyright();
}

function template_modify_link()
{
	global $txt, $smcFunc, $context, $scripturl;
	
	// Lookup link
	$dbresult = $smcFunc['db_query']('', "
	SELECT 
		link
	FROM {db_prefix}newspro_links WHERE ID_LINK = " . $context['link_id']);
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$linkurl = $row['link'];
	$smcFunc['db_free_result']($dbresult);
	
	echo '<form action="', $scripturl, '?action=newspro;sa=modifylink2" method="post" accept-charset="', $context['character_set'], '">
	<input type="hidden" name="id" value="',$context['link_id'],'" />	
	<table width="80%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td colspan="2" align="center">',$txt['newspro_txt_modifylink2'] ,'</td>
					</tr>
					<tr class="windowbg2">
					<td colspan="2">
					',$txt['newspro_txt_linkurl'], ' <input type="text" size="70" name="linkurl" value="',$linkurl,'" />
					</td>
					</tr>
					<tr class="windowbg">
						<td colspan="2" align="center"><input type="submit" name="cmdsave" value="',$txt['newspro_txt_modifylink2'],'" /></td>
					</tr>
				</table>
			</td>
			</tr>
		</table>
		</form>
';
	
	newspro_copyright();
}

function newspro_copyright()
{
	
	// Do NOT CHANGE THIS CODE UNLESS you have COPYRIGHT Link Removal
	
	// Copyright link must remain. To remove you need to purchase link removal at smfhacks.com
	echo '<br /><div align="center"><!--Link must remain or contact me to pay to remove.--><a href="http://www.smfhacks.com/newsletter-pro.php" target="blank">Powered By: Newsletter Pro</a><!--End Copyright link--></div>';

}

function template_add_message()
{
	global $txt, $scripturl, $context;
	
echo '<form action="', $scripturl, '?action=newspro;sa=addmessage2" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td colspan="2">',$txt['newspro_txt_add_message'] ,'</td>
					</tr>
					
					<tr class="windowbg2">
						<td>',$txt['newspro_txt_title'],'</td>
						<td><input type="text" name="title" size="100" /></td>
					</tr>
					
					<tr class="windowbg2">
						<td colspan="2">
						<textarea name="message"></textarea>
						</td>
					</tr>
					
					
					<tr class="windowbg2">
						<td colspan="2">

						<input type="submit" value="',$txt['newspro_txt_add_message'] ,'" /></td>
					</tr>
				</table>
			</td>
			</tr>
		</table>
		</form>
		
';
	
	newspro_copyright();
}

function template_edit_message()
{
	global $txt, $scripturl, $context;

echo '<form action="', $scripturl, '?action=newspro;sa=editmessage2" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						<td colspan="2">',$txt['newspro_txt_edit_message'] ,'</td>
					</tr>
					
					<tr class="windowbg2">
						<td>',$txt['newspro_txt_title'],'</td>
						<td><input type="text" name="title" size="100" value="' . $context['newspro_edit']['title'] . '" /></td>
					</tr>
					
					<tr class="windowbg2">
						<td colspan="2">
						<textarea name="message">' . htmlentities($context['newspro_edit']['message']) . '</textarea>
						</td>
					</tr>
					<tr class="windowbg2">
						<td colspan="2">
						<input type="hidden" name="id" value="',$context['newspro_messageid'],'" />
						<input type="submit" value="',$txt['newspro_txt_edit_message'] ,'" /></td>
					</tr>
				</table>
			</td>
			</tr>
		</table>
		</form>
		
';
	
	newspro_copyright();
}

function template_add_list()
{
	global $txt, $context,  $scripturl;
	
echo '
		<form action="', $scripturl, '?action=newspro;sa=addlist2" enctype="multipart/form-data" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_add_list'],'</td>
				
			</tr>
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_title'] ,'</td>
				<td><input type="text" name="title" size="70 value="" />
				</td>
				
			</tr>
			
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_enter_emails'],'</td>
				<td><textarea name="emails" rows="7" cols="70"></textarea>
				<br />
				<span class="smalltext">',$txt['newspro_txt_enter_email_help'] ,'</span>
				</td>
				
			</tr>
			<tr class="windowbg2">
				<td>',$txt['newspro_txt_upload_list'],'</td>
				<td><input type="file" size="48" name="listupload" />
				<br />
				<span class="smalltext">',$txt['newspro_txt_upload_desc'] ,'</span>
				</td>
			</tr>
			
			<tr  class="windowbg2">
				<td colspan="2" align="center">
				
				<input type="submit" value="',$txt['newspro_txt_add_list'],'" /></td>
				
			</tr>		
		</table>
		</form>
		';
	
	
	newspro_copyright();
}


function template_lists()
{
	global $txt, $context, $scripturl, $smcFunc;
	
	$context['newspro']['buttons_set']['addmessage'] =  array(
								'text' => 'newspro_txt_add_list',
								'url' => $scripturl . '?action=admin;area=newspro;sa=addlist',
								'lang' => true,
								'is_selected' => true,
						);				
						
						
		echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
							<tr>
								<td style="padding-right: 1ex;" align="right" >
								<table cellpadding="0" cellspacing="0" align="left"  >
										<tr>
							', NewsPro_DoToolBarStrip($context['newspro']['buttons_set'], 'bottom'), '
								</tr>
								</table>
					</td>
							</tr>
						</table>';
	echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						
						<td>',$txt['newspro_txt_listtitle'],'</td>
						<td>',$txt['newspro_txt_total_emails'],'</td>
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];
				
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_lists");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

				// Get all newsletter messages
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_LIST, total, dateadded, title 
			  	FROM {db_prefix}newspro_lists 
			  	ORDER BY ID_LIST DESC LIMIT $context[start],10");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=viewlist;id=' . $row['ID_LIST'] . '">' . $row['title'] .'</a></td>';
					echo '<td>', $row['total'],'</td>';
					echo '<td>',timeformat($row['dateadded']),'</td>';
					
					echo '<td>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=deletelist;id=' . $row['ID_LIST'] . '">' . $txt['newspro_delete_link'] .'</a>
					</td>';
							
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="4">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=lists', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
		
';
	
	newspro_copyright();
}

function template_signup_form()
{
		global $txt, $context, $scripturl, $smcFunc;
	
	echo '<form action="', $scripturl, '?action=admin;area=newspro;sa=signupform2" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_signup_form'] ,'</td>
				
			</tr>
			<tr class="windowbg2">
			<td>',$txt['newspro_txt_select_list'],'</td>
			<td>
			<select name="list">
		';
				// Get all newsletter reports
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_LIST, title, total
			  	FROM {db_prefix}newspro_lists 
			  	");
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
					echo '<option value="', $row['ID_LIST'],'">',$row['title'],' - (' . $row['total'] . ')</option>';
				}
				$smcFunc['db_free_result']($dbresult);

				echo '
				</select>
			</td>
			</tr>
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_custom_signup_url'],'</td>
				<td><input type="text" size="100" name="thankyouurl" /></td>
			</tr>
			<tr  class="windowbg2">
				<td colspan="2" align="center">
					<input type="submit" value="',$txt['newspro_txt_generate_listbuilder'],'" />
				</td>
			</tr>
		</table>
		</form>
';
	
	newspro_copyright();
}

function template_signup_form2()
{
	global $txt, $context, $boardurl;
	
	$htmlcode = '<form action="' .  $boardurl . '/newstracking2.php" method="post">
<input type="hidden" name="a" value="signup" />
<input type="hidden" name="list" value="' . $context['newspro_listid'] . '" />
<input type="hidden" name="thankyouurl" value="' . $context['newspro_thankyouurl'] . '" />
<table>
<tr>
	<td>' . $txt['newspro_txt_signup_email'] . ' <input type="text" name="email" size="50" value="" /></td>
</tr>
<tr>
	<td align="center">
		<input type="submit" value="' . $txt['newspro_txt_signup_subscribe'] . '" />
	</td>
</tr>
</table>
</form>';
	
	$htmlcode = htmlentities($htmlcode,ENT_QUOTES);
		
	echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td  align="center">',$txt['newspro_txt_signup_form_code'] ,'</td>
				
			</tr>
			<tr class="windowbg2">
			<td align="center">
				<textarea rows="10" cols="55">' . $htmlcode .'</textarea>
			
				<br />',$txt['newspro_txt_copy_code'],'</td>
			</tr>
			</table>
';

	newspro_copyright();
}


function template_signup_thanks()
{
	global $txt, $context, $modSettings;
	
	if ($modSettings['newspro_set_optinconfirmlink'] == 1)
	echo '	<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td  align="center">',$txt['newspro_txt_confirm_subscription'],'</td>
				
			</tr>
			<tr  class="windowbg2">
				<td align="center">',$txt['newspro_txt_confirm_checkmail'],'</td>
				
			</tr>		
		</table>';
	else
	echo '	<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td  align="center">',$txt['newspro_txt_signupcomplete'],'</td>
				
			</tr>
			<tr  class="windowbg2">
				<td align="center">',$txt['newspro_txt_signupcomplete_desc'],'</td>
				
			</tr>		
		</table>';
	
	newspro_copyright();
}

function template_add_email()
{
	global $txt, $scripturl, $context;
	
		echo '
		<form action="', $scripturl, '?action=newspro;sa=addemail2" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_add_email'],'</td>
				
			</tr>
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_signup_email'],'</td>
				<td><input type="text" name="email" size="100" /></td>
				
			</tr>
			<tr  class="windowbg2">
				<td colspan="2" align="center">
				<input type="hidden" name="id" value="',$context['newspro_addemail_id'],'" />
				<input type="submit" value="',$txt['newspro_txt_add_email'],'" /></td>
				
			</tr>		
		</table>
		</form>
		';
	
	
	newspro_copyright();
}

function template_delete_list()
{
	global $txt, $context, $scripturl;
	
	
		echo '
		<form action="', $scripturl, '?action=newspro;sa=deletelist" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_delete_list'],'</td>
				
			</tr>
			<tr  class="windowbg2">
				<td colspan="2" align="center">',$context['newspro_confrim_delete'] ,'</td>
				
				
			</tr>
			<tr  class="windowbg2">
				<td colspan="2" align="center">
				<input type="hidden" name="delete" value="delete" />
				<input type="hidden" name="id" value="',$context['newspro_list_id'],'" />
				<input type="submit" value="',$txt['newspro_txt_delete_list'],'" /></td>
				
			</tr>		
		</table>
		</form>
		';
	
	newspro_copyright();
	
}

function template_campaigns()
{
	global $txt, $context, $scripturl, $smcFunc;
	
	$context['newspro']['buttons_set']['schedule'] =  array(
								'text' => 'newspro_txt_schedule_campaign',
								'url' => $scripturl . '?action=admin;area=newspro;sa=schedule',
								'lang' => true,
								'is_selected' => true,
						);				
						
						
		echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
							<tr>
								<td style="padding-right: 1ex;" align="right" >
								<table cellpadding="0" cellspacing="0" align="left"  >
										<tr>
							', NewsPro_DoToolBarStrip($context['newspro']['buttons_set'], 'bottom'), '
								</tr>
								</table>
					</td>
							</tr>
						</table>';
	echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>
				
				
				<table border="0" cellspacing="0" cellpadding="4" width="100%">
				<tr  class="titlebg">
					<td colspan="5" align="center">
					<b>',$txt['newspro_txt_pending_campaigns'],'</b>
					</td>
				</tr>
					<tr class="titlebg">
						<td>',$txt['newspro_txt_camp_schedule'],'</td>
						<td>',$txt['newspro_txt_subject']  ,'</td>
						<td>',$txt['newspro_txt_camp_list'],'</td>
						<td>',$txt['newspro_txt_camp_message'],'</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];
				
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_campaigns
					WHERE removed = 0 and status = 0");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
				$smcFunc['db_free_result']($dbresult);

				// Get all newsletter messages
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		c.ID_CAMPAIGN, c.scheduledate, c.ID_LIST, c.ID_MESSAGE, c.subject, l.title listtitle,
			  		m.title messagettile 
			  	FROM ({db_prefix}newspro_campaigns as c)
			  	
			  	LEFT JOIN {db_prefix}newspro_lists as l ON (c.ID_LIST = l.ID_LIST)
			  	LEFT JOIN {db_prefix}newspro_messages AS m ON (c.ID_MESSAGE = m.ID_MESSAGE) 
			  	
			  	WHERE c.removed = 0 AND c.status = 0
			  	ORDER BY c.starttime DESC LIMIT $context[start],10");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					echo '<td>',timeformat($row['scheduledate']),'</td>';
					echo '<td>', $row['subject'],'</td>';
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=viewlist;id=' . $row['ID_LIST'] . '">' . $row['listtitle'] .'</a></td>';
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=viewmsg;id=' . $row['ID_MESSAGE'] . '">' . $row['messagettile'] .'</a></td>';
					
					echo '<td>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=deletecamp;id=' . $row['ID_CAMPAIGN'] . '">' . $txt['newspro_delete_link'] .'</a>
					</td>';
							
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
				$smcFunc['db_free_result']($dbresult);
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="5">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=campaigns', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
		
';
	
	newspro_copyright();
}

function template_schedule_campaign()
{
	global $txt, $context, $scripturl, $smcFunc, $boardurl;
	
echo '
		<form action="', $scripturl, '?action=newspro;sa=schedule2"  method="post" accept-charset="', $context['character_set'], '">
		
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_schedule_campaign'],'</td>
				
			</tr>

				<tr  class="windowbg2">
				<td>',$txt['newspro_txt_camp_date'] ,'</td>
				<td>
				<select name="month">';

				for($i=1; $i < 13; $i++)			
				{
					echo '<option value="' . $i . '" ' . (date("m") == $i ? ' selected="selected" ' : '') .'>' . date("F",mktime(0,0,0,$i+1,0,0)) . '</option>';
				}

				echo '
				</select>
				<select name="day">
				';

				for($i=1; $i < 32; $i++)			
				{
					echo '<option value="' . $i . '" ' . (date("j") == $i ? ' selected="selected" ' : '') .'>' . $i . '</option>';
				}

				echo '
				</select>
				
				<select name="year">
				';

				for($i = date("Y"); $i < date("Y") + 4; $i++)			
				{
					echo '<option value="' . $i . '" ' . (date("y") == $i ? ' selected="selected" ' : '') .'>' . $i . '</option>';
				}

				echo '
				</select>
				
				</td>
				
			</tr>
				<tr  class="windowbg2">
				<td>',$txt['newspro_txt_camp_time'] ,'</td>
				<td><select name="hour">
					';

				for($i=0; $i < 24; $i++)			
				{
					$displayValue = $i;
				
					
					if ($displayValue == 0)
					{
						$displayValue = '12 AM';
					}
					else if ($displayValue == 12)
						$displayValue = '12 PM';
					else if ($displayValue == 12)
						$displayValue = '12 PM';
					else if ($displayValue <= 11)
						$displayValue = $displayValue  . ' AM';
					else if ($displayValue > 12)
						$displayValue = ($displayValue -12)  . ' PM';		
					
					echo '<option value="' . $i . '" ' . (date("G") == $i ? ' selected="selected" ' : '') .'>' . $displayValue . '</option>';
				}

				echo '
					</select>
					<select name="minute">
					';

				for($i=1; $i < 60; $i++)			
				{
					echo '<option value="' . $i . '" ' . (date("i") == $i ? ' selected="selected" ' : '') .'>' . $i . '</option>';
				}

				echo '
					</select>
				</td>
				
			</tr>
			<tr  class="windowbg2">
				<td colspan="2">',$txt['newspro_txt_camp_warning'], date("F j, Y, g:i a"), '</td>
			</tr>
			
			
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_subject'] ,'</td>
				<td><input type="text" name="subject" size="70" value="" />
				</td>
				
			</tr>
			
			
				<tr  class="windowbg2">
				<td>',$txt['newspro_txt_camp_message'] ,'</td>
				<td><select name="message" size="5">
			
				';

				$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_MESSAGE, title 
			  	FROM {db_prefix}newspro_messages 
			  	WHERE removed = 0 
			  	");				
				while ($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
					echo '<option value="' . $row['ID_MESSAGE'] . '">' . $row['title'] . '</option>';
				}
				$smcFunc['db_free_result']($dbresult);

				echo '
					</select>
				</td>
				
			</tr>
				<tr  class="windowbg2">
				<td>',$txt['newspro_txt_camp_list'] ,'</td>
				<td><select name="list" size="5">
				
				';
				
				$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_LIST, title 
			  	FROM {db_prefix}newspro_lists 
			  
			  	");				
				while ($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
					echo '<option value="' . $row['ID_LIST'] . '">' . $row['title'] . '</option>';
				}
				$smcFunc['db_free_result']($dbresult);

				
				echo '
					</select>
				</td>
				
			</tr>';

			// Group Checkboxes
			echo '<tr class="windowbg2">
			<td>
			',$txt['newspro_txt_camp_groups'],'<br />
			',$txt['newspro_txt_camp_groups_note'],'
			</td>
			<td>	
			   ';
			
			foreach ($context['groups'] as $group)
				echo '
						<label for="who_', $group['id'], '"><input type="checkbox" name="who[', $group['id'], ']" id="who_', $group['id'], '" value="', $group['id'], '"  class="check" /> ', $group['name'], '</label> <i>(', $group['member_count'], ')</i><br />';

				
			echo '
			</td>
			</tr>
			
			<tr  class="windowbg2">
				<td colspan="2" align="center">
				<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '" />
				<input type="submit" value="',$txt['newspro_txt_schedule_campaign'],'" /></td>
				
			</tr>		
		</table>
		</form>
		';	
	
	
	newspro_copyright();
	
}

function template_imagehosting()
{
	
	global $txt, $context, $scripturl, $smcFunc;
	
	$context['newspro']['buttons_set']['addimage'] =  array(
								'text' => 'newspro_txt_addimage',
								'url' => $scripturl . '?action=admin;area=newspro;sa=addimage',
								'lang' => true,
								'is_selected' => true,
						);				
						
						
		echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
							<tr>
								<td style="padding-right: 1ex;" align="right" >
								<table cellpadding="0" cellspacing="0" align="left"  >
										<tr>
							', NewsPro_DoToolBarStrip($context['newspro']['buttons_set'], 'bottom'), '
								</tr>
								</table>
					</td>
							</tr>
						</table>';
	echo '
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr><td>

				<table border="0" cellspacing="0" cellpadding="4" width="100%">
					<tr class="titlebg">
						
						<td>',$txt['newspro_txt_title'],'</td>
						<td>',$txt['newspro_txt_filesize'],'</td>
						<td>',$txt['newspro_date'],'</td>
						<td>',$txt['newspro_options'],'</td>
					</tr>';
	
				$context['start'] = (int) $_REQUEST['start'];
				
				// Get Total Pages
				$dbresult = $smcFunc['db_query']('', "
					SELECT 
						COUNT(*) AS total 
					FROM {db_prefix}newspro_imagehosting");
				$row = $smcFunc['db_fetch_assoc']($dbresult);
				$total = $row['total'];
		

				// Get all newsletter messages
			  	$dbresult = $smcFunc['db_query']('', "
			  	SELECT 
			  		ID_IMAGE, date, filesize, title 
			  	FROM {db_prefix}newspro_imagehosting
			  	ORDER BY ID_IMAGE DESC LIMIT $context[start],10");
			  	
			  	$styleclass = 'windowbg';
			  	
				while($row = $smcFunc['db_fetch_assoc']($dbresult))
				{
	
					echo '<tr class="',$styleclass,'">';
					echo '<td><a href="' . $scripturl . '?action=admin;area=newspro;sa=viewimage;id=' . $row['ID_IMAGE'] . '">' . $row['title'] .'</a></td>';
					echo '<td>', NewsPro_format_size($row['filesize']),'</td>';
					echo '<td>',timeformat($row['date']),'</td>';
					
					echo '<td>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=editimage;id=' . $row['ID_IMAGE'] . '">' . $txt['newspro_edit_link'] .'</a>
					<a href="' . $scripturl . '?action=admin;area=newspro;sa=deleteimage;id=' . $row['ID_IMAGE'] . '">' . $txt['newspro_delete_link'] .'</a>
					</td>';
							
					echo '</tr>';
					
					
					if ($styleclass == 'windowbg')
						$styleclass = 'windowbg2';
					else 
						$styleclass = 'windowbg';
	
				}
	
				
				if ($total > 0)
				{	
					echo '<tr class="titlebg">
							<td align="left" colspan="4">
							' . $txt['newspro_text_pages'];
			
							$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=newspro;sa=imagehosting', $_REQUEST['start'], $total, 10);
							echo $context['page_index'];
							
			
					echo '
							</td>
						</tr>';
				}
			
				echo '
				</table>
			</td>
			</tr>
		</table>
		
';
	
	
	newspro_copyright();
}

function template_addimage()
{
	global $txt, $context,  $scripturl;
	
echo '
		<form action="', $scripturl, '?action=admin;area=newspro;sa=addimage2" enctype="multipart/form-data" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_addimage'],'</td>
				
			</tr>
			
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_title'] ,'</td>
				<td><input type="text" name="title" size="70 value="" />
				</td>
				
			</tr>
			<tr class="windowbg2">
				<td>',$txt['newspro_txt_upload_image'],'</td>
				<td><input type="file" size="48" name="picture" />
				</td>
			</tr>
			
			<tr  class="windowbg2">
				<td colspan="2" align="center">
				
				<input type="submit" value="',$txt['newspro_txt_addimage'],'" /></td>
				
			</tr>		
		</table>
		</form>
		';
	
	
	
	newspro_copyright();
	
}

function template_editimage()
{
	
	global $txt, $context,  $scripturl, $modSettings;
	
echo '
		<form action="', $scripturl, '?action=admin;area=newspro;sa=editimage2" enctype="multipart/form-data" method="post" accept-charset="', $context['character_set'], '">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td colspan="2" align="center">',$txt['newspro_txt_editimage'],'</td>
				
			</tr>
			
			<tr  class="windowbg2">
				<td>',$txt['newspro_txt_title'] ,'</td>
				<td><input type="text" name="title" size="70 value="' . $context['newspro_image']['title'] . '" />
				</td>
				
			</tr>
			<tr class="windowbg2">
				<td>',$txt['newspro_txt_upload_image'],'</td>
				<td><input type="file" size="48" name="picture" />
				<br /><img src="' . $modSettings['imagehosting_url'] . $context['newspro_image']['filename'] . '" alt="' . $context['newspro_image']['title'] . '" />
				
				</td>
			</tr>
			
			<tr  class="windowbg2">
				<td colspan="2" align="center">
				<input type="hidden" name="id" value="' . $context['newspro_image']['ID_IMAGE'] . '" />
				<input type="submit" value="',$txt['newspro_txt_editimage'],'" /></td>
				
			</tr>		
		</table>
		</form>
		';
	
	
	newspro_copyright();
}

function template_viewimage()
{
	
	global $txt, $context, $scripturl, $modSettings;
	
echo '
		
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="tborder" align="center">
			<tr class="titlebg">
				<td align="center">',$context['newspro_image']['title'],'</td>
				
			</tr>
			<tr class="windowbg2">
				<td align="center">
				<img src="' . $modSettings['imagehosting_url'] . $context['newspro_image']['filename'] . '" alt="' . $context['newspro_image']['title'] . '" />
				
				</td>
			</tr>
<tr class="titlebg">
				<td align="center"><a href="' . $scripturl . '?action=admin;area=newspro;sa=editimage;id=' . $context['newspro_image']['ID_IMAGE'] . '">' . $txt['newspro_edit_link'] .'</a></td>
				
			</tr>
	
		</table>

		';
	
	
	newspro_copyright();
}
?>