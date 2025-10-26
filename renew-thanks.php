<?php
global $ssi_guest_access;
$ssi_guest_access = 1;
require(dirname(__FILE__) . '/SSI.php');

global $context;

$context['page_title_html_safe'] = 'SMF Hacks - License Renewal Thanks';
$context['meta_keywords'] = '';
$context['page_title'] = 'SMF Hacks - License Renewal Thanks';

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
     		<h1 align="center">SMF Hacks - License Renewal Thanks</h1>
     		<div align="center">The license system should update shortly with the renewal information. If payment is made by e-Check will take a couple of days to process</div>
<br />

     		</td>

     	</tr>


     </table>
<?php
template_footer();
?>