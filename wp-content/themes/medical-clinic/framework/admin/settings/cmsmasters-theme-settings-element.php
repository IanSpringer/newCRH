<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function medical_clinic_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'medical-clinic');
	$tabs['icon'] = esc_attr__('Social Icons', 'medical-clinic');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'medical-clinic');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'medical-clinic');
	$tabs['error'] = esc_attr__('404', 'medical-clinic');
	$tabs['code'] = esc_attr__('Custom Codes', 'medical-clinic');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'medical-clinic');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function medical_clinic_options_element_sections() {
	$tab = medical_clinic_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'medical-clinic');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'medical-clinic');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'medical-clinic');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'medical-clinic');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'medical-clinic');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'medical-clinic');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'medical-clinic');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function medical_clinic_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = medical_clinic_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = medical_clinic_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'medical-clinic' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['medical-clinic' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'medical-clinic' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['medical-clinic' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'medical-clinic') . '|dark', 
				esc_html__('Light', 'medical-clinic') . '|light', 
				esc_html__('Mac', 'medical-clinic') . '|mac', 
				esc_html__('Metro Black', 'medical-clinic') . '|metro-black', 
				esc_html__('Metro White', 'medical-clinic') . '|metro-white', 
				esc_html__('Parade', 'medical-clinic') . '|parade', 
				esc_html__('Smooth', 'medical-clinic') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'medical-clinic'), 
			'desc' => esc_html__('Sets path for switching windows', 'medical-clinic'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'medical-clinic') . '|vertical', 
				esc_html__('Horizontal', 'medical-clinic') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'medical-clinic'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'medical-clinic'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'medical-clinic'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'medical-clinic'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'medical-clinic'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'medical-clinic'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'medical-clinic'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'medical-clinic'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'medical-clinic'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'medical-clinic'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'medical-clinic') . '|center', 
				esc_html__('Fit', 'medical-clinic') . '|fit', 
				esc_html__('Fill', 'medical-clinic') . '|fill', 
				esc_html__('Stretch', 'medical-clinic') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'medical-clinic'), 
			'desc' => esc_html__('Sets buttons be available or not', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'medical-clinic'), 
			'desc' => esc_html__('Enable the arrow buttons', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'medical-clinic'), 
			'desc' => esc_html__('Sets the fullscreen button', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'medical-clinic'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'medical-clinic'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'medical-clinic'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'medical-clinic'), 
			'desc' => esc_html__('Sets the swipe navigation', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'medical-clinic' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'medical-clinic'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'medical-clinic' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'medical-clinic' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'medical-clinic' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'medical-clinic' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'medical-clinic' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'medical-clinic' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_color', 
			'title' => esc_html__('Text Color', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'medical-clinic'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'medical-clinic'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'medical-clinic') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'medical-clinic') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'medical-clinic') . '|repeat-y', 
				esc_html__('Repeat', 'medical-clinic') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'medical-clinic') . '|scroll', 
				esc_html__('Fixed', 'medical-clinic') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'medical-clinic') . '|auto', 
				esc_html__('Cover', 'medical-clinic') . '|cover', 
				esc_html__('Contain', 'medical-clinic') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_search', 
			'title' => esc_html__('Search Line', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'medical-clinic' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['medical-clinic' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['medical-clinic' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'medical-clinic' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'medical-clinic' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'medical-clinic' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

