<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.2
 * 
 * Timetable Fonts Rules
 * Created by CMSMasters
 * 
 */


function medical_clinic_timetable_fonts($custom_css) {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$custom_css .= "
/***************** Start Timetable Font Styles ******************/

	/* Start Content Font */
	table.tt_timetable th,
	table.tt_timetable .event, 
	table.tt_timetable .event a, 
	table.tt_timetable .event .hours, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_content_font_google_font']) . $cmsmasters_option['medical-clinic' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_content_font_font_style'] . ";
	}
	
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		text-transform: none;
	}
	
	table.tt_timetable .event .hours,
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] - 1) . "px;
	}
	
	.event_layout_4 table.tt_timetable .event .after_hour_text, 
	table.tt_timetable .event a {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] + 1) . "px;
	}
	/* Finish Content Font */

	
	/* Start H2 Font */
	.event_layout_4 table.tt_timetable .event .hours {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h2_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H5 Font */
	.tt_tabs_navigation li a {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h5_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	.cmsmasters_tt_event #event_hours_list > li > h4, 
	.tabs_box_navigation .tabs_box_navigation_selected, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	table.tt_timetable .event .event_header {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h6_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h6_font_text_decoration'] . ";
	}
	
	.tabs_box_navigation .tabs_box_navigation_selected {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] - 1) . "px;
	}
	
	table.tt_timetable .event .event_header {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] - 3) . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.ui-tabs .tt_tabs_navigation.ui-widget-header li a {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_button_font_google_font']) . $cmsmasters_option['medical-clinic' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_button_font_text_transform'] . ";
	}
	
	.ui-tabs .tt_tabs_navigation.ui-widget-header li a {
		line-height:20px;
	}
	/* Finish Button Font */
	

/***************** Finish Timetable Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('medical_clinic_theme_fonts_filter', 'medical_clinic_timetable_fonts');

