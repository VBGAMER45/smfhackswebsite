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

// Title string
$txt['gdpr_title'] = 'GDPR Pro';

$txt['gdpr_enable_privacy_policy'] = 'Enable the privacy policy';
$txt['gdpr_force_privacy_agree'] = 'Force all members to agree to the privacy policy when changed';
$txt['gdpr_force_agreement_agree'] = 'Force all members to agree to member agreement when changed';
$txt['gdpr_clear_memberinfo'] = 'Clear Member IP/Email,Username from posts on member delete';
$txt['gdpr_allow_export_userdata'] = 'Allow members to export their own data';


$txt['gdpr_text_settings'] = 'Settings';
$txt['gdpr_privacypolicy'] = 'Privacy Policy';
$txt['gdpr_save_settings']  = 'Save Settings';

// Latest Version:
$txt['gdpr_txt_latestversion'] = 'Latest Version: ';
$txt['gdpr_txt_yourversion'] = 'Your Version: ';
$txt['gdpr_txt_version_outofdate'] = 'Your GDPR PRo version is not up to date!';


$txt['gdpr_txt_update']  = 'Update';
$txt['gdpr_error_no_privacypolicy'] = 'No privacy policy content entered';

$txt['gdpr_err_writable_policy'] = 'Privacy Policy not writable';
$txt['gdpr_policy_agree'] = 'I agree with the Privacy Policy';


$txt['gdpr_txt_exportdata']  = 'Export Data';

$txt['gdpr_agreement_agree'] = 'I accept the terms of the agreement.';
$txt['gdpr_registration_agreement'] = 'Registration Agreement';
$txt['gdpr_agreement_decline'] = 'I decline to accept terms of the agreement.';


$txt['gdpr_admin_settings_desc'] = 'Settings for the GDPR Pro system';
$txt['gdpr_admin_privacypolicy_desc'] = 'Manage and update your Privacy Policy';

$txt['gdpr_txt_privacy_header'] = 'Privacy Policy/Cookies';
$txt['gdpr_txt_privacy_desc'] = 'We collect personal information when you use our online services. We use cookies to identify you and to personalize your experience. For details, please see our <a href="' . $scripturl . '?action=gdpr;sa=privacypolicy" target="_blank">Privacy Policy</a>';
$txt['gdpr_txt_privacy_agree'] = 'I agree and consent to the Privacy Policy';
$txt['gdpr_txt_privacy_decline'] = 'I decline the Privacy Policy';
$txt['gdpr_txt_privacy_fail'] = 'We cannot process your registration if do not agree to our Privacy Policy';

$txt['gdpr_txt_export_information'] =  'Export User Data Information';

$txt['gdpr_err_export_user'] =  'You cannot export the users information. You can only export your own data';

$txt['gdpr_txt_user_exportdata']  = 'Export User Profile';
$txt['gdpr_txt_user_exportdata2']  = 'Click <a href="%link">here</a> to export user profile information to a csv file';

$txt['gdpr_profile_memid'] = 'MemberID';
$txt['gdpr_profile_username'] = 'Username';
$txt['gdpr_profile_displayname'] = 'Display Name';
$txt['gdpr_profile_email'] = 'Email';
$txt['gdpr_profile_totalposts'] = 'Total Posts';
$txt['gdpr_profile_dateregistered'] = 'Date Registered';
$txt['gdpr_profile_gender'] = 'Gender';
$txt['gdpr_profile_birthdate'] = 'Birth Date';
$txt['gdpr_profile_personaltext'] = 'Personal Text';
$txt['gdpr_profile_websitetitle'] = 'Website';
$txt['gdpr_profile_websiteurl'] = 'Website Url';
$txt['gdpr_profile_signature'] = 'Signature';

$txt['gdpr_txt_message_exportdata']  = 'Export Posts';

$txt['gdpr_txt_message_exportdata2']  = 'Export your messages that you have made. By entering a starting index to an ending index. Max ' . $modSettings['gdpr_messageexport_limit']  . ' records at a time';

$txt['gdpr_txt_message_startid']  =  'Start Index: ';
$txt['gdpr_txt_message_endid']  =  'End Index: ';


$txt['gdpr_txt_message_subject']  = 'Subject: ';
$txt['gdpr_txt_message_date']  = 'Date: ';
$txt['gdpr_txt_message_body']  = 'Body: ';

$txt['gdpr_err_export_msg_limit'] =  'More than 1000 messages in selected range please make your range smaller to export';

$txt['gdpr_err_no_ssl'] = 'We are not detecting any SSL on your forum! Please ensure SSL is installed that is a requirement.<br />We provide a service if you need help with SSL visit <a href="https://www.smfhacks.com/index.php/topic,9587.0.html" target="_blank">https://www.smfhacks.com</a>';

$txt['gdpr_showprivacypolicylink'] = 'Show Privacy Policy Link';
$txt['gdpr_profile_ip'] ='IP';
$txt['gdpr_profile_ip2'] ='IP2';


$txt['gdpr_modify_profile'] = 'If you do not agree you can still view your profile information by clicking <a href="' . $scripturl . '?action=profile">here</a>';

$txt['gdpr_formattype'] = 'Format type';

$txt['gdpr_agreement_date'] = 'Agreement Date';
$txt['gdpr_privacypolicy_date'] = 'Privacy Policy Date';


$txt['gdpr_messageexport_limit'] = 'Message Export Limit';


$txt['gdpr_warning_nodeleteaccount'] = 'Warning you have some membergroups that do not have the delete account permission. Please click <a href="%link">here</a> to fix';

?>