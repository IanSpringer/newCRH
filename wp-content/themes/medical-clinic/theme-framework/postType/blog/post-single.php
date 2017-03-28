<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.3
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = medical_clinic_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);


list($cmsmasters_layout) = medical_clinic_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}


$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Post Single Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if ($cmsmasters_post_format == 'image') {
		$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
		
		medical_clinic_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'gallery') {
		$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
		
		medical_clinic_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'video') {
		$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
		$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
		$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
		
		medical_clinic_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'audio') {
		$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
		
		medical_clinic_post_type_audio($cmsmasters_post_audio_links);
	} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
		$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
	
		if ($cmsmasters_post_image_show != 'true') {
			medical_clinic_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, false, false, false, false, true, false);
		}
 	}
	
	
	if (
		$cmsmasters_option['medical-clinic' . '_blog_post_date'] || 
		$cmsmasters_option['medical-clinic' . '_blog_post_like'] || 
		$cmsmasters_option['medical-clinic' . '_blog_post_comment'] 
	) {
		echo '<div class="cmsmasters_post_cont_info entry-meta">';
		
			medical_clinic_get_post_date('post');
			
			if (
				$cmsmasters_option['medical-clinic' . '_blog_post_like'] || 
				$cmsmasters_option['medical-clinic' . '_blog_post_comment'] 
			) {
			
				echo '<div class="cmsmasters_post_cont_info_meta">';
				
					medical_clinic_get_post_likes('post');
					
					medical_clinic_get_post_comments('post');
					
				echo '</div>';			
			
			}
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_title == 'true') {
		medical_clinic_post_title_nolink(get_the_ID(), 'h2');
	}	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'medical-clinic') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => ' [ ', 
				'link_after' => ' ] ' 
			));
			
		echo '</div>';
	}
	
	if (
		$cmsmasters_option['medical-clinic' . '_blog_post_tag'] ||
		$cmsmasters_option['medical-clinic' . '_blog_post_author'] || 
		$cmsmasters_option['medical-clinic' . '_blog_post_cat'] 
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
		
			medical_clinic_get_post_author('post');
			
			medical_clinic_get_post_category(get_the_ID(), 'category', 'post');
			
			medical_clinic_get_post_tags();
			
		echo '</footer>';
	}
	?>
</article>
<!--_________________________ Finish Post Single Article _________________________ -->

