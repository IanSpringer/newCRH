<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.3
 * 
 * Timetable Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/timetable/cmsmasters-framework/admin/plugin-settings.php');
require_once(get_template_directory() . '/timetable/cmsmasters-framework/admin/plugin-options.php');
require_once(get_template_directory() . '/timetable/cmsmasters-framework/function/plugin-colors.php');
require_once(get_template_directory() . '/timetable/cmsmasters-framework/function/plugin-fonts.php');


if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/cmsmasters-c-c/cmsmasters-c-c-plugin-functions.php');
	
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/cmsmasters-c-c/cmsmasters-c-c-plugin-shortcodes.php');
}


/* Register CSS Styles and Scripts */
function medical_clinic_timetable_register_styles_scripts() {
	// Styles
	wp_dequeue_style('timetable_sf_style');
	
	wp_dequeue_style('timetable_style');
	
	wp_dequeue_style('timetable_event_template');
	
	wp_dequeue_style('timetable_responsive_style');
	
	
	wp_enqueue_style('medical-clinic-timetable-style', get_template_directory_uri() . '/timetable/cmsmasters-framework/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('medical-clinic-timetable-adaptive', get_template_directory_uri() . '/timetable/cmsmasters-framework/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('medical-clinic-timetable-rtl', get_template_directory_uri() . '/timetable/cmsmasters-framework/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'medical_clinic_timetable_register_styles_scripts');


/* Scripts for Admin */
function medical_clinic_timetable_admin_scripts() {
	wp_enqueue_script('medical-clinic-timetable-settings-toggle', get_template_directory_uri() . '/timetable/cmsmasters-framework/admin/js/plugin-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('medical-clinic-timetable-settings-toggle', 'cmsmasters_timetable_settings', array( 
		'shortname' => 	'medical-clinic' 
	));
	
	
	wp_enqueue_script('medical-clinic-timetable-options-toggle', get_template_directory_uri() . '/timetable/cmsmasters-framework/admin/js/plugin-options-toggle.js', array('jquery'), '1.0.0', true);
}

add_action('admin_enqueue_scripts', 'medical_clinic_timetable_admin_scripts');


/* Remove Timetable Settings and Documentation */
if (is_admin()) {
	$plugin = 'timetable/timetable.php'; 
	
	remove_filter("plugin_action_links_$plugin", 'timetable_settings_link');
	
	remove_filter("plugin_action_links_$plugin", 'timetable_documentation_link');
	
	
	function medical_clinic_timetable_settings_page_removing() {
		remove_submenu_page('options-general.php', 'timetable_admin');
	}
	
	add_action('admin_menu', 'medical_clinic_timetable_settings_page_removing');
}


/* Unregister Sidebar */
function medical_clinic_timetable_unregister_sidebar() {
	unregister_sidebar('sidebar-event');
}

add_action('widgets_init', 'medical_clinic_timetable_unregister_sidebar');

