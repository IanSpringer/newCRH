<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.0
 * 
 * Post Puzzle Template
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
<!--_________________________ Start Post Puzzle Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_puzzle_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
	<?php
		echo '<div class="puzzle_post_img_wrap">';
			if (
				$cmsmasters_post_format == '' ||
				$cmsmasters_post_format == 'video' ||
				$cmsmasters_post_format == 'audio'
			) { 
				if (!post_password_required() && has_post_thumbnail()) {
					
					medical_clinic_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, true, false, true, true, false);
				
				} else {
					echo '<figure>' . 
						'<a href="' . esc_url(get_permalink()) . '" class="preloader"><span class="cmsmasters_theme_icon_image"></span></a>' . 
					'</figure>';
				}
			} elseif ($cmsmasters_post_format == 'image') { 
				$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
				
				if (!post_password_required() && has_post_thumbnail() && $cmsmasters_post_image_link != '') {
					medical_clinic_post_type_image(get_the_ID(), $cmsmasters_post_image_link);
				} else {
					echo '<figure>' . 
						'<a href="' . esc_url(get_permalink()) . '" class="preloader"><span class="cmsmasters_theme_icon_image"></span></a>' . 
					'</figure>';
				}
			} elseif ($cmsmasters_post_format == 'gallery') {
				$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
				
				if (!post_password_required() && sizeof($cmsmasters_post_images) > 1) {
					medical_clinic_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'cmsmasters-square-thumb');
				} else {
					echo '<figure>' . 
						'<a href="' . esc_url(get_permalink()) . '" class="preloader"><span class="cmsmasters_theme_icon_image"></span></a>' . 
					'</figure>';
				}
			} 
		echo '</div>';
		
		
		echo '<div class="puzzle_post_content_wrapper">' . 
			'<div class="puzzle_post_content_wrap">';
			
			if ($comments || $likes) {
				echo '<div class="cmsmasters_post_meta_info">';
										
					$comments ? medical_clinic_get_post_comments('page') : '';
					
					$likes ? medical_clinic_get_post_likes('page') : '';
					
				echo '</div>';
			}
					
			$date ? medical_clinic_get_post_date('page', 'default') : '';
			
			medical_clinic_post_heading(get_the_ID(), 'h4');
			
			if ($cmsmasters_post_format == 'audio') {
				$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
				
				medical_clinic_post_type_audio($cmsmasters_post_audio_links);
			}
			
			medical_clinic_post_exc_cont();
			
			
			$more ? medical_clinic_post_more(get_the_ID()) : '';
			
			
			if ($author || $categories || $comments || $likes) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					if ($author || $categories) {
						echo '<div class="cmsmasters_post_wrap_info entry-meta">';
							
							$author ? medical_clinic_get_post_author('page') : '';
							
							$categories ? medical_clinic_get_post_category(get_the_ID(), 'category', 'page') : '';
							
						echo '</div>';
					}
					
				echo '</footer>';
			}
			
			
		echo '</div>' . 
		'</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Post Puzzle Article _________________________ -->

