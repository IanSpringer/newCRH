<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.6
 * 
 * Post Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('medical_clinic_get_custom_post_meta_fields')) {
function medical_clinic_get_custom_post_meta_fields() {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$cmsmasters_global_blog_post_layout = (isset($cmsmasters_option['medical-clinic' . '_blog_post_layout']) && $cmsmasters_option['medical-clinic' . '_blog_post_layout'] !== '') ? $cmsmasters_option['medical-clinic' . '_blog_post_layout'] : 'r_sidebar';
	
	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['medical-clinic' . '_bottom_sidebar']) && $cmsmasters_option['medical-clinic' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['medical-clinic' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['medical-clinic' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['medical-clinic' . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsmasters_global_bg = (isset($cmsmasters_option['medical-clinic' . '_theme_layout']) && $cmsmasters_option['medical-clinic' . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$cmsmasters_global_blog_post_title = (isset($cmsmasters_option['medical-clinic' . '_blog_post_title']) && $cmsmasters_option['medical-clinic' . '_blog_post_title'] !== '') ? (($cmsmasters_option['medical-clinic' . '_blog_post_title'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_blog_post_share_box = (isset($cmsmasters_option['medical-clinic' . '_blog_post_share_box']) && $cmsmasters_option['medical-clinic' . '_blog_post_share_box'] !== '') ? (($cmsmasters_option['medical-clinic' . '_blog_post_share_box'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_blog_post_author_box = (isset($cmsmasters_option['medical-clinic' . '_blog_post_author_box']) && $cmsmasters_option['medical-clinic' . '_blog_post_author_box'] !== '') ? (($cmsmasters_option['medical-clinic' . '_blog_post_author_box'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_blog_more_posts_box = (isset($cmsmasters_option['medical-clinic' . '_blog_more_posts_box'])) ? $cmsmasters_option['medical-clinic' . '_blog_more_posts_box'] : 'related';
	
	
	$cmsmasters_option_name = 'cmsmasters_post_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsmasters_post'] = array( 
		'label' => esc_html__('Post', 'medical-clinic'), 
		'value'	=> 'cmsmasters_post' 
	);
	
	
	$tabs_array['cmsmasters_layout'] = array( 
		'label' => esc_html__('Layout', 'medical-clinic'), 
		'value'	=> 'cmsmasters_layout' 
	);
	
	
	if ($cmsmasters_global_bg) {
		$tabs_array['cmsmasters_bg'] = array( 
			'label' => esc_html__('Background', 'medical-clinic'), 
			'value'	=> 'cmsmasters_bg' 
		);
	}
	
	
	$tabs_array['cmsmasters_heading'] = array( 
		'label' => esc_html__('Heading', 'medical-clinic'), 
		'value'	=> 'cmsmasters_heading' 
	);
	
	
	$custom_post_meta_fields = array( 
		array( 
			'id'	=> 'cmsmasters_post_standard', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Don\'t Show Featured Image in Open Post', 'medical-clinic'), 
			'desc'	=> esc_html__('Show', 'medical-clinic'), 
			'id'	=> $cmsmasters_option_name . 'image_show', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'false' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_standard', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_image', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Post Image', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'image_link', 
			'type'	=> 'image', 
			'hide'	=> '', 
			'cancel' => 'true', 
			'std'	=> '', 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'id'	=> 'cmsmasters_post_image', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_gallery', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Post Gallery', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'images', 
			'type'	=> 'images_list', 
			'hide'	=> '', 
			'std'	=> '', 
			'frame' => 'post', 
			'multiple' => true 
		), 
		array( 
			'id'	=> 'cmsmasters_post_gallery', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_video', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Video Type', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'video_type', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> 'embedded', 
			'options' => array( 
				'embedded' => array( 
					'label' => esc_html__('Embedded (YouTube, Vimeo)', 'medical-clinic'), 
					'value'	=> 'embedded' 
				), 
				'selfhosted' => array( 
					'label' => esc_html__('Self-Hosted', 'medical-clinic'), 
					'value'	=> 'selfhosted' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Embedded Video Link', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'video_link', 
			'type'	=> 'text_long', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Self-Hosted Video Links', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'video_links', 
			'type'	=> 'repeatable', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_video', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_audio', 
			'type'	=> 'content_start', 
			'box'	=> 'true', 
			'hide'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Audio Links', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'audio_links', 
			'type'	=> 'repeatable', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_audio', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_format', 
			'type'	=> 'content_start', 
			'box'	=> '' 
		), 
		array( 
			'id'	=> 'cmsmasters_post_format', 
			'type'	=> 'content_finish' 
		), 
		array( 
			'id'	=> $cmsmasters_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_post', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_post', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Post Title', 'medical-clinic'), 
			'desc'	=> esc_html__('Show', 'medical-clinic'), 
			'id'	=> $cmsmasters_option_name . 'title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_blog_post_title 
		), 
		array( 
			'label'	=> esc_html__('Sharing Box', 'medical-clinic'), 
			'desc'	=> esc_html__('Show', 'medical-clinic'), 
			'id'	=> $cmsmasters_option_name . 'sharing_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_blog_post_share_box 
		), 
		array( 
			'label'	=> esc_html__('About Author Box', 'medical-clinic'), 
			'desc'	=> esc_html__('Show', 'medical-clinic'), 
			'id'	=> $cmsmasters_option_name . 'author_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_blog_post_author_box 
		), 
		array( 
			'label'	=> esc_html__('More Posts Box', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'more_posts', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_blog_more_posts_box, 
			'options' => array( 
				'related' => array( 
					'label' => esc_html__('Show Related Tab', 'medical-clinic'), 
					'value'	=> 'related' 
				), 
				'popular' => array( 
					'label' => esc_html__('Show Popular Tab', 'medical-clinic'), 
					'value'	=> 'popular' 
				), 
				'recent' => array( 
					'label' => esc_html__('Show Recent Tab', 'medical-clinic'), 
					'value'	=> 'recent' 
				), 
				'hide' => array( 
					'label' => esc_html__('Hide More Posts Box', 'medical-clinic'), 
					'value'	=> 'hide' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__("'Read More' Buttons Text", 'medical-clinic'), 
			'desc'	=> esc_html__("Enter the 'Read More' button text that should be used in you blog shortcode", 'medical-clinic'), 
			'id'	=> $cmsmasters_option_name . 'read_more', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> esc_html__('Read More', 'medical-clinic') 
		), 
		array( 
			'id'	=> 'cmsmasters_post', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Page Color Scheme', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> esc_html__('Page Layout', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'radio_img', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_blog_post_layout, 
			'options' => array( 
				'r_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
					'label' => esc_html__('Right Sidebar', 'medical-clinic'), 
					'value'	=> 'r_sidebar' 
				), 
				'l_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
					'label' => esc_html__('Left Sidebar', 'medical-clinic'), 
					'value'	=> 'l_sidebar' 
				), 
				'fullwidth' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
					'label' => esc_html__('Full Width', 'medical-clinic'), 
					'value'	=> 'fullwidth' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Choose Right\Left Sidebar', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Bottom Sidebar', 'medical-clinic'), 
			'desc'	=> esc_html__('Show', 'medical-clinic'), 
			'id'	=> 'cmsmasters_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_bottom_sidebar 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'medical-clinic'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_post_meta_fields;
}
}

