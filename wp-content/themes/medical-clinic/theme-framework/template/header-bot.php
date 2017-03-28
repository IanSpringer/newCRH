<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.0
 * 
 * Header Bottom Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = medical_clinic_get_global_options();


if ($cmsmasters_option['medical-clinic' . '_header_styles'] != 'default') {
	echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['medical-clinic' . '_header_bot_height']) . '">' . 
		'<div class="header_bot_outer">' . 
			'<div class="header_bot_inner">';
				do_action('cmsmasters_before_header_bot', $cmsmasters_option);
				
				
				echo '<div class="resp_bot_nav_wrap">' . 
					'<div class="resp_bot_nav_outer">' . 
						'<a class="responsive_nav resp_bot_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);"></a>' . 
					'</div>' . 
				'</div>' . 
				'<!-- _________________________ Start Navigation _________________________ -->' . 
				'<div class="bot_nav_wrap">' . 
					'<nav>';
						
						$cmsmasters_mov_bar_content = "";

						if ($cmsmasters_option['medical-clinic' . '_header_styles'] != 'default') {
							$cmsmasters_mov_bar_content = '<li class="cmsmasters_mov_bar"><span></span></li>';
						}
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'bot_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		'medical_clinic_fallback_menu', 
							'items_wrap' => 		'<ul id="navigation" class="bot_nav navigation">%3$s' . $cmsmasters_mov_bar_content . '</ul>'
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!-- _________________________ Finish Navigation _________________________ -->';
				
				
				do_action('cmsmasters_after_header_bot', $cmsmasters_option);
			echo '</div>' . 
		'</div>' . 
	'</div>';
}

