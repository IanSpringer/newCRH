<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.6
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('medical_clinic_register_theme_plugins')) {

function medical_clinic_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'medical-clinic'), 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/theme-framework/admin/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'medical-clinic'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory_uri() . '/theme-framework/admin/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.0.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'medical-clinic'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory_uri() . '/theme-framework/admin/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'medical-clinic'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/theme-framework/admin/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.1.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'medical-clinic'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/theme-framework/admin/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.3.1.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Timetable', 'medical-clinic'), 
			'slug'					=> 'timetable', 
			'source'				=> get_template_directory_uri() . '/theme-framework/admin/plugins/timetable.zip', 
			'required'				=> false, 
			'version'				=> '3.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'medical-clinic'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'medical-clinic'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'medical-clinic'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet Newsletters', 'medical-clinic'), 
			'slug'					=> 'wysija-newsletters', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 			'medical-clinic', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'medical-clinic'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'medical-clinic'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'medical-clinic') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'medical_clinic_register_theme_plugins');

