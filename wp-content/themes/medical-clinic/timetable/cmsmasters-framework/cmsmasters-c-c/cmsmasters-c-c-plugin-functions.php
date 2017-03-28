<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.5
 * 
 * Timetable Content Composer Functions 
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function medical_clinic_timetable_register_c_c_scripts() {
	global $pagenow;
	
	
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('medical-clinic-timetable-extend', get_template_directory_uri() . '/timetable/cmsmasters-framework/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('medical-clinic-timetable-extend', 'cmsmasters_timetable_shortcodes', array( 
			'timetable_events' => 								medical_clinic_timetable_events(), 
			'timetable_event_categories' => 					medical_clinic_timetable_event_categories(), 
			'timetable_hour_categories' => 						medical_clinic_timetable_hour_categories(), 
			'timetable_columns' => 								medical_clinic_timetable_columns(), 
			'timetable_title' =>								esc_html__('Timetable', 'medical-clinic'), 
			'timetable_field_event_title' =>					esc_html__('Events', 'medical-clinic'), 
			'timetable_field_event_descr' =>					esc_html__('Select the events that are to be displayed in timetable', 'medical-clinic'), 
			'timetable_field_event_descr_note' =>				esc_html__('Hold the CTRL key to select multiple items', 'medical-clinic'), 
			'timetable_field_event_category_title' =>			esc_html__('Event categories', 'medical-clinic'), 
			'timetable_field_event_category_descr' =>			esc_html__('Select the events categories that are to be displayed in timetable', 'medical-clinic'), 
			'timetable_field_event_category_descr_note' =>		esc_html__('Hold the CTRL key to select multiple items', 'medical-clinic'), 
			'timetable_field_hour_category_title' =>			esc_html__('Hour categories', 'medical-clinic'), 
			'timetable_field_hour_category_descr' =>			esc_html__('Select the hour categories (if defined for existing event hours) for events that are to be displayed in timetable', 'medical-clinic'), 
			'timetable_field_hour_category_descr_note' =>		esc_html__('Hold the CTRL key to select multiple items', 'medical-clinic'), 
			'timetable_field_columns_title' =>					esc_html__('Columns', 'medical-clinic'), 
			'timetable_field_columns_descr' =>					esc_html__('Select the columns that are to be displayed in timetable', 'medical-clinic'), 
			'timetable_field_columns_descr_note' =>				esc_html__('Hold the CTRL key to select multiple items', 'medical-clinic'), 
			'timetable_field_measure_title' =>					esc_html__('Hour measure', 'medical-clinic'), 
			'timetable_field_measure_descr' =>					esc_html__('Choose hour measure for event hours', 'medical-clinic'), 
			'timetable_field_measure_choice_hour' =>			esc_html__('Hour (1h)', 'medical-clinic'), 
			'timetable_field_measure_choice_half_hour' =>		esc_html__('Half hour (30min)', 'medical-clinic'), 
			'timetable_field_measure_choice_quarter_hour' =>	esc_html__('Quarter hour (15min)', 'medical-clinic'), 
			'timetable_field_filter_style_title' =>				esc_html__('Filter style', 'medical-clinic'), 
			'timetable_field_filter_style_descr' =>				esc_html__('Choose between dropdown menu and tabs for event filtering', 'medical-clinic'), 
			'timetable_field_filter_style_choice_dropdown_list' =>	esc_html__('Dropdown list', 'medical-clinic'), 
			'timetable_field_filter_style_choice_tabs' =>		esc_html__('Tabs', 'medical-clinic'), 
			'timetable_field_filter_kind_title' =>				esc_html__('Filter kind', 'medical-clinic'), 
			'timetable_field_filter_kind_descr' =>				esc_html__('Choose between filtering by events or events categories', 'medical-clinic'), 
			'timetable_field_filter_kind_choice_event' =>		esc_html__('By event', 'medical-clinic'), 
			'timetable_field_filter_kind_choice_event_category' =>	esc_html__('By event category', 'medical-clinic'), 
			'timetable_field_filter_label_title' =>				esc_html__('Filter label', 'medical-clinic'), 
			'timetable_field_filter_label_descr' =>				esc_html__('Specify text label for all events', 'medical-clinic'), 
			'timetable_field_filter_label_def' =>				esc_html__('All Events', 'medical-clinic'), 
			'timetable_field_time_format_title' =>				esc_html__('Time format', 'medical-clinic'), 
			'timetable_field_time_format_choice_custom' =>		esc_html__('Custom', 'medical-clinic'), 
			'timetable_field_time_format_custom_title' =>		esc_html__('Custom Time Format', 'medical-clinic'), 
			'timetable_field_hide_all_events_view_title' =>		esc_html__('Hide \'All Events\' view', 'medical-clinic'), 
			'timetable_field_hide_hours_column_title' =>		esc_html__('Hide first (hours) column', 'medical-clinic'), 
			'timetable_field_show_end_hour_title' =>			esc_html__('Show end hour in first (hours) column', 'medical-clinic'), 
			'timetable_field_event_layout_title' =>				esc_html__('Event block layout', 'medical-clinic'), 
			'timetable_field_event_layout_descr' =>				esc_html__('Select one of the available event block layouts', 'medical-clinic'), 
			'timetable_field_event_layout_choice_type' =>		esc_html__('Type', 'medical-clinic'), 
			'timetable_field_hide_empty_title' =>				esc_html__('Hide empty rows', 'medical-clinic'), 
			'timetable_field_disable_event_url_title' =>		esc_html__('Disable event url', 'medical-clinic'), 
			'timetable_field_text_align_title' =>				esc_html__('Text align', 'medical-clinic'), 
			'timetable_field_text_align_descr' =>				esc_html__('Specify text align in timetable event block', 'medical-clinic'), 
			'timetable_field_id_title' =>						esc_html__('Id', 'medical-clinic'), 
			'timetable_field_id_descr' =>						esc_html__('Assign a unique identifier to a timetable if you use more than one table on a single page', 'medical-clinic'), 
			'timetable_field_id_descr_note' =>					esc_html__('Otherwise, leave this field blank', 'medical-clinic'), 
			'timetable_field_row_height_title' =>				esc_html__('Row height', 'medical-clinic'), 
			'timetable_field_box_bg_color_title' =>				esc_html__('Timetable box background color', 'medical-clinic'), 
			'timetable_field_box_bd_color_title' =>				esc_html__('Timetable box border color', 'medical-clinic'), 
			'timetable_field_box_hover_bg_color_title' =>		esc_html__('Timetable box hover background color', 'medical-clinic'), 
			'timetable_field_box_txt_color_title' =>			esc_html__('Timetable box text color', 'medical-clinic'), 
			'timetable_field_box_hover_txt_color_title' =>		esc_html__('Timetable box hover text color', 'medical-clinic'), 
			'timetable_field_box_hours_txt_color_title' =>		esc_html__('Timetable box hours text color', 'medical-clinic'), 
			'timetable_field_box_hours_hover_txt_color_title' =>	esc_html__('Timetable box hours hover text color', 'medical-clinic'), 
			'timetable_field_row1_bg_color_title' =>			esc_html__('Row 1 style background color', 'medical-clinic'), 
			'timetable_field_row1_txt_color_title' =>			esc_html__('Row 1 style text color', 'medical-clinic'), 
			'timetable_field_row2_bg_color_title' =>			esc_html__('Row 2 style background color', 'medical-clinic'), 
			'timetable_field_row2_txt_color_title' =>			esc_html__('Row 2 style text color', 'medical-clinic'), 
			
			
			/* Default Colors */
			'box_bg_color' => 				($cmsmasters_option['medical-clinic' . '_default' . '_link'] == '#3065b5' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_link']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_link']), 
			'box_hover_bg_color' => 		($cmsmasters_option['medical-clinic' . '_default' . '_secondary'] == '#3eb8d7' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_secondary']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_secondary']), 
			'box_bd_color' => 		($cmsmasters_option['medical-clinic' . '_default' . '_border'] == '#e0e0e0' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_border']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_border']), 
			'box_txt_color' => 				($cmsmasters_option['medical-clinic' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_bg']), 
			'box_hover_txt_color' => 		($cmsmasters_option['medical-clinic' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_bg']), 
			'box_hours_txt_color' => 		($cmsmasters_option['medical-clinic' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_bg']), 
			'box_hours_hover_txt_color' => 	($cmsmasters_option['medical-clinic' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_bg']), 
			'row1_bg_color' => 				($cmsmasters_option['medical-clinic' . '_default' . '_alternate'] == '#fcfcfc' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_alternate']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_alternate']), 
			'row1_txt_color' => 			($cmsmasters_option['medical-clinic' . '_default' . '_color'] == '#787878' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_color']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_color']), 
			'row2_bg_color' => 				($cmsmasters_option['medical-clinic' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_bg']), 
			'row2_txt_color' => 			($cmsmasters_option['medical-clinic' . '_default' . '_color'] == '#787878' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_default' . '_color']) . ', 0.99)' : $cmsmasters_option['medical-clinic' . '_default' . '_color']) 
		));
	}
}

add_action('admin_enqueue_scripts', 'medical_clinic_timetable_register_c_c_scripts');


/* Events */
function medical_clinic_timetable_events() {
	$timetable_events = get_posts(array(
		'numberposts' => -1, 
		'post_type' => 'events'
	));
	
	
	$out = array();
	
	
	if (!empty($timetable_events)) {
		foreach ($timetable_events as $timetable_event) {
			$out[urldecode($timetable_event->post_name)] = esc_html($timetable_event->post_title);
		}
	}
	
	
	return $out;
}


/* Event Categories */
function medical_clinic_timetable_event_categories() {
	$categories = get_terms('events_category', array( 
		'hide_empty' => 0 
	));
	
	
	$out = array();
	
	
	if (!empty($categories)) {
		foreach ($categories as $category) {
			$out[urldecode(esc_attr($category->slug))] = esc_html($category->name);
		}
	}
	
	
	return $out;
}


/* Hour Categories */
function medical_clinic_timetable_hour_categories() {
	global $wpdb;
	
	
	$query = $wpdb->prepare("SELECT distinct(category) AS category FROM {$wpdb->prefix}event_hours AS t1
		LEFT JOIN {$wpdb->posts} AS t2 ON t1.event_id=t2.ID 
		WHERE 
		t2.post_type='%s'
		AND t2.post_status='publish'
		AND category<>''", 'events');
	
	
	$categories = $wpdb->get_results($query);
	
	
	$out = array();
	
	
	if (!empty($categories)) {
		foreach ($categories as $category) {
			$out[esc_attr($category->category)] = esc_html($category->category);
		}
	}
	
	
	return $out;
}


/* Columns */
function medical_clinic_timetable_columns() {
	$timetable_columns = get_posts(array(
		'numberposts' => -1, 
		'post_type' => 'timetable_weekdays'
	));
	
	
	$out = array();
	
	
	if (!empty($timetable_columns)) {
		foreach ($timetable_columns as $timetable_column) {
			$out[urldecode($timetable_column->post_name)] = esc_html($timetable_column->post_title);
		}
	}
	
	
	return $out;
}

