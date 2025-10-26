<?php
/*
Ad Seller Pro
Version 3.0
by:vbgamer45
http://www.smfhacks.com
Copyright 2010-2018 SMFHacks.com

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
global $scripturl;

// Settings
$txt['seller_settings'] = 'Settings';

$txt['seller_path'] = 'Ad Seller File Path';
$txt['seller_url'] = 'Ad Seller File Url';

$txt['seller_sandbox'] = 'Enable PayPal Sandbox';
$txt['seller_sandbox_note'] = '<span class="smalltext">Requires a PayPal sandbox account.</span>';

$txt['seller_buynowimageurl'] = 'Buy It Now Image Url';
$txt['seller_paypal'] = 'PayPal email address';
$txt['seller_paypal_note'] = '<span class="smalltext">Ad Seller Pro requires a PayPal business or premier account.  You can get a free Business PayPal account by clicking <a href="https://www.paypal.com/us/mrb/pal=V4CPP4488SW3U" target="_blank">here</a></span>';
$txt['seller_currency'] = 'Default currency';
$txt['seller_logviews'] = 'Log every ad view';
$txt['seller_logviews_note'] = '<b>Important!</b> This will log every ad view which includes ip,time, member id and will use a lot of space';
$txt['seller_logclicks'] = 'Log every click';
$txt['seller_ad_approval'] = 'Purchased Advertisements require approval';

$txt['seller_image_settings'] = 'Image Settings';
$txt['seller_ad_max_filesize'] = 'Image max filesize';
$txt['seller_ad_filetypes'] = 'Allowed image filetypes separated by a comma';


$txt['seller_revshare'] = 'Enable revenue sharing';
$txt['seller_revshare_note'] = 'You will also need to enable revenue sharing under each ad location in order for revenue sharing to work';
$txt['seller_revshare_default_adsense_pub_id'] = 'Default Adsense pubid';
$txt['seller_revshare_topic_chance'] = 'Owner Topic Share Percent';
$txt['seller_revshare_topiclist_chance'] = 'Topic List Chance';
$txt['seller_revshare_other_chance'] = 'Other locations Share Percent';
$txt['seller_revshare_allow_banners'] = 'Allow users to create/upload own banners/textlinks';
$txt['seller_revshare_max_banners'] = 'Maximum number of banners/textlinks to allow per user';
$txt['seller_revshare_banner_approval'] = 'Revshare Ads require approval';

$txt['seller_revenue_share_rates'] = 'Revenue Sharing Rates'; 


$txt['seller_allow_user_credits'] = 'Allow users to buy ad free credits';


//

$txt['seller_purchase_ad_space'] = 'Purchase Ad Space';
$txt['seller_revenue_share'] = 'Revenue Share';
$txt['seller_revenue_share2'] = 'Rev Share';
$txt['seller_revenue_share_settings'] = 'Revenue Share Settings';
$txt['seller_view_transactions'] = 'View Transactions';
$txt['seller_txt_ad_approval'] = 'Ad Approval';
$txt['seller_txt_ad_packages'] = 'Ad Packages';
$txt['seller_txt_manage_ads'] = 'Manage Ads';
$txt['seller_txt_ad_locations'] = 'Ad Locations';
$txt['seller_txt_add_location'] = 'Add Location';
$txt['seller_txt_edit_location'] = 'Edit Location';
$txt['seller_txt_delete_location'] = 'Delete Location';
$txt['seller_txt_location_code'] = 'Location Code';
$txt['seller_txt_add_ad']  = 'Add Ad';
$txt['seller_txt_edit_ad'] = 'Edit Ad';
$txt['seller_txt_delete_ad'] = 'Delete Ad';

// Latest Version:
$txt['seller_txt_latestversion'] = 'Latest Version: ';
$txt['seller_txt_yourversion'] = 'Your Version: ';
$txt['seller_txt_version_outofdate'] = 'Your Ad Seller Pro version is not up to date!';


$txt['seller_write_error'] = 'Warning Ad Seller Pro path is not writable! ';
$txt['seller_save_settings'] = 'Save Settings';
$txt['seller_ad_sellerpro_settings'] = 'Ad Seller Pro Settings';


$txt['seller_cur_USD'] = 'U.S. Dollars';
$txt['seller_cur_AUD'] = 'Australian Dollars';
$txt['seller_cur_BRL'] = 'Brazilian Real';
$txt['seller_cur_CAD'] ='Canadian Dollars';
$txt['seller_cur_CZK'] ='Czech Koruna';
$txt['seller_cur_DKK'] ='Danish Kroner';
$txt['seller_cur_EUR'] ='Euros';
$txt['seller_cur_HKD'] ='Hong Kong Dollars';
$txt['seller_cur_HUF'] ='Hungarian Forint';
$txt['seller_cur_ILS'] ='Israeli New Sheqel';
$txt['seller_cur_INR'] ='Indian Rupees (No PayPal)';
$txt['seller_cur_MYR'] ='Malaysian Ringgit';
$txt['seller_cur_MXN'] ='Mexican Peso';
$txt['seller_cur_NZD'] ='New Zealand Dollars';
$txt['seller_cur_NOK'] ='Norwegian Kroner';
$txt['seller_cur_PHP'] ='Philippine Peso';
$txt['seller_cur_PLN'] ='Polish Zlotych';
$txt['seller_cur_GBP'] ='Pounds Sterling';
$txt['seller_cur_SGD'] ='Singapore Dollars';
$txt['seller_cur_SEK'] ='Swedish Kronor';
$txt['seller_cur_CHF'] ='Swiss Francs';
$txt['seller_cur_TWD'] ='Taiwan New Dollar';
$txt['seller_cur_THB'] = 'Thai Baht';
$txt['seller_cur_JPY'] ='Yen';
$txt['seller_cur_ZAR'] ='South Africa Rand (No PayPal)';


$txt['seller_text_pages'] = 'Pages: ';

$txt['seller_text_enabled'] = 'Enabled';
$txt['seller_text_disabled'] = 'Disabled';
$txt['seller_text_title'] = 'Title';
$txt['seller_text_membername'] = 'Member name';
$txt['seller_text_impressions'] = 'Impressions';
$txt['seller_text_impressions2'] = 'Views';
$txt['seller_text_clicks'] = 'Clicks';

$txt['seller_text_approved'] = 'Approved'; // 1
$txt['seller_text_rejected'] = 'Rejected'; // 2
$txt['seller_text_pending'] = 'Pending'; // 0
$txt['seller_text_paused'] = 'Paused'; // 3


$txt['seller_text_pause'] = 'Pause';
$txt['seller_text_resume'] = 'Resume';


$txt['seller_text_na'] = 'N/A';
$txt['seller_text_guest'] = 'Guest';

$txt['seller_text_status'] = 'Status';
$txt['seller_text_location_code'] = 'Location Code';
$txt['seller_text_options'] = 'Options';
$txt['seller_text_edit2'] = '[Edit]';
$txt['seller_text_delete2'] = '[Delete]';
$txt['seller_text_getcode'] = '[Get Code]';
$txt['seller_text_description'] = 'Description';

$txt['seller_text_membergroups'] = 'Membergroups';
$txt['seller_text_membergroups_note'] = 'Controls which membergroups can see ads';
$txt['seller_text_members'] = 'Regular Members';
$txt['seller_text_guests'] = 'Guests';

$txt['seller_text_boards'] = 'Boards';
$txt['seller_text_boards_note'] = 'Controls which boards will be shown. Only applies if the board variable is found in the url';

$txt['seller_text_adspacewidth'] = 'Adspace width';
$txt['seller_text_adspaceheight'] = 'Adspace height';

$txt['seller_text_mustusefullsize'] = 'Banner ads must use the full adspace';
$txt['seller_text_allowimages'] = 'Allow banner images';
$txt['seller_text_allowtextlinks'] =  'Allow text links';
$txt['seller_text_allowrevshare'] = 'Allow revenue sharing on this ad location';
$txt['seller_text_showbuyadspacelink'] = 'Show Advertise here on the adlocation';

$txt['seller_text_my_rev_share'] = 'My Revenue Sharing';

$txt['seller_err_ad_location_title'] = 'A title is required for the ad location';
$txt['seller_err_rev_share_disabled'] = 'Revenue Sharing is disabled'; 

$txt['seller_location_php_code'] = '
// Begin Ad Seller Pro Location - %title

global $sourcedir;
include_once $sourcedir . "/adseller.php";

$adSellerAdData =  ShowAdLocation(%code);

// Check if any ads where found
if ($adSellerAdData != false)
{
	// Dispaly the advertising code
	echo $adSellerAdData;
}

// End Ad Seller Pro Location - %title
';

$txt['seller_location_php_code_note'] = 'Use the php code below to add the location in either a custom theme or if you creating your own custom location';


// Ad Types
$txt['seller_ad_type'] = 'Ad Type';
$txt['seller_ad_type_textlink'] = 'Text Link';
$txt['seller_ad_type_banner'] = 'Banner';
$txt['seller_ad_type_code'] = 'Custom Code';
$txt['seller_ad_type_linkedword'] = 'Linked Word';

$txt['seller_ad_locations'] = 'Locations';

$txt['seller_start_date'] = 'Start Date';
$txt['seller_end_date'] = 'End Date';

$txt['seller_impressionslimit'] = 'Impressions Limit';
$txt['seller_clickslimit'] = 'Clicks Limit';
$txt['seller_clickslimit_note'] = 'Only applies to banners/textlinks';

$txt['seller_customadcode'] = 'Custom Ad Code';
$txt['seller_customadcode_note'] = 'Place your javascript/html code from your ad provider here.';

$txt['seller_banner_filename'] = 'Banner Upload';
$txt['seller_banner_url'] = 'Banner Website Destination';

// TextLinks
$txt['seller_ad_title_text'] = 'Ad Title';
$txt['seller_ad_body_text'] = 'Ad Body';
$txt['seller_ad_url'] = 'Website Url';
$txt['seller_ad_link_text'] = 'Website Display Url';
$txt['seller_ad_link_color'] = 'Website Text Color';
$txt['seller_ad_body_color'] = 'Ad Body Color';
$txt['seller_ad_title_color'] = 'Ad Title Color';
$txt['seller_ad_bg_color'] = 'Ad Background Color';
$txt['seller_ad_bg_border_color'] = 'Ad Border Color';

$txt['seller_pick_a_color'] = 'Pick A Color';

$txt['seller_err_ad_add'] = 'A title is required for the ad';

$txt['seller_error_invalid_picture'] = 'Invalid picture file';
$txt['seller_error_no_banner_uploaded'] = 'No banner uploaded';


$txt['seller_advertise_here'] = 'Advertise Here Text';


$txt['seller_txt_click_log'] = 'Click Log';
$txt['seller_txt_view_log'] = 'View Log';

$txt['seller_txt_date'] = 'Date';
$txt['seller_txt_ip'] = 'IP';

$txt['seller_txt_add_package'] = 'Add Package';
$txt['seller_txt_price'] = 'Price';
$txt['seller_txt_qty_left'] = 'Qty Left';
$txt['seller_txt_expire_days'] = 'Expire Days';

$txt['seller_txt_unlimited'] = 'Unlimited';

$txt['seller_txt_add_package'] = 'Add Package';
$txt['seller_txt_edit_package'] = 'Edit Package';

$txt['seller_txt_expire_days_note'] = 'Use 0 to never expire';

$txt['seller_text_impressions_note'] = 'Use 0 for unlimited impressions';

$txt['seller_txt_needs_stock'] = 'Needs Quantity Stock';
$txt['seller_txt_qty_available'] = 'Quantity Available';
$txt['seller_txt_qty_available_note'] = 'Must have "Needs Quantity Stock" checked'; 

$txt['seller_err_package_title_required'] = 'A package title is required!';

$txt['seller_show_advetise'] = 'Show Advertise Tab';

$txt['seller_show_go'] = 'Go';
$txt['seller_txt_approve'] = 'Approve'; // 1
$txt['seller_txt_reject'] = 'Reject'; // 2

$txt['seller_buy_per_page'] = 'Ad Packages per page';
$txt['seller_buy_per_row'] = 'Ad Packages per row';

$txt['seller_txt_processing'] = 'Processing';


$txt['seller_err_package_not_found'] = 'Ad Package not found';
$txt['seller_txt_out_of_stock']  = 'Out of Stock';


$txt['seller_err_no_paypal_account'] = 'Error no PayPal account has been setup with Ad Seller Pro';

$txt['seller_txt_thankyou'] = 'Thank you for your purchase';

$txt['seller_txt_adsellerpro'] = 'Ad Seller Pro';
$txt['seller_txt_purchase'] = ' purchase';

$txt['seller_txt_email_purchase_body'] = 'Hello %fullname,

Thank you for your order of %itemname.
To manage your advertising package visit 
%myorders
';

$txt['seller_txt_thankyou_full'] = 'Thank you for your order. Your order should be processed shortly. If payment was made by e-Check the payment must clear first. To manage and setup your advertising package visit <a href="' . $scripturl .'?action=adpro;sa=myads">' . $scripturl .'?action=adpro;sa=myads</a>';
$txt['seller_txt_myads'] = 'MyAds';

$txt['seller_txt_ad_package'] = 'Ad Package';
$txt['seller_txt_paymentstatus'] = 'Payment Status';
$txt['seller_txt_priceamount'] = 'Amount';
$txt['seller_txt_email'] = 'Email';
$txt['seller_txt_firstname'] = 'First Name';
$txt['seller_txt_lastname'] = 'Last Name';
$txt['seller_txt_trasnactionid'] = 'Transaction ID';

$txt['seller_err_at_least_one_location'] = 'You must have at least one location enabled!';

$txt['seller_txt_myorders'] = 'My Orders';

$txt['seller_revshare_topic_chance_percent'] = 'Owner of topic revenue share chance percent: ';
$txt['seller_revshare_topiclist_chance_percent']  = 'Topic listing revenue share chance percent: ';
$txt['seller_revshare_other_chance_percent'] = 'Other areas of the forum revenue share percent: ';


$txt['seller_txt_return_to_adpackages'] = 'Return to Ad Packages';
$txt['seller_txt_export_transactions'] = 'Export Transactions';

$txt['seller_txt_revshare_exceed_banners'] = 'You have exceed the ad limit for revshare. The number of allowed ads for revshare is ';

$txt['seller_txt_no_paid_ad_packages'] = 'You do not have any paid Ad Packages to create an Ad.';

$txt['seller_select_ad_package'] = 'Select Ad Package';

$txt['seller_err_ad_package_not_paid'] = 'You do not have access to this ad package. No unused ad package open.';

$txt['seller_ad_allowed_filetypes'] = 'Allowed File Types: ';
 
$txt['seller_txt_yes'] = 'Yes';
$txt['seller_txt_no'] = 'No';

$txt['seller_txt_error_youarenotallowedtoedit'] = 'You are not allowed to edit this ad';
$txt['seller_error_bannerfilesize'] = 'Banner exceeds the maximum filesize of ';

$txt['seller_error_widthsize'] = 'Banner exceeds the maximum width of ';
$txt['seller_error_yourwidthsize'] = ' Your width size: ';

$txt['seller_error_heightsize'] = 'Banner exceeds the maximum height of ';
$txt['seller_error_yourheightsize'] = ' Your height size: ';

$txt['seller_error_notextlink'] = 'Textlinks not allowed for this ad location';
$txt['seller_error_nobanner'] = 'Banners not allowed for this ad location';

$txt['seller_txt_expire_pm_subject'] = "Your Ad has expired!";
$txt['seller_txt_expire_pm_body'] = 'Your Ad "%title" has expired.

Total Views: %views
Total Clicks: %clicks

To manage your ads visit: %manageads
'
;
$txt['seller_txt_expire_pm_name'] = 'Ad Seller';  

$txt['seller_txt_buy_ad'] = 'Buy Ad';  
$txt['seller_txt_check_all'] = 'Check All';  
$txt['seller_txt_showinallboards'] = 'Show in all Boards';

$txt['seller_txt_ipnurl'] = 'IPN Url: % <br /> <span class="smalltext">Set by logging into PayPal. Click on the Profile Link Then click Instant Payment Notification Preferences and then turn IPN on and enter the url above for the IPN url.</span>';

$txt['seller_error_no_banner_destanation'] = 'You need to enter a banner destination';

$txt['seller_txt_confirm_delete_ad'] = 'Are you sure you want to delete %ad ?';

$txt['seller_txt_req_ad_approval'] = 'Your Ad will require approval before being shown';

$txt['seller_txt_is_php'] = 'Is PHP Code?';
$txt['seller_txt_syntax_error'] = 'We have detected an error in your syntax for your php ad code';

$txt['seller_loglocationviewsbydate'] = 'Log every ad location view';
$txt['seller_loglocationviewsbydate_note'] = '<b>Important!</b> This will log every ad location view.';
$txt['seller_txt_max_impressoins_per_day'] = 'Max Impressions Per Day';
$txt['seller_txt_max_impressoins_per_day_note'] = 'Use 0 for no limit'; 

$txt['seller_txt_view_location_stats'] = 'Location View Stats';
$txt['seller_txt_view_stats'] = '[View Stats]';


$txt['seller_txt_count_ad_impressions'] = 'Count Ad Impressions';
$txt['seller_txt_count_ad_impressions_note'] = 'Keep this enabled in most cases unless you have reason not to count ad views';

$txt['seller_txt_reset_ad_impressions'] = 'Reset Ad Impressions to ';
$txt['seller_txt_reset_ad_clicks'] = 'Reset Ad Clicks to ';
$txt['seller_txt_reset_ad_note'] = "The value of -1 is used not to make a change";

// Alignment
$txt['seller_txt_align'] = 'Align';
$txt['seller_txt_left'] = 'Left';
$txt['seller_txt_center'] = 'Center';
$txt['seller_txt_right'] = 'Right';

// 2.0 additions

$txt['seller_txt_locationid'] = 'Location ID';
$txt['seller_subtractsmfshoppoints'] = 'SMF Shop Points to subtract per click for user ads:';
$txt['seller_disablepaymentspaypal'] = 'Disable PayPal for packages allow users to add ads';

$txt['seller_txt_subtractclicks'] = 'Enable subtract SMF Shop Credits for clicks';

$txt['seller_text_changeowner'] = 'Change Ad Owner';

$txt['seller_text_addisablednoshopcredits'] = 'Ad Disabled No Shop Credits Left';
$txt['seller_text_addisablednoshopcredits_body'] = 'Ad titled: "%title" with id of %id has been disabled due member called "%member" is out of SMF Shop Credits for clicks ';

$txt['seller_text_nopaypal_purchase_subject'] = 'Ad Package ordered notification';
$txt['seller_text_nopaypal_purchase_body'] = 'Member ID: %id has just ordered an packaged titled: %title please get payment from the customer';

$txt['seller_settings_desc'] = 'Ad Seller Pro settings and configuration options';
$txt['seller_txt_manage_ads_desc'] = 'Manage Ad Seller Pro advertisements';
$txt['seller_txt_ad_approval_desc'] = 'Ad Approval management. Manage ads that are pending for approval to accept or reject';
$txt['seller_txt_ad_locations_desc'] = 'Ad locations for Ad Seller Pro and management of ad locations';
$txt['seller_txt_ad_packages_desc'] = 'Ad Packages and ad package management';
$txt['seller_view_transactions_desc'] = 'Transaction history for ad seller pro purchases';
$txt['seller_revenue_share_desc'] = 'Reveneue sharing settings';


// Subscriptions
$txt['seller_txt_subscriptionsettings'] = 'Subscription Settings';
$txt['seller_txt_issubscription'] = 'Is subscription';
$txt['seller_txt_billing_cycle'] = 'Billing Cycle';
$txt['seller_txt_billing_cycle_days'] = 'Days';
$txt['seller_txt_billing_cycle_weeks'] = 'Weeks';
$txt['seller_txt_billing_cycle_months'] = 'Months';
$txt['seller_txt_billing_cycle_stop'] = 'Stop after how many billing cycles?';
$txt['seller_txt_billing_cycle_stop_never'] = 'Never';
$txt['seller_txt_billing_cycle_retryfailed'] = 'Retry failed billing attempts?';

$txt['seller_set_subscribeimageurl'] = 'Subscribe Button image url:';


$txt['seller_txt_iframe_code'] = 'IFRAME Code for webpages';

$txt['seller_linksopennewwin'] = 'Ad Clicks for text/banner ads open in new window';

$txt['seller_reportslogdateviewclick'] = 'Reports Open/Clicks By Date By Date ';
$txt['seller_reportslogdateviewclick2'] = 'Also gives Advertisers report access to their ad';

$txt['seller_txt_reports'] = 'Reports';
$txt['seller_txt_reports2'] = '[Reports]';

$txt['seller_txt_report'] = 'Report';

$txt['seller_txt_word'] = 'Word';
$txt['seller_txt_word_more'] = 'The exact word that will be turned into a link such as "shopping" without quotes';
$txt['seller_err_small_word'] = 'Word is too small please enter a word greater than two characters';
$txt['seller_err_txt_url'] = 'A destination url is required';

$txt['seller_txt_allowlinkwords'] = 'Allow link word ads';
$txt['seller_error_nolinkwordads'] = 'No link word ads allowed';
$txt['seller_error_link_keywordinuse'] = 'A link keyword for that phrase is in use';


$txt['seller_txt_or'] = 'Or';
$txt['seller_txt_banner_imageurl'] = 'Banner Image Url';


$txt['seller_txt_geoip_countries'] = 'GEO IP Countries';


$txt['seller_text_adapproval_subject'] = 'Ad Requires Approval';
$txt['seller_text_adapproval_body'] = 'Ad ID: %id requires approval. To review visit: ';


$txt['seller_text_show_desktop'] = 'Show on Desktop Devices';
$txt['seller_text_show_mobile'] = 'Show on Mobile Devices';

$txt['seller_antiadblock'] = 'Enable Anti Adblock';


?>