<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.6
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function medical_clinic_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'medical-clinic');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'medical-clinic');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'medical-clinic');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function medical_clinic_options_single_sections() {
	$tab = medical_clinic_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'medical-clinic');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'medical-clinic');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'medical-clinic');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function medical_clinic_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = medical_clinic_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = medical_clinic_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'medical-clinic') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'medical-clinic') . '|related', 
				esc_html__('Show Popular Posts', 'medical-clinic') . '|popular', 
				esc_html__('Show Recent Posts', 'medical-clinic') . '|recent', 
				esc_html__('Hide More Posts Box', 'medical-clinic') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'medical-clinic'), 
			'desc' => esc_html__('posts', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'medical-clinic' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'medical-clinic'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'medical-clinic'), 
			'desc' => esc_html__('Enter a project details block title', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'medical-clinic'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'medical-clinic') . '|related', 
				esc_html__('Show Popular Projects', 'medical-clinic') . '|popular', 
				esc_html__('Show Recent Projects', 'medical-clinic') . '|recent', 
				esc_html__('Hide More Projects Box', 'medical-clinic') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'medical-clinic'), 
			'desc' => esc_html__('projects', 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'medical-clinic'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'medical-clinic'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'medical-clinic'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'medical-clinic'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'medical-clinic' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'medical-clinic'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'medical-clinic'), 
			'desc' => esc_html__('Enter a profile details block title', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'medical-clinic'), 
			'desc' => esc_html__('show', 'medical-clinic'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'medical-clinic'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'medical-clinic' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'medical-clinic'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'medical-clinic'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['medical-clinic' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

