<?php
/*
SMF Store
by: vbgamer45
http://www.smfhacks.com
Copyright 2009-2020 SMFHacks.com

############################################
License Information:
SMF Store is NOT free software.
This software may not be redistributed.

The license is good for a single instance / install on a website.
You are allowed only one active install for each license purchase.

Links to http://www.smfhacks.com must remain unless
branding free option is purchased.
#############################################
*/
global $scripturl;

// Main Store Title
$txt['store_text_title'] = 'Store';

$txt['store_text_addcategory'] = 'Add Category';
$txt['store_text_addsubcat'] = 'Add Sub Category';
$txt['store_text_cat_disableratings'] = 'Disable Product Ratings';
$txt['store_text_parentcategory'] =	'Parent Category';
$txt['store_text_catnone'] =	'(None)';
$txt['store_text_editcategory'] = 'Edit Category';
$txt['store_text_delcategory'] = 'Delete Category';

$txt['store_text_totalitems'] = 'Total Products';
$txt['store_text_reorder'] = 'Reorder';
$txt['store_text_options'] = 'Options';
$txt['store_text_storename'] = 'Category';
$txt['store_text_storedescription'] = 'Description';

$txt['store_text_comwaitapproval'] = 'Comments waiting approval: ';
$txt['store_text_itemswaitingtoship'] = 'Items waiting to be shipped: ';
$txt['store_text_comcheckapproval'] = 'Check Comments Approval List';
$txt['store_text_comapprovallist'] = 'Comments Approval List';

$txt['store_text_up'] = '[Up]';
$txt['store_text_down'] = '[Down]';
$txt['store_text_edit'] = '[Edit]';
$txt['store_text_delete'] = '[Delete]';
$txt['store_text_hideproduct'] = '[Hide Product]';
$txt['store_text_showproduct'] = '[Show Product]';

$txt['store_text_markshipped'] = '[Mark Shipped]';
$txt['store_text_marknotshipped'] = '[Mark Not Shipped]';

$txt['store_text_approve'] = '[Approve]';
$txt['store_rep_viewitem'] = 'View Product';

$txt['store_text_hidewarning'] = 'This product has been hidden. No one can see this product listing. Existing customers for this product can still see their orders.';

$txt['store_text_totalsales'] = 'Total Number of Sales: ';
$txt['store_text_totalfiles'] = 'Total Digital Files for this product: ';
$txt['store_text_deletetip'] = 'Tip: Use the hide product feature to delist an item from the product listing instead of deleting it this allows past orders to function correctly.
';

$txt['store_text_licensecodes'] = '[License Codes]';
$txt['store_text_licenseagreement'] = '[License Agreement]';
$txt['store_text_makeprimary'] = '[Make Primary Image]';
$txt['store_text_primary'] = 'Primary Image';
$txt['store_text_viewpic'] = 'View More Pictures';
$txt['store_text_viewpic2'] = 'View Pictures For ';
$txt['store_text_viewproduct'] = 'View Product';
$txt['store_error_invalid_picture'] = 'You have entered an invalid picture format. Needs to be either bmp, gif, jpg, or png';
$txt['store_error_no_picture'] = 'No picture upload found';

$txt['store_text_myorders'] = '[My Orders]';
$txt['store_text_viewshoppingcart'] = '[View Shopping Cart]';
$txt['store_text_viewshoppingcart2'] = 'View Shopping Cart';
$txt['store_text_shoppingcart'] = 'Shopping Cart';
$txt['store_text_shoppingcart_return'] = 'Return to Shopping Cart';

$txt['store_text_adminpanel'] = 'Store Admin Panel';
$txt['store_text_permissions'] = 'Permissions';
$txt['store_form_title'] = 'Title:';
$txt['store_form_description'] = 'Description:';
$txt['store_text_bbcsupport'] = '(BBC codes are supported)';
$txt['store_form_icon'] = 'Category Image Url:';
$txt['store_form_uploadicon'] = 'Upload Category Image';
$txt['store_write_catpatherror'] = 'Warning Store Category Image Path is not writable! ';
$txt['store_form_filenameicon'] = 'Category Image Filename:';

$txt['store_error_cat_title'] = 'A title for the category is required';

$txt['store_error_nocat_above'] = 'There is no category above the current one.';
$txt['store_error_nocat_below'] = 'There is no category below the current one.';

$txt['store_error_noitem_above'] = 'There is no item above the current one.';
$txt['store_error_noitem_below'] = 'There is no item below the current one.';

$txt['store_text_cattomove'] = 'Category to move products and sub categories';
$txt['store_text_warncatdel'] = 'There are % items in this category. All items and subcategories will be moved to the main area.';

$txt['store_form_comment'] = 'Comment:';
$txt['store_error_no_comment'] = 'You need to enter a comment';
$txt['store_rep_deletepic'] = '[Delete Picture]';
$txt['store_text_addcomment'] = 'Add Comment';
$txt['store_text_editcomment'] = 'Edit Comment';
$txt['store_text_commodifiedby'] = 'Last modified by: ';
$txt['store_text_commentwait'] = 'Your comment will not appear until it has been approved.';

$txt['store_text_permissions'] = 'Permissions';
$txt['store_set_permissionnotice'] = 'Lastly! Do not forget to make sure the permissions are set for each group, in order for them to view the store.';
$txt['store_set_editpermissions'] = 'Edit Permissions';
$txt['store_save_settings'] = 'Save Settings';

$txt['store_write_error'] = 'Warning Store path is not writable! ';
$txt['store_nopaypal_error'] = 'No PayPal email address or Stripe, or Coinbase information has been entered into the SMF Store settings page. Please visit the SMF Store settings by going to Admin -> Store Configuration -> Payment Modules';
$txt['store_error_hidden'] = 'This product has been removed. Please contact the store owner for more information.';



$txt['store_text_addproduct'] = 'Add Product';
$txt['store_text_editproduct'] = 'Edit Product';
$txt['store_text_delproduct'] = 'Delete Product';
$txt['store_text_returnstore'] = 'Return to Store';
$txt['store_text_returnitem'] = 'Return to Item';


$txt['store_text_products'] = 'Products';

$txt['store_text_views2'] = 'Views';
$txt['store_item_price2'] = 'Price';
$txt['store_item_shipping2'] = 'Shipping';
$txt['store_item_totalprice'] = 'Total Price';
$txt['store_item_totals'] = 'Totals';

$txt['store_shoppingcartempty'] = 'Your shopping cart is empty';
$txt['store_txt_checkout'] = 'Checkout';

$txt['store_item_name'] = 'Product Name:';
$txt['store_item_price'] = 'Price:';
$txt['store_item_shipping'] = 'Requires Shipping';
$txt['store_item_shippingcost'] = 'Shipping Cost:';
$txt['store_item_currency'] =  'Currency:';
$txt['store_item_groupmove'] =  'Group to Move to:';
$txt['store_item_groupnochange'] =  'No Group Change';
$txt['store_item_groupexpire'] =  'Group Expire in days';
$txt['store_item_expiredays'] = 'Download Links expire in days';
$txt['store_item_second_paypal'] = 'Alternate PayPal payment address';
$txt['store_item_second_paypal2'] = '<span class="smalltext"><i>Only enter if you want payment at a different PayPal account</i></span>';

$txt['store_item_addfilesandpictures'] =  'Files and Pictures';
$txt['store_item_editfilesandpictures'] =  'Edit Files and Pictures';
$txt['store_item_stock'] = 'Requires Stock';
$txt['store_item_stockqty'] = 'Item Quantity in Stock:';
$txt['store_item_note'] = 'Note: After the item is created the option to add pictures and digital downloads will be shown.';
$txt['store_item_optionalextrafield'] = 'Extra Optional Custom Fields';
$txt['store_item_cus_optionfieldtype'] = 'Option Field Type:';
$txt['store_item_cus_selecttype'] = ' - Select Type - ';
$txt['store_item_cus_dropdownmenu'] = 'Drop-Down Menu';
$txt['store_item_cus_text'] = 'Text';
$txt['store_item_cus_optionname'] = 'Option Name:';
$txt['store_item_cus_60limit'] = '(60 character limit)';
$txt['store_item_cus_choicelimits'] = '(10-choice limit, 30 characters per choice; separate each choice using a return)';
$txt['store_item_cus_choices'] = 'Choices:';
$txt['store_item_cus_applicable'] = '(if applicable)';

$txt['store_form_viewratings'] = 'View Ratings';
$txt['store_form_rateitem'] = 'Rate Product';
$txt['store_form_norating'] = 'This product has not been rated yet.';
$txt['store_form_rating'] = 'Rating: ';
$txt['store_form_ratingby'] = ' by ';
$txt['store_form_ratingmembers'] = '  members.';
$txt['store_text_rating'] = 'Rating';
$txt['store_text_views'] = 'Views: ';
$txt['store_text_date'] = 'Date: ';
$txt['store_error_no_rating_selected'] = 'No rating selected.';
$txt['store_error_already_rated'] = 'You have already rated this product.';


$txt['store_app_date'] = 'Date';
$txt['store_app_membername'] = 'Member Name';
$txt['store_form_approveallcomments'] = 'Approve All Comments';
$txt['store_form_approvecomments'] = 'Approve Comments';
$txt['store_rep_itemlink'] = 'Item Link';
$txt['store_rep_comment'] = 'Comment';


$txt['store_text_home'] = 'Store Home';
$txt['store_text_posts'] = 'Posts: ';

// Admin settings
$txt['store_text_settings'] = 'Settings';
$txt['store_text_layout'] = 'Layout';
$txt['store_text_paymentmodules'] = 'Payment Modules';
$txt['store_text_stats'] = 'Stats And Download Logs';
$txt['store_text_transactions'] = 'Transactions';
$txt['store_text_searchtransactions'] = 'Search Transactions';
$txt['store_text_downloadtransactions'] = 'Download Transactions';
$txt['store_text_productlist'] = 'Product List';
$txt['store_text_searchlog'] = 'Search Log';

$txt['store_text_searchtext'] = 'Search Text';

$txt['store_txt_ipnurl'] = 'IPN Url: % <br /> <span class="smalltext">Set by logging into PayPal. Click on the Profile Link Then click Instant Payment Notification Preferences and then turn IPN on and enter the url above for the IPN url.</span>';

$txt['store_txt_cust_email'] = "
Dear %fullname,

Thank you for your purchase of %productname.

You can view your order and information at:
%myorders

%emailnote



";

$txt['store_txt_cust_email_checkout'] = "
Dear %fullname,

Thank you for your purchase!

You can view your order and information at:
%myorders

";
$txt['store_text_ipn_subject_checkout'] = 'Thank you for your order';
$txt['store_txt_cust_email_checkout2'] = "
%productname
%productcodes
%emailnote
";



$txt['store_trans_txn_id'] = 'Transaction ID';
$txt['store_trans_payment_status'] = 'Payment Status';
$txt['store_trans_payment_date'] = 'Payment Date';
$txt['store_trans_email'] = 'Email';
$txt['store_trans_shipping'] = 'Shipping Information';


$txt['store_trans_firstname'] = 'First Name';
$txt['store_trans_lastname'] = 'Last Name';
$txt['store_trans_street'] = 'Street';
$txt['store_trans_city'] = 'City';
$txt['store_trans_state'] = 'State';
$txt['store_trans_zip'] = 'Zip';
$txt['store_trans_country'] = 'Country';
$txt['store_text_order_number'] = 'Order Number';
$txt['store_text_order_detail'] = 'Order Detail';

$txt['store_trans_option_name1'] = 'Custom Option 1';
$txt['store_trans_option_name2'] = 'Custom Option 2';
$txt['store_trans_option_choices1'] = 'Custom Value 1';
$txt['store_trans_option_choices2'] = 'Custom Value 2';

$txt['store_file_totaldownloads'] = 'Total Downloads';
$txt['store_file_lastdownload'] = 'Last Download';
$txt['store_file_downloadsleft'] = 'Downloads Left';

$txt['store_file_errimport'] = 'The file you are trying to import does not exist at the location entered.';
$txt['store_file_errtitle'] = 'A file title is required';

$txt['store_text_updateitemlog'] = 'Update Item Log';

$txt['store_txt_myorders'] = 'My Orders';
$txt['store_txt_contactstore'] = 'Contact Store';
$txt['store_txt_contact_subject'] = 'Subject';
$txt['store_txt_contact_message'] = 'Message';

$txt['store_txt_contact_message_empty'] = 'Your message to the store is empty. Please enter a message to contact the store.';

$txt['store_txt_contact_sent'] = 'Your message has been sent!';
$txt['store_txt_contact_sent2'] = 'Your message has been sent to the store owner. Click <a href="' . $scripturl . '?action=store;sa=myorders">here</a> to return to your MyOrders page.';

$txt['store_txt_productorders'] = 'Product Orders';
$txt['store_txt_productorders_note'] = 'If you just ordered a product your order will appear in the list shortly keep checking back on this page for your order status.';
$txt['store_txt_productname'] = 'Product Name';
$txt['store_txt_orderdate'] = 'Order Date';
$txt['store_txt_pricepaid'] = 'Price Paid';
$txt['store_txt_orderstatus'] = 'Order Status';
$txt['store_txt_downloadlinks'] = 'Download Links';

$txt['store_err_noitemname'] = 'Product name is required.';
$txt['store_error_no_cat'] = 'You need to select a category.';
$txt['store_error_no_itemid'] = 'No item selected.';
$txt['store_error_no_downloadpermission'] = 'You do not have permission to download that file';
$txt['store_error_no_maxdownloads'] = 'You have exceeded your download limit for this file';
$txt['store_error_linkexpire'] = 'The download links for this product purchased have expired.';


$txt['store_txt_product_pics'] = 'Product Pictures';
$txt['store_form_addpicture'] = 'Add Picture';
$txt['store_form_editpicture'] = 'Edit Picture';
$txt['store_form_delpicture'] = 'Delete Picture';
$txt['store_pic_caption'] = 'Picture Caption';
$txt['store_form_uploadpic'] = 'Picture File: ';
$txt['store_image_picture'] = 'Picture';
$txt['store_form_digitaldownloads'] = 'Downloads for digital products';
$txt['store_form_addfile'] = 'Add File';
$txt['store_form_editfile'] = 'Edit File';
$txt['store_form_delfile'] = 'Delete File';
$txt['store_file_title'] = 'File Title';
$txt['store_file_maxdownloads'] = 'Max Downloads';
$txt['store_file_maxdownloadsnote'] = "Use 0 for no download limit";
$txt['store_file_import'] = "Import File Path";
$txt['store_file_importnote'] = "If the file is too large to upload via a form. Then enter the full path on your webhosting to the file.";
$txt['store_file_filesize'] = 'File Size';
$txt['store_form_uploadfile'] = 'File';
$txt['store_text_contactform'] = ' Contact Form';
$txt['store_text_contactsent'] = 'Sent By:';
$txt['store_text_licenseinfo'] = 'Licenses';
$txt['store_remote_file'] = "Remote File";

$txt['store_form_rating'] = 'Rating: ';
$txt['store_text_comments'] = 'Comments';
$txt['store_text_price'] = 'Price: ';
$txt['store_text_outofstock'] = '<font color="#FF0000">Out of Stock</font>';
$txt['store_text_instock'] = 'Item in Stock';
$txt['store_text_delcomment'] = '[Delete Comment]';
$txt['store_text_edcomment'] = '[Edit Comment]';

// Category Display Settings
$txt['store_cat_settings'] = 'Category Display Settings';
$txt['store_set_t_picture'] = 'Show picture';
$txt['store_set_t_price'] = 'Show price';
$txt['store_set_t_stock'] = 'Show instock';
$txt['store_set_t_date'] = 'Show date';
$txt['store_set_t_comment'] = 'Show comment total';
$txt['store_set_t_rating'] = 'Show rating';
$txt['store_text_pages'] = 'Pages: ';

$txt['store_prod_settings'] = 'Product Display Settings';
$txt['store_set_p_price'] = 'Show price';
$txt['store_set_p_stock'] = 'Show instock';
$txt['store_set_p_date'] = 'Show date';
$txt['store_set_p_des'] = 'Show description';
$txt['store_set_p_title'] = 'Show title';
$txt['store_set_p_views'] = 'Show Views';

// Settings
$txt['store_set_custom_store_name'] = 'Custom Store Name:';
$txt['store_set_path'] = 'Store Path: ';
$txt['store_set_url'] = 'Store Url: ';
$txt['store_set_items_per_page'] = 'Items per page:';
$txt['store_set_items_per_row'] = 'Number of items per row:';
$txt['store_set_contact_email'] = 'Contact Email:<br /><span class="smalltext">Used for low stock items and low codes for digital products</span>';
$txt['store_set_copy_sales_email'] = 'Receive copy of sales email';
$txt['store_set_commentsnewest'] = 'Display newest comments first.';
$txt['store_set_showratings'] = 'Show item ratings';
$txt['store_set_thumb_height'] = 'Max thumbnail height:';
$txt['store_set_thumb_width'] = 'Max thumbnail width:';
$txt['store_set_count_child'] = 'Counts child categories item totals. (Uses more database queries)';
$txt['store_set_no_cats'] = 'Do not use categories show all products in one list';
$txt['store_set_showcomments'] = 'Show Comments';
$txt['store_set_onlybuyercomment'] = 'Only buyers can leave comments';
$txt['store_set_showcoupons'] = 'Allow coupon codes';
$txt['store_set_paypal'] = 'PayPal Email';
$txt['store_set_lowstock'] = 'Notify Low Stock Qty';
$txt['store_set_lowlicense'] = 'Notify Low License Key Qty';
$txt['store_set_shoppingcart'] = 'Use Shopping Cart';
$txt['store_set_buynowimageurl'] = 'Buy Now image url:';
$txt['store_set_subscribeimageurl'] = 'Subscribe Button image url:';
$txt['store_set_addtocartimageurl'] = 'Add to cart image url:';
$txt['store_conversion_tracking'] = '<b>Conversion tracking html code</b>';
$txt['store_conversion_tracking2'] = '<span class="smalltext"><i>Tracked when a user is taken to thank you page after payment</i></span><br />';

$txt['store_blocks_num_items_toshow'] = 'Number of items to show in the index Blocks';

$txt['store_mod_paypal_note'] = '<span class="smalltext">Store requires a PayPal Business or premeir account.  You can get a free Business PayPal account by clicking <a href="https://www.paypal.com/us/mrb/pal=V4CPP4488SW3U" target="_blank">here</a></span>';


$txt['store_set_disable_lightbox'] = 'Disable Lightbox';
$txt['store_show_membergroupprice'] = 'Show user\'s membergroup price in all spots in the store.';
$txt['store_allow_guest_digital_secure'] = 'Guests can purchase digital downloads using secure download link';

// Modules Text
$txt['store_mod_paypal'] = 'PayPal';
$txt['store_mod_2co'] = '2Checkout';
$txt['store_mod_authorize'] = 'Authorize.Net';
$txt['store_mod_ccbill'] = 'ccBill';
$txt['store_mod_googlecheckout'] = 'Google Checkout';
$txt['store_mod_nochex'] = 'Nochex';
$txt['store_mod_wordpay'] = 'WorldPay';



$txt['store_text_addlicense'] = 'Add License';
$txt['store_text_licensecode'] = 'License Code';
$txt['store_text_licensenote'] = '<span class="smalltext">Add one license key/information per line</span>';
$txt['store_text_licensetotal'] = 'Total Codes: %s  Unused Codes: %u';

$txt['store_text_licensekeyfor'] = 'License for ';

// Give Free Download Link Page text strings
$txt['store_text_givefreeproduct2'] = "[Give Free Product]";
$txt['store_text_givefreeproduct'] = 'Give a free product to a user';
$txt['store_text_givefree'] = 'Give Free';
$txt['store_err_freename'] = 'You need to enter a member name to give a free order.';
$txt['store_err_freename_none'] = 'No member name found by the name entered please try again make sure the name was spelled correctly.';
$txt['store_err_free_subject'] = 'Free Order has been added';
$txt['store_err_free_message'] = 'Free Order has been added for that user. To view the free order visit the <a href="' . $scripturl . '?action=store;sa=trans">transactions</a> page.';
$txt['store_err_free_order'] = 'Free Order';
$txt['store_membername'] = 'Member name:';
$txt['store_txt_notes'] = 'Order Notes';
$txt['store_txt_savenote'] = 'Save Note';

$txt['store_file_unlimited'] = 'Unlimited';

// Inventory
$txt['store_text_inventory'] = 'Inventory';
$txt['store_ivn_qtyinstock'] = 'Quantity in Stock';

//Coupons

$txt['store_coup_coupons'] = 'Coupons';
$txt['store_coup_addcoupon'] = 'Add Coupon';
$txt['store_coup_editcoupon'] = 'Edit Coupon';
$txt['store_coup_all'] = 'All Products';
$txt['store_coup_expirenever'] = 'Never';

$txt['store_coup_log'] = 'Coupon Log';

$txt['store_coup_couponcode'] = 'Coupon Code';
$txt['store_coup_couponexpires'] = 'Coupon Expires';
$txt['store_coup_expiredate'] = 'Expire Date';
$txt['store_coup_discount'] = 'Discount';

$txt['store_coup_discounttype'] = 'Discount Type';
$txt['store_coup_percent'] = 'Percent';
$txt['store_coup_amount'] = 'Amount';

$txt['store_coup_maxmemberuse'] = 'Max customer uses:';
$txt['store_coup_maxtotaluse'] = 'Max total coupons uses:';

$txt['store_coup_errcodeexists'] = 'That coupon code already exists';

$txt['store_coup_errnocode'] = 'A coupon code is required';
$txt['store_coup_errnoamount'] = 'A discount amount needs to be entered.';

$txt['store_coup_errinvalidpercent'] = 'Discount percent needs to be between 1 and 100';

$txt['store_coup_errcodenotfound'] = 'No coupon was found with the code entered ';
$txt['store_coup_errcodeexpired'] = 'This coupon code has expired.';
$txt['store_coup_errcouponhasbeenused'] = 'This coupon has been used too many times and is no longer allowed to be used.';
$txt['store_coup_errcouponusedcustomer'] = 'You have used this coupon too many times and can not be used anymore.';

$txt['store_coup_errnotitem'] = 'This coupon code can not be used on this item.';

$txt['store_coup_entercode'] = 'Enter coupon code: ';
$txt['store_coup_applycode'] = 'Apply Code';


$txt['store_coup_month'] = 'Month';
$txt['store_coup_day'] = 'Day';
$txt['store_coup_year'] = 'Year';

// Index blocks
$txt['store_index_settings'] = 'Store main page settings';
$txt['store_index_toprated'] = 'Show top rated products on the main page';
$txt['store_index_recent'] = 'Show the most recent products on the main page';
$txt['store_index_mostviewed'] = 'Show the most viewed products on the main page';
$txt['store_index_mostcomments'] = 'Show the most commented products on the main page';
$txt['store_index_random'] = 'Show  random products on the main page';
$txt['store_index_showtop'] = 'Show the index blocks on top of store';

//Index Page Strings
$txt['store_main_recent'] = 'Recent Products';
$txt['store_main_viewed'] = 'Most Viewed';
$txt['store_main_toprated'] = 'Top Rated';
$txt['store_main_mostcomments'] = 'Most Commented';
$txt['store_main_random'] = 'Random';

// IPN Page Text Strings
$txt['store_text_stockwarnsubject'] = 'Stock Low for: ';
$txt['store_text_stockwarnmessage'] = "Stock Low for: %productname\nQty left: %qty\n\nItem Link: %itemurl";

$txt['store_text_licensewarnsubject'] = 'License codes low for FileID: ';

$txt['store_text_ipn_subject_line'] = ' Purchase';


// Currency strings
$txt['store_cur_USD'] = 'U.S. Dollars';
$txt['store_cur_AUD'] = 'Australian Dollars';
$txt['store_cur_BRL'] = 'Brazilian Real';
$txt['store_cur_CAD'] ='Canadian Dollars';
$txt['store_cur_CZK'] ='Czech Koruna';
$txt['store_cur_DKK'] ='Danish Kroner';
$txt['store_cur_EUR'] ='Euros';
$txt['store_cur_HKD'] ='Hong Kong Dollars';
$txt['store_cur_HUF'] ='Hungarian Forint';
$txt['store_cur_ILS'] ='Israeli New Sheqel';
$txt['store_cur_INR'] ='Indian Rupees (No PayPal)';
$txt['store_cur_MYR'] ='Malaysian Ringgit';
$txt['store_cur_MXN'] ='Mexican Peso';
$txt['store_cur_NZD'] ='New Zealand Dollars';
$txt['store_cur_NOK'] ='Norwegian Kroner';
$txt['store_cur_PHP'] ='Philippine Peso';
$txt['store_cur_PLN'] ='Polish Zlotych';
$txt['store_cur_RUB'] ='Russian Ruble';
$txt['store_cur_GBP'] ='Pounds Sterling';
$txt['store_cur_SGD'] ='Singapore Dollars';
$txt['store_cur_SEK'] ='Swedish Kronor';
$txt['store_cur_CHF'] ='Swiss Francs';
$txt['store_cur_TWD'] ='Taiwan New Dollar';
$txt['store_cur_THB'] = 'Thai Baht';
$txt['store_cur_JPY'] ='Yen';


$txt['store_error_nobuyercomment'] = 'Sorry only buyers of this item can leave comments on it.';

$txt['store_txt_quantity'] = 'Quantity';
$txt['store_txt_canhavequantity'] = 'Can have Quantity';
$txt['store_txt_canhavequantity_note'] = '<i>Do not use if product contains downloads</i>';

$txt['store_txt_exceedqty_note'] = 'The quantity entered exceeds the number in stock.';
$txt['store_txt_exceedqty_note2'] = 'There are only %qty in stock';

$txt['store_txt_changeqty'] = '[Change Quantity]';
$txt['store_txt_changeqty2'] = 'Change Quantity';

$txt['store_txt_err_changeqty'] = 'This item does not allow you to change the qty';
$txt['store_txt_err_addtocart_qty'] = 'This item is out of stock. Unable to add the item to the cart.';

$txt['store_sub_cats'] = 'Sub Categories: ';
$txt['store_item_alldownloads'] = 'Access to all Downloads';
$txt['store_item_alldownloads_note'] = 'Warning this gives access to all download links.';
$txt['store_txt_thankyou'] = 'Thank you for your purchase';

$txt['store_txt_thankbody'] = 'Thank you for your purchase. You can check the status of your order by checking the %myorders page.';
$txt['store_txt_myorders2'] = 'MyOrders';

$txt['store_txt_sales_history'] = 'Sales History Stats';
$txt['store_total_lastsevendays'] = 'Total made in the last seven days: ';
$txt['store_total_last30days']  = 'Total made in the last thirty days: ';
$txt['store_total_lastyear']  = 'Total made in the last year: ';


// Fraud Check License
$txt['store_fraudchecklicense']  = 'Fraud check license: ';
$txt['store_txt_checkfraud'] = '[Check Fraud]';
$txt['store_txt_whatisfraudcheck'] = 'What is Fraud Check?';



// Sandbox strings
$txt['store_sandbox'] = 'Enable PayPal Sandbox mode';
$txt['store_sandbox_note'] = 'PayPal sandbox is a way to test the store using fake money';


// Additional Price strings
$txt['store_txt_othermembergroup'] = 'Other Membergroup Prices';
$txt['store_txt_jointhisgroup'] = 'Join this Group';

$txt['store_txt_havegroupprices'] = 'Have Group Prices';

$txt['store_txt_addcustomprice'] = 'Add Custom Price';
$txt['store_txt_cusmembergroup'] = 'Membergroup: ';
$txt['store_txt_joinurl'] = 'Group Join Url: ';

$txt['store_txt_errnoselectgroup'] = 'No membergroup has been selected.';
$txt['store_txt_errcustompriceexists'] = 'A custom price already exists for this membergroup.';
$txt['store_txt_buyfreeitem'] = 'Buy Free Item';
$txt['store_txt_errfailedfreecheck'] = 'Failed free item check. Unable to give free item';

// Count shipping only once
$txt['store_item_shippingcountonce'] = 'Count shipping only once if more than one is ordered at the same time';


$txt['store_txt_pmbot'] = 'Store System';
$txt['store_txt_hasbeenshipped'] = ' has been shipped!';
$txt['store_txt_transactionid'] = 'Transaction ID: ';

$txt['store_showinadditionalcategories'] = 'Additional Categories';

$txt['store_guest'] = 'Guest';

// Search text strings
$txt['store_text_search'] = '[Search]';
$txt['store_search_items'] = 'Search for Items';
$txt['store_search_for'] = 'Search For:';
$txt['store_search_title'] = 'Search Title';
$txt['store_search_description'] = 'Search Description';
$txt['store_search'] = 'Search';

$txt['store_search_days30']  = 'Last 30 Days';
$txt['store_search_days60']  = 'Last 60 Days';
$txt['store_search_days90']  = 'Last 90 Days';
$txt['store_search_days180']  = 'Last 180 Days';
$txt['store_search_days365']  = 'Last 365 Days';
$txt['store_search_alltime']  = 'All Time';
$txt['store_search_daterange'] = 'Date Range: ';

$txt['store_search_advsearch'] = 'Advanced Search Options';

$txt['store_searchresults'] = 'Search Results';

$txt['store_error_no_search'] = 'You did not enter anything to search for...';
$txt['store_error_search_small'] = 'Search string is too small needs to be greater than three characters.';
$txt['store_err_checkfailed'] = 'Security check failed';

// License Agreement

$txt['store_form_licenseagreement'] = 'License Agreement';
$txt['store_form_editlicenseagreement'] = 'Edit License Agreement';
$txt['store_form_acceptlicenseagreement'] = 'Accept License Agreement';

// Print
$txt['store_txt_printitem'] = '[Print Item]';
$txt['store_txt_printitem2'] = 'Print Item';
$txt['store_txt_print_error'] = 'Please select Print from the File menu to print the item';

// Disable IPN Security
$txt['store_ipn_disable_price_security'] ='Disable IPN price check security';
$txt['store_ipn_disable_price_security_note'] = 'Only disable this if you are using custom PayPal shipping/tax options which would cause the price security check to fail';

// Latest Version:
$txt['store_txt_latestversion'] = 'Latest Version: ';
$txt['store_txt_yourversion'] = 'Your Version: ';
$txt['store_txt_version_outofdate'] = 'Your store version is not up to date!';


// Tax settings
$txt['store_txt_tax'] = 'Tax';
$txt['store_set_tax_flat_percent_rate'] = 'Flat Tax Amount in percent';
$txt['store_set_tax_flat_percent_rate_note'] = 'This adds a tax to every order no matter what country or what state the buyer is in';

// Signup / Register page
$txt['store_txt_signinregister'] = 'Sign in or register to order';

// Shipping information
$txt['store_txt_free_shipping'] = 'Shipping Information';

$txt['store_txt_shipping_firstname'] = 'First Name';
$txt['store_txt_shipping_lastname'] = 'Last Name';
$txt['store_txt_shipping_address'] = 'Address';
$txt['store_txt_shipping_city'] = 'City';
$txt['store_txt_shipping_state'] = 'State';
$txt['store_txt_shipping_zip'] = 'Zip';
$txt['store_txt_shipping_country'] = 'Country';

$txt['store_txt_shipping_guest_email'] = 'Email';



$txt['store_txt_shipping_firstname_required'] = 'First name is required.';
$txt['store_txt_shipping_lastname_required'] = 'Last name is required.';
$txt['store_txt_shipping_address_required'] = 'Address is required.';
$txt['store_txt_shipping_city_required'] = 'City is required.';
$txt['store_txt_shipping_country_required'] = 'Country is required';


$txt['store_txt_shipping_conditions'] = 'Shipping Conditions';
$txt['store_txt_shipping_value_low'] = 'Order Total/Weight Range 1';
$txt['store_txt_shipping_value_high'] = 'Order Total/Weight Range 2';
$txt['store_txt_shipping_condition'] = 'Condition';
$txt['store_txt_shipping_shippingcost'] = 'Shipping Cost';
$txt['store_txt_shipping_shipping'] = 'Add Shipping Condition';
$txt['store_txt_shipping_weight'] = 'Weight';

// Subscriptions
$txt['store_txt_subscriptionsettings'] = 'Subscription Settings (PayPal Only)';
$txt['store_txt_issubscription'] = 'Is subscription';
$txt['store_txt_billing_cycle'] = 'Billing Cycle';
$txt['store_txt_billing_cycle_days'] = 'Days';
$txt['store_txt_billing_cycle_weeks'] = 'Weeks';
$txt['store_txt_billing_cycle_months'] = 'Months';
$txt['store_txt_billing_cycle_stop'] = 'Stop after how many billing cycles?';
$txt['store_txt_billing_cycle_stop_never'] = 'Never';
$txt['store_txt_billing_cycle_retryfailed'] = 'Retry failed billing attempts?';
$txt['store_err_cantdosubscribecart'] = 'You can not add subscribe items to the cart';

$txt['store_txt_totalsales'] = 'Total Sales';
$txt['store_txt_total_revenue'] = 'Estimated Total Revenue';

$txt['store_txt_hidden'] = 'Hidden';
$txt['store_txt_exportproductlist'] = 'Export Product List';


$txt['store_txt_search_logs'] = 'Search Logs';

$txt['store_shipping_weight'] = 'Shipping Weight';
$txt['store_shipping_weight_lbs'] = 'lbs';
$txt['store_shipping_weight_kgs'] = 'kgs';


$txt['store_txt_weight_in'] = 'Weight in ';
$txt['store_txt_onsale'] = 'On Sale';
$txt['store_txt_saleprice'] = 'Sale Price';

$txt['store_txt_sale'] = 'Sale';

$txt['store_txt_related_items'] = 'Related Items';
$txt['store_txt_edit_related_items'] = 'Edit Related Items';
$txt['store_txt_wishlist'] = 'Wish List';
$txt['store_txt_wishlist_for'] = 'Wish List For ';
$txt['store_txt_sendtoafriend'] = 'Send to a Friend';
$txt['store_set_wishlist'] = 'Enable Wish List';
$txt['store_set_relateditems'] = 'Enable Related Items';
$txt['store_set_relateditemstoshow'] = 'Number of related items to show';
$txt['store_set_sendtofriend'] = 'Enable Send to a Friend';
$txt['store_txt_wishlist_add'] = 'Add to Wish List';
// Viewing options
$txt['store_text_unviewed'] = 'Unviewed';
$txt['store_txt_viewers'] = 'Viewers';
$txt['store_txt_unviewed_listings'] = 'Unviewed Items';


// Send to a Friend
$txt['store_txt_sendtofriend'] = 'Send to Friend';
$txt['store_txt_sendtofriend_note'] = 'Note';
$txt['store_txt_sendtofriend_email'] = 'Email Address';
$txt['store_err_sendtofriend_email'] = 'You did not enter an email address!';
$txt['store_txt_sendtofriend_you'] = "You have received this message due to a friend, who might have thought you would have been interested in the following product:\n%productname\n%url\n\nNote: %note";

$txt['store_allow_guests_to_purchase'] = 'Allow Guests to purchase items without a membership on the forum. <i>Note: This will not work for digital products</i>';


// Payment Options
$txt['store_txt_manualpayment'] = 'Manual Payment Collect';
$txt['store_use_collect_payment'] = 'Use manual processing of payment instead of PayPAL';

$txt['store_txt_collect_note'] = 'Collects and stores Credit Card or Bank Information. STRONGLY SUGGEST BUYING AN SSL Certificate if you use this method. Data should be kept safe and secure at all times and recommend the payment information be deleted after you have finished using it.';

$txt['store_use_collect_credit'] = 'Collect Credit Card Payments';
$txt['store_use_collect_check'] = 'Collect Check Payments';
$txt['store_use_collect_payment_creditcards'] = 'Allowed Credit Cards';
$txt['store_use_collect_payment_creditcards_notes'] = '<span class="smalltext">Separate each credit card by a comma</span>';

$txt['store_txt_paywithcredit'] = 'Pay by Credit Card';
$txt['store_txt_creditcard_type'] = 'Credit Card Type';
$txt['store_txt_creditcard_number'] = 'Credit Card Number';
$txt['store_txt_creditcard_security_code'] = 'Security Code';
$txt['store_txt_creditcard_expire_date'] = 'Expiration Date:';


$txt['store_txt_paywithcheck'] = 'Pay by e-Check';
$txt['store_txt_bankname'] = 'Bank Name';
$txt['store_txt_accountnumber'] = 'Account Number';
$txt['store_txt_routingnumber'] = 'Routing Number';


$txt['store_txt_checkout'] =  'Checkout';
$txt['store_txt_view_basket'] = 'View Basket for Order #';
$txt['store_txt_order_items'] = 'Order Items';
$txt['store_txt_order_detail2'] = 'Order Detail';

$txt['store_txt_billing_information'] = 'Billing Information';
$txt['store_txt_shipping_information'] = 'Shipping Information';
$txt['store_txt_same_as_billing'] =  'Same as Billing';

$txt['store_txt_billing_firstname'] = 'First Name';
$txt['store_txt_billing_lastname'] = 'Last Name';
$txt['store_txt_billing_companyname'] = 'Company Name';
$txt['store_txt_billing_address'] = 'Address';
$txt['store_txt_billing_city'] = 'City';
$txt['store_txt_billing_region'] = 'Region';
$txt['store_txt_billing_zip'] = 'Zip';
$txt['store_txt_billing_country'] = 'Country';
$txt['store_txt_billing_phone'] = 'Phone';
$txt['store_txt_billing_fax'] = 'Fax';
$txt['store_txt_billing_email'] = 'Email';
$txt['store_txt_billing_ipaddress'] = 'IP Address';

$txt['store_txt_select_state'] = ' Select State';


$txt['store_err_billing_firstname'] = 'Missing billing first name';
$txt['store_err_billing_lastname'] = 'Missing billing last name';
$txt['store_err_billing_address'] = 'Missing billing address';
$txt['store_err_billing_city'] = 'Missing billing city';
$txt['store_err_billing_region'] = 'Missing billing region';
$txt['store_err_billing_zip'] = 'Missing billing zipcode';
$txt['store_err_billing_country'] = 'Missing billing country';
$txt['store_err_billing_phone'] = 'Missing billing phone';
$txt['store_err_billing_email'] = 'Missing billing email';


$txt['store_err_ship_firstname'] = 'Missing shipping first name';
$txt['store_err_ship_lastname'] = 'Missing shipping last name';
$txt['store_err_ship_address'] = 'Missing shipping address';
$txt['store_err_ship_city'] = 'Missing shipping city';
$txt['store_err_ship_region'] = 'Missing shipping region';
$txt['store_err_ship_zip'] = 'Missing shipping zipcode';
$txt['store_err_ship_country'] = 'Missing shipping Country';
$txt['store_err_ship_phone'] = 'Missing shipping phone number';



$txt['store_txt_payment_method'] =  'Payment Method';
$txt['store_txt_payment_method'] = 'Manual Order';

$txt['store_txt_error_no_items_selected'] = 'No items selected';

$txt['store_txt_processing'] = 'Processing';
$txt['store_txt_processing2'] = 'Please wait or click to continue';

$txt['store_txt_payment_information'] = 'Payment Information';
$txt['store_txt_complete_purchase'] = 'Complete Purchase';

$txt['store_txt_no_payment_information'] = 'You need to enter payment information';


// Pricing Tiers
$txt['store_txt_price_tiers'] = 'Price Tiers for Quantity Items';
$txt['store_txt_price_add_tier'] = 'Add Tier';
$txt['store_txt_price_add_qty'] = 'Qty';
$txt['store_txt_price_and_above_price'] = 'and above. Price:';

$txt['store_err_pricetier_qty'] = 'You need to enter a quantity to add a price tier';
$txt['store_err_pricetier_price'] = 'You need to enter a price to add a price tier';
// Custom Emails
$txt['store_txt_customize_emails'] = 'Customize Emails';
$txt['store_txt_email_title'] = 'Email Title';
$txt['store_txt_modify_email'] = 'Modify Email';
$txt['store_txt_modify_subject'] = 'Subject';
$txt['store_txt_modify_body'] = 'Body';




// Custom Fields
$txt['store_txt_add_custom_field'] = 'Add Custom Field';
$txt['store_txt_edit_custom_field'] = 'Edit Custom Field';
$txt['store_txt_custom_text'] = 'Text';
$txt['store_txt_custom_selectbox'] = 'Select Box';
$txt['store_txt_custom_checkbox'] = 'Check Box';
$txt['store_txt_custom_textarea'] = 'Text Area';

$txt['store_txt_custom_required'] = 'Required';
$txt['store_txt_custom_required_yes'] = 'Yes';
$txt['store_txt_custom_required_no'] = 'No';

$txt['store_txt_custom_type'] = 'Type';

$txt['store_txt_custom_order'] = 'Order';
$txt['store_txt_custom_title'] = 'Title';

$txt['store_err_custom_title'] = 'Custom field title required';
$txt['store_error_nofield_above'] = 'There is no custom field above this one';
$txt['store_error_nofield_below'] = 'There is no custom field below this one';

$txt['store_txt_maange_select'] = '[Manage Select]';

$txt['store_txt_maange_select_fields'] = 'Manage Select Fields';

$txt['store_tx_option_title'] = 'Option Title';

$txt['store_txt_select_value'] = 'Select Value';
$txt['store_err_select_value'] = 'You need to enter a select value';
$txt['store_txt_add_select'] = 'Add Select';
$txt['store_txt_select_or'] = 'Or';
$txt['store_txt_select_import'] = 'Import select field: ';

$txt['store_error_custom_field_required'] = ' is required!';


$txt['store_text_markcompleted'] = '[Mark Order Completed]';
$txt['store_text_markcompleted_not'] = '[Mark Order NOT Completed]';
$txt['store_text_markcompleted_note'] = 'When you mark the order as completed the customer will be sent an email and will include license keys if the product has them. Also if the item has changing of the membergroup this will also occur.';

$txt['store_error_older_transactions'] = 'This is an older transaction. Order detail does not exist. Please use export transactions to gather information on older transactions';

$txt['store_error_no_itemexist'] = 'No item exist error';

$txt['store_txt_download_links'] = 'Download Links:';
$txt['store_error_no_invalid_secure_download_link'] = 'Invalid download link. Please contact the administrator for more information';

$txt['store_hide_contact_form'] = 'Hide the contact form on the MyOrders page';

$txt['store_text_update'] = 'Update';


// Category permission strings
$txt['store_text_catpermlist'] = 'Category Permission List';
$txt['store_text_catpermlist2'] = 'Category Permissions';
$txt['store_text_catperm'] = 'Category Permission';
$txt['store_text_addperm'] = 'Add Permission';
$txt['store_text_permissions'] = 'Permissions';
$txt['store_filespace_groupname'] = 'Member Group Name';

// Permissions
$txt['store_perm_no_view'] = 'You are not allowed to view this category.';
$txt['store_perm_no_add'] = 'You are not allowed to add a item in this category.';
$txt['store_perm_no_edit'] = 'You are not allowed to edit that item in this category.';
$txt['store_perm_no_delete'] = 'You are not allowed to delete that item in this category.';
$txt['store_perm_no_rateitem'] = 'You are not allowed to rate that item in this category.';
$txt['store_perm_no_editcomment'] = 'You are not allowed to edit that comment in this category.';
$txt['store_perm_no_addcomment'] = 'You are not allowed to leave comments in this category.';
$txt['store_perm_no_userstore'] = 'You are not allowed user store functions in this category.';


$txt['store_perm_view'] = 'View';
$txt['store_perm_add'] = 'Add Item';
$txt['store_perm_edit'] = 'Edit own Item';
$txt['store_perm_delete'] = 'Delete own Item';
$txt['store_perm_addcomment'] = 'Add Comment';
$txt['store_perm_userstore'] = 'User Store';

$txt['store_permerr_permexist'] = 'A permission already exists for this group and category please delete it first.';

$txt['store_perm_allowed'] = 'Allowed';
$txt['store_perm_denied'] = 'Denied';
$txt['store_text_categoryname'] = 'Category Name';

$txt['store_text_makehidden'] = 'Make Hidden';
$txt['store_text_withselected'] = 'With Selected';
$txt['store_text_go'] = 'Go';

$txt['store_start_date'] = 'Start Date: ';
$txt['store_end_date'] = 'End Date: ';
$txt['store_startend_notes'] = 'Optional settings for when a product will appear in the store and when it will disapper/expire';
$txt['store_txt_hour'] = 'Hour';
$txt['store_txt_minute'] = 'Minute';
$txt['store_err_startdate'] = 'This product is not available in the store yet';
$txt['store_err_enddate'] = 'This product is no longer available';

$txt['store_show_item_qty'] = 'Show the qty of an item in stock';
$txt['store_qty_left'] = ' Qty Left: ';


$txt['store_txt_mytransactions'] = 'My Transactions';
$txt['store_txt_myproducts'] = 'My Products';
$txt['store_error_not_yourproduct'] = 'You do not have permission to edit this product';


// Tabs
$txt['store_txt_custompages'] = 'Custom Pages';
$txt['store_txt_customaddpage'] = 'Add Page';
$txt['store_txt_customeditpage'] = 'Edit Page';

$txt['store_txt_customtabtitle'] = 'Tab Title';
$txt['store_txt_custompagetitle'] = 'Page Title';
$txt['store_txt_custompagecontent'] = 'Page Content';
$txt['store_txt_customshowtab'] = 'Show Tab in Store Menu';
$txt['store_txt_enabled'] = 'Enabled';


$txt['store_err_custompagetitle'] = 'Page title is required';
$txt['store_err_custompagecontent'] = 'Page content is required';
$txt['store_txt_viewpage'] = 'View Page';
$txt['store_txt_updatepageorder'] = 'Update Order';
$txt['store_err_notenabled'] = 'Page not enabled';


$txt['store_txt_packingslip'] = 'Packing Slip';
$txt['store_txt_packingslip_settings'] = 'Packing Slip Settings';

$txt['store_set_packingsliplogo'] = 'Packing Slip Logo Url';
$txt['store_set_packingcompanyname'] = 'Company Name';
$txt['store_set_packingcompanyaddress'] = 'Company Address Information';
$txt['store_set_packingcompanyphone'] = 'Company Phone';
$txt['store_set_packingwebsite'] = 'Company Website';

$txt['store_share_facebook'] = 'Show share on Facebook';
$txt['store_share_twitter'] = 'Show share on Twitter';
$txt['store_share_addthis'] = 'Show share button for AddToAny';

$txt['store_txt_share'] = 'Share';


$txt['store_frontpage_text'] = 'Store Homepage Text';
$txt['store_noforumlinkinlinktree'] = "Hide Forum Name from the linktree";

$txt['store_set_medium_height'] = 'Medium Image Height';
$txt['store_set_medium_width'] = 'Medium Image Width';
$txt['store_set_usemediumimage'] = 'Make Medium Sized Image';

$txt['store_memberprice_showbestpriceonly'] = 'Show only better prices for custom membergroup prices';

$txt['store_set_default_currency'] = 'Default Currency';


$txt['store_txt_copyright'] = 'Copyright';
$txt['store_txt_copyrightremoval'] = 'Copyright Removal';
$txt['store_txt_copyrightkey'] = 'Copyright Key';
$txt['store_txt_ordercopyright'] = 'Order Copyright Removal';

$txt['store_txt_copyremovalnote'] = 'Copyright removal removes the text at the bottom of the SMF Store pages titled "Powered by SMF Store" and removes any link back to smfhacks.com';

$txt['store_text_approve2'] = 'Approve';
$txt['store_text_delete2'] = 'Delete';
$txt['store_text_performaction'] = 'Perform Action';

$txt['store_txt_store_paypaal'] = 'Save paypal address for future use';

$txt['store_txt_smfshopcreditsgive'] = 'SMF Shop/ST Shop Credits Give:';
$txt['store_txt_smfshopcreditscost'] = 'SMF Shop/ST Shop Credits Cost:';

$txt['store_set_enable_highslide'] = 'Enable Highslide photo enlarge effect on click';
$txt['store_click_enlarge'] = 'Click to enlarge';


$txt['store_trackingurl'] = 'Tracking Url';
$txt['store_trackingnumber'] = 'Tracking Number';
$txt['store_addtrackingnumber'] = 'Add Tracking Number';

$txt['store_send_storeadmins_purchase_email'] = 'Notify all store admins of item purchase';


// Sorting Options
$txt['store_txt_perpage'] = 'Per Page: ';

$txt['store_txt_sortby'] = 'Sort By: ';
$txt['store_txt_orderby'] = 'Order: ';
$txt['store_txt_sort_go'] = 'Go';

$txt['store_txt_sort_title'] ='Title';
$txt['store_txt_sort_lowestprice'] = 'Price';
$txt['store_txt_sort_mostcomments'] = 'Total Comments';
$txt['store_txt_sort_mostrated'] = 'Rating';

$txt['store_txt_sort_asc'] = 'Ascending';
$txt['store_txt_sort_desc'] = 'Descending';


$txt['store_cart_notification_email_days'] = 'Days to notify if purchase is not completed';
$txt['store_cart_notification_disable']  = 'Enter zero to disable';
$txt['store_cart_days_empty_cart'] = 'Days to empty cart if not completed';

$txt['store_paypal_locale'] = 'PayPal Locale: ';
$txt['store_paypal_locale2'] = 'Locale information: <a href="https://developer.paypal.com/reference/locale-codes/" target="_blank">https://developer.paypal.com/reference/locale-codes/</a>';

$txt['store_txt_emailnote'] = 'Email Note - Included in order purchase';
$txt['store_txt_delete_search_log'] = 'Delete Search Log';
$txt['store_txt_assign_license'] = 'Assign License';
$txt['store_WaitTime_broken'] = 'The last commenting from your IP was less than %1$d seconds ago. Please try again later.';

$txt['store_txt_coinbase'] = 'Coinbase Commerce';
$txt['store_txt_coinbase_note'] = 'Allow buying credits with crypto currency (Bitcoin, Bitcoin Cash, DAI, Ethereum, Litecoin, Dogecoin, or USD Coin) Subscriptions NOT supported.';

$txt['store_coinbase_enabled'] = 'Enable Coinbase Commerce';
$txt['store_coinbase_apikey'] = 'Api Key';
$txt['store_coinbase_apikey_note'] = 'Get API Key <a href="https://commerce.coinbase.com/dashboard/settings" target="_blank">https://commerce.coinbase.com/dashboard/settings</a>';

$txt['store_txt_coinbase_webhook'] = 'Webhook Url';
$txt['store_txt_coinbase_webhook_note'] = 'Requires https! You must add this webhook url under Coinbase Commerce Settings and enter the shared secret below in order to track payments';
$txt['store_coinbase_webhook_shared_secret'] = 'Webhook Shared Secret';

$txt['store_txt_crypto_pending'] = 'Your crypto payment is pending! It may take some time to process';
$txt['store_txt_crypto_checkout'] = 'Checkout with Crypto';

$txt['store_txt_bulk_selecttext'] = 'Click to Select Files to Upload or Drag and Drop';

$txt['store_txt_stripe'] = 'Stripe';
$txt['store_txt_stripe_key_notes'] = 'Get your API Keys at <a href="https://dashboard.stripe.com/apikeys"  target="_blank">https://dashboard.stripe.com/apikeys</a>';
$txt['store_stripe_enabled'] = 'Enable Stripe Payment Processor Instead of PayPal';
$txt['store_stripe_publishable_key'] = 'Publishable key';
$txt['store_stripe_secret_key'] = 'Secret key';
$txt['store_txt_stripe_webhook_url'] = 'Stripe Webhook Url:';
$txt['store_txt_stripe_webhook_url_note'] = 'To handle transactions automatically you must add a webhook in stripe: <a href="https://dashboard.stripe.com/webhooks/create" target="_blank">https://dashboard.stripe.com/webhooks/create</a> use the url below for the webhook url<br>
Subscribe to all events and get the signing secret value after creating the webhook in stripe';
$txt['store_txt_stripe_enter_email'] = 'Enter email address';
$txt['store_txt_stripe_pay_now'] = 'Pay Now';
$txt['store_stripe_webhook_secret'] = 'Webhook Signing secret: ';

?>