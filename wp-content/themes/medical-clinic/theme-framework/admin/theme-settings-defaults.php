<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.5
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('medical_clinic_settings_general_defaults')) {

function medical_clinic_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'medical-clinic' . '_theme_layout' => 		'liquid', 
			'medical-clinic' . '_logo_type' => 			'image', 
			'medical-clinic' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-framework/img/logo.png', 
			'medical-clinic' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-framework/img/logo_retina.png', 
			'medical-clinic' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Medical Clinic', 
			'medical-clinic' . '_logo_subtitle' => 		'', 
			'medical-clinic' . '_logo_custom_color' => 	0, 
			'medical-clinic' . '_logo_title_color' => 	'', 
			'medical-clinic' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'medical-clinic' . '_bg_col' => 			'#ffffff', 
			'medical-clinic' . '_bg_img_enable' => 	0, 
			'medical-clinic' . '_bg_img' => 			'', 
			'medical-clinic' . '_bg_rep' => 			'no-repeat', 
			'medical-clinic' . '_bg_pos' => 			'top center', 
			'medical-clinic' . '_bg_att' => 			'scroll', 
			'medical-clinic' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'medical-clinic' . '_fixed_header' => 				1, 
			'medical-clinic' . '_header_overlaps' => 				0, 
			'medical-clinic' . '_header_top_line' => 				1, 
			'medical-clinic' . '_header_top_height' => 			'44', 
			'medical-clinic' . '_header_top_line_short_info' => 	'', 
			'medical-clinic' . '_header_top_line_add_cont' => 	'social', 
			'medical-clinic' . '_header_styles' => 				'default', 
			'medical-clinic' . '_header_mid_height' => 			'100', 
			'medical-clinic' . '_header_bot_height' => 			'58', 
			'medical-clinic' . '_header_search' => 				0, 
			'medical-clinic' . '_header_add_cont' => 				'social', 
			'medical-clinic' . '_header_add_cont_cust_html' => 	'' 
		), 
		'content' => array( 
			'medical-clinic' . '_layout' => 					'r_sidebar', 
			'medical-clinic' . '_archives_layout' => 			'r_sidebar', 
			'medical-clinic' . '_search_layout' => 			'r_sidebar', 
			'medical-clinic' . '_other_layout' => 			'r_sidebar', 
			'medical-clinic' . '_heading_alignment' => 		'left', 
			'medical-clinic' . '_heading_scheme' => 			'default', 
			'medical-clinic' . '_heading_bg_image_enable' => 	0, 
			'medical-clinic' . '_heading_bg_image' => 		'', 
			'medical-clinic' . '_heading_bg_repeat' => 		'no-repeat', 
			'medical-clinic' . '_heading_bg_attachment' => 	'scroll', 
			'medical-clinic' . '_heading_bg_size' => 			'cover', 
			'medical-clinic' . '_heading_bg_color' => 		'', 
			'medical-clinic' . '_heading_height' => 			'120', 
			'medical-clinic' . '_breadcrumbs' => 				1, 
			'medical-clinic' . '_bottom_scheme' => 			'first', 
			'medical-clinic' . '_bottom_sidebar' => 			1, 
			'medical-clinic' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'medical-clinic' . '_footer_scheme' => 				'footer', 
			'medical-clinic' . '_footer_type' => 					'small', 
			'medical-clinic' . '_footer_additional_content' => 	'nav', 
			'medical-clinic' . '_footer_logo' => 					1, 
			'medical-clinic' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-framework/img/logo_footer.png', 
			'medical-clinic' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-framework/img/logo_footer_retina.png', 
			'medical-clinic' . '_footer_nav' => 					1, 
			'medical-clinic' . '_footer_social' => 				1, 
			'medical-clinic' . '_footer_html' => 					'', 
			'medical-clinic' . '_footer_copyright' => 			'Medical Clinic' . ' &copy; 2017 / ' . esc_html__('All Rights Reserved', 'medical-clinic') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Add Google Font */
if (!function_exists('medical_clinic_add_foogle_font')) {

function medical_clinic_add_foogle_font($fonts) {
	unset($fonts['Open+Sans:300,300italic,400,400italic,700,700italic']);
	
	$fonts['Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic'] = 'Open Sans';	
	
	return $fonts;
}

}

add_filter('medical_clinic_google_fonts_list_filter', 'medical_clinic_add_foogle_font');



/* Theme Settings Fonts Default Values */
if (!function_exists('medical_clinic_settings_font_defaults')) {

function medical_clinic_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'medical-clinic' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'medical-clinic' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'medical-clinic' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'medical-clinic' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'26', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'medical-clinic' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'medical-clinic' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'28', 
				'line_height' => 		'34', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'medical-clinic' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'24', 
				'line_height' => 		'30', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'medical-clinic' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'medical-clinic' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'medical-clinic' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'medical-clinic' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'medical-clinic' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'42', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'medical-clinic' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'medical-clinic' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'medical-clinic' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', 
				'font_size' => 			'20', 
				'line_height' => 		'34', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {
	function cmsmasters_color_picker_palettes() {
		$palettes = array( 
			'#000000', 
			'#ffffff', 
			'#787878', 
			'#3065b5', 
			'#999999', 
			'#222222', 
			'#e0e0e0', 
			'#3eb8d7' 
		);
		
		
		return $palettes;
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('medical_clinic_color_schemes_defaults')) {

function medical_clinic_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#787878', 
			'link' => 		'#3065b5', 
			'hover' => 		'#999999', 
			'heading' => 	'#222222', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#fcfcfc', 
			'border' => 	'#e0e0e0', 
			'secondary' => 	'#3eb8d7' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#ffffff', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'rgba(255,255,255,0.5)', 
			'mid_bg' => 		'#4575bd', 
			'mid_bg_scroll' => 	'#4575bd', 
			'mid_border' => 	'rgba(255,255,255,0.3)', 
			'bot_color' => 		'#ffffff', 
			'bot_link' => 		'#ffffff', 
			'bot_hover' => 		'rgba(255,255,255,0.5)', 
			'bot_bg' => 		'#4575bd', 
			'bot_bg_scroll' => 	'#4575bd', 
			'bot_border' => 	'rgba(255,255,255,0.3)', 
			'overlaps_bg' =>	'rgba(255,255,255,0.1)'
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.7)', 
			'title_link_current' => 	'#ffffff', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.5)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#787878', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#222222', 
			'dropdown_link_hover' => 	'#3065b5', 
			'dropdown_link_subtitle' => '#787878', 
			'dropdown_link_highlight' => 'rgba(62,184,215,0.1)', 
			'dropdown_link_border' => 	'#ffffff' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#ffffff', 
			'link' => 					'#ffffff', 
			'hover' => 					'rgba(255,255,255,0.5)', 
			'bg' => 					'#4575bd', 
			'border' => 				'rgba(255,255,255,0.1)', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.5)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#222222', 
			'dropdown_link_hover' => 	'#3065b5', 
			'dropdown_link_highlight' => 'rgba(62,184,215,0.1)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#646464', 
			'link' => 		'#858585', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#222222', 
			'alternate' => 	'rgba(255,255,255,0.02)', 
			'border' => 	'rgba(255,255,255,0.12)', 
			'secondary' => 	'#3eb8d7' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#ffffff', 
			'link' => 		'#3065b5', 
			'hover' => 		'#999999', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#fcfcfc', 
			'border' => 	'#e0e0e0', 
			'secondary' => 	'#3eb8d7' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#787878', 
			'link' => 		'#3065b5', 
			'hover' => 		'#999999', 
			'heading' => 	'#222222', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#fcfcfc', 
			'border' => 	'#e0e0e0', 
			'secondary' => 	'#3eb8d7' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'rgba(255,255,255,0.8)', 
			'link' => 		'#3065b5', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'rgba(255,255,255,0.1)', 
			'alternate' => 	'#fcfcfc', 
			'border' => 	'#ffffff', 
			'secondary' => 	'#3eb8d7' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('medical_clinic_settings_element_defaults')) {

function medical_clinic_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'medical-clinic' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'medical-clinic' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'medical-clinic') . '|true|#ffffff|#e0e0e0', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'medical-clinic') . '|true|#ffffff|#e0e0e0', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'medical-clinic') . '|true|#ffffff|#e0e0e0', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'medical-clinic') . '|true|#ffffff|#e0e0e0', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'medical-clinic') . '|true|#ffffff|#e0e0e0' 
			) 
		), 
		'lightbox' => array( 
			'medical-clinic' . '_ilightbox_skin' => 					'dark', 
			'medical-clinic' . '_ilightbox_path' => 					'vertical', 
			'medical-clinic' . '_ilightbox_infinite' => 				0, 
			'medical-clinic' . '_ilightbox_aspect_ratio' => 			1, 
			'medical-clinic' . '_ilightbox_mobile_optimizer' => 		1, 
			'medical-clinic' . '_ilightbox_max_scale' => 				1, 
			'medical-clinic' . '_ilightbox_min_scale' => 				0.2, 
			'medical-clinic' . '_ilightbox_inner_toolbar' => 			0, 
			'medical-clinic' . '_ilightbox_smart_recognition' => 		0, 
			'medical-clinic' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'medical-clinic' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'medical-clinic' . '_ilightbox_controls_toolbar' => 		1, 
			'medical-clinic' . '_ilightbox_controls_arrows' => 		0, 
			'medical-clinic' . '_ilightbox_controls_fullscreen' => 	1, 
			'medical-clinic' . '_ilightbox_controls_thumbnail' => 	1, 
			'medical-clinic' . '_ilightbox_controls_keyboard' => 		1, 
			'medical-clinic' . '_ilightbox_controls_mousewheel' => 	1, 
			'medical-clinic' . '_ilightbox_controls_swipe' => 		1, 
			'medical-clinic' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'medical-clinic' . '_sitemap_nav' => 			1, 
			'medical-clinic' . '_sitemap_categs' => 		1, 
			'medical-clinic' . '_sitemap_tags' => 		1, 
			'medical-clinic' . '_sitemap_month' => 		1, 
			'medical-clinic' . '_sitemap_pj_categs' => 	1, 
			'medical-clinic' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'medical-clinic' . '_error_color' => 				'#3065b5', 
			'medical-clinic' . '_error_bg_color' => 			'#ffffff', 
			'medical-clinic' . '_error_bg_img_enable' => 		0, 
			'medical-clinic' . '_error_bg_image' => 			'', 
			'medical-clinic' . '_error_bg_rep' => 			'no-repeat', 
			'medical-clinic' . '_error_bg_pos' => 			'top center', 
			'medical-clinic' . '_error_bg_att' => 			'scroll', 
			'medical-clinic' . '_error_bg_size' => 			'cover', 
			'medical-clinic' . '_error_search' => 			1, 
			'medical-clinic' . '_error_sitemap_button' => 	1, 
			'medical-clinic' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'medical-clinic' . '_custom_css' => 			'', 
			'medical-clinic' . '_custom_js' => 			'', 
			'medical-clinic' . '_gmap_api_key' => 		'', 
			'medical-clinic' . '_api_key' => 				'', 
			'medical-clinic' . '_api_secret' => 			'', 
			'medical-clinic' . '_access_token' => 		'', 
			'medical-clinic' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'medical-clinic' . '_recaptcha_public_key' => 	'', 
			'medical-clinic' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('medical_clinic_settings_single_defaults')) {

function medical_clinic_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'medical-clinic' . '_blog_post_layout' => 		'r_sidebar', 
			'medical-clinic' . '_blog_post_title' => 			1, 
			'medical-clinic' . '_blog_post_date' => 			1, 
			'medical-clinic' . '_blog_post_cat' => 			1, 
			'medical-clinic' . '_blog_post_author' => 		1, 
			'medical-clinic' . '_blog_post_comment' => 		1, 
			'medical-clinic' . '_blog_post_tag' => 			1, 
			'medical-clinic' . '_blog_post_like' => 			1, 
			'medical-clinic' . '_blog_post_nav_box' => 		1, 
			'medical-clinic' . '_blog_post_share_box' => 		1, 
			'medical-clinic' . '_blog_post_author_box' => 	1, 
			'medical-clinic' . '_blog_more_posts_box' => 		'popular', 
			'medical-clinic' . '_blog_more_posts_count' => 	'3', 
			'medical-clinic' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'medical-clinic' . '_portfolio_project_title' => 			1, 
			'medical-clinic' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'medical-clinic'), 
			'medical-clinic' . '_portfolio_project_date' => 			1, 
			'medical-clinic' . '_portfolio_project_cat' => 			1, 
			'medical-clinic' . '_portfolio_project_author' => 		1, 
			'medical-clinic' . '_portfolio_project_comment' => 		0, 
			'medical-clinic' . '_portfolio_project_tag' => 			0, 
			'medical-clinic' . '_portfolio_project_like' => 			1, 
			'medical-clinic' . '_portfolio_project_link' => 			0, 
			'medical-clinic' . '_portfolio_project_share_box' => 		1, 
			'medical-clinic' . '_portfolio_project_nav_box' => 		1, 
			'medical-clinic' . '_portfolio_project_author_box' => 	1, 
			'medical-clinic' . '_portfolio_more_projects_box' => 		'popular', 
			'medical-clinic' . '_portfolio_more_projects_count' => 	'4', 
			'medical-clinic' . '_portfolio_more_projects_pause' => 	'5', 
			'medical-clinic' . '_portfolio_project_slug' => 			'project', 
			'medical-clinic' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'medical-clinic' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'medical-clinic' . '_profile_post_title' => 			1, 
			'medical-clinic' . '_profile_post_details_title' => 	esc_html__('Profile details', 'medical-clinic'), 
			'medical-clinic' . '_profile_post_cat' => 			1, 
			'medical-clinic' . '_profile_post_comment' => 		1, 
			'medical-clinic' . '_profile_post_like' => 			1, 
			'medical-clinic' . '_profile_post_nav_box' => 		1, 
			'medical-clinic' . '_profile_post_share_box' => 		1, 
			'medical-clinic' . '_profile_post_slug' => 			'profile', 
			'medical-clinic' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('medical_clinic_project_puzzle_proportion')) {

function medical_clinic_project_puzzle_proportion() {
	return 0.6875;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('medical_clinic_get_image_thumbnail_list')) {

function medical_clinic_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		65, 
			'height' => 	65, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'medical-clinic') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	400, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'medical-clinic') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'medical-clinic') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'medical-clinic') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	500, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'medical-clinic') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'medical-clinic') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'medical-clinic') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	650, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'medical-clinic') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'medical-clinic') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('medical_clinic_project_labels')) {

function medical_clinic_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'medical-clinic'), 
		'singular_name' => 			esc_html__('Project', 'medical-clinic'), 
		'menu_name' => 				esc_html__('Projects', 'medical-clinic'), 
		'all_items' => 				esc_html__('All Projects', 'medical-clinic'), 
		'add_new' => 				esc_html__('Add New', 'medical-clinic'), 
		'add_new_item' => 			esc_html__('Add New Project', 'medical-clinic'), 
		'edit_item' => 				esc_html__('Edit Project', 'medical-clinic'), 
		'new_item' => 				esc_html__('New Project', 'medical-clinic'), 
		'view_item' => 				esc_html__('View Project', 'medical-clinic'), 
		'search_items' => 			esc_html__('Search Projects', 'medical-clinic'), 
		'not_found' => 				esc_html__('No projects found', 'medical-clinic'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'medical-clinic') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'medical_clinic_project_labels');


if (!function_exists('medical_clinic_pj_categs_labels')) {

function medical_clinic_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'medical-clinic'), 
		'singular_name' => 			esc_html__('Project Category', 'medical-clinic') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'medical_clinic_pj_categs_labels');


if (!function_exists('medical_clinic_pj_tags_labels')) {

function medical_clinic_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'medical-clinic'), 
		'singular_name' => 			esc_html__('Project Tag', 'medical-clinic') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'medical_clinic_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('medical_clinic_profile_labels')) {

function medical_clinic_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'medical-clinic'), 
		'singular_name' => 			esc_html__('Profiles', 'medical-clinic'), 
		'menu_name' => 				esc_html__('Profiles', 'medical-clinic'), 
		'all_items' => 				esc_html__('All Profiles', 'medical-clinic'), 
		'add_new' => 				esc_html__('Add New', 'medical-clinic'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'medical-clinic'), 
		'edit_item' => 				esc_html__('Edit Profile', 'medical-clinic'), 
		'new_item' => 				esc_html__('New Profile', 'medical-clinic'), 
		'view_item' => 				esc_html__('View Profile', 'medical-clinic'), 
		'search_items' => 			esc_html__('Search Profiles', 'medical-clinic'), 
		'not_found' => 				esc_html__('No Profiles found', 'medical-clinic'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'medical-clinic') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'medical_clinic_profile_labels');


if (!function_exists('medical_clinic_pl_categs_labels')) {

function medical_clinic_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'medical-clinic'), 
		'singular_name' => 			esc_html__('Profile Category', 'medical-clinic') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'medical_clinic_pl_categs_labels');

