<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.3
 * 
 * WooCommerce Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/function/plugin-colors.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/function/plugin-fonts.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/function/plugin-template-functions.php');


if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/cmsmasters-c-c/cmsmasters-c-c-plugin-functions.php');
	
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/cmsmasters-c-c/cmsmasters-c-c-plugin-shortcodes.php');
}


/* Register CSS Styles and Scripts */
function medical_clinic_woocommerce_register_styles_scripts() {
	// Styles
	wp_enqueue_style('medical-clinic-woocommerce-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('medical-clinic-woocommerce-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('medical-clinic-woocommerce-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	// Scripts
	wp_enqueue_script('medical-clinic-woocommerce-script', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
	
	
	$cart_currency_symbol = get_woocommerce_currency_symbol();
	
	$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
	
	$currency_symbol = $cart_currency_symbol;
	
	
	if ($cart_currency_symbol_pos == 'left_space') {
		$currency_symbol = $cart_currency_symbol . ' ';
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$currency_symbol = ' ' . $cart_currency_symbol;
	}
	
	
	$shop_thumbnail_image_size = get_option('shop_thumbnail_image_size');
	
	
	wp_localize_script('medical-clinic-woocommerce-script', 'cmsmasters_woo_script', array( 
		'currency_symbol' => 			$currency_symbol, 
		'thumbnail_image_width' => 		$shop_thumbnail_image_size['width'], 
		'thumbnail_image_height' => 	$shop_thumbnail_image_size['height'] 
	));
}

add_action('wp_enqueue_scripts', 'medical_clinic_woocommerce_register_styles_scripts');


add_theme_support('woocommerce');

add_filter('woocommerce_enqueue_styles', '__return_false');

