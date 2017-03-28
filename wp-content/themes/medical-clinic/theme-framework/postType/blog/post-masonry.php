<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.5
 * 
 * Post Masonry Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}


$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Post Masonry Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_masonry'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
	<?php
		if ($cmsmasters_post_format == '') {
			if (!post_password_required() && has_post_thumbnail()) {
				echo '<div class="cmsmasters_date_img_wrap">';
					medical_clinic_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, false, true, false, true, true, false);
					
					$date ? medical_clinic_get_post_date('page', 'masonry') : '';
				echo '</div>';
			} else {
				$date ? medical_clinic_get_post_date('page', 'masonry') : '';
			}
		} elseif ($cmsmasters_post_format == 'video') {
			$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
			$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
			$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
			
			medical_clinic_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, 'cmsmasters-blog-masonry-thumb');
		} elseif ($cmsmasters_post_format == 'image') {
			$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
			
			if (!post_password_required() && $cmsmasters_post_image_link != '') {
				echo '<div class="cmsmasters_date_img_wrap">';
				
					medical_clinic_post_type_image(get_the_ID(), $cmsmasters_post_image_link);
					
					$date ? medical_clinic_get_post_date('page', 'masonry') : '';
					
				echo '</div>';
			} elseif (!post_password_required() && has_post_thumbnail()) {
				echo '<div class="cmsmasters_date_img_wrap">';
					
					medical_clinic_post_type_image(get_the_ID(), $cmsmasters_post_image_link);
					
					$date ? medical_clinic_get_post_date('page', 'masonry') : '';
					
				echo '</div>';
			} else {
				$date ? medical_clinic_get_post_date('page', 'masonry') : '';
			}
		} elseif ($cmsmasters_post_format == 'gallery') {
			$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
			
			$slider_data = ' data-auto-height="false"';
			
			if (!post_password_required() && sizeof($cmsmasters_post_images) > 1) {
				medical_clinic_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'cmsmasters-blog-masonry-thumb', $slider_data);
			} else {
				$date ? medical_clinic_get_post_date('page', 'masonry') : '';
			}
		} 
	
		if (
			$cmsmasters_post_format == 'audio' ||
			$cmsmasters_post_format == 'video'
		) {
			$date ? medical_clinic_get_post_date('page', 'masonry') : '';
		}
		
		medical_clinic_post_heading(get_the_ID(), 'h4');
		
		if ($cmsmasters_post_format == 'audio') {
			$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
			
			medical_clinic_post_type_audio($cmsmasters_post_audio_links);
		}
		
		medical_clinic_post_exc_cont();
		
		$more ? medical_clinic_post_more(get_the_ID()) : '';
		
		if ($likes || $comments || $author || $categories) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$author ? medical_clinic_get_post_author('page') : '';
				
				$categories ? medical_clinic_get_post_category(get_the_ID(), 'category', 'page') : '';
				
				if ($likes || $comments ) {
					echo '<div class="cmsmasters_post_footer_meta_info entry-meta">';
					
						$likes ? medical_clinic_get_post_likes('page') : '';
						
						$comments ? medical_clinic_get_post_comments('page') : '';
					
					echo '</div>';
				}
				
			echo '</footer>';
		}
		?>
	</div>
</article>
<!--_________________________ Finish Post Masonry Article _________________________ -->

