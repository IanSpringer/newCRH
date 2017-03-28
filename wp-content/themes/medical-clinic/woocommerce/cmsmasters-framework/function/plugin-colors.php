<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.2
 * 
 * WooCommerce Colors Rules
 * Created by CMSMasters
 * 
 */


function medical_clinic_woocommerce_colors($custom_css) {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat a, 
	{$rule}.cmsmasters_product .price, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	{$rule}#page .shipping-calculator-button, 
	{$rule}.shop_table, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table td, 
	{$rule}.shop_table.order_details th, 
	{$rule}.shop_table.order_details td, 
	{$rule}.cmsmasters_single_product .price del, 
	{$rule}.cmsmasters_single_product .product_meta, 
	{$rule}.cmsmasters_single_product .product_meta a, 
	{$rule}.widget_shopping_cart .cart_list .quantity, 
	{$rule}.widget_product_categories ul li a:before, 
	{$rule}.widget_product_tag_cloud a, 
	{$rule}.widget_price_filter .price_slider_amount .price_label, 
	{$rule}.product_list_widget del .amount	{
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.required, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}.shop_table a:not(.button):hover, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.shop_table.order_details .product-name strong, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}.product_list_widget a:hover, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat a:hover, 
	{$rule}#page .remove:hover, 
	{$rule}#page .shipping-calculator-button:hover, 
	{$rule}.cmsmasters_single_product .product_meta a:hover, 
	{$rule}.widget_product_tag_cloud a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}ul.order_details li, 
	{$rule}.widget_price_filter .ui-slider-handle, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button:hover, 
	{$rule}.cart_totals table .order-total th, 
	{$rule}.cart_totals table .order-total td, 
	{$rule}.woocommerce-MyAccount-navigation li > a:hover, 
	{$rule}.woocommerce-MyAccount-navigation li.is-active > a, 
	{$rule}.widget_price_filter .ui-slider-range {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button:hover, 
	{$rule}.woocommerce-MyAccount-navigation li > a:hover, 
	{$rule}.woocommerce-MyAccount-navigation li.is-active > a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.widget_shopping_cart .cart_list a:hover, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.link_hover_color {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error li, 
	{$rule}#page .remove, 
	{$rule}.cmsmasters_product .cmsmasters_product_cat, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button:hover, 
	{$rule}.cmsmasters_single_product .price, 
	{$rule}.shop_attributes th, 
	{$rule}.shop_table a:not(.button), 
	{$rule}.cart_totals table, 
	{$rule}ul.order_details strong, 
	{$rule}.product_list_widget a, 
	{$rule}.widget_shopping_cart .cart_list a, 
	{$rule}.widget_shopping_cart .cart_list .quantity .amount, 
	{$rule}.widget_shopping_cart .total, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsmasters_product .price ins, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity span, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button, 
	{$rule}.shop_table thead th, 
	{$rule}.woocommerce-MyAccount-navigation li > a, 
	{$rule}.cmsmasters_single_product .price ins, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.product_list_widget ins .amount {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button:hover, 
	{$rule}.cart_totals table .order-total th, 
	{$rule}.cart_totals table .order-total td, 
	{$rule}.woocommerce-MyAccount-navigation li > a:hover, 
	{$rule}.woocommerce-MyAccount-navigation li.is-active > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsmasters_product, 
	{$rule}.cmsmasters_product .cmsmasters_product_img .cmsmasters_product_add_wrap:before, 
	{$rule}.woocommerce-checkout-payment, 
	{$rule}.cmsmasters_woo .cmsmasters_woo_tabs .cmsmasters_tab_inner, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.widget_shopping_cart .cart_list, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.onsale, 
	{$rule}.out-of-stock, 
	{$rule}.stock, 
	{$rule}ul.order_details {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}#page .remove, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button:hover, 
	{$rule}.shop_table thead th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}ul.order_details strong, 
	{$rule}.shop_table .actions, 
	{$rule}.cart_totals table tr:first-child th, 
	{$rule}.cart_totals table tr:first-child td, 
	{$rule}.woocommerce-checkout-payment .payment_box, 
	{$rule}.woocommerce-MyAccount-navigation li > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */	
	{$rule}.cmsmasters_woo_tabs:before, 
	{$rule}div.products:before, 
	{$rule}.widget_price_filter .price_slider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before, 
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}#page .remove, 
	{$rule}.shop_table th, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table th, 
	{$rule}.cart_totals table td, 
	{$rule}.shop_table .cart_item, 
	{$rule}.cmsmasters_product, 
	{$rule}.cmsmasters_product .cmsmasters_product_inner, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button:hover, 
	{$rule}.shop_table .product-thumbnail img, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.woocommerce-checkout-payment, 
	{$rule}.woocommerce-checkout-payment .payment_box, 
	{$rule}.woocommerce-MyAccount-navigation li > a, 
	{$rule}ul.order_details	> li, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_title_price_wrap, 
	{$rule}.shop_attributes tr, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.widget_product_categories ul li, 
	{$rule}.widget_product_tag_cloud a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_woo .cmsmasters_woo_tabs .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

	
	/* Start Secondary Color */
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td, 
	{$rule}.shop_table.woocommerce-checkout-review-order-table .product-name strong, 
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap, 
	{$rule}.shop_table tbody .product-subtotal, 
	{$rule}.cart_totals	.cart-subtotal .amount {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_star_rating .cmsmasters_star_trans_wrap, 
	{$rule}.comment-form-rating .stars > span {		
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . ", 0.3);
	}
		{$rule}.out-of-stock, 
	{$rule}.stock,
	{$rule}.onsale, 
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('medical_clinic_theme_colors_secondary_filter', 'medical_clinic_woocommerce_colors');

