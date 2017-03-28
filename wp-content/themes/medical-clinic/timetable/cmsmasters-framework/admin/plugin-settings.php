<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.2
 * 
 * Timetable Admin Settings
 * Created by CMSMasters
 * 
 */


/* Single Settings */
// Settings Names
function medical_clinic_timetable_option_name($cmsmasters_option_name, $tab) {
	if ($tab == 'tt_event') {
		$cmsmasters_option_name = 'cmsmasters_options_' . 'medical-clinic' . '_single_tt_event';
	}
	
	
	return $cmsmasters_option_name;
}

add_filter('cmsmasters_option_name_filter', 'medical_clinic_timetable_option_name', 10, 2);


// Add Settings
function medical_clinic_timetable_add_global_options($cmsmasters_option_names) {
	$cmsmasters_option_names[] = array( 
		'cmsmasters_options_' . 'medical-clinic' . '_single_tt_event', 
		medical_clinic_options_single_fields('tt_event') 
	);
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_add_global_options_filter', 'medical_clinic_timetable_add_global_options');


// Get Settings
function medical_clinic_timetable_get_global_options($cmsmasters_option_names) {
	array_push($cmsmasters_option_names, 'cmsmasters_options_' . 'medical-clinic' . '_single_tt_event');
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_get_global_options_filter', 'medical_clinic_timetable_get_global_options');
add_filter('cmsmasters_settings_export_filter', 'medical_clinic_timetable_get_global_options');


// Single Posts Settings
function medical_clinic_timetable_options_single_tabs($tabs) {
	$tabs['tt_event'] = esc_attr__('Timetable Event', 'medical-clinic');
	
	
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'medical_clinic_timetable_options_single_tabs');


function medical_clinic_timetable_options_single_sections($sections, $tab) {
	if ($tab == 'tt_event') {
		$sections = array();
		
		$sections['tt_event_section'] = esc_attr__('Timetable Event Options', 'medical-clinic');
	}
	
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'medical_clinic_timetable_options_single_sections', 10, 2);


function medical_clinic_timetable_options_single_fields($options, $tab) {
	if ($tab == 'tt_event') {
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'medical-clinic' . '_tt_event_title', 
			'title' => esc_html__('Event Title', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'medical-clinic' . '_tt_event_hours', 
			'title' => esc_html__('Event Hours', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'medical-clinic' . '_tt_event_hours_title', 
			'title' => esc_html__('Event Hours Title', 'medical-clinic'), 
			'desc' => esc_html__('Enter a event hours block title', 'medical-clinic'), 
			'type' => 'text', 
			'std' => 'Event Hours', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'medical-clinic' . '_tt_event_details_title', 
			'title' => esc_html__('Event Details Title', 'medical-clinic'), 
			'desc' => esc_html__('Enter a event details block title', 'medical-clinic'), 
			'type' => 'text', 
			'std' => 'Event Details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'medical-clinic' . '_tt_event_cat', 
			'title' => esc_html__('Event Categories', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
	}
	
	return $options;
}

add_filter('cmsmasters_options_single_fields_filter', 'medical_clinic_timetable_options_single_fields', 10, 2);

