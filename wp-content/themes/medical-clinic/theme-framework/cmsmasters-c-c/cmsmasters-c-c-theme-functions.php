<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.4
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function medical_clinic_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('medical-clinic-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('medical-clinic-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			'heading_field_custom_check' => 						esc_attr__('Set Custom Font Size for Small Screens', 'medical-clinic'), 
			'heading_field_width_monitor' => 						esc_attr__('Monitor Width', 'medical-clinic'), 
			'heading_field_custom_font_size' => 					esc_attr__('Custom Font Size', 'medical-clinic'), 
			'heading_field_size_zero_note' => 						esc_attr__('number, in pixels (default value if empty or 0)', 'medical-clinic'), 
			'heading_field_custom_line_height' => 					esc_attr__('Custom Line Height', 'medical-clinic'),  
			'portfolio_field_metadata_choises_icon' =>				esc_attr__('Icon', 'medical-clinic'), 
			'portfolio_field_metadata_choises_more' =>				esc_attr__('Read more', 'medical-clinic'), 
			'posts_slider_field_metadata_choises_icon' =>			esc_attr__('Icon', 'medical-clinic'), 
			'posts_slider_field_metadata_choises_more' =>			esc_attr__('Read more', 'medical-clinic'), 
			'blog_field_layout_mode_puzzle' 	=> 					esc_attr__('Puzzle', 'medical-clinic'), 
			'tab_field_highlight_bg_color_title' 	=> 				esc_attr__('Tab Background Color', 'medical-clinic'), 
			'quotes_field_slider_type_title' => 					esc_attr__('Slider Type', 'medical-clinic'), 
			'quotes_field_slider_type_descr' => 					esc_attr__('Choose your quotes slider style type', 'medical-clinic'), 
			'quotes_field_type_choice_box' => 						esc_attr__('Boxed', 'medical-clinic'), 
			'quotes_field_type_choice_center' => 					esc_attr__('Centered', 'medical-clinic'), 
			'quotes_field_item_color_title' => 						esc_attr__('Color', 'medical-clinic'), 
			'quotes_field_item_color_descr' => 						esc_attr__('Enter this quote custom color', 'medical-clinic') 
		));
	}
}

add_action('admin_enqueue_scripts', 'medical_clinic_theme_register_c_c_scripts');



// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'3', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Quote Item Shortcode Attributes Filter
add_filter('cmsmasters_quote_atts_filter', 'cmsmasters_quote_atts');

function cmsmasters_quote_atts() {
	return array( 
		'shortcode_id' => 	'', 
		'image' => 			'', 
		'name' => 			'', 
		'subtitle' => 		'', 
		'color' => 			'', 
		'link' => 			'', 
		'website' => 		'', 
		'classes' => 		'' 
	);
}



// Tab Shortcode Attributes Filter
add_filter('cmsmasters_tab_atts_filter', 'cmsmasters_tab_atts');

function cmsmasters_tab_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'title' => 				esc_attr__('Title', 'medical-clinic'), 
		'custom_colors' => 		'', 
		'color' => 				'', 
		'bg_color' => 			'', 
		'icon' => 				'', 
		'classes' => 			'' 
	);
}


// Special Heading Shortcode Attributes Filter
add_filter('cmsmasters_custom_heading_atts_filter', 'cmsmasters_custom_heading_atts');

function cmsmasters_custom_heading_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'type' => 					'h1', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'font_weight' => 			'400', 
		'font_style' => 			'normal', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'custom_check' =>  			'', 
		'width_monitor' =>  		'767', 
		'custom_font_size' => 		'', 
		'custom_line_height' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}

