<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.0
 * 
 * WooCommerce Fonts Rules
 * Created by CMSMasters
 * 
 */


function medical_clinic_woocommerce_fonts($custom_css) {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */ 
	.shop_table.order_details .product-name dl, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a {	
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_content_font_google_font']) . $cmsmasters_option['medical-clinic' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_content_font_font_style'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table thead th, 
	.shop_table.woocommerce-checkout-review-order-table thead td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.order_details thead th, 
	.shop_table.order_details thead td, 
	.shop_table.order_details .order-total th, 
	.shop_table.order_details .order-total td {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_woo_comments .cmsmasters_star_rating, 
	.cmsmasters_woo_comments .cmsmasters_star_rating .cmsmasters_star_color_inner,
	.cmsmasters_woo_comments .cmsmasters_star_rating .cmsmasters_star {
		height:" . $cmsmasters_option['medical-clinic' . '_content_font_line_height'] . "px;
	}
	
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.cmsmasters_single_product .product_title {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_line_height'] - 4) . "px;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	ul.order_details, 
	.cmsmasters_single_product .price, 
	.cmsmasters_single_product .price del {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h3_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_product .price {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h4_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_product .price del {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h4_font_font_size'] - 5) . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h4_font_line_height'] . "px;
	}
	
	.cmsmasters_star_rating,
	.cmsmasters_star_rating .cmsmasters_star_color_inner,
	.cmsmasters_star_rating .cmsmasters_star {
		height:" . $cmsmasters_option['medical-clinic' . '_h4_font_line_height'] . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.shop_table thead th, 
	ul.order_details strong, 
	.widget_price_filter .price_slider_amount .price_label, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	.widget_shopping_cart .cart_list a,
	.widget_shopping_cart .cart_list .quantity, 
	.widget_shopping_cart .cart_list .quantity span, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity	span, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .cart-subtotal, 
	.cart_totals table .order-total .amount, 
	.cart_totals table .order-total, 
	.cmsmasters_woo .woocommerce h2, 
	.cmsmasters_woo .woocommerce h3, 
	.product_list_widget a, 
	.product_list_widget .amount {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h5_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h5_font_text_decoration'] . ";
	}
	
	ul.order_details strong {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h5_font_line_height'] + 2) . "px;
	}
		
	.widget_shopping_cart .cart_list .quantity, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h5_font_font_size'] - 2) . "px;
	}
	
	.product_list_widget del .amount {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h5_font_font_size'] - 3) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.onsale, 
	.out-of-stock, 
	.stock, 
	.shop_table .product-name a, 
	.shop_table td > .amount, 
	.shop_table td strong > .amount, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h6_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .price del {
		font-size:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] . "px;
	}
	
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .button {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_button_font_google_font']) . $cmsmasters_option['medical-clinic' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_button_font_text_transform'] . ";
	}
	
	.shop_table .actions .coupon input {
		
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_small_font_google_font']) . $cmsmasters_option['medical-clinic' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_small_font_font_size'] + 1) . "px;
	}
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('medical_clinic_theme_fonts_filter', 'medical_clinic_woocommerce_fonts');

