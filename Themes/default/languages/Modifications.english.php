<?php
// Version: 2.0; Modifications

// Begin EzPortal Text Strings
$txt['ezp_forum_tab'] = 'Forum';
$txt['ezportal_admin'] = 'EzPortal';
$txt['ezportal_settings'] = 'Settings';
$txt['ezportal_block_manager'] = 'ezBlock Manager';
$txt['ezportal_page_manager'] = 'Page Manager';

$txt['ezp_settings'] = 'Settings';
$txt['ezp_modules'] = 'Modules';
$txt['ezp_blocks'] = 'ezBlocks';
$txt['ezp_pagemanager'] = 'Page Manager';
$txt['ezp_import'] = 'Import';
$txt['ezp_txt_ordercopyright'] = 'Order Copyright Removal';
$txt['ezp_download_blocks'] = 'Download ezBlocks';
$txt['ezp_installed_blocks'] = 'Installed ezBlocks';
$txt['ezp_txt_copyrightremoval'] = 'Copyright Removal';
$txt['ezp_credits'] = 'Credits';

// Permissions
$txt['permissiongroup_ezportal'] = 'EzPortal';
$txt['permissiongroup_simple_ezportal'] = 'Use EzPortal';

$txt['permissionname_ezportal_page'] = 'Manage Pages';
$txt['permissionhelp_ezportal_page'] = 'Allows adding,editing,and deleting of pages.';
$txt['cannot_ezportal_page'] = 'You are not allowed to manage EzPortal pages.';

$txt['permissionname_ezportal_blocks'] = 'Manage ezBlocks';
$txt['permissionhelp_ezportal_blocks'] = 'Allows adding,editing,and deleting of ezBlocks.';
$txt['cannot_ezportal_blocks'] = 'You are not allowed to manage ezBlocks.';


$txt['permissionname_ezportal_manage'] = 'Admin EzPortal';
$txt['permissionhelp_ezportal_manage'] = 'Allows full control of EzPortal';
$txt['cannot_ezportal_manage'] = 'You are not allowed to manage EzPortal.';



// END EzPortal Text Strings


// Begin Download System Text Strings
$txt['downloads_menu'] = 'Downloads';
$txt['downloads_admin'] = 'Downloads Configuration';

$txt['downloads_text_settings'] = 'Settings';
$txt['downloads_layout_settings2'] = 'Layout';
$txt['downloads_tab_downloads'] = 'Downloads';
$txt['downloads_tab_comments'] = 'Comments';
$txt['downloads_filespace'] = 'File Space Manager';
$txt['downloads_text_catpermlist'] = 'Category Permission List';
$txt['downloads_ftp2'] = 'FTP';
$txt['downloads_txt_import'] = 'Import';
$txt['downloads_txt_download_logs'] = 'Download Logs';
$txt['downloads_text_credits_system'] = 'Credits System';
$txt['downloads_credit_transactions'] = 'Credit Transactions';
$txt['downloads_give_credits'] = 'Give Credits';
$txt['downloads_credit_packages'] = 'Credit Packages';
$txt['downloads_text_moderationcenter'] = 'Moderation Center';
$txt['downloads_text_catpermlist2'] = 'Category Permissions';

// Permissions
$txt['permissiongroup_downloads'] = 'Downloads System';
$txt['permissiongroup_simple_downloads'] = 'Downloads System';

$txt['permissionname_downloads_view'] = 'View Downloads';
$txt['permissionhelp_downloads_view'] = 'Allows the user to view the Downloads';
$txt['cannot_downloads_view'] = 'You are not allowed to view the Downloads';

$txt['permissionname_downloads_file'] = 'Download File';
$txt['permissionhelp_downloads_file'] = 'Allows the user to download a file';
$txt['cannot_downloads_file'] = 'You are not allowed to download files';

$txt['permissionname_downloads_add'] = 'Add Download';
$txt['permissionhelp_downloads_add'] = 'Allows the user to add a download.';
$txt['cannot_downloads_add'] = 'You are not allowed to add a download.';

$txt['permissionname_downloads_edit'] = 'Edit own Download';
$txt['permissionhelp_downloads_edit'] = 'Allows the user to edit their own download.';
$txt['cannot_downloads_edit'] = 'You are not allowed to edit that download';

$txt['permissionname_downloads_delete'] = 'Delete own Download';
$txt['permissionhelp_downloads_delete'] = 'Allows the user to delete their own download.';
$txt['cannot_downloads_delete'] = 'You are not allowed to delete that download.';

$txt['permissionname_downloads_ratefile'] = 'Rate Downloads';
$txt['permissionhelp_downloads_ratefile'] = 'Allows the user to rate a file.';
$txt['cannot_downloads_ratefile'] = 'You are not allowed to rate that file.';

$txt['permissionname_downloads_editcomment'] = 'Edit own Comment';
$txt['permissionhelp_downloads_editcomment'] = 'Allows the user to edit their own comments.';
$txt['cannot_downloads_editcomment'] = 'You are not allowed to edit that comment.';

$txt['permissionname_downloads_comment'] = 'Add Comments';
$txt['permissionhelp_downloads_comment'] = 'Allows the user to add comments on a download.';
$txt['cannot_downloads_comment'] = 'You are not allowed to add comments.';

$txt['permissionname_downloads_report'] = 'Report Downloads/Comments';
$txt['permissionhelp_downloads_report'] = 'Allows the user to report downloads and comments.';
$txt['cannot_downloads_report'] = 'You are not allowed to report content.';

$txt['permissionname_downloads_autocomment'] = 'Auto Approve Comments';
$txt['permissionhelp_downloads_autocomment'] = 'Comments do not need to wait for approval.';

$txt['permissionname_downloads_autoapprove'] = 'Auto Approve Downloads';
$txt['permissionhelp_downloads_autoapprove'] = 'Downloads do not need to wait for approval.';

$txt['permissionname_downloads_moderate'] = 'Moderate Downloads';
$txt['permissionhelp_downloads_moderate'] = 'Allows the user Delete Comments, Edit Downloads, Delete Downloads, Approve Downloads';
$txt['cannot_downloads_moderate'] = 'You are not allowed to moderate the downloads system.';


$txt['permissionname_downloads_manage'] = 'Admin Download System';
$txt['permissionhelp_downloads_manage'] = 'Allows the user to add/delete/edit all catagories. Delete Comments, Delete Downloads, Approve Downloads';
$txt['cannot_downloads_manage'] = 'You are not allowed to manage the downloads.';

// END Download System Text Strings
// Begin Login Security Text Strings
$txt['ls_login_security'] = 'Login Security';
$txt['ls_invalid_ip'] = 'Login failed. This account is protected by ip address. If you are the owner of this account you can reset this by creating a <a href="%link">secure login link</a> sent to your email address.';
$txt['ls_account_locked'] = 'Account Locked due to failed logins. This account has been locked until %min. If you are the owner of this account you can reset this by creating a <a href="%link">secure login link</a> sent to your email address.';
$txt['ls_secure_email_subject'] = 'Secure Login Link';
$txt['ls_secure_email_body'] = 'Hello %name,
A secure login link has been requested for your account.
If you requested this link please follow the link below to login into your account.

%link

This link expires in %min minutes.

Requesters IP address: %ip';

$txt['ls_matched_members'] = 'Matched forum members with same ip address:';

$txt['ls_failed_email_subject'] = 'Failed Login Attempt';
$txt['ls_failed_email_body'] = 'Hello %name,
We have detected a failed login attempt on your account.

%membermatches

IP address of the failed login attempt: %ip
';

// Settings
$txt['ls_securehash_expire_minutes'] = 'Secure Login Link Expire time in minutes';
$txt['ls_allowed_login_attempts'] = 'Number of allowed login attempts';
$txt['ls_allowed_login_attempts_mins'] = 'Login attempt check time range in minutes';
$txt['ls_login_retry_minutes'] = 'Account locked retry minutes';
$txt['ls_allow_ip_security'] = 'Allow users to protect their account by ip address';
$txt['ls_send_mail_failed_login'] = 'Send email on failed login attempt';

$txt['ls_current_ip_address'] = 'Current IP Address: ';
$txt['ls_ip_address_protection'] = 'IP Address Account Protection';
$txt['ls_ip_address_protection_note'] = 'You can allow multiple ips by seperating them with a comma';

// END  Login Security Text Strings

// Begin Newsletter Pro  Text Strings
$txt['newspro_admin'] = 'Newsletter Pro';

$txt['newspro_html_check'] = 'Must be checked for Newsletter Pro';

$txt['newspro_settings'] = 'Settings';
$txt['newspro_settings_desc'] = 'Manage the settings for Newsletter Pro.';
$txt['newspro_reports'] = 'Reports';
$txt['newspro_reports_desc'] = 'View reports for newsletter campaigns';

$txt['newspro_newsletter_lists'] = 'Lists';
$txt['newspro_newsletter_lists_desc'] = 'Add/edit/delete lists';

$txt['newspro_newsletter_signupform'] = 'Signup Form';
$txt['newspro_newsletter_signupform_desc'] = 'Generate a signup form for members to subscribe to your newsletters';

$txt['newspro_newsletter_messages'] = 'Messages';
$txt['newspro_newsletter_messages_desc'] = 'View and edit newsletter messages';
$txt['newspro_manage_links'] = 'Manage Links';
$txt['newspro_manage_links_desc'] = 'Allows you to edit links used in the newsletters';
$txt['newspro_unsubscribe_list'] = 'Unsubscribe List';
$txt['newspro_unsubscribe_list_desc'] = 'View all emails that have unsubscribed from your campaigns';
$txt['newspro_unsubscribe'] = 'Unsubscribe to this mailing';
$txt['newspro_txt_load_saved_list'] = 'Use Saved List';
$txt['newspro_txt_load_saved_message'] = 'Use Saved Message';
$txt['newspro_newsletter_campaigns'] = 'Campaigns';
$txt['newspro_newsletter_campaigns_desc'] = 'View and schedule campaigns';

$txt['newspro_txt_imagehosting'] = 'Image Hosting';
$txt['newspro_txt_imagehosting_desc'] = 'Upload and Manage Images for your newsletters';
$txt['newspro_txt_forwardtoafriend'] = 'Forward To Friend';
$txt['newspro_txt_viewasawebpage'] = 'View this email as Webpage';
$txt['newspro_txt_share_facebook'] = 'Share on Facebook';
$txt['newspro_txt_share_twitter'] = 'Share on Twitter';
$txt['newspro_txt_share_linkedin'] = 'Share on LinkedIn';
$txt['newspro_txt_share_googleplus'] = 'Share on Google+';
// END Newsletter Pro Text Strings

// Begin Ad Seller Pro Text Strings
$txt['seller_admin'] = 'Ad Seller Pro';
$txt['txt_seller_admin_tab'] = 'Advertise';
$txt['seller_revenue_share_settings'] = 'Revenue Share Settings';
$txt['seller_settings'] = 'Settings';
$txt['seller_txt_manage_ads'] = 'Manage Ads';
$txt['seller_txt_ad_approval'] = 'Ad Approval';
$txt['seller_txt_ad_locations'] = 'Ad Locations';
$txt['seller_txt_ad_packages'] = 'Ad Packages';
$txt['seller_view_transactions'] = 'View Transactions';
$txt['seller_revenue_share'] = 'Revenue Share';


// Permissions
$txt['permissiongroup_seller'] = 'Ad Seller Pro';
$txt['permissiongroup_simple_seller'] = 'Ad Seller Pro';

$txt['permissionname_seller_manage'] = 'Admin Ad Seller Pro';
$txt['permissionhelp_seller_manage'] = 'Allows admin control to the Ad Seller Pro';
$txt['cannot_seller_manage'] = 'You are not allowed to manage Ad Seller Pro.';



// END Ad Seller Pro Text Strings


//Begin SMF Store Text Strings
$txt['smfstore_menu'] = 'Store';
$txt['smfstore_admin'] = 'Store Configuration';

//Permissions
$txt['permissiongroup_smfstore'] = 'SMF Store';
$txt['permissiongroup_simple_smfstore'] = 'SMF Store';

$txt['permissionname_smfstore_view'] = 'View Store';
$txt['permissionhelp_smfstore_view'] = 'Allows the user to view the Store';
$txt['cannot_smfstore_view'] = 'You are not allowed to view the Store';


$txt['permissionname_smfstore_rateitem'] = 'Rate Item';
$txt['permissionhelp_smfstore_rateitem'] = 'Allows the user to rate an item.';
$txt['cannot_smfstore_rateitem'] = 'You are not allowed to rate that item.';

$txt['permissionname_smfstore_comment'] = 'Add Comments';
$txt['permissionhelp_smfstore_comment'] = 'Allows the user to leave comments on an item.';
$txt['cannot_smfstore_comment'] = 'You are not allowed to leave comments.';

$txt['permissionname_smfstore_editcomment'] = 'Edit own Comment';
$txt['permissionhelp_smfstore_editcomment'] = 'Allows the user to edit their own comments.';
$txt['cannot_smfstore_editcomment'] = 'You are not allowed to edit that comment.';

$txt['permissionname_smfstore_autocomment'] = 'Auto Approve Comments';
$txt['permissionhelp_smfstore_autocomment'] = 'Comments do not need to wait for approval.';

$txt['permissionname_smfstore_userstore'] = 'User Store';
$txt['permissionhelp_smfstore_userstore'] = 'Allows users to add their own products';

$txt['permissionname_smfstore_manage'] = 'Admin Store';
$txt['permissionhelp_smfstore_manage'] = 'Allows the user to add/delete/edit all categories. Delete Comments, Delete Items, Approve Comments';
$txt['cannot_smfstore_manage'] = 'You are not allowed to manage store.';

//END SMF Store Text Strings
// Begin SMF Gallery Text Strings
$txt['smfgallery_menu'] = 'Gallery';
$txt['smfgallery_admin'] = 'Gallery Configuration';

$txt['gallery_ftp'] = 'Batch Add';
$txt['gallery_text_catpermlist2'] = 'Category Permissions';
$txt['gallery_filespace'] = 'Space Manager';
$txt['gallery_form_approveimages'] = 'Approve Images';
$txt['gallery_form_reportimages'] = 'Reported Images';
$txt['gallery_form_approvecomments'] = 'Approve Comments';
$txt['gallery_form_managecats'] = 'Manage Categories';
$txt['gallery_text_settings'] = 'Settings';
$txt['gallery_text_videosettings'] = 'Video Settings';

//Permissions
$txt['permissiongroup_smfgallery'] = 'SMF Gallery';
$txt['permissiongroup_simple_smfgallery'] = 'Use SMF Gallery';

$txt['permissionname_smfgallery_view'] = 'View SMF Gallery';
$txt['permissionhelp_smfgallery_view'] = 'Allows the user to view the Gallery';
$txt['cannot_smfgallery_view'] = 'You are not allowed to view the Gallery';

$txt['permissionname_smfgallery_add'] = 'Add Picture';
$txt['permissionhelp_smfgallery_add'] = 'Allows the user to add a picture.';
$txt['cannot_smfgallery_add'] = 'You are not allowed to add a picture.';

$txt['permissionname_smfgallery_bulk'] = 'Bulk Uploads';
$txt['permissionhelp_smfgallery_bulk'] = 'Allows the user to use the bulk upload feature.';
$txt['cannot_smfgallery_bulk'] = 'You are not allowed to bulk upload.';

$txt['permissionname_smfgallery_edit'] = 'Edit own Picture';
$txt['permissionhelp_smfgallery_edit'] = 'Allows the user to edit their own picture.';
$txt['cannot_smfgallery_edit'] = 'You are not allowed to edit that picture.';

$txt['permissionname_smfgallery_delete'] = 'Delete own Picture';
$txt['permissionhelp_smfgallery_delete'] = 'Allows the user to delete their own picture.';
$txt['cannot_smfgallery_delete'] = 'You are not allowed to delete that picture.';

$txt['permissionname_smfgallery_ratepic'] = 'Rate Picture';
$txt['permissionhelp_smfgallery_ratepic'] = 'Allows the user to rate a picture.';
$txt['cannot_smfgallery_ratepic'] = 'You are not allowed to rate that picture.';

$txt['permissionname_smfgallery_editcomment'] = 'Edit own Comment';
$txt['permissionhelp_smfgallery_editcomment'] = 'Allows the user to edit their own comments.';
$txt['cannot_smfgallery_editcomment'] = 'You are not allowed to edit that comment.';

$txt['permissionname_smfgallery_comment'] = 'Leave Comments';
$txt['permissionhelp_smfgallery_comment'] = 'Allows the user to leave comments on a picture.';
$txt['cannot_smfgallery_comment'] = 'You are not allowed to leave comments.';

$txt['permissionname_smfgallery_report'] = 'Report Pictures/Comments';
$txt['permissionhelp_smfgallery_report'] = 'Allows the user to report pictures and comments.';
$txt['cannot_smfgallery_report'] = 'You are not allowed to report content.';

$txt['permissionname_smfgallery_autocomment'] = 'Auto Approve Comments';
$txt['permissionhelp_smfgallery_autocomment'] = 'Comments do not need to wait for approval.';

$txt['permissionname_smfgallery_autoapprove'] = 'Auto Approve Pictures';
$txt['permissionhelp_smfgallery_autoapprove'] = 'Pictures do not need to wait for approval.';

$txt['permissionname_smfgallery_usergallery'] = 'Personal Gallery';
$txt['permissionhelp_smfgallery_usergallery'] = 'Allows the user to have a personal gallery.';
$txt['cannot_smfgallery_usergallery'] = 'You are not allowed to have a gallery.';

$txt['permissionname_smfgallery_manage'] = 'Admin Gallery';
$txt['permissionhelp_smfgallery_manage'] = 'Allows the user to add/delete/edit all catagories. Delete Comments, Delete Pictures, Approve Pictures.';
$txt['cannot_smfgallery_manage'] = 'You are not allowed to manage gallery.';

//Permissions
$txt['permissiongroup_smfgalleryvideo'] = 'SMF Gallery Pro Video';

$txt['permissionname_smfgalleryvideo_add'] = 'Add Video';
$txt['permissionhelp_smfgalleryvideo_add'] = 'Allows the user to add a picture.';
$txt['cannot_smfgalleryvideo_add'] = 'You are not allowed to add a picture.';

// END SMF Gallery Text Strings

// SMF Sitemap Strings
$txt['sitemap'] = 'Sitemap';
$txt['sitemap_boards'] = 'Boards';
$txt['sitemap_topics'] = 'Topics';
$txt['sitemap_xml'] = 'Show Sitemap XML <em>link</em>';
$txt['sitemap_topic_count'] = 'Maximum number of topics to display in XML sitemap<br /><span class="smalltext">0 to show all (<strong class="error">NOT RECOMMENDED ON LARGE BOARDS</strong>)</span>';
$txt['sitemap_cache_ttl'] = 'Time that XML data should be cached (seconds)';
$txt['sitemap_board_none'] = 'No boards to display';
$txt['sitemap_topic_none'] = 'No topics to display';
$txt['sitemap_30day_priority'] = 'Priority for topics active in the last 30 days';
$txt['sitemap_60day_priority'] = 'Priority for topics active in the last 60 days';
$txt['sitemap_90day_priority'] = 'Priority for topics active in the last 90 days';
$txt['sitemap_91day_priority'] = 'Priority for topics older than 90 days';
$txt['invalid_sitemap_subaction'] = 'Invalid selection';

//reCAPTCHA for SMF
$txt['recaptcha_configure'] = 'reCAPTCHA Verification System';
$txt['recaptcha_configure_desc'] = 'Use the reCAPTCHA Verification System. Don\'t have a key for reCAPTCHA? <a href="https://www.google.com/recaptcha/admin/create"> Get your reCAPTCHA key here</a>.';
$txt['recaptcha_enabled'] = 'Use reCAPTCHA Verification System';
$txt['recaptcha_enable_desc'] = '(This replaces the built-in visual verification with reCAPTCHA)';
$txt['recaptcha_theme'] = 'reCAPTCHA Theme';
$txt['recaptcha_theme_clean'] = 'Clean';
$txt['recaptcha_theme_blackglass'] = 'Black Glass';
$txt['recaptcha_theme_red'] = 'Red';
$txt['recaptcha_theme_white'] = 'White';
$txt['recaptcha_public_key'] = 'reCAPTCHA Public Key';
$txt['recaptcha_private_key'] = 'reCAPTCHA Private Key';
$txt['recaptcha_no_key_question'] = 'Don\'t have a key for reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Get your reCAPTCHA key here.';

// Added by Related Topics
$txt['admin_related_topic'] = 'Related Topics';
$txt['admin_related_topics_information'] = 'Information';
$txt['admin_related_topics_settings'] = 'Settings';
$txt['admin_related_topics_methods'] = 'Methods';

$txt['related_topics_admin_title'] = 'Related Topics';
$txt['related_topics_admin_desc'] = '';

$txt['related_latest_news'] = 'Latest News';
$txt['related_news_unable_to_connect'] = 'Unable to connect to <a href="http://www.smfarcade.info">SMFArcade.info</a> for latest news...';
$txt['related_version_info'] = 'Version Information';
$txt['related_installed_version'] = 'Installed Version';
$txt['related_latest_version'] = 'Latest Version';

$txt['related_topics_ignored_boards'] = 'Ignored Boards';

$txt['related_topics_methods_title'] = 'Methods';
$txt['related_topics_methods'] = 'Select methods used for determining Related Topics<div class="smalltext">Rebuild of index is required after changing these settings</div>';

$txt['related_topics_index'] = 'Index';
$txt['related_topics_rebuild'] = 'Rebuild Indexes';
$txt['related_topics_rebuild_desc'] = 'Use this after changing settings or to build initial cache';

$txt['relatedFulltext'] = 'Fulltext';

$txt['related_topics_settings_title'] = 'Related Topics';
$txt['relatedTopicsEnabled'] = 'Enable Related Topics';
$txt['relatedTopicsCount'] = 'How many related topics to show';

$txt['no_methods_selected'] = 'You haven\'t selected which methods to use to determine related topics';

$txt['related_topics'] = 'Related Topics';
// END Added by Related Topics
// Begin Awesome Post Ratings
$txt['permissionname_apr_rate'] = 'Rate Awesome Posts';
$txt['permissionhelp_apr_rate'] = 'Allows the user to add a download.';
$txt['cannot_apr_rate'] = 'You are not allowed to add a download.';

$txt['awepost_txt_settings'] = 'Settings';
$txt['awepost_ratingstypelist'] = 'Ratings Type List';

$txt['awepost_admin'] = 'Awesome Post Ratings';
$txt['awepost_text_postratings'] = 'Post Ratings';
$txt['awepost_text_viewlist'] = 'View List';
$txt['awepost_text_given'] = 'Given';
$txt['awepost_text_recieved'] = 'Recieved';
// END Awesome Post Ratings

// Begin SMF Gallery Text Strings
$txt['smfgallery_menu'] = 'Gallery';
$txt['smfgallery_admin'] = 'Gallery Configuration';

$txt['gallery_ftp'] = 'Batch Add';
$txt['gallery_text_catpermlist2'] = 'Category Permissions';
$txt['gallery_filespace'] = 'Space Manager';
$txt['gallery_form_approveimages'] = 'Approve Images';
$txt['gallery_form_reportimages'] = 'Reported Images';
$txt['gallery_form_approvecomments'] = 'Approve Comments';
$txt['gallery_form_managecats'] = 'Manage Categories';
$txt['gallery_text_settings'] = 'Settings';
$txt['gallery_text_videosettings'] = 'Video/Audio Settings';
$txt['gallery_txt_moderationcenter'] = 'Moderation Center';
$txt['gallery_txt_imagemoderation'] = 'Image Moderation';
$txt['gallery_txt_commentmoderation'] = 'Comment Moderation';

$txt['gallery_menu_addpic'] = 'Add Picture';
$txt['gallery_menu_addvideo'] = 'Add Video/Audio';
$txt['gallery_menu_search'] = 'Search';
$txt['gallery_menu_stats'] = 'Stats';

//Permissions
$txt['permissiongroup_smfgallery'] = 'SMF Gallery';
$txt['permissiongroup_simple_smfgallery'] = 'Use SMF Gallery';

$txt['permissionname_smfgallery_view'] = 'View SMF Gallery';
$txt['permissionhelp_smfgallery_view'] = 'Allows the user to view the Gallery';
$txt['cannot_smfgallery_view'] = 'You are not allowed to view the Gallery';

$txt['permissionname_smfgallery_add'] = 'Add Picture';
$txt['permissionhelp_smfgallery_add'] = 'Allows the user to add a picture.';
$txt['cannot_smfgallery_add'] = 'You are not allowed to add a picture.';

$txt['permissionname_smfgallery_bulk'] = 'Bulk Uploads';
$txt['permissionhelp_smfgallery_bulk'] = 'Allows the user to use the bulk upload feature.';
$txt['cannot_smfgallery_bulk'] = 'You are not allowed to bulk upload.';

$txt['permissionname_smfgallery_edit'] = 'Edit own Picture';
$txt['permissionhelp_smfgallery_edit'] = 'Allows the user to edit their own picture.';
$txt['cannot_smfgallery_edit'] = 'You are not allowed to edit that picture.';

$txt['permissionname_smfgallery_delete'] = 'Delete own Picture';
$txt['permissionhelp_smfgallery_delete'] = 'Allows the user to delete their own picture.';
$txt['cannot_smfgallery_delete'] = 'You are not allowed to delete that picture.';

$txt['permissionname_smfgallery_ratepic'] = 'Rate Picture';
$txt['permissionhelp_smfgallery_ratepic'] = 'Allows the user to rate a picture.';
$txt['cannot_smfgallery_ratepic'] = 'You are not allowed to rate that picture.';

$txt['permissionname_smfgallery_editcomment'] = 'Edit own Comment';
$txt['permissionhelp_smfgallery_editcomment'] = 'Allows the user to edit their own comments.';
$txt['cannot_smfgallery_editcomment'] = 'You are not allowed to edit that comment.';

$txt['permissionname_smfgallery_comment'] = 'Leave Comments';
$txt['permissionhelp_smfgallery_comment'] = 'Allows the user to leave comments on a picture.';
$txt['cannot_smfgallery_comment'] = 'You are not allowed to leave comments.';

$txt['permissionname_smfgallery_report'] = 'Report Pictures/Comments';
$txt['permissionhelp_smfgallery_report'] = 'Allows the user to report pictures and comments.';
$txt['cannot_smfgallery_report'] = 'You are not allowed to report content.';

$txt['permissionname_smfgallery_autocomment'] = 'Auto Approve Comments';
$txt['permissionhelp_smfgallery_autocomment'] = 'Comments do not need to wait for approval.';

$txt['permissionname_smfgallery_autoapprove'] = 'Auto Approve Pictures';
$txt['permissionhelp_smfgallery_autoapprove'] = 'Pictures do not need to wait for approval.';

$txt['permissionname_smfgallery_usergallery'] = 'Personal Gallery';
$txt['permissionhelp_smfgallery_usergallery'] = 'Allows the user to have a personal gallery.';
$txt['cannot_smfgallery_usergallery'] = 'You are not allowed to have a gallery.';

$txt['permissionname_smfgallery_manage'] = 'Admin Gallery';
$txt['permissionhelp_smfgallery_manage'] = 'Allows the user to add/delete/edit all catagories. Delete Comments, Delete Pictures, Approve Pictures.';
$txt['cannot_smfgallery_manage'] = 'You are not allowed to manage gallery.';

//Permissions
$txt['permissiongroup_smfgalleryvideo'] = 'SMF Gallery Pro Video/Audio';

$txt['permissionname_smfgalleryvideo_add'] = 'Add Video/Audio';
$txt['permissionhelp_smfgalleryvideo_add'] = 'Allows the user to add a video/audio file';
$txt['cannot_smfgalleryvideo_add'] = 'You are not allowed to add a video/audio file.';

// END SMF Gallery Text Strings
// Begin Contact Page Text Strings
$txt['smfcontact_contact'] = 'Contact';
$txt['permissionname_view_contact'] = 'View Contact Page';
$txt['permissionhelp_view_contact'] = 'Allows members to view contact page and send email.';
$txt['cannot_view_contact'] = 'You can not view the contact page.';
$txt['smfcontact_name'] = 'Your Name:';
$txt['smfcontact_subject'] = 'Subject';
$txt['smfcontact_body'] = 'Message';
$txt['smfcontact_emailaddress'] = 'Email Address';
$txt['smfcontact_sendemail'] = 'Send e-mail';
$txt['smfcontact_messagesent'] = 'Your message has been sent!';
$txt['smfcontact_messagesent_click'] = 'Your message has been sent! Click ';
$txt['smfcontact_messagesent_return'] = 'here</a> to return to the board.';
$txt['smfcontact_errname'] = 'You need to enter your name.';
$txt['smfcontact_errsubject'] = 'You need to enter a subject.';
$txt['smfcontact_errmessage'] = 'You need to enter a message.';
$txt['smfcontact_erremail'] = 'You need to enter your email address.';
$txt['smfcontact_titlesent'] = ' - Message sent.';
$txt['smfcontact_form'] = 'Contact Page Form for ';
$txt['smfcontact_formname'] = "Name: ";
$txt['smfcontact_formemail'] = "Email: ";
$txt['smfcontact_ip'] = "IP: ";
$txt['smfcontact_formmessage'] =  "Message: \n";
$txt['smfcontactpage_email'] = 'SMF Contact Page Email: ';
// END Contact Page Text Strings


//Begin ILA in line attachment changes
$txt['mods_cat_modifications_ila'] = 'In Line Attachments';
$txt['ila_desc'] = 'This section allows you to setup the In Line Attachment modification';
$txt['ila_enabled'] = '(ILA) Enable the in line attachment modification';
$txt['ila_alwaysfullsize'] = '(ILA) Force inline images to always be full size';
$txt['ila_basicmenu'] = '(ILA) Only show basic ILA menu';
$txt['ila_insert'] = 'Insert Attachment';
$txt['ila_title'] = 'End-of-post expandable thumbnail ';
$txt['ila_option1'] = 'Inline expandable thumbnail';
$txt['ila_option2'] = 'Inline full-size image';
$txt['ila_option3'] = 'Inline text link';
$txt['ila_option4'] = 'Inline short text link';
$txt['ila_nopermission'] = ' [ You are not authorized to view attachments ] ';
$txt['ila_invalid'] = ' [ Attachment Invalid Or Does Not Exist ] ';
$txt['ila_disabled'] = ' [ Attachments Disabled ] ';
$txt['ila_insert_next'] = ' in the message';
$txt['ila_attachment_missing'] = ' [ Specified attachment is not available ]';
$txt['ila_thereare'] = 'There are only';
$txt['ila_attachment'] = 'attachment(s)';
$txt['ila_forbidden_for_guest'] = ' [ Guests cannot view attachments ] ';
$txt['ila_quote_link'] = ' (Attachment Link) ';
$txt['ila_quote_nolink'] = ' (Attachment) ';
$txt['ila_none'] = 'as expandable thumbnail';
$txt['ila_img'] = 'as full-size graphic';
$txt['ila_url'] = 'as a link';
$txt['ila_mini'] = 'as a compact link';
//End ILA in line attachment changes

// Begin gdpr Helper Text Strings
$txt['gdpr_title'] = 'GDPR Pro';

$txt['gdpr_privacypolicy'] = 'Privacy Policy';
$txt['gdpr_text_settings'] = 'Settings';
$txt['gdpr_txt_exportdata']  = 'Export Data';

$txt['gdpr_txt_privacy_header'] = 'Privacy Policy/Cookies';
$txt['gdpr_txt_privacy_desc'] = 'We collect personal information when you use our online services. We use cookies to identify you and to personalize your experience. For details, please see our <a href="' . $scripturl . '?action=gdpr;sa=privacypolicy" target="_blank">Privacy Policy</a>';
$txt['gdpr_txt_privacy_agree'] = 'I agree and consent to the Privacy Policy';
$txt['gdpr_txt_privacy_fail'] = 'We can not process your registration if do not agree to our Privacy Policy';

$txt['gdpr_agreement_date'] = 'Agreement Date';
$txt['gdpr_privacypolicy_date'] = 'Privacy Policy Date';

// END gdpr Helper Text Strings

// Message Editor Pro
$txt['msg_editorpro_enable'] = 'Message Editor Pro Enable';
$txt['justify'] = 'Justify';
$txt['shortcuts'] = 'Shortcuts: alt+s save/post, alt+p preview';
$txt['shortcuts_firefox'] = 'Shortcuts: shift+alt+s save/post, shift+alt+p preview';
$txt['shortcuts_mac'] = 'Shortcuts: ??S save/post, ??P preview';
$txt['shortcuts_drafts'] = ', alt+d save draft';
$txt['shortcuts_drafts_firefox'] = ', shift+alt+d save draft';
$txt['shortcuts_drafts_mac'] = ', ??D save draft';

// Message Editor Pro
$txt['msg_editorpro_enable'] = 'Message Editor Pro Enable';
$txt['msg_editorpro_height'] = 'Message Editor Pro Height Override';
$txt['justify'] = 'Justify';

$txt['shortcuts'] = 'Shortcuts: alt+s save/post, alt+p preview';
$txt['shortcuts_firefox'] = 'Shortcuts: shift+alt+s save/post, shift+alt+p preview';
$txt['shortcuts_mac'] = 'Shortcuts: ??S save/post, ??P preview';
$txt['shortcuts_drafts'] = ', alt+d save draft';
$txt['shortcuts_drafts_firefox'] = ', shift+alt+d save draft';
$txt['shortcuts_drafts_mac'] = ', ??D save draft';


// Begin Auto Embed Media Pro Text Strings
$txt['mediapro_admin'] = 'Simple Audio Video Embedder';
$txt['mediapro_settings'] = 'Settings';
$txt['mediapro_save_settings'] = 'Save Settings';
$txt['mediapro_err_cache'] = 'Cache folder not writable must fix for performance!';
$txt['mediapro_settings2'] = 'Settings and configuration for Simple Audio Video Embedder';
$txt['mediapro_copyremove'] = 'Copyright Removal';
$txt['mediapro_copyremove2'] = 'Remove the copyright for Simple Audio Video Embedder';
// END Auto Embed Media Pro  Text Strings			

// OneAll Social Login (https://docs.oneall.com/plugins/)
$txt['oasl_title'] = 'OneAll Social Login';
$txt['oasl_config'] = 'Configuration';
$txt['oasl_settings_descr'] = 'OneAll Social Login Settings';
$txt['oasl_user_does_not_exist'] = "<strong>This social network has not yet been linked to an account.</strong><br /><br />Please use the registration form to create a new account. If you already have an account, open your profile settings to connect the social network to it.";
$txt['oasl_user_may_not_register'] = 'Sorry, but the admistration has disabled the registration for new users.';
$txt['oasl_user_require_activation'] = 'Your account has been created but it needs to be verified. Please check your mailbox and click on the link in the verification email.';


?>