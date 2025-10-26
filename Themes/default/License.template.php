<?php

function template_view()
{
	global $scripturl, $smcFunc, $user_info;

	echo '
    <div class="cat_bar">
    <h3 class="catbg">
        License Information
        </h3>
  </div>

    <div class="tborder">
	<table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" class="tborder">


	<tr class="catbg">
				<td>Product</td>
				<td>Domain</td>
				<td>Expire Date</td>
				<td>Downloads</td>
			</tr>';
	$dbresult = $smcFunc['db_query']('', "SELECT l.startdate,l.domain, p.productname, p.boardid, l.ID_PRODUCT, l.ID_LICENSE FROM {db_prefix}license as l, {db_prefix}products as p WHERE l.ID_MEMBER = " . $user_info['id'] . " AND p.ID_PRODUCT = l.ID_PRODUCT");
	$t = time();
	while ($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '<tr class="windowbg">';
		echo '<td>', $row['productname'], '</td>';
		echo '<td>', $row['domain'], '</td>';

		if ($row['startdate'] !=0)
		{
			$finaldate = $row['startdate'] + (365 * 24 * 60 * 60);
			echo '<td>', timeformat($finaldate), ($t > $finaldate ? '<font color="#FF0000">Expired!</font><br />
			<a href="https://www.smfhacks.com/renew.php?id=' . $row['ID_LICENSE'] . '">Renew License</a>' : ''), '</td>';


		}
		else
		{
			echo '<td></td>';
		}

		{

			$finaldate = $row['startdate'] + (365 * 24 * 60 * 60);

			echo '<td>';


			if ($row['ID_PRODUCT'] == 9)
			{
				echo '<a href="https://www.smfhacks.com/index.php?action=forum">All Download Forums</a>';
			}


			if (!empty($row['boardid']) && ($t < $finaldate ))
			{
				echo '<a href="https://www.smfhacks.com/index.php/board,' . $row['boardid'] . '.0.html">Downloads</a>';
			}

			echo '</td>';
		}


		echo '</tr>';
	}

	$smcFunc['db_free_result']($dbresult);


	echo '
	</table><br />

<div class="cat_bar">
    <h3 class="catbg">
        Copyright Removal Licenses
        </h3>
  </div>
	<table cellspacing="0" cellpadding="10" border="0" align="center" width="100%">
			<tr>
			<td colspan="2" align="center" class="windowbg">
				<a href="https://www.smfhacks.com/copyright_removal.php">Order Copyright Removal</a>
			</td>
			</tr>
	</table>
	<table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" class="tborder">

	<tr class="catbg">
				<td>Product</td>
				<td>Domain</td>
				<td>License Key</td>
			</tr>
	';

		$dbresult = $smcFunc['db_query']('', "
		SELECT m.ID_MOD, k.licensekey, k.website, m.modname
		FROM {db_prefix}modtracker_copyright_keys as k,
		{db_prefix}modtracker_mods as m
		WHERE k.ID_MEMBER = " . $user_info['id'] . "  AND m.ID_MOD = k.ID_MOD");
	$t = time();
	while ($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '<tr class="windowbg">';
		echo '<td>', $row['modname'], '</td>';
		echo '<td>', $row['website'], '</td>';
		echo '<td>', $row['licensekey'], '</td>';

		echo '</tr>';
	}



	echo '</table>';


	echo '
	<br />
	<form method="post" action="' . $scripturl . '?action=license;sa=addlicense2">
			<table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" class="tborder">
				<tr class="catbg">
				<td colspan="2">Add License</td>
				</tr>
				<tr class="windowbg">
					<td align="right">Product Name</td>
					<td><select name="product">
					<option value="">Select Product</option>
				';

	$dbresult = $smcFunc['db_query']('', "SELECT p.productname, p.ID_PRODUCT FROM {db_prefix}products as p");
	while ($row = $smcFunc['db_fetch_assoc']($dbresult))
	{
		echo '<option value="', $row['ID_PRODUCT'], '">', $row['productname'], '</option>';

	}

	$smcFunc['db_free_result']($dbresult);

		echo '</select></td></tr>
				<tr class="windowbg">
					<td align="right">License Key</td>
					<td><input type="text" name="licensekey" /></td>
				</tr>
				<tr class="windowbg">
					<td align="right">Domain</td>
					<td><input type="text" name="domain" /></td>
				</tr>
				<tr class="windowbg">
					<td colspan="2">Information: License key would be found in the email account that you used to purchase.</td>
				</tr>
				<tr class="windowbg">
					<td align="right">List your site in our directory</td>
					<td><input type="checkbox" name="listinlinks" checked="checked" /></td>
				</tr>
				<tr class="windowbg">
					<td colspan="2" align="center"><input type="submit" value="Add License" /></td>
				</tr>
				<tr class="windowbg">
					<td colspan="2">Also List your site on <a href="http://www.forumrankings.net" target="_blank">ForumRankings.net!</a> gain more traffic and see where your forum ranks. Link opens in new window
							<br /><br /><h1>SMF - Web Hosting by HostIT our hosting service</h1>

							<div>
							We are also offering hosting for SMF. On our own fast SSD servers with shared plans, VPS, and dedicated servers.<br />
							<a href="https://hostit.host/smfwebhosting.php" target="_blank">https://hostit.host/smfwebhosting.php</a><br />
							Use promo code: SMFHACKS<br />
					Save 10% and we will even help transfer your forum!<br />
		</div>

					</td>
				</tr>
		</table>
	</form>

	<br /><br />
	</div>';
}

function template_licenseagreement()
{
	global $scripturl, $context;

		echo '
            <div class="cat_bar">
    <h3 class="catbg">
        License Agreement
        </h3>
  </div>


        <div class="tborder">

			<br />
	<form method="post" action="' . $scripturl . '?action=license;sa=addlicense2">
			<table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" class="tborder">
				<tr class="windowbg">
					<td  colspan="2"><textarea rows="20" cols="100">License Agreement/Terms of Use for Software on SMFHacks.com

For each license of the software you are allowed a single install/instance of the software.
The software must be installed on the domain listed for the license. If you need to update the domain name you can contact us to update the license information.
You are also allowed to install an instance of the software for development/testing. This instance needs to be password protected and not open to the public.

Purchase of copyright removal gives you the right to remove the output links that link back to smfhacks.com but does not give the right to remove copyright comments/notice in the code itself.

Due to the nature of the digital software all sales are final. We highly suggest that you read over the requirements of the software.

Redistributing the software/files of the software will result in the termination of the license.

We reserve the right to revoke a licenses/downloads at any time.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

This license agreement maybe modified/updated at any time.</textarea></td>

				</tr>
				<tr class="windowbg">

					<td colspan="2" align="center">
					<input type="hidden" name="agreed" value="1">

				<input type="hidden" name="licensekey" value="' . $context['lic_licensekey'] . '">
				<input type="hidden" name="domain" value="' . $context['lic_domain'] . '">
				<input type="hidden" name="product" value="' . $context['lic_product'] . '">
				<input type="hidden" name="listinlinks" value="' . $context['lic_listinlinks'] . '">


					<input type="submit" value="I agree to the License Agreement Above" /></td>
				</tr>
		</table>
	</form>
</div>';
}


?>