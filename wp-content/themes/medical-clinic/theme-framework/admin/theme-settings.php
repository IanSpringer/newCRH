<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.4
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* Color Settings */
function medical_clinic_theme_options_color_fields($options, $tab) {
	$defaults = medical_clinic_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'medical-clinic' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'medical-clinic'), 
			'desc' => esc_html__('Secondary color for some elements', 'medical-clinic'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	if ($tab == 'header') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'medical-clinic' . '_' . $tab . '_overlaps_bg', 
			'title' => esc_html__('Header Background Color for Overlap', 'medical-clinic'), 
			'desc' => esc_html__('(if header overlaps content)', 'medical-clinic'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['overlaps_bg'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'medical_clinic_theme_options_color_fields', 10, 2);



/* General Settings */
function medical_clinic_theme_options_general_fields($options, $tab) {	
	$options_new = array();
	
	if ($tab == 'header') {
		foreach ($options as $option) {
			if ($option['id'] == 'medical-clinic' . '_header_mid_height') {
				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'medical-clinic' . '_' . $tab . '_shadow', 
					'title' => esc_html__('Header Text Shadow', 'medical-clinic'), 
					'desc' => esc_html__('show', 'medical-clinic'), 
					'type' => 'checkbox', 
					'std' => 1 
				);
				
				
				$options_new[] = $option;
			} else {
				$options_new[] = $option;
			}
		}
	} else {
		$options_new = $options;
	}
	
	
	return $options_new;
}

add_filter('cmsmasters_options_general_fields_filter', 'medical_clinic_theme_options_general_fields', 10, 2);