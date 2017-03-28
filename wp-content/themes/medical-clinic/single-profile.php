<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.0
 * 
 * Single Profile Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = medical_clinic_get_global_options();


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">' . "\n";
	
	
	get_template_part('theme-framework/postType/profile/profile-single');

	echo '<div class="profile_opened_article_inner">' . "\n";
		if ($cmsmasters_option['medical-clinic' . '_profile_post_nav_box']) {
			medical_clinic_prev_next_posts();
		}
		
		
		if ($cmsmasters_profile_sharing_box == 'true') {
			medical_clinic_sharing_box(esc_html__('Like this profile?', 'medical-clinic'), 'h2');
		}
		
		
		comments_template(); 
		
		echo '</div>' . 
	'</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

