<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.0
 * 
 * Single Project Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = medical_clinic_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="portfolio opened-article">' . "\n";
	
	
	get_template_part('theme-framework/postType/portfolio/project-single');
	
	
	if ($cmsmasters_option['medical-clinic' . '_portfolio_project_nav_box']) {
		medical_clinic_prev_next_posts();
	}
	
	
	if ($cmsmasters_project_sharing_box == 'true') {
		medical_clinic_sharing_box(esc_html__('Like this project?', 'medical-clinic'), 'h2');
	}
	
	
	if ($cmsmasters_project_author_box == 'true') {
		medical_clinic_author_box(esc_html__('About author', 'medical-clinic'), 'h2', 'h4');
	}
	
	
	if ($project_tags) {
		$tgsarray = array();
		
		
		foreach ($project_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_project_more_posts != 'hide') {
		medical_clinic_related( 
			'h2', 
			esc_html__('More projects', 'medical-clinic'), 
			esc_html__('No projects found', 'medical-clinic'), 
			$cmsmasters_project_more_posts, 
			$tgsarray, 
			$cmsmasters_option['medical-clinic' . '_portfolio_more_projects_count'], 
			$cmsmasters_option['medical-clinic' . '_portfolio_more_projects_pause'], 
			'project' 
		);
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

