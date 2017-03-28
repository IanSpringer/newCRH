<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.6
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function medical_clinic_options_general_tabs() {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'medical-clinic');
	
	if ($cmsmasters_option['medical-clinic' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'medical-clinic');
	}
	
	$tabs['header'] = esc_attr__('Header', 'medical-clinic');
	$tabs['content'] = esc_attr__('Content', 'medical-clinic');
	$tabs['footer'] = esc_attr__('Footer', 'medical-clinic');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function medical_clinic_options_general_sections() {
	$tab = medical_clinic_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'medical-clinic');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'medical-clinic');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'medical-clinic');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'medical-clinic');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'medical-clinic');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function medical_clinic_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = medical_clinic_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = medical_clinic_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'medical-clinic') . '|liquid', 
				esc_html__('Boxed', 'medical-clinic') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'medical-clinic') . '|image', 
				esc_html__('Text', 'medical-clinic') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'medical-clinic'), 
			'desc' => esc_html__('Choose your website logo image.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'medical-clinic'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'medical-clinic'), 
			'desc' => esc_html__('enable', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'medical-clinic' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['medical-clinic' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_col', 
			'title' => esc_html__('Background Color', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_img', 
			'title' => esc_html__('Background Image', 'medical-clinic'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'medical-clinic') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'medical-clinic') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'medical-clinic') . '|repeat-y', 
				esc_html__('Repeat', 'medical-clinic') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'medical-clinic') . '|top left', 
				esc_html__('Top Center', 'medical-clinic') . '|top center', 
				esc_html__('Top Right', 'medical-clinic') . '|top right', 
				esc_html__('Center Left', 'medical-clinic') . '|center left', 
				esc_html__('Center Center', 'medical-clinic') . '|center center', 
				esc_html__('Center Right', 'medical-clinic') . '|center right', 
				esc_html__('Bottom Left', 'medical-clinic') . '|bottom left', 
				esc_html__('Bottom Center', 'medical-clinic') . '|bottom center', 
				esc_html__('Bottom Right', 'medical-clinic') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'medical-clinic') . '|scroll', 
				esc_html__('Fixed', 'medical-clinic') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'medical-clinic' . '_bg_size', 
			'title' => esc_html__('Background Size', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'medical-clinic') . '|auto', 
				esc_html__('Cover', 'medical-clinic') . '|cover', 
				esc_html__('Contain', 'medical-clinic') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'medical-clinic'), 
			'desc' => esc_html__('enable', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'medical-clinic'), 
			'desc' => esc_html__('enable', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'medical-clinic'), 
			'desc' => esc_html__('pixels', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'medical-clinic'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'medical-clinic') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'medical-clinic') . '|none', 
				esc_html__('Top Line Social Icons', 'medical-clinic') . '|social', 
				esc_html__('Top Line Navigation', 'medical-clinic') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'medical-clinic') . '|default', 
				esc_html__('Compact Style Left Navigation', 'medical-clinic') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'medical-clinic') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'medical-clinic') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'medical-clinic'), 
			'desc' => esc_html__('pixels', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'medical-clinic'), 
			'desc' => esc_html__('pixels', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_search', 
			'title' => esc_html__('Header Search', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'medical-clinic') . '|none', 
				esc_html__('Header Social Icons', 'medical-clinic') . '|social', 
				esc_html__('Header Custom HTML', 'medical-clinic') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'medical-clinic' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'medical-clinic'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'medical-clinic') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['medical-clinic' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['medical-clinic' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['medical-clinic' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['medical-clinic' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'medical-clinic'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['medical-clinic' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'medical-clinic') . '|left', 
				esc_html__('Right', 'medical-clinic') . '|right', 
				esc_html__('Center', 'medical-clinic') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'medical-clinic'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'medical-clinic') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'medical-clinic') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'medical-clinic') . '|repeat-y', 
				esc_html__('Repeat', 'medical-clinic') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'medical-clinic') . '|scroll', 
				esc_html__('Fixed', 'medical-clinic') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'medical-clinic') . '|auto', 
				esc_html__('Cover', 'medical-clinic') . '|cover', 
				esc_html__('Contain', 'medical-clinic') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'medical-clinic'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'medical-clinic'), 
			'desc' => esc_html__('pixels', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['medical-clinic' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'medical-clinic' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'medical-clinic') . '|default', 
				esc_html__('Small', 'medical-clinic') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'medical-clinic') . '|none', 
				esc_html__('Footer Navigation', 'medical-clinic') . '|nav', 
				esc_html__('Social Icons', 'medical-clinic') . '|social', 
				esc_html__('Custom HTML', 'medical-clinic') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'medical-clinic'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'medical-clinic'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'medical-clinic'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'medical-clinic') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'medical-clinic' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);	
}

