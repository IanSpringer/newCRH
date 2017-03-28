<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.5
 * 
 * Theme Functions
 * Created by CMSMasters
 * 
 */


/* Load Framework Parts */
require_once(get_template_directory() . '/theme-framework/admin/theme-settings.php');
require_once(get_template_directory() . '/theme-framework/admin/theme-options.php');
require_once(get_template_directory() . '/theme-framework/admin/plugin-activator.php');

require_once(get_template_directory() . '/theme-framework/class/theme-widgets.php');

require_once(get_template_directory() . '/theme-framework/function/single-comment.php');
require_once(get_template_directory() . '/theme-framework/function/theme-colors-primary.php');
require_once(get_template_directory() . '/theme-framework/function/theme-colors-secondary.php');
require_once(get_template_directory() . '/theme-framework/function/theme-fonts.php');
require_once(get_template_directory() . '/theme-framework/function/template-functions.php');
require_once(get_template_directory() . '/theme-framework/function/template-functions-post.php');
require_once(get_template_directory() . '/theme-framework/function/template-functions-project.php');
require_once(get_template_directory() . '/theme-framework/function/template-functions-profile.php');
require_once(get_template_directory() . '/theme-framework/function/template-functions-single.php');
require_once(get_template_directory() . '/theme-framework/function/template-functions-shortcodes.php');


if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/theme-framework/cmsmasters-c-c/cmsmasters-c-c-theme-functions.php');
	
	require_once(get_template_directory() . '/theme-framework/cmsmasters-c-c/cmsmasters-c-c-theme-shortcodes.php');
}



/* Register Theme Navigations */
register_nav_menus(array( 
    'primary' => 	esc_html__('Primary Navigation', 'medical-clinic'), 
    'footer' => 	esc_html__('Footer Navigation', 'medical-clinic'), 
	'top_line' => 	esc_html__('Top Line Navigation', 'medical-clinic') 
));



/* Register Showing Home Page on Default WordPress Pages Menu */
function cmsmasters_custom_mega_menu_item_output($args) {
	$shcd_args = $args['args'];
	
	$shcd_attrs = $args['attrs'];
	
	$shcd_depth = $args['depth'];
	
	$shcd_item = $args['item'];
	
	$shcd_cols_count = $args['cols_count'];
	
	
	$item_output = '';
	
	
	if (!empty($shcd_item->color)) {
		$shcd_attrs .= ' style="color:' . $shcd_item->color . ';"';
	}
	
	
	$item_output .= $shcd_args->before . 
		'<a' . $shcd_attrs . '>';
	
	
	$item_output .= $shcd_args->link_before;
	
	
	if ( 
		($shcd_depth <= 1 && empty($shcd_item->hide_text)) || 
		($shcd_depth == 0 && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth == 1 && $shcd_cols_count == NULL && !empty($shcd_item->hide_text)) || 
		($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth > 1) 
	) {
		$item_output .= '<span class="nav_title' . (!empty($shcd_item->icon) ? ' ' . $shcd_item->icon : '') . '">';
		
			if (empty($shcd_item->hide_text)) {
				$item_output .= apply_filters('the_title', $shcd_item->title, $shcd_item->ID);
			}
			
		$item_output .= '</span>';
		
		
		if (!empty($shcd_item->tag)) {
			$item_output .= '<span class="nav_tag">' . esc_attr($shcd_item->tag) . '</span>';
		}
		
		
		if ( 
			($shcd_depth == 0 && !empty($shcd_item->subtitle)) || 
			($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->subtitle)) 
		) {
			$item_output .= '<span class="nav_subtitle">' . 
				$shcd_item->subtitle . 
			'</span>';
		}
	}
	
	
	$item_output .= $shcd_args->link_after . 
		'</a>' . 
	$shcd_args->after;
	
	
	return $item_output;
}

add_filter('cmsmasters_mega_item_output', 'cmsmasters_custom_mega_menu_item_output');



/* Register wp_nav_menu() Fallback Function */
function medical_clinic_fallback_menu($args) {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	echo '<div class="navigation_wrap">' . "\n" . 
		'<ul id="navigation" class="' . 
			'navigation ' . 
			($cmsmasters_option['medical-clinic' . '_header_styles'] == 'default' ? 'mid_nav' : 'bot_nav') . 
		'">' . "\n";
	
	
	wp_list_pages(array( 
		'title_li' => '', 
		'link_before' => '<span class="nav_item_wrap">', 
		'link_after' => '</span>' 
	));
	
	
	echo '</ul>' . "\r" . 
	'</div>' . "\n";
}



/* Comment Fields to bottom */
function medical_clinic_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}


add_filter( 'comment_form_fields', 'medical_clinic_comment_field_to_bottom' );

