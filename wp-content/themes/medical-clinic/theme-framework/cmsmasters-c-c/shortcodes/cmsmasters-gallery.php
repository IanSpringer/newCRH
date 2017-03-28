<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.5
 * 
 * Content Composer Gallery Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$images = explode(',', do_shortcode($content));


$out = '';


if ($layout == 'slider') {
	if ($image_size_slider == 'thumbnail' || $image_size_slider == 'medium' || $image_size_slider == 'large' || $image_size_slider == 'full') {
		$slider_size = get_option($image_size_slider . '_size_w');
	} else {
		$slider_size_array = cmsmasters_image_thumbnail_list();
		
		$slider_size = $slider_size_array[$image_size_slider]['width'];
	}
} elseif ($layout == 'gallery') {
	if ($image_size_gallery == 'thumbnail' || $image_size_gallery == 'medium' || $image_size_gallery == 'large' || $image_size_gallery == 'full') {
		$slider_size = get_option($image_size_gallery . '_size_w');
	} else {
		$slider_size_array = cmsmasters_image_thumbnail_list();
		
		$slider_size = $slider_size_array[$image_size_gallery]['width'];
	}
}

if ($content != null) {
	if ($layout == 'hover') {
		$out .= '<div' . 
			' id="cmsmasters_hover_slider_' . esc_attr($unique_id) . '"' . 
			' class="cmsmasters_hover_slider' . (($classes != '') ? ' ' . esc_attr($classes) : '') . '"' . 
			' data-thumb-width="104"' . 
			' data-thumb-height="72"' . 
			' data-active-slide="' . esc_attr($hover_active) . '"' . 
			' data-pause-time="' . esc_attr($hover_pause * 1000) . '"' . 
			' data-pause-on-hover="' . esc_attr($hover_pause_on_hover) . '"' . 
			(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
			(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
		'>' . 
			'<ul class="cmsmasters_hover_slider_items">' . "\n";
			
			
			foreach ($images as $image) { 
				$out .= '<li>' . 
					'<figure class="cmsmasters_hover_slider_full_img">' . 
						wp_get_attachment_image(strstr($image, '|', true), 'cmsmasters-blog-masonry-thumb') . 
					'</figure>' . 
				'</li>';
			}
			
			
			$out .= '</ul>' . "\n" . 
		'</div>' . "\n";
	} elseif ($layout == 'slider') {
		$slider_autoplay = ($slider_autoplay != 'true' ? 'false' : ((int) $slider_slideshow_speed * 1000));
		$slider_pause_on_hover = ($slider_pause_on_hover != 'true' ? 'false' : 'true');
		$slider_rewind = ($slider_rewind != 'true' ? 'false' : 'true');
		$slider_effect = ($slider_effect == 'slide' ? 'false' : 'fade');
		$slider_nav_control = ($slider_nav_control != 'true' ? 'false' : 'true');
		$slider_nav_arrow = ($slider_nav_arrow != 'true' ? 'false' : 'true');
		
		$out .= '<div class="cmsmasters_content_slider_wrap' . (($classes != '') ? ' ' . esc_attr($classes) : '') . '" style="max-width:' . esc_attr($slider_size) . 'px;"' . 
		(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
		'>' . 
			"<div" . 
				" id=\"cmsmasters_slider_" . esc_attr($unique_id) . "\"" . 
				" class=\"cmsmasters_owl_slider owl-carousel cmsmasters_content_slider\"" . 
				" data-auto-play=\"" . esc_attr($slider_autoplay) . "\"" . 
				" data-stop-on-hover=\"" . esc_attr($slider_pause_on_hover) . "\"" . 
				" data-rewind-nav=\"" . esc_attr($slider_rewind) . "\"" . 
				" data-slide-speed=\"" . esc_attr($slider_animation_speed) . "\"" . 
				" data-pagination-speed=\"" . esc_attr($slider_animation_speed) . "\"" . 
				" data-rewind-speed=\"" . esc_attr($slider_rewind_speed) . "\"" . 
				" data-transition-style=\"" . esc_attr($slider_effect) . "\"" . 
				" data-pagination=\"" . esc_attr($slider_nav_control) . "\"" . 
				" data-navigation=\"" . esc_attr($slider_nav_arrow) . "\"" . 
				" data-navigation-prev=\"<span></span>\"" . 
				" data-navigation-next=\"<span></span>\"" . 
			">";
		
		
		foreach ($images as $image) { 
			$out .= '<div class="cmsmasters_owl_slider_item cmsmasters_content_slider_item">' . 
				wp_get_attachment_image(strstr($image, '|', true), $image_size_slider) . 
			'</div>';
		}
		
		$out .= '</div>' . "\n" . 
		'</div>' . "\n";
	} else {
		$gallery_more_text = ($gallery_more_text != '') ? $gallery_more_text : esc_html__('Load More', 'medical-clinic');
		
		$out_gallery_items = '';
		
		$hidden_gallery_items = '';
		
		$gallery_count = (($gallery_count == '' || $gallery_count == 0) ? 0 : $gallery_count);
		
		
		$i = 0;
		
		foreach ($images as $image) {
			$i += 1;
			
			$image_src = wp_get_attachment_image_src(strstr($image, '|', true), 'full');
			
			
			$gallery_item = '<li class="cmsmasters_gallery_item' . ((get_post_field('post_excerpt', strstr($image, '|', true)) != '') ? ' cmsmasters_caption' : '') . '">' . 
				'<figure>';
					
					if ($gallery_links != 'none') {
						$gallery_item .= '<a'. (($gallery_links == 'blank') ? ' target="_blank"' : '') . ' href="' . esc_url($image_src[0]) . '"' . (($gallery_links == 'lightbox') ? ' rel="ilightbox[' . esc_attr($unique_id) . ']"' : '') . '>';
					}
					
					$gallery_item .= wp_get_attachment_image(strstr($image, '|', true), $image_size_gallery);
					
					if ($gallery_links != 'none') {
						$gallery_item .= '</a>';
					}
					
					$gallery_item .= ((get_post_field('post_excerpt', strstr($image, '|', true)) != '') ? '<figcaption>' . get_post_field('post_excerpt', strstr($image, '|', true)) . '</figcaption>' : '') . 
				'</figure>' . 
			'</li>';
			
			
			if ($gallery_count == 0 || $i <= $gallery_count) {
				$out_gallery_items .= $gallery_item;
			} else {
				$hidden_gallery_items .= $gallery_item;
			}
		}
		
		
		$out .= '<div' . 
			' id="cmsmasters_gallery_' . esc_attr($unique_id) . '"' . 
			' class="cmsmasters_gallery_wrap' . (($classes != '') ? ' ' . esc_attr($classes) : '') . '"' . 
			' data-type="' . esc_attr($gallery_type) . '"' . 
			' data-count="' . esc_attr($gallery_count) . '"' . 
			(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
			(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
		'>';
		
		
		wp_enqueue_style('isotope');
		
		
		wp_enqueue_script('isotope');
		
		wp_enqueue_script('isotopeMode');
		
		
		$shortcode_styles = "
			#cmsmasters_gallery_" . esc_attr($unique_id) . " .cmsmasters_gallery {
				margin:0 0 0 -" . esc_attr($gallery_padding) . "px;
			}
			
			#cmsmasters_gallery_" . esc_attr($unique_id) . " .cmsmasters_gallery .cmsmasters_gallery_item {
				padding:0 0 " . esc_attr($gallery_padding) . "px " . esc_attr($gallery_padding) . "px;
			}
		";
		
		
		$out .= $this->cmsmasters_generate_front_css($shortcode_styles);
		
		
		$out .= '<ul class="cmsmasters_gallery' . 
			(($gallery_columns != '') ? ' cmsmasters_' . esc_attr($gallery_columns) : '') . 
			' cmsmasters_more_items_loader' . 
		'">' . 
			$out_gallery_items . 
		'</ul>';
		
		
		if ($hidden_gallery_items != '') {
			$out .= '<ul class="cmsmasters_hidden_gallery dn">' . 
				$hidden_gallery_items . 
			'</ul>';
			
			
			$out .= '<div class="cmsmasters_wrap_more_items">' . 
				'<div class="cmsmasters_more_gallery_items cmsmasters_wrap_items_loader">' . 
					'<a href="javascript:void(0);" class="cmsmasters_button cmsmasters_gallery_items_loader cmsmasters_items_loader">' . 
						'<span>' . esc_html($gallery_more_text) . '</span>' . 
					'</a>' . 
				'</div>' . 
			'</div>';
		}
		
		
		$out .= "</div>";
	}
	
	echo $out;
}