<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.4
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Previous & Next Post Links Function */
function medical_clinic_prev_next_posts() {
	$cmsmasters_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsmasters_post_type)->publish;
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
		
		previous_post_link('<span class="cmsmasters_prev_post"><h6 class="post_nav_link_title">' .  esc_html__('Previous Link', 'medical-clinic') . '</h6>%link<span class="cmsmasters_prev_arrow"><span></span></span></span>');
		
		next_post_link('<span class="cmsmasters_next_post"><h6 class="post_nav_link_title">' .  esc_html__('Next Link', 'medical-clinic') . '</h6>%link<span class="cmsmasters_next_arrow"><span></span></span></span>');
		
		
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function medical_clinic_sharing_box($title_box = false, $tag = 'h3') {
	$page_link = urlencode(get_permalink());
	
	$social_title = cmsmasters_title(get_the_ID(), false);
	
	$website_name = get_bloginfo('name');
	
	
	if (has_post_thumbnail() && get_post_format() != '' || get_post_type() != 'post' ) {
		$post_img_id = get_post_thumbnail_id();
		
		$post_img_url = wp_get_attachment_url($post_img_id);
		
		$pinterest_img = urlencode($post_img_url);
	} else {
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', do_shortcode(get_the_content()), $img_matches);
		
		
		if (!empty($img_matches[1][0])) {
			$first_img = $img_matches[1][0];
		} else {
			$first_img = get_template_directory_uri() . '/theme-framework/img/logo.png';
		}
		
		
		$pinterest_img = urlencode($first_img);
	}
	
	
	echo "<aside class=\"share_posts\">
		" . ($title_box ? "<{$tag} class=\"share_posts_title\">{$title_box}</{$tag}>" : "") . "
		<div class=\"share_posts_inner\">
			<a title=\"" . esc_html__('Facebook', 'medical-clinic') . "\" class=\"cmsmasters-icon-facebook-1\" href=\"https://www.facebook.com/sharer/sharer.php?display=popup&u={$page_link}\"></a>
			<a title=\"" . esc_html__('Google+', 'medical-clinic') . "\" class=\"cmsmasters-icon-google\" href=\"https://plus.google.com/share?url={$page_link}\"></a>
			<a title=\"" . esc_html__('Twitter', 'medical-clinic') . "\" class=\"cmsmasters-icon-twitter\" href=\"https://twitter.com/intent/tweet?text=" . urlencode(html_entity_decode(sprintf(esc_attr__("Check out '%s' on %s website", 'medical-clinic'), $social_title, $website_name), ENT_QUOTES, 'UTF-8')) . "&url={$page_link}\"></a>
			<a title=\"" . esc_html__('Pinterest', 'medical-clinic') . "\" class=\"cmsmasters-icon-pinterest\" href=\"https://pinterest.com/pin/create/button/?url={$page_link}&media={$pinterest_img}&description={$social_title}\"></a>
		</div>
	</aside>
";
}



/* Get About Author Box Function */
function medical_clinic_author_box($title_box = false, $tag = 'h2', $author_tag = 'h3') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="about_author_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<figure class="about_author_avatar">' . 
			get_avatar($user_email, 120, get_option('avatar_default')) . 
		'</figure>' . 
		'<div class="about_author_cont">';
		
		
		if ($out != '') {
			echo '<' . esc_html($author_tag) . ' class="about_author_cont_title vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></' . esc_html($author_tag) . '>';
		}
		
		
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		
		
		if ($user_url) {
			echo '<a href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'medical-clinic') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}



/* Get Related, Popular & Recent Posts Function */
function medical_clinic_related($tag = 'h2', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		echo "<aside class=\"cmsmasters_single_slider\">";
			echo "<" . esc_html($tag) . " class=\"cmsmasters_single_slider_title\">" . 
				($title != '' ? esc_html($title) : esc_html__('More items', 'medical-clinic')) . 
			"</" . esc_html($tag) . ">";
			
			
			if ($r_query->have_posts()) {
				echo '<div class="cmsmasters_single_slider_inner">' . 
					'<div' . 
						' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
						' class="cmsmasters_owl_slider"' . 
						' data-single-item="false"' . 
						' data-auto-play="' . esc_attr($autoplay) . '"' . 
					'>';
						while ($r_query->have_posts()) : $r_query->the_post();
							echo "<div class=\"cmsmasters_owl_slider_item cmsmasters_single_slider_item\">
								<div class=\"cmsmasters_single_slider_item_outer\">";
								
									medical_clinic_thumb(get_the_ID(), 'cmsmasters-project-thumb', true, false, true, false, true, true, false, false, false, 'cmsmasters_theme_icon_image');
									
									echo "<div class=\"cmsmasters_single_slider_item_inner\">
										
										<div class=\"cmsmasters_single_slider_item_inner_meta\">";
										
											medical_clinic_get_post_date('page', 'default');
											
											if ($type == 'post') {
												medical_clinic_get_post_comments('page');
											} else {												
												medical_clinic_get_project_comments('page');
											}
											
										echo "</div>
										
										<h4 class=\"cmsmasters_single_slider_item_title\">
											<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
										</h4>
									</div>
								</div>
							</div>";
						endwhile;
					echo "</div>
				</div>";
			} else {
				echo "<h5 class=\"cmsmasters_single_slider_no_items\">" . 
					($no_title != '' ? esc_html($no_title) : esc_html__('No items found', 'medical-clinic')) . 
				"</h5>";
			}
		
		
		echo "</aside>";
		
		
		wp_reset_postdata();
	}
}



/* Get Posts Author Avatar Function */
function medical_clinic_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}



/* Get Pingbacks & Trackbacks Function */
function medical_clinic_get_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (pings_open($id) && sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'medical-clinic') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

