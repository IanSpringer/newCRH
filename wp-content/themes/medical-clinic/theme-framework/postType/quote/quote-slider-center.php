<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.6
 * 
 * Quote Slider Center Template
 * Created by CMSMasters
 * 
 */


$unique_id = uniqid();

?>
<!--_________________________ Start Quote Slider Center Article _________________________ -->
<article class="cmsmasters_quote_inner" <?php echo 'id="cmsmasters_quote_' . $unique_id . '"';?>>
	<?php		
		if ($quote_image != '') {
			echo '<figure class="cmsmasters_quote_image">' . 
				wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-small-thumb') . 
			'</figure>';
		} else {
			if ($quote_color != '') {
				medical_clinic_quote_color($unique_id, 'center', $quote_color);	
			}
			
			echo '<span class="cmsmasters_quote_icon"></span>';
		}
		
		
		if ($quote_name != '') {
			echo '<header class="cmsmasters_quote_header">' . 
				'<h4 class="cmsmasters_quote_title">' . esc_html($quote_name) . '</h4>' . 
			'</header>';
		}
		
		
		if ($quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
			echo '<div class="cmsmasters_quote_subtitle_wrap">' . 
				
				($quote_subtitle != '' ? '<h5 class="cmsmasters_quote_subtitle">' . esc_html($quote_subtitle) . '</h5>' : '');
				
				
				if ($quote_website != '' || $quote_link != '') {
					echo '<span class="cmsmasters_quote_site">' . 
						($quote_link != '' ? '<a href="' . esc_url($quote_link) . '" target="_blank">' : '') . 
						
						($quote_website != '' ? esc_html($quote_website) : esc_html($quote_link)) . 
						
						($quote_link != '' ? '</a>' : '') . 
					'</span>';
				}
				
			echo '</div>';
		}
		
		
		echo cmsmasters_divpdel('<div class="cmsmasters_quote_content">' . 
			do_shortcode(wpautop(wp_kses(stripslashes($quote_content), 'post'))) . 
		'</div>');
	?>
</article>
<!--_________________________ Finish Quote Slider Center Article _________________________ -->

