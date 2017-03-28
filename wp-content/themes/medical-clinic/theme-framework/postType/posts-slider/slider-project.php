<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.5
 * 
 * Posts Slider Project Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && medical_clinic_slider_post_check_exc_cont('project')) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$rollover = in_array('rollover', $cmsmasters_metadata) ? true : false;
$icon = in_array('icon', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
$cmsmasters_project_icon = get_post_meta(get_the_ID(), 'cmsmasters_project_icon', true);


if ($icon) {
	$icon = $cmsmasters_project_icon;
}


$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Posts Slider Project Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php 
		medical_clinic_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, $rollover, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, false, $icon);
		
		
		if ($title || $categories || $excerpt || $likes || $comments || $more) {
			echo '<div class="cmsmasters_slider_project_inner">';
				
				$title ? medical_clinic_slider_post_heading(get_the_ID(), 'project', 'h3', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				
				if ($categories) {
					echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
						
						medical_clinic_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
						
					echo '</div>';
				}
				
				
				$excerpt ? medical_clinic_slider_post_exc_cont('project') : '';
				
				
				if ($likes || $comments || $more) {
					echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
						
						$more ? medical_clinic_project_more(get_the_ID(), $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
						
						echo '<div class="cmsmasters_project_footer_meta_info">';
						
							($likes) ? medical_clinic_slider_post_like('project') : '';
							
							($comments) ? medical_clinic_get_slider_post_comments('project') : '';
						
						echo '</div>';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Posts Slider Project Article _________________________ -->

