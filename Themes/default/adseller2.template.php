<?php
/*
Ad Seller Pro
Version 3.0
by:vbgamer45
http://www.smfhacks.com
Copyright 2010-2019 SMFHacks.com

############################################
License Information:
Ad Seller Pro is NOT free software.
This software may not be redistributed.

The license is good for a single instance / install on a website.
You are allowed only one active install for each license purchase.

Links to http://www.smfhacks.com must remain unless
branding free option is purchased.
#############################################
*/


function template_main_settings()
{
	global $scripturl, $modSettings, $txt, $currentVersion,  $AdSellerSettings, $context, $boardurl;


echo '
    <div class="cat_bar">
		<h3 class="catbg">
        ' .  $txt['seller_ad_sellerpro_settings'] . '
        </h3>
  </div>
	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
	',$txt['seller_txt_yourversion'] , $currentVersion, '&nbsp;',$txt['seller_txt_latestversion'],'<span id="lastver" name="lastver"></span>
			<br />

			' . str_replace('%', $boardurl . '/adselleripn2.php', $txt['seller_txt_ipnurl']) . '
			<br />

			<form method="post" action="' . $scripturl . '?action=admin;area=adpro;sa=settings2">
				<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4">

				<tr><td width="30%">' . $txt['seller_path'] . '</td><td><input type="text" name="seller_path" value="' .  $AdSellerSettings['seller_path'] . '" size="50" /></td></tr>
				<tr><td width="30%">' . $txt['seller_url'] . '</td><td><input type="text" name="seller_url" value="' .  $AdSellerSettings['seller_url'] . '" size="50" /></td></tr>

				<tr><td width="30%">' . $txt['seller_paypal'] . '</td><td><input type="text" name="seller_paypal" value="' .  $AdSellerSettings['seller_paypal'] . '" size="50" /><br />' . $txt['seller_paypal_note'] . '</td></tr>
				<tr><td width="30%">' . $txt['seller_currency'] . '</td><td>

				<select name="seller_currency">
				    <option selected="selected" value="', $AdSellerSettings['seller_currency'], '">', $txt['seller_cur_' . $AdSellerSettings['seller_currency']], '</option>

				    <option value="USD">',$txt['seller_cur_USD'],'</option>
					<option value="AUD">',$txt['seller_cur_AUD'],'</option>
					<option value="BRL">',$txt['seller_cur_BRL'],'</option>
					<option value="CAD">',$txt['seller_cur_CAD'],'</option>
					<option value="CZK">',$txt['seller_cur_CZK'],'</option>
					<option value="DKK">',$txt['seller_cur_DKK'],'</option>
					<option value="EUR">',$txt['seller_cur_EUR'],'</option>
					<option value="HKD">',$txt['seller_cur_HKD'],'</option>
					<option value="HUF">',$txt['seller_cur_HUF'],'</option>
					<option value="ILS">',$txt['seller_cur_ILS'],'</option>
					<option value="MYR">',$txt['seller_cur_MYR'],'</option>
					<option value="MXN">',$txt['seller_cur_MXN'],'</option>
					<option value="NZD">',$txt['seller_cur_NZD'],'</option>
					<option value="NOK">',$txt['seller_cur_NOK'],'</option>
					<option value="PHP">',$txt['seller_cur_PHP'],'</option>
					<option value="PLN">',$txt['seller_cur_PLN'],'</option>
					<option value="GBP">',$txt['seller_cur_GBP'],'</option>
					<option value="SGD">',$txt['seller_cur_SGD'],'</option>
					<option value="SEK">',$txt['seller_cur_SEK'],'</option>
					<option value="CHF">',$txt['seller_cur_CHF'],'</option>
					<option value="TWD">',$txt['seller_cur_TWD'],'</option>
					<option value="THB">',$txt['seller_cur_THB'],'</option>
					<option value="JPY">',$txt['seller_cur_JPY'],'</option>
                    <option value="ZAR">',$txt['seller_cur_ZAR'],'</option>
					</select>

				</td></tr>

				<tr><td width="30%">' . $txt['seller_buynowimageurl'] . '</td><td><input type="text" name="seller_buynowimageurl" size="50" value="' .  $AdSellerSettings['seller_buynowimageurl'] . '" /></td></tr>
				<tr><td width="30%">' . $txt['seller_set_subscribeimageurl'] . '</td><td><input type="text" name="seller_set_subscribeimageurl" size="50" value="' .  $AdSellerSettings['seller_set_subscribeimageurl'] . '" /></td></tr>

                <tr><td width="30%">' . $txt['seller_sandbox'] . '</td><td><input type="checkbox" name="seller_sandbox" ' .  ($AdSellerSettings['seller_sandbox']  ? ' checked="checked" ' : '')  . ' /><br />' . $txt['seller_sandbox_note'] . '</td></tr>

				<tr><td width="30%">' . $txt['seller_buy_per_page'] . '</td><td><input type="text" name="seller_buy_per_page" size="5" value="' .  $AdSellerSettings['seller_buy_per_page'] . '" /></td></tr>
				<tr><td width="30%">' . $txt['seller_buy_per_row'] . '</td><td><input type="text" name="seller_buy_per_row" size="5" value="' .  $AdSellerSettings['seller_buy_per_row'] . '" /></td></tr>


				<tr><td width="30%">' . $txt['seller_ad_approval'] . '</td><td><input type="checkbox" name="seller_ad_approval" ' .  ($AdSellerSettings['seller_ad_approval'] ? ' checked="checked" ' : '') . ' /></td></tr>
				<tr><td width="30%">' . $txt['seller_ad_max_filesize'] . '</td><td><input type="text" name="seller_ad_max_filesize" value="' .  $AdSellerSettings['seller_ad_max_filesize'] . '" /></td></tr>
				<tr><td width="30%">' . $txt['seller_ad_filetypes'] . '</td><td><input type="text" name="seller_ad_filetypes" value="' .  $AdSellerSettings['seller_ad_filetypes'] . '" /></td></tr>
				<tr><td width="30%">' . $txt['seller_advertise_here'] . '</td><td><input type="text" name="seller_advertise_here" value="' .  $AdSellerSettings['seller_advertise_here'] . '" /></td></tr>

				<tr><td width="30%">' . $txt['seller_show_advetise'] . '</td><td><input type="checkbox" name="seller_show_advetise" ' .  ($modSettings['seller_show_advetise'] ? ' checked="checked" ' : '') . ' /></td></tr>

				<tr><td width="30%">' . $txt['seller_antiadblock'] . '</td><td><input type="checkbox" name="seller_antiadblock" ' .  ($modSettings['seller_antiadblock'] ? ' checked="checked" ' : '') . ' /></td></tr>



				<tr><td width="30%">' . $txt['seller_logclicks'] . '</td><td><input type="checkbox" name="seller_logclicks" ' .  ($AdSellerSettings['seller_logclicks']  ? ' checked="checked" ' : '') . ' /></td></tr>
				<tr><td width="30%">' . $txt['seller_logviews'] . '</td><td><input type="checkbox" name="seller_logviews" ' .  ($AdSellerSettings['seller_logviews']  ? ' checked="checked" ' : '') . ' /><br />' . $txt['seller_logviews_note'] . '</td></tr>

				<tr><td width="30%">' . $txt['seller_loglocationviewsbydate'] . '</td><td><input type="checkbox" name="seller_loglocationviewsbydate" ' .  ($AdSellerSettings['seller_loglocationviewsbydate']  ? ' checked="checked" ' : '') . ' /><br />' . $txt['seller_loglocationviewsbydate_note'] . '</td></tr>


                <tr><td width="30%">' . $txt['seller_subtractsmfshoppoints'] . '</td><td><input type="text" name="seller_subtractsmfshoppoints" size="5" value="' .  $AdSellerSettings['seller_subtractsmfshoppoints'] . '" /></td></tr>
				<tr><td width="30%">' . $txt['seller_disablepaymentspaypal'] . '</td><td><input type="checkbox" name="seller_disablepaymentspaypal" ' .  ($AdSellerSettings['seller_disablepaymentspaypal']  ? ' checked="checked" ' : '') . ' /></td></tr>

				<tr><td width="30%">' . $txt['seller_linksopennewwin'] . '</td><td><input type="checkbox" name="seller_linksopennewwin" ' .  ($AdSellerSettings['seller_linksopennewwin']  ? ' checked="checked" ' : '') . ' /></td></tr>


                <tr><td width="30%">' . $txt['seller_reportslogdateviewclick'] . '</td><td><input type="checkbox" name="seller_reportslogdateviewclick" ' .  ($AdSellerSettings['seller_reportslogdateviewclick']  ? ' checked="checked" ' : '') . ' /><br />' . $txt['seller_reportslogdateviewclick2'] . '</td></tr>

                </table>

				';

				if (!is_writable($AdSellerSettings['seller_path']))
					echo '<font color="#FF0000"><b>' . $txt['seller_write_error']  . $AdSellerSettings['seller_path'] . '</b></font>';

				echo '

				<input type="submit" name="savesettings" value="' . $txt['seller_save_settings'] . '" />
			</form>
			<br />
			<script language="JavaScript" type="text/javascript" src="https://www.smfhacks.com/versions/adseller_version.js?t=' . time() . '"></script>
			<script language="JavaScript" type="text/javascript">

			function adSellerCurrentVersion()
			{
				if (!window.adSellerVersion)
					return;

				sellerspan = document.getElementById("lastver");

				if (window.adSellerVersion != "' . $currentVersion . '")
				{
					setInnerHTML(sellerspan, "<b><font color=\"red\">" + window.adSellerVersion + "</font>&nbsp;' . $txt['seller_txt_version_outofdate'] . '</b>");
				}
				else
				{
					setInnerHTML(sellerspan, "' . $currentVersion . '")
				}
			}

			// Override on the onload function

		document.addEventListener(\'DOMContentLoaded\', function(event) {
			adSellerCurrentVersion();
			});



			</script>
			</td>
		</tr>


</table>';


	adseller_copyright();
}

function template_view_transactions()
{
	global $txt, $context, $scripturl, $AdSellerSettings, $smcFunc;

echo '
		<table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" class="table_grid">
        <thead>
	<tr class="catbg">
				<th scope="col" class="smalltext first_th">',$txt['seller_txt_date'],'</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_ad_package'] , '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_membername'], '</th>
				<th scope="col" class="smalltext">',$txt['seller_txt_paymentstatus'] ,'</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_priceamount'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_email'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_firstname'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_lastname'], '</th>
				<th scope="col" class="smalltext last_th">',$txt['seller_txt_trasnactionid'], '</th>
				</tr>
                </thead>
                ';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_transactions

		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			t.ID_MEMBER, m.real_name, t.mc_gross, t.first_name, t.last_name, t.payment_status, t.txn_id, t.payer_email,
			p.title, p.ID_PACKAGE, t.ipndate
		FROM ({db_prefix}seller_transactions as t, {db_prefix}seller_ad_packages as p)
		 LEFT JOIN {db_prefix}members as m ON (t.ID_MEMBER = m.ID_MEMBER)
		WHERE t.ID_PACKAGE = p.ID_PACKAGE
		ORDER BY t.ID_TRANS DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{

		echo '<tr class="' . $styleClass . '">
				<td>',date("F j, Y, g:i a",$row['ipndate']), '</td>
				<td><a href="', $scripturl,'?action=adpro;sa=buyadspacedetail&amp;id=',$row['ID_PACKAGE'],'">' . $row['title'], '</a></td>
				<td>';

				if (empty($row['real_name']))
					echo $txt['seller_text_guest'];
				else
					echo '<a href="',$scripturl,'?action=profile;u=',$row['ID_MEMBER'],'">',$row['real_name'],'</a>';

		echo '	</td>
				<td>',$row['payment_status'] ,'</td>
				<td>', AdSellerformatprice($row['mc_gross'],$AdSellerSettings['seller_currency']), '</td>

				<td><a href="mailto:',$row['payer_email'],'">', $row['payer_email'], '</a></td>
				<td>', $row['first_name'], '</td>
				<td>', $row['last_name'], '</td>
				<td><a href="https://www.paypal.com/us/vst/id=' . $row['txn_id'] . '" target="_blank">', $row['txn_id'], '</a></td>

		</tr>';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="9">
				' . $txt['seller_text_pages'];


		$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=adpro;sa=transactions', $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>

	</table>
	<form method="POST" action="'.$scripturl . '?action=admin;area=adpro;sa=export">
	<input type="submit" value="' . $txt['seller_txt_export_transactions'] . '" />
	</form>
	';


	adseller_copyright();
}

function template_ad_approval()
{
	global $txt, $context, $scripturl, $smcFunc;

		echo '
		<form action="'.$scripturl . '?action=admin;area=adpro;sa=bulkactions" method="post">
		<table cellspacing="0" cellpadding="10" border="0" class="table_grid" align="center" width="100%" >
	<thead>
	<tr class="catbg">
				<th scope="col" class="smalltext firs_th"> </th>
				<th scope="col" class="smalltext">', $txt['seller_text_title'] , '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_membername'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_approved'], '</th>
				<th scope="col" class="smalltext last_th">', $txt['seller_text_options'], '</th>
				</tr>
    </thead>
    ';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_ad
		WHERE (approved = 0 OR approved = 2) and removed = 0
		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			a.ID_AD, a.title, a.approved, a.ID_MEMBER, m.real_name
		FROM {db_prefix}seller_ad AS a
		 LEFT JOIN {db_prefix}members as m ON (a.ID_MEMBER = m.ID_MEMBER)
		WHERE (a.approved = 0 OR a.approved = 2) and removed = 0
		ORDER BY a.approved ASC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		$approvalStatus = $txt['seller_text_pending'];

		if ($row['approved'] == 1)
			$approvalStatus = $txt['seller_text_approved'];

		if ($row['approved'] == 2)
			$approvalStatus = $txt['seller_text_rejected'];


         if ($row['approved'] == 3)
			$approvalStatus = $txt['seller_text_paused'];


		echo '
		<tr class="' . $styleClass . '">
		    <td><input type="checkbox" name="ads[' . $row['ID_AD'] . ']" value="' . $row['ID_AD'] . '" /></td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=editad&amp;id=' . $row['ID_AD'] . '">',$row['title'],'</a></td>
			<td>';

				if (empty($row['real_name']))
					echo $txt['seller_text_guest'];
				else
					echo '<a href="',$scripturl,'?action=profile;u=',$row['ID_MEMBER'],'">',$row['real_name'],'</a>';

		echo '
			</td>
			<td>',$approvalStatus,'</td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=editad&amp;id=' . $row['ID_AD'] . '">',$txt['seller_text_edit2'],'</a></td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="5">
				<div align="right">
				<select name="doaction">
				<option value=""></option>
				<option value="approve">' . $txt['seller_txt_approve'] . '</option>
                <option value="pending">' . $txt['seller_text_pending'] . '</option>
				<option value="reject">' . $txt['seller_txt_reject']. '</option>
				</select>
				<input type="submit" value="' . $txt['seller_show_go'] . '" />

		</div>
			</td>
	</tr>
		<tr class="titlebg">
				<td align="left" colspan="5">

				' . $txt['seller_text_pages'];



		$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=adpro;sa=adapproval', $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>
	</form>';


	adseller_copyright();
}

function adseller_copyright()
{

	// Do NOT CHANGE THIS CODE UNLESS you have COPYRIGHT Link Removal
	//http://www.smfhacks.com/copyright_removal.php

	// Copyright link must remain. To remove you need to purchase link removal at smfhacks.com
	echo '<div align="center"><!--Link must remain or contact me to pay to remove.--><span class="smalltext">Powered by: <a href="https://www.smfhacks.com/ad-seller-pro.php" target="_blank">Ad Seller Pro</a></span><!--End Copyright link--></div>';
}

function template_buyadspace()
{
	global $txt, $scripturl, $context, $smcFunc, $AdSellerSettings;

	// Show tabs
	echo  '<div class="cat_bar">
		<h3 class="catbg centertext">
        &nbsp;
        </h3>
</div>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

	// Show Ad Packages
	echo '
    <div class="cat_bar">
		<h3 class="catbg centertext">
        ',$txt['seller_purchase_ad_space'], '
        </h3>
</div>
	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
			<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4">

		';

		$t = time();
		// Get Total Count
		$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_ad_packages
		WHERE (startdate = 0 OR startdate <= '$t')  AND (enddate = 0 OR enddate >= $t) AND removed = 0
		");
		$totalRow = $smcFunc['db_fetch_assoc']($dbresult);
		$context['start'] = (int) $_REQUEST['start'];


		// Set number of ads per row
		$maxrowlevel = $AdSellerSettings['seller_buy_per_row'];


		// Show the packages
		$dbresult = $smcFunc['db_query']('', "
		SELECT
			ID_PACKAGE, title, price, needsstock, qtyinstock, is_subscription
		FROM {db_prefix}seller_ad_packages
		WHERE (startdate = 0 OR startdate <= '$t') AND (enddate = 0 OR enddate >= $t) AND removed = 0

		LIMIT $context[start]," .  $AdSellerSettings['seller_buy_per_page']);
		$rowlevel = 0;

		while($row = $smcFunc['db_fetch_assoc']($dbresult))
		{

			if ($rowlevel == 0)
				echo '<tr>';

			echo '<td align="center" valign="top">';

			echo '<a href="' . $scripturl . '?action=adpro;sa=buyadspacedetail&amp;id=' . $row['ID_PACKAGE'] . '">' . $row['title'] . '</a><br />';

			if ($row['needsstock'] == 1)
			{
				echo $txt['seller_txt_qty_left'] . ' ' . $row['qtyinstock'] . '<br />';
			}

			echo $txt['seller_txt_price'] . ': ' . AdSellerformatprice($row['price'],$AdSellerSettings['seller_currency']) . '<br />';

			// Show Buy Button
			// Check if the Ad Package is in stock
			if ($row['needsstock'] == 1 && $row['qtyinstock'] <= 0)
				echo '<font color="#FF0000">',$txt['seller_txt_out_of_stock'],'</font>';
			else
            {
                if ($row['is_subscription'] == 0)
                    echo '<a href="' . $scripturl . '?action=adpro;sa=buyadpackage&amp;id=' . $row['ID_PACKAGE'] . '"><img src="' . $AdSellerSettings['seller_buynowimageurl'] .  '" alt="" /></a>';
                else
                    echo '<a href="' . $scripturl . '?action=adpro;sa=buyadpackage&amp;id=' . $row['ID_PACKAGE'] . '"><img src="' . $AdSellerSettings['seller_set_subscribeimageurl'] .  '" alt="" /></a>';



            }


			echo '</td>';

			if($rowlevel < ($maxrowlevel-1))
				$rowlevel++;
			else
			{
				echo '</tr>';
				$rowlevel = 0;
			}
		}

		if($rowlevel != 0)
		{
			echo '</tr>';
		}

		$smcFunc['db_free_result']($dbresult);


	echo '


	</table></td></tr>
	<tr class="titlebg">
				<td align="left" >
				' . $txt['seller_text_pages'];

		$context['page_index'] = constructPageIndex($scripturl . '?action=adpro;sa=buyadspace', $_REQUEST['start'], $totalRow['total'], $AdSellerSettings['seller_buy_per_page']);

		echo $context['page_index'];

	echo '
		</td>
	</tr>


	</table>';


	adseller_copyright();
}

function template_buyadspace_detail()
{
	global $txt, $context, $scripturl, $AdSellerSettings, $smcFunc;

	echo  '<div class="cat_bar">
		<h3 class="catbg centertext">
        &nbsp;
        </h3>
</div>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

	echo '
        <div class="cat_bar">
		<h3 class="catbg centertext">
        ',$context['seller_item_detail']['title'], '
        </h3>
</div>
	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
			<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4">

			';

			if ($context['seller_item_detail']['needsstock'] == 1)
			{
				echo '<tr class="windowbg">
					<td colspan="2" align="center"><b>',$txt['seller_txt_qty_left'],'</b> ',$context['seller_item_detail']['qtyinstock'],'</td>
				</tr>';
			}

echo '
				<tr class="windowbg">
					<td colspan="2" align="center"><b>',$txt['seller_txt_price'],'</b> ',AdSellerformatprice($context['seller_item_detail']['price'],$AdSellerSettings['seller_currency']),'</td>
				</tr>

				<tr class="windowbg">
					<td colspan="2" align="center">';

					// Check if the Ad Package is in stock
					if ($context['seller_item_detail']['needsstock'] == 1 && $context['seller_item_detail']['qtyinstock'] <= 0)
						echo '<font color="#FF0000">',$txt['seller_txt_out_of_stock'],'</font>';
					else
                    {
						     if ($context['seller_item_detail']['is_subscription'] == 0)
                                    echo '<a href="' . $scripturl . '?action=adpro;sa=buyadpackage&amp;id=' . $context['seller_item_detail']['ID_PACKAGE'] . '"><img src="' . $AdSellerSettings['seller_buynowimageurl'] .  '" alt="" /></a>';
                                else
                                    echo '<a href="' . $scripturl . '?action=adpro;sa=buyadpackage&amp;id=' . $context['seller_item_detail']['ID_PACKAGE'] . '"><img src="' . $AdSellerSettings['seller_set_subscribeimageurl'] .  '" alt="" /></a>';


                    }

					echo '</td>
				</tr>

				<tr class="windowbg">
					<td width="10%"><b>',$txt['seller_text_description'],'</b></td>
					<td>',parse_bbc($context['seller_item_detail']['description']),'</td>
				</tr>

				<tr class="windowbg">
					<td colspan="2" align="center"><b>',$txt['seller_impressionslimit'],': </b>',
					($context['seller_item_detail']['maximpressions'] == 0 ? $txt['seller_txt_unlimited'] : $context['seller_item_detail']['maximpressions']),'</td>
				</tr>';

				// Impressions per day limit
				if ($context['seller_item_detail']['maximpressionsperday'] != 0)
				{
					echo '<tr class="windowbg">
					<td colspan="2" align="center"><b>',$txt['seller_txt_max_impressoins_per_day'],': </b>',
					 $context['seller_item_detail']['maximpressionsperday'],'</td>
				</tr>';
				}


				echo '
				<tr class="windowbg">
					<td colspan="2" align="center"><b>',$txt['seller_txt_expire_days'],': </b>',
					($context['seller_item_detail']['expiredays'] == 0 ? $txt['seller_txt_unlimited'] : $context['seller_item_detail']['expiredays']),'</td>
				</tr>

				<tr class="windowbg">
					<td colspan="2" align="center"><b>',$txt['seller_txt_ad_locations'],'</b></td>
				</tr>

				<tr class="windowbg">
					<td colspan="2" align="center">
						<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4">
				';

					$adLocations = explode(",",$context['seller_item_detail']['adlocations']);

					// Loop though all the Ad Locations
					$result = $smcFunc['db_query']('', "
					SELECT
						ID_LOCATION, title, description
					FROM {db_prefix}seller_ad_location
					WHERE removed = 0");
					while ($row = $smcFunc['db_fetch_assoc']($result))
					{
						if (in_array($row['ID_LOCATION'],$adLocations))
						{
							echo '<tr>
									<td><b>' . $row['title'] . '</b> ' . parse_bbc($row['description']) . '</td>
								</tr>
								';
						}
					}
					$smcFunc['db_free_result']($result);

					// End Ad Locations Loop
			echo ' 		</table>
					</td>
				</tr>

			</table>
			</td>
		</tr>

		<tr class="titlebg" align="center">
			<td><a href="' . $scripturl . '?action=adpro;sa=buyadspace">',$txt['seller_txt_return_to_adpackages'], '</a></td>
		</tr>
	</table>
		';


	adseller_copyright();
}

function template_thanks()
{
	global $txt, $context;

echo  '
<div class="cat_bar">
		<h3 class="catbg centertext">
        &nbsp;
        </h3>
</div>


				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';




	echo '
 <div class="cat_bar">
		<h3 class="catbg centertext">
        ', $txt['seller_txt_thankyou'], '
        </h3>
</div>
	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>
			',$txt['seller_txt_thankyou_full'],'
			</td>
		</tr>
	</table>
			';


	adseller_copyright();
}

function template_revshare_settings()
{
	global $txt, $AdSellerSettings, $scripturl;


	echo '
     <div class="cat_bar">
		<h3 class="catbg">
        ' .  $txt['seller_revenue_share_settings'] . '
        </h3>
  </div>
	<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4" class="tborder">
		<tr class="windowbg">
			<td>

			<br />

			<form method="post" action="' . $scripturl . '?action=admin;area=adpro;sa=revsharesettings2">
				<table border="0" width="100%" cellspacing="0" align="center" cellpadding="4">

				<tr><td width="40%">' . $txt['seller_revshare'] . '</td><td><input type="checkbox" name="seller_revshare" ' .  ($AdSellerSettings['seller_revshare'] == 1 ? ' checked="checked" ' : '') . '  /></td></tr>

				<tr><td width="40%">' . $txt['seller_revshare_topic_chance'] . '</td><td><input type="text" name="seller_revshare_topic_chance" value="' .  $AdSellerSettings['seller_revshare_topic_chance'] . '" size="10" /></td></tr>
				<tr><td width="40%">' . $txt['seller_revshare_topiclist_chance'] . '</td><td><input type="text" name="seller_revshare_topiclist_chance" value="' .  $AdSellerSettings['seller_revshare_topiclist_chance'] . '" size="10" /></td></tr>
				<tr><td width="40%">' . $txt['seller_revshare_other_chance'] . '</td><td><input type="text" name="seller_revshare_other_chance" value="' .  $AdSellerSettings['seller_revshare_other_chance'] . '" size="10" /></td></tr>

				<tr><td width="40%">' . $txt['seller_revshare_allow_banners'] . '</td><td><input type="checkbox" name="seller_revshare_allow_banners" ' .  ($AdSellerSettings['seller_revshare_allow_banners'] == 1 ? ' checked="checked" ' : '') . '  /></td></tr>
				<tr><td width="40%">' . $txt['seller_revshare_max_banners'] . '</td><td><input type="text" name="seller_revshare_max_banners" value="' .  $AdSellerSettings['seller_revshare_max_banners'] . '" size="10" /></td></tr>
				<tr><td width="40%">' . $txt['seller_revshare_banner_approval'] . '</td><td><input type="checkbox" name="seller_revshare_banner_approval" ' .  ($AdSellerSettings['seller_revshare_banner_approval'] == 1 ? ' checked="checked" ' : '') . '  /></td></tr>

				</table>

				<input type="submit" name="savesettings" value="' . $txt['seller_save_settings'] . '" />
			</form>


			</td>
		</tr>


</table>';

	adseller_copyright();
}

function template_admin_ad_packages()
{
	global $txt, $scripturl, $context, $smcFunc, $AdSellerSettings;

	$context['adpro']['buttons_set']['packadd'] =  array(
							'text' => 'seller_txt_add_package' ,
							'url' => $scripturl . '?action=admin;area=adpro;sa=packadd',
							'lang' => true,
							'is_selected' => true,
					);


	echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
							<table cellpadding="0" cellspacing="0" align="left"  >
									<tr>
						', AdSellerToolBarStrip($context['adpro']['buttons_set'], 'bottom'), '
							</tr>
							</table>
				</td>
						</tr>
					</table>';
	echo '<table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" class="table_grid">
	<thead>
	<tr class="catbg">
				<th scope="col" class="smalltext first_th">', $txt['seller_text_title'] , '</th>
				<th scope="col" class="smalltext">',$txt['seller_txt_price'],'</th>
				<th scope="col" class="smalltext">',$txt['seller_txt_qty_left'],'</th>
				<th scope="col" class="smalltext">',$txt['seller_text_impressions'],'</th>
				<th scope="col" class="smalltext">',$txt['seller_txt_expire_days'],'</th>
				<th scope="col" class="smalltext">',$txt['seller_start_date'],'</th>
				<th scope="col" class="smalltext">',$txt['seller_end_date'],'</th>

				<th scope="col" class="smalltext last_th">', $txt['seller_text_options'], '</th>
				</tr>
				</thead>
';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_ad_packages
		WHERE removed = 0
		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			p.title, p.price, p.qtyinstock, p.maximpressions, p.expiredays,
			p.startdate, p.enddate, p.needsstock, p.ID_PACKAGE
		FROM {db_prefix}seller_ad_packages AS p
		WHERE p.removed = 0
		ORDER BY p.ID_PACKAGE DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{

		echo '
		<tr class="' . $styleClass . '">
			<td>',$row['title'],'</td>
			<td>',AdSellerformatprice($row['price'],$AdSellerSettings['seller_currency']),'</td>
			<td>', (empty($row['needsstock']) ? $txt['seller_text_na']  : $row['qtyinstock']),'</td>
			<td>',$row['maximpressions'],'</td>
			<td>',$row['expiredays'],'</td>
			<td>',(empty($row['startdate']) ? '' : timeformat($row['startdate'])) ,'</td>
			<td>',(empty($row['enddate']) ? '' : timeformat($row['enddate'])),'</td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=packedit&amp;id=' . $row['ID_PACKAGE'] . '">',$txt['seller_text_edit2'],'</a><br />
			<a href="',$scripturl,'?action=admin;area=adpro;sa=packdel&amp;id=' . $row['ID_PACKAGE'] . '">',$txt['seller_text_delete2'],'</a>
			</td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="8">
				' . $txt['seller_text_pages'];

		$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=adpro;sa=adpackages', $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>';


	adseller_copyright();
}

function template_ad_packages_add()
{
	global $scripturl, $txt, $context, $smcFunc, $settings;

	// Load the spell checker?
	if ($context['show_spellchecking'])
		echo '
									<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/scripts/spellcheck.js"></script>';

	echo '
        <div class="cat_bar">
		<h3 class="catbg centertext">
        ' .  $txt['seller_txt_add_package'] . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=packadd2"  onsubmit="submitonce(this);">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64"  /></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_description'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">    <table>
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
		<td colspan="2">';
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


   echo '</table>';

   	if ($context['show_spellchecking'])
   		echo '
   									<br /><input type="button" value="', $txt['spell_check'], '" onclick="spellCheck(\'adsellerform\', \'descript\');" />';
echo '</td>
  </tr>

   <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_txt_price'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="price" size="64" value="0.00"  /></td>
  </tr>

 <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_text_impressions'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="maximpressions" size="64" value="0"  /><br />
    <span class="smalltext">',$txt['seller_text_impressions_note'],'</span>
    </td>
  </tr>


    <tr  class="windowbg2">
    <td width="28%"  valign="top" align="right"><b>' . $txt['seller_txt_max_impressoins_per_day'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="maximpressionsperday" size="15" value="0"  />
    <span class="smalltext">',$txt['seller_txt_max_impressoins_per_day_note'],'</span>
    </td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_expire_days'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="expiredays" size="64" value="0"  /><br />
    <span class="smalltext">',$txt['seller_txt_expire_days_note'],'</span>
    </td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_needs_stock'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="needsstock"  /></td>
  </tr>
   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_qty_available'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="qtyinstock" size="64" value="0"  />
    	<br />
    	<span class="smalltext">',$txt['seller_txt_qty_available_note'],'</span>

    </td>
  </tr>


	<tr class="windowbg2">
		 <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_start_date'].'</b>&nbsp;</td>
    	<td width="72%"  class="windowbg2">

    	<select name="startmonth">
    	<option value="0"></option>';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '">' . date("M",mktime(0,0,0,$i+1,0,0)) . '</option>';

	echo '
    	</select>

    	<select name="startday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	<select name="startyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>

	<tr class="windowbg2">
		 <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_end_date'].'</b>&nbsp;</td>
    	<td width="72%"  class="windowbg2">

    	<select name="endmonth">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '">' . date("M",mktime(0,0,0,$i+1,0,0)) .  '</option>';

	echo '
    	</select>

    	<select name="endday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	<select name="endyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>



  <tr class="windowbg2">
  	<td colspan="2" align="center"><hr />
  	<b>',$txt['seller_txt_subscriptionsettings'] ,'</b></td>
  </tr>
    <tr class="windowbg2">
    <td width="28%"  align="right" valign="top"></td>
    <td width="72%"><input type="checkbox" name="issubscription" /><b>',$txt['seller_txt_issubscription'],'</b></td>
  </tr>
     <tr class="windowbg2">
    <td width="28%"  align="right"><b>' .$txt['seller_txt_billing_cycle'] . '</b>&nbsp;</td>
    <td width="72%">
    <select name="cycleamount">';

	for($i = 1; $i < 31; $i++)
		echo '<option value="',$i,'">',$i,'</option>';

echo '
    </select>
    <select name="cycletype">
    <option value="D">',$txt['seller_txt_billing_cycle_days'],'</option>
    <option value="W">',$txt['seller_txt_billing_cycle_weeks'],'</option>
    <option value="M" selected="selected">',$txt['seller_txt_billing_cycle_months'],'</option>
    </select>
    </td>
  </tr>
    <tr class="windowbg2" >
    <td width="28%" align="right"><b>' . $txt['seller_txt_billing_cycle_stop'] . '</b>&nbsp;</td>
    <td width="72%">   <select name="stopcycle">
    <option value="0">',$txt['seller_txt_billing_cycle_stop_never'],'</option>
    ';

	for($i = 2; $i < 31; $i++)
		echo '<option value="',$i,'">',$i,'</option>';

echo '
    </select></td>
  </tr>



    <tr class="windowbg2">
  	<td colspan="2" align="center"><hr />
  	</td>
  </tr>



	<tr class="windowbg2">
		<td valign="top" align="right"><b>' . $txt['seller_ad_locations'] . '</b></td>

		<td>
		<input type="checkbox" id="checkAllGroups" onclick="invertAll(this, this.form, \'location\');" class="check" />',
$txt['seller_txt_check_all'],'<br />
		';

		// Get all the locations
		$result = $smcFunc['db_query']('', "
		SELECT
			ID_LOCATION, title, disabled
		FROM {db_prefix}seller_ad_location
		WHERE removed = 0");
		while ($row = $smcFunc['db_fetch_assoc']($result))
		{
			echo '<input type="checkbox" name="location[' . $row['ID_LOCATION'] . ']" value="' . $row['ID_LOCATION'] . '" />' . $row['title'] . ($row['disabled'] == 1 ? ' <font color="#FF0000">' . $txt['seller_text_disabled'] . '</font>' : '') . '<br />';

		}
		$smcFunc['db_free_result']($result);

		echo '</td>
	</tr>


    <tr class="windowbg2">
    <td width="28%" colspan="2" align="center">
    <input type="submit" value="' . $txt['seller_txt_add_package']  . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>
  ';

	if ($context['show_spellchecking'])
			echo '<form action="', $scripturl, '?action=spellcheck" method="post" accept-charset="', $context['character_set'], '" name="spell_form" id="spell_form" target="spellWindow"><input type="hidden" name="spellstring" value="" /></form>';

	adseller_copyright();
}

function template_ad_packages_edit()
{
	global $scripturl, $txt, $context, $smcFunc, $settings;

	// Load the spell checker?
	if ($context['show_spellchecking'])
		echo '
									<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/scriptst/spellcheck.js"></script>';

	echo '
            <div class="cat_bar">
		<h3 class="catbg centertext">
        ' .  $txt['seller_txt_edit_package'] . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=packedit2"  onsubmit="submitonce(this);">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64" value="' . $context['ad_seller_edit_package']['title'] . '"  /></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_description'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">    <table>
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
		<td colspan="2">';
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


   echo '</table>';

   	if ($context['show_spellchecking'])
   		echo '
   									<br /><input type="button" value="', $txt['spell_check'], '" onclick="spellCheck(\'adsellerform\', \'descript\');" />';
echo '</td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" valign="top"  align="right"><b>' . $txt['seller_txt_price'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="price" size="64" value="' . $context['ad_seller_edit_package']['price'] . '"  /></td>
  </tr>

 <tr>
    <td width="28%"  class="windowbg2"  valign="top" align="right"><b>' . $txt['seller_text_impressions'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="maximpressions" size="64" value="' . $context['ad_seller_edit_package']['maximpressions'] . '"  /><br />
    <span class="smalltext">',$txt['seller_text_impressions_note'],'</span>
    </td>
  </tr>


    <tr class="windowbg2">
    <td width="28%"  valign="top" align="right"><b>' . $txt['seller_txt_max_impressoins_per_day'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="maximpressionsperday" size="15" value="' . $context['ad_seller_edit_package']['maximpressionsperday'] . '"  />
    <span class="smalltext">',$txt['seller_txt_max_impressoins_per_day_note'],'</span>
    </td>
  </tr>

  <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_txt_expire_days'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="expiredays" size="64" value="' . $context['ad_seller_edit_package']['expiredays'] . '"  /><br />
    <span class="smalltext">',$txt['seller_txt_expire_days_note'],'</span>
    </td>
  </tr>

   <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_txt_needs_stock'].'</b>&nbsp;</td>
    <td width="72%"><input type="checkbox" name="needsstock" ' . ($context['ad_seller_edit_package']['needsstock'] ? ' checked="checked" ' : '') .'  /></td>
  </tr>
   <tr class="windowbg2">
    <td width="28%"  align="right"><b>' . $txt['seller_txt_qty_available'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="qtyinstock" size="64" value="' . $context['ad_seller_edit_package']['qtyinstock'] . '"  />
    	<br />
    	<span class="smalltext">',$txt['seller_txt_qty_available_note'],'</span>

    </td>
  </tr>


	<tr class="windowbg2">
		 <td width="28%" align="right"><b>' . $txt['seller_start_date'].'</b>&nbsp;</td>
    	<td width="72%">

    	<select name="startmonth">
    	<option value="0"></option>';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '"  ' .( date("n",$context['ad_seller_edit_package']['startdate']) == $i && !empty($context['ad_seller_edit_package']['startdate'])  ?  ' selected="selected"' : '') . '>' . date("M",mktime(0,0,0,$i+1,0,0)) . '</option>';

	echo '
    	</select>

    	<select name="startday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '" ' .( date("j",$context['ad_seller_edit_package']['startdate']) == $i && !empty($context['ad_seller_edit_package']['startdate']) ?   ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	<select name="startyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '" ' .( date("Y",$context['ad_seller_edit_package']['startdate']) == $i && !empty($context['ad_seller_edit_package']['startdate'])  ?  ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>

	<tr class="windowbg2">
		 <td width="28%" align="right"><b>' . $txt['seller_end_date'].'</b>&nbsp;</td>
    	<td width="72%">

    	<select name="endmonth">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '" ' .( date("n",$context['ad_seller_edit_package']['enddate']) == $i  && !empty($context['ad_seller_edit_package']['enddate'])  ?  ' selected="selected"' : '') . '>' . date("M",mktime(0,0,0,$i+1,0,0)) .  '</option>';

	echo '
    	</select>

    	<select name="endday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '" ' .( date("j",$context['ad_seller_edit_package']['enddate']) == $i  && !empty($context['ad_seller_edit_package']['enddate']) ?  ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	<select name="endyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '" ' .( date("Y",$context['ad_seller_edit_package']['enddate']) == $i  && !empty($context['ad_seller_edit_package']['enddate']) ?  ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>




  <tr class="windowbg2">
  	<td colspan="2" align="center"><hr />
  	<b>',$txt['seller_txt_subscriptionsettings'] ,'</b></td>
  </tr>
    <tr class="windowbg2">
    <td width="28%" align="right" valign="top"></td>
    <td width="72%"><input type="checkbox" name="issubscription" ' . ($context['ad_seller_edit_package']['is_subscription'] ? ' checked="checked" ' : '') . ' /><b>',$txt['seller_txt_issubscription'],'</b></td>
  </tr>
     <tr class="windowbg2">
    <td width="28%"  align="right"><b>' .$txt['seller_txt_billing_cycle'] . '</b>&nbsp;</td>
    <td width="72%">
    <select name="cycleamount">';

	for($i = 1; $i < 31; $i++)
		echo '<option value="',$i,'" ' . ($context['ad_seller_edit_package']['subscribe_cycle_duration'] == $i ? ' selected="selected" ' : '') . '>',$i,'</option>';

echo '
    </select>
    <select name="cycletype">
    <option value="D"  ' . ($context['ad_seller_edit_package']['subscribe_cycle_type'] == 'D' ? ' selected="selected" ' : '') . '>',$txt['seller_txt_billing_cycle_days'],'</option>
    <option value="W" ' . ($context['ad_seller_edit_package']['subscribe_cycle_type'] == 'W' ? ' selected="selected" ' : '') . '>',$txt['seller_txt_billing_cycle_weeks'],'</option>
    <option value="M" ' . ($context['ad_seller_edit_package']['subscribe_cycle_type'] == 'M' ? ' selected="selected" ' : '') . '>',$txt['seller_txt_billing_cycle_months'],'</option>
    </select>
    </td>
  </tr>
    <tr class="windowbg2">
    <td width="28%"  align="right"><b>' . $txt['seller_txt_billing_cycle_stop'] . '</b>&nbsp;</td>
    <td width="72%"><select name="stopcycle">
    <option value="0">',$txt['seller_txt_billing_cycle_stop_never'],'</option>
    ';

	for($i = 2; $i < 31; $i++)
		echo '<option value="',$i,'" ' . ($context['ad_seller_edit_package']['subscribe_cycle_times'] == $i ? ' selected="selected" ' : '') . '>',$i,'</option>';

echo '
    </select></td>
  </tr>



    <tr class="windowbg2">
  	<td colspan="2" align="center"><hr />
  	</td>
  </tr>


	<tr class="windowbg2">
		<td valign="top" align="right"><b>' . $txt['seller_ad_locations'] . '</b></td>

		<td>
		<input type="checkbox" id="checkAllGroups" onclick="invertAll(this, this.form, \'location\');" class="check" />',
$txt['seller_txt_check_all'],'<br />
		';

		$adLocations = explode(",",$context['ad_seller_edit_package']['adlocations']);

		// Get all the locations
		$result = $smcFunc['db_query']('', "
		SELECT
			ID_LOCATION, title, disabled
		FROM {db_prefix}seller_ad_location
		WHERE removed = 0");
		while ($row = $smcFunc['db_fetch_assoc']($result))
		{
			echo '<input type="checkbox" name="location[' . $row['ID_LOCATION'] . ']" ' . (in_array($row['ID_LOCATION'],$adLocations)  ? ' checked="checked" ' : '') . ' value="' . $row['ID_LOCATION'] . '" />' . $row['title'] . ($row['disabled'] == 1 ? ' <font color="#FF0000">' . $txt['seller_text_disabled'] . '</font>' : '') . '<br />';

		}
		$smcFunc['db_free_result']($result);

		echo '</td>
	</tr>


    <tr class="windowbg2">
    <td width="28%" colspan="2" align="center">
    <input type="hidden" name="id" value="' . $context['ad_seller_edit_package']['ID_PACKAGE'] .  '" />
    <input type="submit" value="' . $txt['seller_txt_edit_package']  . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>
  ';

	if ($context['show_spellchecking'])
			echo '<form action="', $scripturl, '?action=spellcheck" method="post" accept-charset="', $context['character_set'], '" name="spell_form" id="spell_form" target="spellWindow"><input type="hidden" name="spellstring" value="" /></form>';


	adseller_copyright();
}

function template_admin_manage_ads()
{
	global $txt, $context, $scripturl, $smcFunc, $AdSellerSettings;

	$context['adpro']['buttons_set']['addad'] =  array(
							'text' => 'seller_txt_add_ad',
							'url' => $scripturl . '?action=admin;area=adpro;sa=addad',
							'lang' => true,
							'is_selected' => true,
					);

	echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
							<table cellpadding="0" cellspacing="0" align="left"  >
									<tr>
						', AdSellerToolBarStrip($context['adpro']['buttons_set'], 'bottom'), '
							</tr>
							</table>
				</td>
						</tr>
					</table>';
	echo '
    <form action="'.$scripturl . '?action=admin;area=adpro;sa=bulkactions" method="post">
    <table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" class="table_grid">
	<thead>
	<tr class="catbg">
                <th scope="col" class="smalltext firs_th"> </th>
				<th scope="col" class="smalltext">', $txt['seller_text_title'] , '</th>
				<th scope="col" class="smalltext">', $txt['seller_revenue_share2'],'</th>
				<th scope="col" class="smalltext">', $txt['seller_text_impressions2'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_clicks'], '</th>
                <th scope="col" class="smalltext">', $txt['seller_end_date'], '</th>

				<th scope="col" class="smalltext">', $txt['seller_text_membername'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_approved'], '</th>
				<th scope="col" class="smalltext last_th">', $txt['seller_text_options'], '</th>
				</tr>
                </thead>';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_ad
		WHERE removed = 0
		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			a.ID_AD, a.title, a.approved, a.ID_MEMBER, a.total_views, a.impressionslimit,
			a.clickslimit, a.total_clicks, a.isrevshare, m.real_name, a.adtype, a.maximpressionsperday ,
			a.todayimpressions, a.enddate
		FROM {db_prefix}seller_ad AS a
		LEFT JOIN {db_prefix}members AS m ON (a.ID_MEMBER = m.ID_MEMBER)
		WHERE a.removed = 0
		ORDER BY a.ID_AD DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{

		$approvalStatus = $txt['seller_text_pending'];

		if ($row['approved'] == 1)
			$approvalStatus = $txt['seller_text_approved'];

		if ($row['approved'] == 2)
			$approvalStatus = $txt['seller_text_rejected'];

       if ($row['approved'] == 3)
			$approvalStatus = $txt['seller_text_paused'];


		echo '
		<tr class="' . $styleClass . '">
            <td><input type="checkbox" name="ads[' . $row['ID_AD'] . ']" value="' . $row['ID_AD'] . '" /></td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=editad&amp;id=' . $row['ID_AD'] . '">',$row['title'],'</a></td>
			<td>',($row['isrevshare'] == 1 ? $txt['seller_txt_yes'] : $txt['seller_txt_no']) ,'</td>
			<td><a href="' . $scripturl . '?action=adpro;sa=viewviews&amp;id=' . $row['ID_AD'] . '">',$row['total_views'],'</a>
			';

				if ($row['maximpressionsperday'] != 0)
					echo '<br />(' . $row['todayimpressions']. '/' . $row['maximpressionsperday'] . ')';

			echo '
			</td>
			<td>',($row['adtype'] == 3 ? $txt['seller_text_na'] : '<a href="' . $scripturl . '?action=adpro;sa=viewclicks&amp;id=' . $row['ID_AD'] . '">' . $row['total_clicks'] . '</a>'),'</td>
            <td>',(empty($row['enddate']) ? '' : timeformat($row['enddate'])),'</td>
			<td>';

				if (empty($row['real_name']))
					echo $txt['seller_text_guest'];
				else
					echo '<a href="',$scripturl,'?action=profile;u=',$row['ID_MEMBER'],'">',$row['real_name'],'</a>';

		echo '
			</td>
			<td>',$approvalStatus,'</td>
			<td>';

            if ($AdSellerSettings['seller_reportslogdateviewclick'] == 1)
                echo '<a href="',$scripturl,'?action=admin;area=adpro;sa=reports&amp;id=' . $row['ID_AD'] . '">',$txt['seller_txt_reports2'],'</a>';


            echo '<a href="',$scripturl,'?action=admin;area=adpro;sa=editad&amp;id=' . $row['ID_AD'] . '">',$txt['seller_text_edit2'],'</a>
			<a href="',$scripturl,'?action=admin;area=adpro;sa=deletead&amp;id=' . $row['ID_AD'] . '">',$txt['seller_text_delete2'],'</a>
			</td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '
<tr class="titlebg">
				<td align="left" colspan="9">
				<div align="right">
				<select name="doaction">
				<option value=""></option>
				<option value="approve">' . $txt['seller_txt_approve'] . '</option>
                <option value="pending">' . $txt['seller_text_pending'] . '</option>
				<option value="reject">' . $txt['seller_txt_reject']. '</option>
				</select>
				<input type="submit" value="' . $txt['seller_show_go'] . '" />

		</div>
			</td>
	</tr>

        <tr class="titlebg">
				<td align="left" colspan="9">
				' . $txt['seller_text_pages'];

		$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=adpro;sa=manageads', $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>
    </form>';


	adseller_copyright();
}

function template_admin_ad_locations()
{
	global $txt, $smcFunc, $context, $scripturl, $AdSellerSettings;

	$context['adpro']['buttons_set']['addlocation'] =  array(
							'text' => 'seller_txt_add_location',
							'url' => $scripturl . '?action=admin;area=adpro;sa=addlocation',
							'lang' => true,
							'is_selected' => true,
					);


	echo '<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
							<table cellpadding="0" cellspacing="0" align="left"  >
									<tr>
						', AdSellerToolBarStrip($context['adpro']['buttons_set'], 'bottom'), '
							</tr>
							</table>
				</td>
						</tr>
					</table>';
	echo '<table cellspacing="0" cellpadding="10" border="0" class="table_grid" align="center" width="100%">
	<thead>
	<tr class="catbg">
                <th scope="col" class="smalltext first_th">', $txt['seller_txt_locationid'] , '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_title'] , '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_status'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_location_code'], '</th>
				<th scope="col" class="smalltext last_th">', $txt['seller_text_options'], '</th>
				</tr>
    </thead>
                ';


	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_ad_location
		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			ID_LOCATION, title, disabled
		FROM {db_prefix}seller_ad_location
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '
		<tr class="' . $styleClass . '">
            <td>',$row['ID_LOCATION'],'</td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=editlocation&amp;id=' . $row['ID_LOCATION'] . '">',$row['title'],'</a></td>
			<td>',($row['disabled'] == 0 ? $txt['seller_text_enabled'] : $txt['seller_text_disabled']),'</td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=locationcode&amp;id=' . $row['ID_LOCATION'] . '">',$txt['seller_text_getcode'],'</a></td>
			<td><a href="',$scripturl,'?action=admin;area=adpro;sa=editlocation&amp;id=' . $row['ID_LOCATION'] . '">',$txt['seller_text_edit2'],'</a>';

			if ($AdSellerSettings['seller_loglocationviewsbydate'])
			{
				echo ' <a href="',$scripturl,'?action=admin;area=adpro;sa=locationstats&amp;id=' . $row['ID_LOCATION'] . '">' .  $txt['seller_txt_view_stats'] . '</a>';
			}

		echo '</td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="5">
				' . $txt['seller_text_pages'];

				$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=adpro;sa=adlocations', $_REQUEST['start'], $numofrows, 10);

				echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>';

	adseller_copyright();
}

function template_add_location()
{
	global $txt, $context, $scripturl, $settings;

	// Load the spell checker?
	if ($context['show_spellchecking'])
		echo '
									<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/scripts/spellcheck.js"></script>';

	echo '
    <div class="cat_bar">
		<h3 class="catbg centertext">
        ' .  $txt['seller_txt_add_location'] . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=addlocation2"  onsubmit="submitonce(this);">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="title" size="64"  /></td>
  </tr>

  <tr class="windowbg2">
   <td width="28%"  align="right"><b>' . $txt['seller_text_enabled'].'</b>&nbsp;</td>
   <td width="72%"><select name="disabled">
   <option value="0">' . $txt['seller_text_enabled'].'</option>
   <option value="1">' . $txt['seller_text_disabled'].'</option>
   </select>

   </td>
  </tr>

  <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_text_description'].'</b>&nbsp;</td>
    <td width="72%">    <table>
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
		<td colspan="2">';
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


   echo '</table>';

   	if ($context['show_spellchecking'])
   		echo '
   									<br /><input type="button" value="', $txt['spell_check'], '" onclick="spellCheck(\'adsellerform\', \'descript\');" />';
echo '</td>
  </tr>

   <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_text_adspacewidth'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="adspacewidth" size="10" value="0" /></td>
  </tr>

    <tr class="windowbg2">
    <td width="28%" align="right"><b>' . $txt['seller_text_adspaceheight'].'</b>&nbsp;</td>
    <td width="72%"><input type="text" name="adspaceheight" size="10" value="0" /></td>
  </tr>

  <tr class="windowbg2">
    <td width="28%" align="right">&nbsp;</td>
    <td width="72%"><input type="checkbox" name="mustusefullsize" /><b>' . $txt['seller_text_mustusefullsize'].'</b></td>
  </tr>

   <tr class="windowbg2">
    <td width="28%" align="right">&nbsp;</td>
    <td width="72%"><input type="checkbox" name="allowimages" /><b>' . $txt['seller_text_allowimages'].'</b></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowtextlinks" /><b>' . $txt['seller_text_allowtextlinks'].'</b></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowlinkwords" /><b>' . $txt['seller_txt_allowlinkwords'] .'</b></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowrevshare" /><b>' . $txt['seller_text_allowrevshare'].'</b></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="showbuyadspacelink" /><b>' . $txt['seller_text_showbuyadspacelink'].'</b></td>
  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_membergroups'].'</b>&nbsp;<br /><span class="smalltext">' . $txt['seller_text_membergroups_note'] . '</span></td>
    <td width="72%"  class="windowbg2">
    	<input type="checkbox" id="checkAllGroups" onclick="invertAll(this, this.form, \'groups\');" class="check" />',
$txt['seller_txt_check_all'],'<br />

    	    <input type="checkbox" name="groups[-1]" value="-1" checked="checked" />',$txt['seller_text_guests'],'<br />
		    <input type="checkbox" name="groups[0]" value="0" checked="checked" />',$txt['seller_text_members'],'<br />';

			foreach ($context['groups'] as $group)
					echo '<input type="checkbox" name="groups[', $group['ID_GROUP'], ']" value="', $group['ID_GROUP'], '" checked="checked" />', $group['groupName'], '<br />';

echo '

    </td>
  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_boards'] .'</b>&nbsp;<br /><span class="smalltext">' . $txt['seller_text_boards_note'] . '</span></td>
    <td width="72%"  class="windowbg2">
    <input type="checkbox" name="showinallboards" id="checkAllGroups2" onclick="invertAll(this, this.form, \'boards\');" class="check" />',$txt['seller_txt_showinallboards'],'<br />
    ';
			foreach ($context['seller_boards'] as $key => $option)
					echo '<input type="checkbox" name="boards[', $key, ']" value="', $key, '" checked="checked" />', $option, '<br />';

echo '

    </td>
  </tr>



    <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
    <input type="submit" value="' . $txt['seller_txt_add_location'] . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>
  ';

	if ($context['show_spellchecking'])
			echo '<form action="', $scripturl, '?action=spellcheck" method="post" accept-charset="', $context['character_set'], '" name="spell_form" id="spell_form" target="spellWindow"><input type="hidden" name="spellstring" value="" /></form>';


	adseller_copyright();
}

function template_view_location_stats()
{
	global $txt, $context, $scripturl, $smcFunc;

	echo '<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
	';

	// Get Location Title
	$result = $smcFunc['db_query']('', "
	SELECT
		ID_LOCATION, title
	FROM {db_prefix}seller_ad_location
	WHERE ID_LOCATION = " . $context['location_views_id']);
	$locationRow = $smcFunc['db_fetch_assoc']($result);


	echo '
	<tr class="titlebg">
		<td align="center" colspan="2">', $locationRow['title'] , '</td>
	</tr>


	<tr class="catbg">
				<td>', $txt['seller_txt_date'] , '</td>
				<td>', $txt['seller_text_impressions'] , '</td>
				</tr>';


	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_location_view_log
		WHERE ID_LOCATION = " . $context['location_views_id'] . "
		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			views, date
		FROM {db_prefix}seller_location_view_log
		WHERE ID_LOCATION =" . $context['location_views_id'] . "
		ORDER BY DATE DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '
		<tr class="' . $styleClass . '">
			<td>',$row['date'],'</td>
			<td>',$row['views'],'</td>
			</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="2">
				' . $txt['seller_text_pages'];

				$context['page_index'] = constructPageIndex($scripturl . '?action=admin;area=adpro;sa=locationstats&amp;id=' . $context['location_views_id'], $_REQUEST['start'], $numofrows, 10);

				echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>';

	adseller_copyright();
}


function template_edit_location()
{
	global $txt, $context, $scripturl, $settings;

	// Load the spell checker?
	if ($context['show_spellchecking'])
		echo '
									<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/scripts/spellcheck.js"></script>';

	echo '
    <div class="cat_bar">
		<h3 class="catbg centertext">
        ' . $txt['seller_txt_edit_location'] . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=editlocation2"  onsubmit="submitonce(this);">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64" value="' . $context['seller_locationrow']['title'] . '"  /></td>
  </tr>

  <tr>
   <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_enabled'].'</b>&nbsp;</td>
   <td width="72%"  class="windowbg2"><select name="disabled">
   <option value="0" ' . ($context['seller_locationrow']['disabled'] == 0 ? ' selected="selected" ' : '') . '>' . $txt['seller_text_enabled'].'</option>
   <option value="1" ' . ($context['seller_locationrow']['disabled'] == 1 ? ' selected="selected" ' : '') . '>' . $txt['seller_text_disabled'].'</option>
   </select>

   </td>
  </tr>


  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_description'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">    <table>
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
		<td colspan="2">';
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


   echo '</table>';

   	if ($context['show_spellchecking'])
   		echo '
   									<br /><input type="button" value="', $txt['spell_check'], '" onclick="spellCheck(\'adsellerform\', \'descript\');" />';
echo '</td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_adspacewidth'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="adspacewidth" size="10" value="' . $context['seller_locationrow']['adspacewidth'] . '" /></td>
  </tr>

    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_adspaceheight'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="adspaceheight" size="10" value="' . $context['seller_locationrow']['adspaceheight'] . '" /></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="mustusefullsize" ' . ($context['seller_locationrow']['mustusefullsize'] ? ' checked="checked" ' : '') . ' /><b>' . $txt['seller_text_mustusefullsize'].'</b></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowimages" ' . ($context['seller_locationrow']['allowimages'] ? ' checked="checked" ' : '') . ' /><b>' . $txt['seller_text_allowimages'].'</b></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowtextlinks" ' . ($context['seller_locationrow']['allowtextlinks'] ? ' checked="checked" ' : '') . ' /><b>' . $txt['seller_text_allowtextlinks'].'</b></td>
  </tr>

    <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowlinkwords" ' . ($context['seller_locationrow']['allowlinkwords'] ? ' checked="checked" ' : '') . ' /><b>' . $txt['seller_txt_allowlinkwords'] .'</b></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="allowrevshare" ' . ($context['seller_locationrow']['allowrevshare'] ? ' checked="checked" ' : '') . ' /><b>' . $txt['seller_text_allowrevshare'].'</b></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right">&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="showbuyadspacelink" ' . ($context['seller_locationrow']['showbuyadspacelink'] ? ' checked="checked" ' : '') . ' /><b>' . $txt['seller_text_showbuyadspacelink'].'</b></td>
  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_membergroups'].'</b>&nbsp;<br /><span class="smalltext">' . $txt['seller_text_membergroups_note'] . '</span></td>
    <td width="72%"  class="windowbg2">
    <input type="checkbox" id="checkAllGroups" onclick="invertAll(this, this.form, \'groups\');" class="check" />',
$txt['seller_txt_check_all'],'<br />
    ';


		$groupArray = explode(",",$context['seller_locationrow']['membergroups']);

echo '
    	    <input type="checkbox" name="groups[-1]" value="-1" ' . (in_array(-1,$groupArray) ? ' checked="checked" ' : '') . ' />',$txt['seller_text_guests'],'<br />
		    <input type="checkbox" name="groups[0]" value="0" ' . (in_array(0,$groupArray) ? ' checked="checked" ' : '') . ' />',$txt['seller_text_members'],'<br />';


			foreach ($context['groups'] as $group)
					echo '<input type="checkbox" name="groups[', $group['ID_GROUP'], ']" value="', $group['ID_GROUP'], '" ' . (in_array($group['ID_GROUP'],$groupArray) ? ' checked="checked" ' : '') . ' />', $group['groupName'], '<br />';

echo '

    </td>
  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_boards'] .'</b>&nbsp;<br /><span class="smalltext">' . $txt['seller_text_boards_note'] . '</span></td>
    <td width="72%"  class="windowbg2">
        <input type="checkbox" id="checkAllGroups2" onclick="invertAll(this, this.form, \'boards\');" class="check" / name="showinallboards"  ' . ($context['seller_locationrow']['showinallboards'] ? ' checked="checked" ' : '') . '  />',$txt['seller_txt_showinallboards'],'<br />
    ';

		$boardsArray = explode(",",$context['seller_locationrow']['boards']);


			foreach ($context['seller_boards'] as $key => $option)
					echo '<input type="checkbox" name="boards[', $key, ']" value="', $key, '" ' . (in_array($key,$boardsArray) ? ' checked="checked" ' : '') .'  />', $option, '<br />';

echo '

    </td>
  </tr>

    <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
    <input type="hidden" name="id" value="' . $context['seller_locationrow']['ID_LOCATION'] . '" />
    <input type="submit" value="' . $txt['seller_txt_edit_location'] . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>
  ';

	if ($context['show_spellchecking'])
			echo '<form action="', $scripturl, '?action=spellcheck" method="post" accept-charset="', $context['character_set'], '" name="spell_form" id="spell_form" target="spellWindow"><input type="hidden" name="spellstring" value="" /></form>';

	adseller_copyright();
}

function template_delete_location()
{
	global $txt;

	adseller_copyright();
}

function template_get_ad_location_code()
{
	global $txt, $context, $smcFunc, $AdSellerSettings, $boardurl;

	// Get the name on the location code
	$result = $smcFunc['db_query']('', "
	SELECT
		ID_LOCATION, title, description, membergroups, boards, adspacewidth, adspaceheight,
		mustusefullsize, allowimages, allowtextlinks, allowrevshare, showbuyadspacelink
	FROM {db_prefix}seller_ad_location
	WHERE ID_LOCATION = " . $context["seller_location_id"]);
	$locationRow = $smcFunc['db_fetch_assoc']($result);
	$smcFunc['db_free_result']($result);

	$locationText = $txt['seller_location_php_code'];

	$locationText = str_replace("%title",$locationRow['title'],$locationText);
	$locationText = str_replace("%code",$locationRow['ID_LOCATION'],$locationText);
	$locationText = str_replace("adseller.php","adseller2.php",$locationText);
    $locationText2 = '<iframe src="' . $boardurl . '/adsellerframe2.php?ad=' . $locationRow['ID_LOCATION'] . '" frameborder="0"></iframe>';


		echo '
       <div class="cat_bar">
		<h3 class="catbg centertext">
        ' . $txt['seller_txt_location_code'] . '
        </h3>
  </div>

        <div class="tborder">

<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr class="windowbg2">
  	<td>',$txt['seller_location_php_code_note'] ,'
  	</td>
  </tr>
    <tr class="windowbg2">
    <td>
   		<textarea rows="20" cols="50" style="width: 99%">' .$locationText . '</textarea>
    </td>
  </tr>
      <tr  class="catbg">
    <td width="50%"align="center">
    <b>' . $txt['seller_txt_iframe_code']. '</b></td>
  </tr>
      <tr class="windowbg2">
    <td>
   		<textarea rows="3" cols="50" style="width: 99%">' .$locationText2 . '</textarea>
    </td>
  </tr>
 </table>
 </div>';


	adseller_copyright();
}

function template_add_ad()
{
	global $txt, $scripturl, $smcFunc, $AdSellerSettings, $context;

	echo '
    <div class="cat_bar">
		<h3 class="catbg centertext">
        ' . $txt['seller_txt_add_ad']  . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=addad2">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64"  /></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_ad_type'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="adtype" onchange="ToogleAdType(adtype.options[adtype.selectedIndex].value)">
    	<option value="1">',$txt['seller_ad_type_textlink'] ,'</option>
    	<option value="2">',$txt['seller_ad_type_banner'] ,'</option>
    	<option value="3">',$txt['seller_ad_type_code'] ,'</option>
    	<option value="4">',$txt['seller_ad_type_linkedword'] ,'</option>
    </select>
    </td>
  </tr>


    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_align'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="align">
    	<option value="0"></option>
    	<option value="1">',$txt['seller_txt_left'] ,'</option>
    	<option value="2">',$txt['seller_txt_center'] ,'</option>
    	<option value="3">',$txt['seller_txt_right'] ,'</option>
    </select>
    </td>
    </tr>


  <tr class="windowbg2">
  		<td colspan="2" align="center">
  ';

  // Linked word textboxes
  echo '<table id="adtypeword" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_txt_word'] . '</b></td>
			 	<td><input type="text" name="linkword" size="50" />
			 	<br /><span class="smalltext">',$txt['seller_txt_word_more'] ,'</span>

			 	</td>
			 </tr>
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="linkwordurl" size="50" /></td>
			 </tr>

	</table>
	';


  // Textlink Specific boxes
	echo '<table id="adtypetext" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_color" value="#FFFFFF" size="10" onChange="UpdateImage(\'ad_bg_color\');return false;" /><span id="sq_ad_bg_color" name="sq_ad_bg_color" style="background-color: #FFFFFF" onClick="cp.select(document.adsellerform.sq_ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;" name="pick" id="pick">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_border_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_border_color" size="10" value="#FFFFFF"  onChange="UpdateImage(\'ad_bg_border_color\');return false;" /><span id="sq_ad_bg_border_color" name="sq_ad_bg_border_color" style="background-color: #FFFFFF" onClick="cp.select(document.adsellerform.sq_ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;" name="pick2" id="pick2">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_title_text']. '</b></td>
			 	<td><input type="text" name="ad_title" size="50" /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_title_color']. '</b></td>
			 	<td><input type="text" name="ad_title_color" size="10" value="#0000FF"   onChange="UpdateImage(\'ad_title_color\');return false;" /><span id="sq_ad_title_color" name="sq_ad_title_color" style="background-color: #0000FF" onClick="cp.select(document.adsellerform.sq_ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;" name="pick3" id="pick3">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_body_text']. '</b></td>
			 	<td><input type="text" name="ad_body" size="50" /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_body_color']. '</b></td>
			 	<td><input type="text" name="ad_body_color" size="10" value="#000000"  onChange="UpdateImage(\'ad_body_color\');return false;" /><span id="sq_ad_body_color" name="sq_ad_body_color" style="background-color: #000000" onClick="cp.select(document.adsellerform.sq_ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;" name="pick4" id="pick4">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="ad_url" size="50" /></td>
			 </tr>

			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_link_text']. '</b></td>
			 	<td><input type="text" name="ad_link" size="50" /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_link_color']. '</b></td>
			 	<td><input type="text" name="ad_link_color" size="10" value="#008000"  onChange="UpdateImage(\'ad_link_color\');return false;" /><span id="sq_ad_link_color" name="sq_ad_link_color" style="background-color: #008000" onClick="cp.select(document.adsellerform.sq_ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;" name="pick5" id="pick5">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>

	</table>
	';

  // Banner Specific Boxes
  echo '<table id="adtypebanner" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_filename'] . '</b></td>
			 	<td><input type="file" name="bannerfile" />
			 	<br /><span class="smalltext">',$txt['seller_ad_allowed_filetypes'] ,' ' .
  				$AdSellerSettings['seller_ad_filetypes'] . '
  </span></td>
  </tr>
	<tr class="windowbg2">
  		<td align="right"><b>', $txt['seller_txt_or'], ' ',$txt['seller_txt_banner_imageurl'],'</b></td><td>
 <input type="text" name="banner_imageurl" size="50" />
		</td>
	 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_url']. '</b></td>
			 	<td><input type="text" name="bannerdestanation" size="50" /></td>
			 </tr>

	</table>
	';


  // Custom Ad Code Boxes
  echo '
  <table id="adtypecustom" style="" width="90%">
		<tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_customadcode'] . '</b></td>
			 	<td>


			 		<textarea name="customadcode" rows="10" cols="50"></textarea>
			 		<br />
			 		<span class="smalltext">' . $txt['seller_customadcode_note'] . '</span>
			 	</td>
			 </tr>

			 	 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_txt_is_php']. '</b></td>
			 	<td><input type="checkbox" name="isphp" /></td>
			 </tr>

	</table>
	';


	echo '
	</td>
	</tr>


  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_show_desktop'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="show_desktop" checked="checked"   /></td>
  </tr>
  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_show_mobile'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="show_mobile" checked="checked"  /></td>
  </tr>


	<tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_impressionslimit'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="impressionslimit" size="15" value="0"  /></td>
  </tr>

    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_max_impressoins_per_day'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="maximpressionsperday" size="15" value="0"  /></td>
  </tr>


  <tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_clickslimit'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="clickslimit" size="15" value="0"   />
    <br /><span class="smalltext">'  . $txt['seller_clickslimit_note'] . '</span>

    </td>
  </tr>


    	<tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_txt_count_ad_impressions'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="countviews" checked="checked" /><br />
    <span class="smalltext">' .$txt['seller_txt_count_ad_impressions_note'] . '</span>
    </td>
  </tr>

      	<tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_txt_subtractclicks'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="subtractclicks" />
    </td>
  </tr>

	<tr class="windowbg2">
		 <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_start_date'].'</b>&nbsp;</td>
    	<td width="72%"  class="windowbg2">

    	<select name="startmonth">
    	<option value="0"></option>';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '">' . date("M",mktime(0,0,0,$i+1,0,0)) . '</option>';

	echo '
    	</select>

    	<select name="startday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	<select name="startyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>

	<tr class="windowbg2">
		 <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_end_date'].'</b>&nbsp;</td>
    	<td width="72%"  class="windowbg2">

    	<select name="endmonth">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '">' . date("M",mktime(0,0,0,$i+1,0,0)) .  '</option>';

	echo '
    	</select>

    	<select name="endday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	<select name="endyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '">' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>


	<tr class="windowbg2">
		<td valign="top" align="right"><b>' . $txt['seller_ad_locations'] . '</b></td>

		<td>
		<input type="checkbox" id="checkAllGroups" onclick="invertAll(this, this.form, \'location\');" class="check" />',
$txt['seller_txt_check_all'],'<br />
		';

		// Get all the locations
		$result = $smcFunc['db_query']('', "
		SELECT
			ID_LOCATION, title, disabled
		FROM {db_prefix}seller_ad_location
		WHERE removed = 0");
		while ($row = $smcFunc['db_fetch_assoc']($result))
		{
			echo '<input type="checkbox" name="location[' . $row['ID_LOCATION'] . ']" value="' . $row['ID_LOCATION'] . '" />' . $row['title'] . ($row['disabled'] == 1 ? ' <font color="#FF0000">' . $txt['seller_text_disabled'] . '</font>' : '') . '<br />';

		}
		$smcFunc['db_free_result']($result);

		echo '</td>
	</tr>


   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_boards'] .'</b>&nbsp;<br /><span class="smalltext">' . $txt['seller_text_boards_note'] . '</span></td>
    <td width="72%"  class="windowbg2">
    <input type="checkbox" name="showinallboards"  id="checkAllGroups2" onclick="invertAll(this, this.form, \'boards\');" class="check" checked="checked" />',$txt['seller_txt_showinallboards'],'<br />
    ';
			foreach ($context['seller_boards'] as $key => $option)
					echo '<input type="checkbox" name="boards[', $key, ']" value="', $key, '" checked="checked" />', $option, '<br />';

echo '

    </td>
  </tr>
   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

	   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_geoip_countries'] .'</b></td>
    <td width="72%"  class="windowbg2"><select name="geoipcountry[]" multiple="multiple" size="7">';
	foreach($context['seller_geoip_countries'] as $country)
	{

		echo '<option value="' . $country['COUNTRYCODE'] . '">' . $country['COUNTRY'] . '</option>';
	}
	echo '</select>
    </td>
  </tr>

    <tr  class="windowbg2">
    <td width="28%" colspan="2" align="center"><br />
    <input type="submit" value="' . $txt['seller_txt_add_ad'] . '" name="submit" /></td>
  </tr>

  </table>
  </div>



<script language="Javascript" src="' . $AdSellerSettings['seller_url'] . 'scripts/Colorpicker.js"></script>
<script language="JavaScript" type="text/javascript">
var cp = new ColorPicker(\'window\');
var last_selected;

function UpdateImage(imgbox)
{

	document.getElementById(\'sq_\'  + imgbox).style.backgroundColor = document.getElementById(imgbox).value;
}

	ToogleAdType(1);
  	function ToogleAdType(adValue)
  	{
  		// Text
  		if (adValue == 1)
  		{
  			AdHideType("adtypebanner");
  			AdShowType("adtypetext");
  			AdHideType("adtypecustom");
  			AdHideType("adtypeword");
  		}

  		// Banner
  		if (adValue == 2)
  		{
  			AdShowType("adtypebanner");
  			AdHideType("adtypetext");
  			AdHideType("adtypecustom");
  			AdHideType("adtypeword");
  		}

  		// Custom Code
  		if (adValue == 3)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypetext");
  			AdShowType("adtypecustom");
  			AdHideType("adtypeword");
  		}


  		// Linkword type
  		if (adValue == 4)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypetext");
  			AdHideType("adtypecustom");
  			AdShowType("adtypeword");
  		}




  	}



	function AdHideType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "")
			{
				document.getElementById(myAdType).style.display = "none";

			}
		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "")
			{
				document.layers[myAdType].display = "none";

			}
		} else if (document.all) {
			if (document.all[myAdType].style.display == "")
			{
				document.all[myAdType].style.display = "none";

			}
		}
	}

	function AdShowType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "none")
			{
				document.getElementById(myAdType).style.display = "";
			}

		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "none")
			{
				document.layers[myAdType].display = "";
			}

		} else if (document.all) {
			if (document.all[myAdType].style.display == "none")
			{
				document.all[myAdType].style.display = "";

			}

		}
	}
  </script>
  ';

	adseller_copyright();
}

function template_edit_ad()
{
	global $txt, $scripturl, $smcFunc, $AdSellerSettings, $context, $settings;

	echo '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ' . $txt['seller_txt_edit_ad'] . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=editad2">
<table border="0" cellpadding="0" cellspacing="0" width="100%">

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64" value="' . $context['seller_edit_ad']['title'] . '"  /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_approved'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="approved">
    <option value="0" ' . ($context['seller_edit_ad']['approved'] == 0 ? ' selected="selected" ' : '') . '>',$txt['seller_text_pending'],'</option>
    <option value="1" ' . ($context['seller_edit_ad']['approved'] == 1 ? ' selected="selected" ' : '') . '>',$txt['seller_text_approved'],'</option>
    <option value="2" ' . ($context['seller_edit_ad']['approved'] == 2 ? ' selected="selected" ' : '') . '>',$txt['seller_text_rejected'],'</option>
    <option value="3" ' . ($context['seller_edit_ad']['approved'] == 3 ? ' selected="selected" ' : '') . '>',$txt['seller_text_paused'],'</option>

    </select>

    </td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_ad_type'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="adtype" onchange="ToogleAdType(adtype.options[adtype.selectedIndex].value)">
    	<option value="1"  ' . ($context['seller_edit_ad']['adtype'] == 1 ? ' selected="selected" ' : '') . '>',$txt['seller_ad_type_textlink'] ,'</option>
    	<option value="2" ' . ($context['seller_edit_ad']['adtype'] == 2 ? ' selected="selected" ' : '') . '>',$txt['seller_ad_type_banner'] ,'</option>
    	<option value="3" ' . ($context['seller_edit_ad']['adtype'] == 3 ? ' selected="selected" ' : '') . '>',$txt['seller_ad_type_code'] ,'</option>
   	 	<option value="4" ' . ($context['seller_edit_ad']['adtype'] == 4 ? ' selected="selected" ' : '') . '>',$txt['seller_ad_type_linkedword'] ,'</option>
    </select>
    ',($context['seller_edit_ad']['isrevshare'] == 1 ? '(' . $txt['seller_revenue_share'] . ')' : '') ,'
    </td>
  </tr>

       <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_align'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="align">
    	<option value="0" ' . ($context['seller_edit_ad']['align'] == 0 ? ' selected="selected" ' : '') . '></option>
    	<option value="1" ' . ($context['seller_edit_ad']['align'] == 1 ? ' selected="selected" ' : '') . '>',$txt['seller_txt_left'] ,'</option>
    	<option value="2" ' . ($context['seller_edit_ad']['align'] == 2 ? ' selected="selected" ' : '') . '>',$txt['seller_txt_center'] ,'</option>
    	<option value="3" ' . ($context['seller_edit_ad']['align'] == 3 ? ' selected="selected" ' : '') . '>',$txt['seller_txt_right'] ,'</option>
    </select>
    </td>
  </tr>


  <tr class="windowbg2">
  		<td colspan="2" align="center">
  ';


    // Linked word textboxes
  echo '<table id="adtypeword" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_txt_word'] . '</b></td>
			 	<td><input type="text" name="linkword" size="50" value="' . $context['seller_edit_ad']['ad_title'] . '"  />
			 	<br /><span class="smalltext">',$txt['seller_txt_word_more'] ,'</span>

			 	</td>
			 </tr>
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="linkwordurl" size="50" value="' . $context['seller_edit_ad']['ad_url'] . '" /></td>
			 </tr>

	</table>
	';

  // Textlink Specific boxes
	echo '<table id="adtypetext" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_color" value="' . $context['seller_edit_ad']['ad_bg_color'] . '"  size="10" onChange="UpdateImage(\'ad_bg_color\');return false;" /><span id="sq_ad_bg_color" name="sq_ad_bg_color" style="background-color: ' . $context['seller_edit_ad']['ad_bg_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;" name="pick" id="pick">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_border_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_border_color" size="10" value="' . $context['seller_edit_ad']['ad_bg_border_color'] . '"   onChange="UpdateImage(\'ad_bg_border_color\');return false;" /><span id="sq_ad_bg_border_color" name="sq_ad_bg_border_color" style="background-color: ' . $context['seller_edit_ad']['ad_bg_border_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;" name="pick2" id="pick2">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>
			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_title_text']. '</b></td>
			 	<td><input type="text" name="ad_title" size="50" value="' . $context['seller_edit_ad']['ad_title'] . '"  /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_title_color']. '</b></td>
			 	<td><input type="text" name="ad_title_color" size="10" value="' . $context['seller_edit_ad']['ad_title_color'] . '"    onChange="UpdateImage(\'ad_title_color\');return false;" /><span id="sq_ad_title_color" name="sq_ad_title_color" style="background-color: ' . $context['seller_edit_ad']['ad_title_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;" name="pick3" id="pick3">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_body_text']. '</b></td>
			 	<td><input type="text" name="ad_body" size="50" value="' . $context['seller_edit_ad']['ad_body'] . '"  /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_body_color']. '</b></td>
			 	<td><input type="text" name="ad_body_color" size="10" value="' . $context['seller_edit_ad']['ad_body_color'] . '"  onChange="UpdateImage(\'ad_body_color\');return false;" /><span id="sq_ad_body_color" name="sq_ad_body_color" style="background-color: ' . $context['seller_edit_ad']['ad_body_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;" name="pick4" id="pick4">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="ad_url" size="50" value="' . $context['seller_edit_ad']['ad_url'] . '"  /></td>
			 </tr>

			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_link_text']. '</b></td>
			 	<td><input type="text" name="ad_link" size="50" value="' . $context['seller_edit_ad']['ad_link'] . '"  /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_link_color']. '</b></td>
			 	<td><input type="text" name="ad_link_color" size="10" value="' . $context['seller_edit_ad']['ad_link_color'] . '"  onChange="UpdateImage(\'ad_link_color\');return false;" /><span id="sq_ad_link_color" name="sq_ad_link_color" style="background-color: ' . $context['seller_edit_ad']['ad_link_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;" name="pick5" id="pick5">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


	</table>
	';

  // Banner Specific Boxes
  echo '<table id="adtypebanner" style="" width="90%">';

  if (!empty($context['seller_edit_ad']['banner_filename']))
  {
  	echo ' <tr class="windowbg2">
			 	<td colspan="2" align="center"><img src="' .  $AdSellerSettings['seller_url']. $context['seller_edit_ad']['banner_filename'] .'" alt="" /></td>

			 </tr>';

  }

  echo '
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_filename'] . '</b></td>
			 	<td><input type="file" name="bannerfile" />
			 	<br /><span class="smalltext">',$txt['seller_ad_allowed_filetypes'] ,' ' .
  				$AdSellerSettings['seller_ad_filetypes'] . '

  </span>

			 	</td>
			 </tr>
	<tr class="windowbg2">
  		<td align="right"><b>', $txt['seller_txt_or'], ' ',$txt['seller_txt_banner_imageurl'],'</b></td><td>
		 <input type="text" name="banner_imageurl" size="50" value="' . $context['seller_edit_ad']['banner_imageurl'] . '" />
		</td>
	 </tr>


			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_url']. '</b></td>
			 	<td><input type="text" name="bannerdestanation" size="50"  value="' . $context['seller_edit_ad']['banner_url'] . '" /></td>
			 </tr>

	</table>
	';


  // Custom Ad Code Boxes
  echo '
  <table id="adtypecustom" style="" width="90%">
		<tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_customadcode'] . '</b></td>
			 	<td>


			 		<textarea name="customadcode" rows="10" cols="50">' . $context['seller_edit_ad']['customadcode'] . '</textarea>
			 		<br />
			 		<span class="smalltext">' . $txt['seller_customadcode_note'] . '</span>
			 	</td>
			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_txt_is_php']. '</b></td>
			 	<td><input type="checkbox" name="isphp" ' . ($context['seller_edit_ad']['isphp'] == 1 ? ' checked="checked" ' : '') . ' /></td>
			 </tr>


	</table>
	';


	echo '
	</td>
	</tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_show_desktop'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="show_desktop" ' . ($context['seller_edit_ad']['show_desktop'] == 1 ? ' checked="checked" ' : '') . '   /></td>
  </tr>
  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_show_mobile'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="show_mobile" ' . ($context['seller_edit_ad']['show_mobile'] == 1 ? ' checked="checked" ' : '') . '  /></td>
  </tr>



	<tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_impressionslimit'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="impressionslimit" size="15" value="' . $context['seller_edit_ad']['impressionslimit'] . '"   /></td>
  </tr>
    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_max_impressoins_per_day'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="maximpressionsperday" size="15" value="' . $context['seller_edit_ad']['maximpressionsperday'] . '"  /></td>
  </tr>


  <tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_clickslimit'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="clickslimit" size="15" value="' . $context['seller_edit_ad']['clickslimit'] . '"    />
    <br /><span class="smalltext">'  . $txt['seller_clickslimit_note'] . '</span>

    </td>
  </tr>


      	<tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_txt_count_ad_impressions'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="countviews" ' . ($context['seller_edit_ad']['countviews'] == 1 ? ' checked="checked" ' : '') . ' /><br />
    <span class="smalltext">' .$txt['seller_txt_count_ad_impressions_note'] . '</span>
    </td>
  </tr>

      	<tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_txt_subtractclicks'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="checkbox" name="subtractclicks" ' . ($context['seller_edit_ad']['subtractclicks'] == 1 ? ' checked="checked" ' : '') . ' />
    </td>
  </tr>


  <tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_txt_reset_ad_impressions'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="resetimpressions"  size="15" value="-1" /><br />
    <span class="smalltext">',$txt['seller_txt_reset_ad_note'],'</span>
    </td>
  </tr>
    <tr>
    <td width="28%"  class="windowbg2" align="right" valign="top"><b>' . $txt['seller_txt_reset_ad_clicks'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="resetclicks"  size="15" value="-1" /><br />
	<span class="smalltext">',$txt['seller_txt_reset_ad_note'],'</span>
    </td>
  </tr>
  ';





	echo '
	<tr class="windowbg2">
		 <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_start_date'].'</b>&nbsp;</td>
    	<td width="72%"  class="windowbg2">

    	<select name="startmonth">
    	<option value="0"></option>';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '"  ' .( date("n",$context['seller_edit_ad']['startdate']) == $i && !empty($context['seller_edit_ad']['startdate'])  ?  ' selected="selected"' : '') . '>' . date("M",mktime(0,0,0,$i+1,0,0)) . '</option>';

	echo '
    	</select>

    	<select name="startday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '" ' .( date("j",$context['seller_edit_ad']['startdate']) == $i && !empty($context['seller_edit_ad']['startdate']) ?   ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	<select name="startyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '" ' .( date("Y",$context['seller_edit_ad']['startdate']) == $i && !empty($context['seller_edit_ad']['startdate'])  ?  ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>

	<tr class="windowbg2">
		 <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_end_date'].'</b>&nbsp;</td>
    	<td width="72%"  class="windowbg2">

    	<select name="endmonth">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 13; $i++)
			echo '<option value="' . $i . '" ' .( date("n",$context['seller_edit_ad']['enddate']) == $i  && !empty($context['seller_edit_ad']['enddate'])  ?  ' selected="selected"' : '') . '>' . date("M",mktime(0,0,0,$i+1,0,0)) .  '</option>';

	echo '
    	</select>

    	<select name="endday">
    	<option value="0"></option>
    	';
		for($i = 1; $i < 32; $i++)
			echo '<option value="' . $i . '" ' .( date("j",$context['seller_edit_ad']['enddate']) == $i  && !empty($context['seller_edit_ad']['enddate']) ?  ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	<select name="endyear">
    	<option value="0"></option>
    	';
		for($i = date("Y"); $i < date("Y")  + 3; $i++)
			echo '<option value="' . $i . '" ' .( date("Y",$context['seller_edit_ad']['enddate']) == $i  && !empty($context['seller_edit_ad']['enddate']) ?  ' selected="selected"' : '') . '>' . $i . '</option>';

	echo '
    	</select>

    	</td>

	</tr>


	<tr class="windowbg2">
		<td valign="top" align="right"><b>' . $txt['seller_ad_locations'] . '</b></td>

		<td>
		<input type="checkbox" id="checkAllGroups" onclick="invertAll(this, this.form, \'location\');" class="check" />',
$txt['seller_txt_check_all'],'<br />
		';

		// Get all the locations
		$result = $smcFunc['db_query']('', "
		SELECT
			ID_LOCATION, title, disabled
		FROM {db_prefix}seller_ad_location
		WHERE removed = 0");

		$adLocations = explode(",",$context['seller_edit_ad']['adlocations']);

		while ($row = $smcFunc['db_fetch_assoc']($result))
		{
			echo '<input type="checkbox" name="location[' . $row['ID_LOCATION'] . ']" value="' . $row['ID_LOCATION'] . '" ' . (in_array($row['ID_LOCATION'],$adLocations) ? ' checked="checked" ' : '' ) .' />' . $row['title'] . ($row['disabled'] == 1 ? ' <font color="#FF0000">' . $txt['seller_text_disabled'] . '</font>' : '') . '<br />';

		}
		$smcFunc['db_free_result']($result);

		echo '</td>
	</tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_boards'] .'</b>&nbsp;<br /><span class="smalltext">' . $txt['seller_text_boards_note'] . '</span></td>
    <td width="72%"  class="windowbg2">
        <input type="checkbox" name="showinallboards"  id="checkAllGroups2" onclick="invertAll(this, this.form, \'boards\');" class="check"  ' . ($context['seller_edit_ad']['showinallboards'] ? ' checked="checked" ' : '') . '  />',$txt['seller_txt_showinallboards'],'<br />
    ';

		$boardsArray = explode(",",$context['seller_edit_ad']['boards']);


			foreach ($context['seller_boards'] as $key => $option)
					echo '<input type="checkbox" name="boards[', $key, ']" value="', $key, '" ' . (in_array($key,$boardsArray) ? ' checked="checked" ' : '') .'  />', $option, '<br />';

echo '

    </td>
  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>

<tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_geoip_countries'] .'</b></td>
    <td width="72%"  class="windowbg2"><select name="geoipcountry[]" multiple="multiple" size="7">';
	foreach($context['seller_geoip_countries'] as $country)
	{

		echo '<option value="' . $country['COUNTRYCODE'] . '"' . ($country['selected'] == 1 ? ' selected="selected"' : '') . '>' . $country['COUNTRY'] . '</option>';
	}
	echo '</select>
    </td>
  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
  <hr /></td>
  </tr>
<tr class="windowbg2">
	  <td align="right">', $txt['seller_text_changeowner'], '</td>
	  <td><input type="text" name="pic_postername" id="pic_postername" value="" />
	  <a href="', $scripturl, '?action=findmember;input=pic_postername;quote=1;sesc=', $context['session_id'], '" onclick="return reqWin(this.href, 350, 400);"><img src="', $settings['images_url'], '/icons/assist.gif" alt="', $txt['find_members'], '" /></a>
	  <a href="', $scripturl, '?action=findmember;input=pic_postername;quote=1;sesc=', $context['session_id'], '" onclick="return reqWin(this.href, 350, 400);">', $txt['find_members'], '</a>
	  </td>
	  </tr>

   <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2"><br />
    <input type="hidden" name="id" value="' . $context['seller_edit_ad']['ID_AD'] .'" />
    <input type="submit" value="' . $txt['seller_txt_edit_ad'] . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>



<script language="Javascript" src="' . $AdSellerSettings['seller_url'] . 'scripts/Colorpicker.js"></script>
<script language="JavaScript" type="text/javascript">
var cp = new ColorPicker(\'window\');
var last_selected;

function UpdateImage(imgbox)
{

	document.getElementById(\'sq_\'  + imgbox).style.backgroundColor = document.getElementById(imgbox).value;
}



	ToogleAdType(' . $context['seller_edit_ad']['adtype'] . ');
  	function ToogleAdType(adValue)
  	{
  		// Text
  		if (adValue == 1)
  		{
  			AdHideType("adtypebanner");
  			AdShowType("adtypetext");
  			AdHideType("adtypecustom");
  			AdHideType("adtypeword");
  		}

  		// Banner
  		if (adValue == 2)
  		{
  			AdShowType("adtypebanner");
  			AdHideType("adtypetext");
  			AdHideType("adtypecustom");
  			AdHideType("adtypeword");
  		}

  		// Custom Code
  		if (adValue == 3)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypetext");
  			AdShowType("adtypecustom");
  			AdHideType("adtypeword");
  		}


  		// Linkword type
  		if (adValue == 4)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypetext");
  			AdHideType("adtypecustom");
  			AdShowType("adtypeword");
  		}

  	}



	function AdHideType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "")
			{
				document.getElementById(myAdType).style.display = "none";

			}
		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "")
			{
				document.layers[myAdType].display = "none";

			}
		} else if (document.all) {
			if (document.all[myAdType].style.display == "")
			{
				document.all[myAdType].style.display = "none";

			}
		}
	}

	function AdShowType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "none")
			{
				document.getElementById(myAdType).style.display = "";
			}

		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "none")
			{
				document.layers[myAdType].display = "";
			}

		} else if (document.all) {
			if (document.all[myAdType].style.display == "none")
			{
				document.all[myAdType].style.display = "";

			}

		}
	}
  </script>
  ';


	adseller_copyright();
}

function template_delete_ad()
{
	global $txt, $scripturl, $AdSellerSettings, $context, $smcFunc;

$result = $smcFunc['db_query']('', "
	SELECT
		ID_AD, title, total_views, total_clicks
	FROM {db_prefix}seller_ad
	WHERE ID_AD = " . $context['seller_del_ad']);
	$adRow = $smcFunc['db_fetch_assoc']($result);

	echo '
        <div class="cat_bar">
		<h3 class="catbg centertext">
        ' . $txt['seller_txt_delete_ad']  . '
        </h3>
  </div>
    <div class="tborder">
<form method="post"  name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=admin;area=adpro;sa=deletead2">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
   <tr>
    <td align="center" colspan="2"  class="windowbg2" align="right">
    <b>' . str_replace("%ad",$adRow['title'],$txt['seller_txt_confirm_delete_ad']).'</b>
    <br />
    <br />
    ',$txt['seller_text_impressions'] ,' ' . $adRow['total_views'] . '<br />
    ',$txt['seller_text_clicks'] ,' ' . $adRow['total_clicks'] . '<br />
    <br />
    </td>

  </tr>



    <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
    <input type="hidden" name="id" value="' . $context['seller_del_ad'] .'" />
    <input type="submit" value="' . $txt['seller_txt_delete_ad'] . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>';

	adseller_copyright();
}

function template_my_rev_share()
{
	global $txt, $context, $AdSellerSettings, $scripturl;


echo  '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', $txt['seller_revenue_share'], '
        </h3>
</div>


				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

$context['adsellerpro']['buttons_add']['notify'] =  array(
							'text' => 'seller_txt_add_ad',
							'url' => $scripturl . '?action=adpro;sa=buyeraddad2;type=revshare' ,
							'lang' => true,

					);


echo '
<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
			<table cellpadding="0" cellspacing="0" align="left"  >
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons_add'], 'bottom'), '
							</tr>
							</table>
				</td>
						</tr>
					</table>
							';
				echo  '
				<table border="0" cellspacing="0" cellpadding="4" align="center" width="80%" class="tborder" >
						<tr class="titlebg">
							<td align="center">', $txt['seller_revenue_share_rates'],'</td>
						</tr>

						<tr>
							<td align="center">',$txt['seller_revshare_topic_chance_percent'],' ' . $AdSellerSettings['seller_revshare_topic_chance'].  '%</td>
						</tr>
						<tr>
							<td align="center">',$txt['seller_revshare_topiclist_chance_percent'],' ' . $AdSellerSettings['seller_revshare_topiclist_chance'].  '%</td>
						</tr>
						<tr>
							<td align="center">',$txt['seller_revshare_other_chance_percent'],' ' . $AdSellerSettings['seller_revshare_other_chance'].  '%</td>
						</tr>


				</table>';


	adseller_copyright();
}

function template_view_click_log()
{
	global $txt, $context, $scripturl, $smcFunc;


	echo '<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
	<tr class="titlebg">
		<td colspan="3" align="center">',$txt['seller_txt_click_log'],'</td>
	</tr>
	<tr class="catbg">
				<td>', $txt['seller_txt_date'] , '</td>
				<td>', $txt['seller_text_membername'], '</td>
				<td>', $txt['seller_txt_ip'], '</td>
				</tr>';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_click_log
		WHERE ID_AD = " .$context['adpro_adid']);
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			c.ID_MEMBER, m.real_name, c.ip, c.date
		FROM {db_prefix}seller_click_log AS c
		LEFT JOIN {db_prefix}members AS m ON (c.ID_MEMBER = m.ID_MEMBER)
		WHERE c.ID_AD = " . $context['adpro_adid'] . "
		ORDER BY c.ID_LOG DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '
		<tr class="' . $styleClass . '">
			<td>',timeformat($row['date']),'</td>
			<td>';

			if (!empty($row['real_name']))
				echo '<a href="',$scripturl,'?action=profile;u=' . $row['ID_MEMBER'] . '">',$row['real_name'],'</a>';
			else
				echo $txt['seller_text_guest'];

			echo '</td>
			<td><a href="',$scripturl,'?action=trackip;searchip=' . $row['ip'] . '">',$row['ip'],'</a></td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="3">
				' . $txt['seller_text_pages'];

		$context['page_index'] = constructPageIndex($scripturl . '?action=adpro;sa=viewclicks&amp;id=' . $context['adpro_adid'], $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>';

	adseller_copyright();
}

function template_view_views_log()
{
	global $txt, $context, $scripturl, $smcFunc;

	echo '<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
	<tr class="titlebg">
		<td colspan="3" align="center">',$txt['seller_txt_view_log'],'</td>
	</tr>
	<tr class="catbg">
				<td>', $txt['seller_txt_date'] , '</td>
				<td>', $txt['seller_text_membername'], '</td>
				<td>', $txt['seller_txt_ip'], '</td>
				</tr>';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_view_log
		WHERE ID_AD = " . $context['adpro_adid']
		);
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			v.ID_MEMBER, m.real_name, v.ip, v.date
		FROM {db_prefix}seller_view_log AS v
		LEFT JOIN {db_prefix}members AS m ON (v.ID_MEMBER = m.ID_MEMBER)
		WHERE v.ID_AD = " . $context['adpro_adid'] . "
		ORDER BY v.ID_LOG DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '
		<tr class="' . $styleClass . '">
			<td>',timeformat($row['date']),'</td>
			<td>';

			if (!empty($row['real_name']))
				echo '<a href="',$scripturl,'?action=profile;u=' . $row['ID_MEMBER'] . '">',$row['real_name'],'</a>';
			else
				echo $txt['seller_text_guest'];

			echo '</td>
			<td><a href="',$scripturl,'?action=trackip;searchip=' . $row['ip'] . '">',$row['ip'],'</a></td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="3">
				' . $txt['seller_text_pages'];

		$context['page_index'] = constructPageIndex($scripturl . '?action=adpro;sa=viewviews&amp;id=' . $context['adpro_adid'], $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>';


	adseller_copyright();
}

function template_buymyads()
{
	global $context, $txt, $scripturl, $user_info, $smcFunc, $AdSellerSettings;

echo  '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', $txt['seller_txt_myads'], '
        </h3>
</div>


				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';




$context['adsellerpro']['buttons_add']['notify'] =  array(
							'text' => 'seller_txt_add_ad',
							'url' => $scripturl . '?action=adpro;sa=buyeraddad' ,
							'lang' => true,

					);


echo '
<table border="0" cellpadding="0" cellspacing="0" align="center" width="90%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
			<table cellpadding="0" cellspacing="0" align="left"  >
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons_add'], 'bottom'), '
							</tr>
							</table>
				</td>
						</tr>
					</table>
							';

	echo '<table cellspacing="0" cellpadding="10" border="0" class="table_grid" width="90%">
    <thead>
	<tr class="catbg">
				<th scope="col" class="smalltext first_th">', $txt['seller_text_title'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_ad_type'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_status'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_impressions'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_clicks'], '</th>
				<th scope="col" class="smalltext">',$txt['seller_start_date'],'</th>
				<th scope="col" class="smalltext">',$txt['seller_end_date'] ,'</th>
				<th scope="col" class="smalltext last_th">', $txt['seller_text_options'], '</th>
				</tr>
     </thead>
                ';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_ad
		WHERE ID_MEMBER = " . $user_info['id'] . " AND removed = 0"
		);
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			a.ID_AD, a.title, a.approved, a.ID_MEMBER, a.total_views, a.impressionslimit,
			a.clickslimit, a.total_clicks, a.isrevshare, a.adtype, a.startdate, a.enddate
		FROM {db_prefix}seller_ad AS a
		WHERE a.ID_MEMBER = " . $user_info['id']  . " AND removed = 0
		ORDER BY a.ID_AD DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		$approvalStatus = $txt['seller_text_pending'];

		if ($row['approved'] == 1)
			$approvalStatus = $txt['seller_text_approved'] . ' (<a href="' . $scripturl . '?action=adpro;sa=myads&adaction=pause&id=' . $row['ID_AD'] . '">' . $txt['seller_text_pause'] . '</a>)';

		if ($row['approved'] == 2)
			$approvalStatus = $txt['seller_text_rejected'];

       if ($row['approved'] == 3)
			$approvalStatus = $txt['seller_text_paused']  . ' (<a href="' . $scripturl . '?action=adpro;sa=myads&adaction=resume&id=' . $row['ID_AD'] . '">' . $txt['seller_text_resume'] . '</a>)';

		$adType = '';

		if ($row['adtype'] == 1)
		{
			$adType = $txt['seller_ad_type_textlink'];
		}
		// Banner
		if ($row['adtype'] == 2)
		{
			$adType = $txt['seller_ad_type_banner'];
		}
		// Custom
		if ($row['adtype'] == 3)
		{
			$adType = $txt['seller_ad_type_code'];
		}
		// Revshare
		if ($row['isrevshare'] == 1)
		{
			$adType .= ' (' . $txt['seller_revenue_share']  . ')';
		}

		echo '
		<tr class="' . $styleClass . '">
			<td>',$row['title'],'</td>
			<td>', $adType, '</td>
			<td>',$approvalStatus,'</td>

			<td>' . ($AdSellerSettings['seller_logviews'] == 1 ?  '' . $row['total_views'] .'' : $row['total_views']) . '</td>
			<td>',($row['adtype'] == 3 ? $txt['seller_text_na'] :  ($AdSellerSettings['seller_logclicks'] == 1 ?   '' . $row['total_clicks'] . '' : $row['total_clicks'])),'</td>

			<td>' . (empty($row['startdate']) ? '' : timeformat($row['startdate'])) . '</td>
			<td>' . (empty($row['enddate']) ? '' : timeformat($row['enddate'])) . '</td>

			<td>
';

            if ($AdSellerSettings['seller_reportslogdateviewclick'] == 1)
                echo '<a href="',$scripturl,'?action=adpro;sa=reports&amp;id=' . $row['ID_AD'] . '">',$txt['seller_txt_reports2'],'</a>';


            echo '

            <a href="' . $scripturl . '?action=adpro;sa=buyereditad&amp;id=',$row['ID_AD'],'">',$txt['seller_txt_edit_ad'],'</a></td>
		</tr>
		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="8">
				' . $txt['seller_text_pages'];

		$context['page_index'] = constructPageIndex($scripturl . '?action=adpro;sa=myads', $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>';


	adseller_copyright();
}

function template_myorders()
{
	global $txt, $context, $scripturl, $AdSellerSettings, $smcFunc, $user_info;

echo  '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', $txt['seller_txt_myorders'], '
        </h3>
</div>



				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

echo '
		<table cellspacing="0" cellpadding="10" border="0" class="table_grid" align="center" width="90%">
	<thead>
	<tr class="catbg">
				<th scope="col" class="smalltext first_th">',$txt['seller_txt_date'],'</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_ad_package'] , '</th>
				<th scope="col" class="smalltext">',$txt['seller_txt_paymentstatus'] ,'</th>
				<th scope="col" class="smalltext">', $txt['seller_txt_priceamount'], '</th>
				<th scope="col" class="smalltext last_th">',$txt['seller_txt_trasnactionid'], '</th>
				</tr>
    </thead>
                ';

	// Get Total Pages
	$dbresult = $smcFunc['db_query']('', "
		SELECT
			COUNT(*) AS total
		FROM {db_prefix}seller_transactions
		WHERE ID_MEMBER = " . $user_info['id']  . "

		");
	$row = $smcFunc['db_fetch_assoc']($dbresult);
	$numofrows = $row['total'];
	$smcFunc['db_free_result']($dbresult);
	$context['start'] = (int) $_REQUEST['start'];

	$dbresult = $smcFunc['db_query']('', "
		SELECT
			t.ID_MEMBER, m.real_name, t.mc_gross, t.first_name, t.last_name, t.payment_status, t.txn_id, t.payer_email,
			p.title, p.ID_PACKAGE, t.ipndate
		FROM ({db_prefix}seller_transactions as t, {db_prefix}seller_ad_packages as p)
		 LEFT JOIN {db_prefix}members as m ON (t.ID_MEMBER = m.ID_MEMBER)
		WHERE t.ID_PACKAGE = p.ID_PACKAGE AND t.ID_MEMBER = " . $user_info['id'] . "
		ORDER BY t.ID_TRANS DESC
		LIMIT $context[start],10
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{

		echo '<tr class="' . $styleClass . '">
				<td>',date("F j, Y, g:i a",$row['ipndate']), '</td>
				<td><a href="', $scripturl,'?action=adpro;sa=buyadspacedetail&amp;id=',$row['ID_PACKAGE'],'">' . $row['title'], '</a></td>
				<td>',$row['payment_status'] ,'</td>
				<td>', AdSellerformatprice($row['mc_gross'],$AdSellerSettings['seller_currency']), '</td>

				<td>', $row['txn_id'], '</td>

		</tr>';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '<tr class="titlebg">
				<td align="left" colspan="5">
				' . $txt['seller_text_pages'];


		$context['page_index'] = constructPageIndex($scripturl . '?action=adpro;sa=myorders', $_REQUEST['start'], $numofrows, 10);

		echo $context['page_index'];

	echo '
		</td>
	</tr>
	</table>
	';



	adseller_copyright();
}

function template_buyer_add_ad()
{
	global $txt, $scripturl, $smcFunc, $AdSellerSettings, $user_info, $scripturl, $context ;


echo  '<div class="cat_bar">
		<h3 class="catbg centertext">
        &nbsp;
        </h3>
</div>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

echo '
	<table cellspacing="0" cellpadding="10" border="0" align="center" width="80%" class="tborder">
	<tr class="catbg">
		<td align="center">',$txt['seller_txt_add_ad'],'</td>

	</tr>
	';

	$result = $smcFunc['db_query']('', "
		SELECT
			t.ID_PACKAGE, p.title, t.ID_TRANS
		FROM {db_prefix}seller_transactions as t, {db_prefix}seller_ad_packages AS p
		WHERE t.ID_PACKAGE = p.ID_PACKAGE AND t.ID_MEMBER = " . $user_info['id'] . " and t.packageused = 0 AND t.payment_status = 'Completed'
		");
	$totalPaidAds = $smcFunc['db_num_rows']($result);



	if ($totalPaidAds > 0)
	{
		// Show Paid Option
		echo '
		<tr class="windowbg">
		<td align="center">
		<form method="post"  name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=adpro;sa=buyeraddad2">

		<b>',$txt['seller_select_ad_package'],'</b>
		<select name="adpackage">';

		while($row = $smcFunc['db_fetch_assoc']($result))
		{
			echo '<option value="' . $row['ID_TRANS'] .  '">' . $row['title'] .  '</option>';
		}

		$smcFunc['db_free_result']($result);

		echo '
		</select>


		<input type="hidden" name="type" value="paid" />
		<input type="submit" value="' . $txt['seller_txt_add_ad'] . '" />


		</form>
		</td>
			</tr>';
	}


	// Check if revshare is enabled
	if ($AdSellerSettings['seller_revshare'] == 1)
	{
		// Show Rev Share
		echo '
		<tr class="windowbg">
		<td align="center">
		<form method="post"  name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=adpro;sa=buyeraddad2">

		<b>' . $txt['seller_revenue_share']  . '</b>
		<input type="hidden" name="type" value="revshare" />
		<input type="submit" value="' . $txt['seller_txt_add_ad'] . '" />

		</form>
		</td>
			</tr>
		';
	}
	else
	{
		if ($totalPaidAds == 0)
		{
			echo '
			<tr class="windowbg">
			<td>
			<b>' . $txt['seller_txt_no_paid_ad_packages'] . '</b>
			</td>
			</tr>
			';
		}
	}

	echo '</table>';


	adseller_copyright();
}

function template_buyer_add_ad2()
{
	global $txt, $scripturl, $AdSellerSettings, $context;

echo  '<div class="cat_bar">
		<h3 class="catbg centertext">
        &nbsp;
        </h3>
</div>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

	echo '
        <div class="cat_bar">
		<h3 class="catbg centertext">
        ' .  $txt['seller_txt_add_ad'] . '
        </h3>
  </div>
    <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=adpro;sa=buyeraddad3">
<table border="0" cellpadding="0" cellspacing="0" width="100%">

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64"  /></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_ad_type'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="adtype" onchange="ToogleAdType(adtype.options[adtype.selectedIndex].value)">
';
	if ($context['adpro_allowtext'])
    	echo '<option value="1">',$txt['seller_ad_type_textlink'] ,'</option>';

    if ($context['adpro_allowbanner'])
    	echo '<option value="2">',$txt['seller_ad_type_banner'] ,'</option>';

    echo '
    </select>
    </td>
  </tr>

     <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_align'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="align">
    	<option value="0"></option>
    	<option value="1">',$txt['seller_txt_left'] ,'</option>
    	<option value="2">',$txt['seller_txt_center'] ,'</option>
    	<option value="3">',$txt['seller_txt_right'] ,'</option>
    </select>
    </td>
  </tr>


  <tr class="windowbg2">
  		<td colspan="2" align="center">
  ';

  // Linked word textboxes
  echo '<table id="adtypeword" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_txt_word'] . '</b></td>
			 	<td><input type="text" name="linkword" size="50" />
			 	<br /><span class="smalltext">',$txt['seller_txt_word_more'] ,'</span>

			 	</td>
			 </tr>
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="linkwordurl" size="50" /></td>
			 </tr>

	</table>
	';



  // Textlink Specific boxes
	echo '<table id="adtypetext" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_color" value="#FFFFFF" size="10" onChange="UpdateImage(\'ad_bg_color\');return false;" /><span id="sq_ad_bg_color" name="sq_ad_bg_color" style="background-color: #FFFFFF" onClick="cp.select(document.adsellerform.sq_ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;" name="pick" id="pick">' . $txt['seller_pick_a_color']  . '</a>


			 	</td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_border_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_border_color" size="10" value="#FFFFFF"  onChange="UpdateImage(\'ad_bg_border_color\');return false;" /><span id="sq_ad_bg_border_color" name="sq_ad_bg_border_color" style="background-color: #FFFFFF" onClick="cp.select(document.adsellerform.sq_ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;" name="pick2" id="pick2">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_title_text']. '</b></td>
			 	<td><input type="text" name="ad_title" size="50" /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_title_color']. '</b></td>
			 	<td><input type="text" name="ad_title_color" size="10" value="#0000FF"   onChange="UpdateImage(\'ad_title_color\');return false;" /><span id="sq_ad_title_color" name="sq_ad_title_color" style="background-color: #0000FF" onClick="cp.select(document.adsellerform.sq_ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;" name="pick3" id="pick3">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_body_text']. '</b></td>
			 	<td><input type="text" name="ad_body" size="50" /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_body_color']. '</b></td>
			 	<td><input type="text" name="ad_body_color" size="10" value="#000000"  onChange="UpdateImage(\'ad_body_color\');return false;" /><span id="sq_ad_body_color" name="sq_ad_body_color" style="background-color: #000000" onClick="cp.select(document.adsellerform.sq_ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;" name="pick4" id="pick4">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="ad_url" size="50" /></td>
			 </tr>

			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_link_text']. '</b></td>
			 	<td><input type="text" name="ad_link" size="50" /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_link_color']. '</b></td>
			 	<td><input type="text" name="ad_link_color" size="10" value="#008000"  onChange="UpdateImage(\'ad_link_color\');return false;" /><span id="sq_ad_link_color" name="sq_ad_link_color" style="background-color: #008000" onClick="cp.select(document.adsellerform.sq_ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;" name="pick5" id="pick5">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>
	</table>
	';

  // Banner Specific Boxes
  echo '<table id="adtypebanner" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_filename'] . '</b></td>
			 	<td><input type="file" name="bannerfile" />
			 	<br /><span class="smalltext">',$txt['seller_ad_allowed_filetypes'] ,' ' .
  				$AdSellerSettings['seller_ad_filetypes'] . '

  </span>
			 	</td>
			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_url']. '</b></td>
			 	<td><input type="text" name="bannerdestanation" size="50" /></td>
			 </tr>

	</table>
	';

	echo '
	</td>
	</tr>




    <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
    <input type="hidden" name="type" value="' . $context['adseller_type'] . '" />
     <input type="hidden" name="adpackage" value="' . $context['adseller_package'] . '" />';

	if ($context['adseller_type'] != 'revshare' && $AdSellerSettings['seller_ad_approval']  == 1)
	{
		echo $txt['seller_txt_req_ad_approval'] . '<br />';
	}


    echo '
    <input type="submit" value="' . $txt['seller_txt_add_ad'] . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>



<script language="Javascript" src="' . $AdSellerSettings['seller_url'] . 'scripts/Colorpicker.js"></script>
<script language="JavaScript" type="text/javascript">
var cp = new ColorPicker(\'window\');
var last_selected;

function UpdateImage(imgbox)
{

	document.getElementById(\'sq_\'  + imgbox).style.backgroundColor = document.getElementById(imgbox).value;
}


 ';
	if ($context['adpro_allowtext'] == true && $context['adpro_allowbanner'] == true)
    	echo 'ToogleAdType(1);';
    else  if ($context['adpro_allowtext'] == false && $context['adpro_allowbanner'] == true)
		echo 'ToogleAdType(2);';
	else  if ($context['adpro_allowtext'] == true && $context['adpro_allowbanner'] == false)
    	echo 'ToogleAdType(1);';
    else
    {
    	echo '
    	AdHideType("adtypebanner");
    	AdHideType("adtypetext");
    	AdHideType("adtypeword");
    	';
    }


    echo '

  	function ToogleAdType(adValue)
  	{
  		// Text
  		if (adValue == 1)
  		{
  			AdHideType("adtypebanner");
  			AdShowType("adtypetext");
  			AdHideType("adtypeword");
  		}

  		// Banner
  		if (adValue == 2)
  		{
  			AdShowType("adtypebanner");
  			AdHideType("adtypetext");
  			AdHideType("adtypeword");

  		}

  		// Linkword type
  		if (adValue == 4)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypetext");
  			AdShowType("adtypeword");
  		}


  	}

	function AdHideType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "")
			{
				document.getElementById(myAdType).style.display = "none";

			}
		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "")
			{
				document.layers[myAdType].display = "none";

			}
		} else if (document.all) {
			if (document.all[myAdType].style.display == "")
			{
				document.all[myAdType].style.display = "none";

			}
		}
	}

	function AdShowType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "none")
			{
				document.getElementById(myAdType).style.display = "";
			}

		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "none")
			{
				document.layers[myAdType].display = "";
			}

		} else if (document.all) {
			if (document.all[myAdType].style.display == "none")
			{
				document.all[myAdType].style.display = "";

			}

		}
	}
  </script>
  ';

	adseller_copyright();
}

function template_buyer_edit_ad()
{
	global $txt, $scripturl, $AdSellerSettings, $context;

echo  '


<div class="cat_bar">
		<h3 class="catbg centertext">
        &nbsp;
        </h3>
</div>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';

	echo '
    <div class="cat_bar">
		<h3 class="catbg centertext">
        ' . $txt['seller_txt_edit_ad']  . '
        </h3>
  </div>
  <div class="tborder">
<form method="post" enctype="multipart/form-data" name="adsellerform" id="adsellerform" action="' . $scripturl . '?action=adpro;sa=buyereditad2">
<table border="0" cellpadding="0" cellspacing="0" width="100%">

   <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_text_title'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2"><input type="text" name="title" size="64" value="' . $context['seller_edit_ad']['title'] . '"  /></td>
  </tr>

  <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_ad_type'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="adtype" onchange="ToogleAdType(adtype.options[adtype.selectedIndex].value)">

';
	if ($context['adpro_allowtext'])
    	echo ' <option value="1"  ' . ($context['seller_edit_ad']['adtype'] == 1 ? ' selected="selected" ' : '') . '>',$txt['seller_ad_type_textlink'] ,'</option>';

    if ($context['adpro_allowbanner'])
    	echo '<option value="2" ' . ($context['seller_edit_ad']['adtype'] == 2 ? ' selected="selected" ' : '') . '>',$txt['seller_ad_type_banner'] ,'</option>';


 echo '</select>
    </td>
  </tr>

    <tr>
    <td width="28%"  class="windowbg2" align="right"><b>' . $txt['seller_txt_align'].'</b>&nbsp;</td>
    <td width="72%"  class="windowbg2">
    <select name="align">
    	<option value="0" ' . ($context['seller_edit_ad']['align'] == 0 ? ' selected="selected" ' : '') . '></option>
    	<option value="1" ' . ($context['seller_edit_ad']['align'] == 1 ? ' selected="selected" ' : '') . '>',$txt['seller_txt_left'] ,'</option>
    	<option value="2" ' . ($context['seller_edit_ad']['align'] == 2 ? ' selected="selected" ' : '') . '>',$txt['seller_txt_center'] ,'</option>
    	<option value="3" ' . ($context['seller_edit_ad']['align'] == 3 ? ' selected="selected" ' : '') . '>',$txt['seller_txt_right'] ,'</option>
    </select>
    </td>
  </tr>


  <tr class="windowbg2">
  		<td colspan="2" align="center">
  ';

    // Linked word textboxes
  echo '<table id="adtypeword" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_txt_word'] . '</b></td>
			 	<td><input type="text" name="linkword" size="50" value="' . $context['seller_edit_ad']['ad_title'] . '"  />
			 	<br /><span class="smalltext">',$txt['seller_txt_word_more'] ,'</span>

			 	</td>
			 </tr>
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="linkwordurl" size="50" value="' . $context['seller_edit_ad']['ad_url'] . '" /></td>
			 </tr>

	</table>
	';


  // Textlink Specific boxes
	echo '<table id="adtypetext" style="" width="90%">
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_color" value="' . $context['seller_edit_ad']['ad_bg_color'] . '"  size="10" onChange="UpdateImage(\'ad_bg_color\');return false;" /><span id="sq_ad_bg_color" name="sq_ad_bg_color" style="background-color: ' . $context['seller_edit_ad']['ad_bg_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_color,\'sq_ad_bg_color\',\'pick\');return false;" name="pick" id="pick">' . $txt['seller_pick_a_color']  . '</a>


			 	</td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_bg_border_color']. '</b></td>
			 	<td><input type="text" name="ad_bg_border_color" size="10" value="' . $context['seller_edit_ad']['ad_bg_border_color'] . '"   onChange="UpdateImage(\'ad_bg_border_color\');return false;" /><span id="sq_ad_bg_border_color" name="sq_ad_bg_border_color" style="background-color: ' . $context['seller_edit_ad']['ad_bg_border_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_bg_border_color,\'sq_ad_bg_border_color\',\'pick2\');return false;" name="pick2" id="pick2">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_title_text']. '</b></td>
			 	<td><input type="text" name="ad_title" size="50" value="' . $context['seller_edit_ad']['ad_title'] . '"  /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_title_color']. '</b></td>
			 	<td><input type="text" name="ad_title_color" size="10" value="' . $context['seller_edit_ad']['ad_title_color'] . '"    onChange="UpdateImage(\'ad_title_color\');return false;" /><span id="sq_ad_title_color" name="sq_ad_title_color" style="background-color: ' . $context['seller_edit_ad']['ad_title_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_title_color,\'sq_ad_title_color\',\'pick3\');return false;" name="pick3" id="pick3">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_body_text']. '</b></td>
			 	<td><input type="text" name="ad_body" size="50" value="' . $context['seller_edit_ad']['ad_body'] . '"  /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_body_color']. '</b></td>
			 	<td><input type="text" name="ad_body_color" size="10" value="' . $context['seller_edit_ad']['ad_body_color'] . '"  onChange="UpdateImage(\'ad_body_color\');return false;" /><span id="sq_ad_body_color" name="sq_ad_body_color" style="background-color: ' . $context['seller_edit_ad']['ad_body_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_body_color,\'sq_ad_body_color\',\'pick4\');return false;" name="pick4" id="pick4">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>


			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_url']. '</b></td>
			 	<td><input type="text" name="ad_url" size="50" value="' . $context['seller_edit_ad']['ad_url'] . '"  /></td>
			 </tr>

			  <tr class="windowbg2">
			 	<td align="right"><b>' .$txt['seller_ad_link_text']. '</b></td>
			 	<td><input type="text" name="ad_link" size="50" value="' . $context['seller_edit_ad']['ad_link'] . '"  /></td>
			 </tr>
			  <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_ad_link_color']. '</b></td>
			 	<td><input type="text" name="ad_link_color" size="10" value="' . $context['seller_edit_ad']['ad_link_color'] . '"  onChange="UpdateImage(\'ad_link_color\');return false;" /><span id="sq_ad_link_color" name="sq_ad_link_color" style="background-color: ' . $context['seller_edit_ad']['ad_link_color'] . '" onClick="cp.select(document.adsellerform.sq_ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			 	<a href="#" onClick="cp.select(document.adsellerform.ad_link_color,\'sq_ad_link_color\',\'pick5\');return false;" name="pick5" id="pick5">' . $txt['seller_pick_a_color']  . '</a>
			 	</td>

			 </tr>





	</table>
	';

  // Banner Specific Boxes
  echo '<table id="adtypebanner" style="" width="90%">';

  if (!empty($context['seller_edit_ad']['banner_filename']))
  {
  	echo ' <tr class="windowbg2">
			 	<td colspan="2" align="center"><img src="' .  $AdSellerSettings['seller_url']. $context['seller_edit_ad']['banner_filename'] .'" alt="" /></td>

			 </tr>';

  }

  echo '
			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_filename'] . '</b></td>
			 	<td><input type="file" name="bannerfile" />
			 	<br /><span class="smalltext">',$txt['seller_ad_allowed_filetypes'] ,' ' .
  				$AdSellerSettings['seller_ad_filetypes'] . '

  </span>

			 	</td>
			 </tr>

			 <tr class="windowbg2">
			 	<td align="right"><b>' . $txt['seller_banner_url']. '</b></td>
			 	<td><input type="text" name="bannerdestanation" size="50"  value="' . $context['seller_edit_ad']['banner_url'] . '" /></td>
			 </tr>

	</table>
	';


	echo '
	</td>
	</tr>


    <tr>
    <td width="28%" colspan="2" align="center" class="windowbg2">
    <input type="hidden" name="id" value="' . $context['seller_edit_ad']['ID_AD'] .'" />';

	if ($AdSellerSettings['seller_ad_approval']  == 1)
	{
		echo $txt['seller_txt_req_ad_approval'] . '<br />';
	}

	echo '
    <input type="submit" value="' . $txt['seller_txt_edit_ad'] . '" name="submit" /></td>
  </tr>

  </table>
  </form>
  </div>



<script language="Javascript" src="' . $AdSellerSettings['seller_url'] . 'scripts/Colorpicker.js"></script>
<script language="JavaScript" type="text/javascript">
var cp = new ColorPicker(\'window\');
var last_selected;

function UpdateImage(imgbox)
{

	document.getElementById(\'sq_\'  + imgbox).style.backgroundColor = document.getElementById(imgbox).value;
}



	ToogleAdType(' . $context['seller_edit_ad']['adtype'] . ');
  	function ToogleAdType(adValue)
  	{
  		// Text
  		if (adValue == 1)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypeword");
  			AdShowType("adtypetext");
  		}

  		// Banner
  		if (adValue == 2)
  		{
  			AdShowType("adtypebanner");
  			AdHideType("adtypetext");
  			AdHideType("adtypeword");
  		}

  		// Linkword type
  		if (adValue == 4)
  		{
  			AdHideType("adtypebanner");
  			AdHideType("adtypetext");
  			AdShowType("adtypeword");
  		}


  	}



	function AdHideType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "")
			{
				document.getElementById(myAdType).style.display = "none";

			}
		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "")
			{
				document.layers[myAdType].display = "none";

			}
		} else if (document.all) {
			if (document.all[myAdType].style.display == "")
			{
				document.all[myAdType].style.display = "none";

			}
		}
	}

	function AdShowType(myAdType)
	{

		if (document.getElementById && document.getElementById(myAdType)!= null) {
			if (document.getElementById(myAdType).style.display == "none")
			{
				document.getElementById(myAdType).style.display = "";
			}

		} else if (document.layers && document.layers[myAdType]!= null) {
			if (document.layers[myAdType].display == "none")
			{
				document.layers[myAdType].display = "";
			}

		} else if (document.all) {
			if (document.all[myAdType].style.display == "none")
			{
				document.all[myAdType].style.display = "";

			}

		}
	}
  </script>
  ';


	adseller_copyright();
}

function template_adreports()
{
    	global $context, $txt, $scripturl, $user_info, $smcFunc, $AdSellerSettings;

        $year = date("Y");
        if (isset($_REQUEST['year']))
        {
            $year = (int) $_REQUEST['year'];
        }

        $month = date("n");
        if (isset($_REQUEST['month']))
        {
            $month = (int) $_REQUEST['month'];
        }


        $startDate = mktime(0,0,0,$month,1,$year);
        $endDay = cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $endDate = mktime(23,59,59,$month,$endDay,$year);




echo  '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', $context['adseller_adinfo']['title'] . ' - ' . $txt['seller_txt_reports'], '
        </h3>
</div>


				<table border="0" cellpadding="0" cellspacing="0" align="center" width="80%">
						<tr>
							<td style="padding-right: 1ex;" align="right" >
						<table cellpadding="0" cellspacing="0" align="right">
									<tr>
						', AdSellerToolBarStrip($context['adsellerpro']['buttons'], 'top'), '
							</tr>
							</table>
						</td>
						</tr>
					</table>
				<br />';




echo '
<div class="cat_bar">
		<h3 class="catbg centertext">
        ', date("F",$startDate) . ' ' . $year . ' - ' . $txt['seller_txt_report'], '
        </h3>
</div>';

echo '
<form action="' . $scripturl . '?action=adpro;sa=reports&id=' . $context['adseller_adinfo']['ID_AD'] . '" method="post">
' . $txt['seller_txt_reports'], '
<select name="month">
';

for($i = 1;$i <=12;$i++)
{
    echo '<option value="' . $i . '"'  . ($month == $i ? ' selected="selected" ' : ''). '>' . $txt['months'][$i] . '</a>';
}

echo '
</select>

<select name="year">';

for($i = date("Y")-3;$i < date("Y") + 1;$i++)
{
    echo '<option value="' . $i . '"'  . ($year == $i ? ' selected="selected" ' : ''). '>' . $i . '</a>';
}

echo '
</select>

<input type="submit" value="' . $txt['seller_show_go'] . '" />

</form>';


	echo '<table cellspacing="0" cellpadding="10" border="0" class="table_grid" width="90%">
    <thead>
	<tr class="catbg">
				<th scope="col" class="smalltext first_th">', $txt['seller_txt_date'], '</th>
				<th scope="col" class="smalltext">', $txt['seller_text_impressions'], '</th>
				<th scope="col" class="smalltext last_th">', $txt['seller_text_clicks'], '</th>

				</tr>
     </thead>
                ';


	$dbresult = $smcFunc['db_query']('', "
		SELECT
			logdate,views,clicks
		FROM {db_prefix}seller_ad_date_log
		WHERE ID_AD = " . $context['adseller_adinfo']['ID_AD'] . " AND
        logdate >= $startDate AND logdate <= $endDate
		ORDER BY logdate ASC
		");
	$styleClass = 'windowbg';
	while($row = $smcFunc['db_fetch_assoc']($dbresult))
	{


		echo '
		<tr class="' . $styleClass . '">
			<td>' . date("F j, Y",$row['logdate']) . '</td>
			<td>' . number_format($row['views']) . '</td>
			<td>' . number_format($row['clicks']) . '</td>
		</tr>



		';

		if ($styleClass == 'windowbg')
			$styleClass = 'windowbg2';
		else
			$styleClass = 'windowbg';
	}
	$smcFunc['db_free_result']($dbresult);

		echo '
	</table>';

    adseller_copyright();
}

?>