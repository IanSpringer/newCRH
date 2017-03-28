<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.3
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = medical_clinic_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__("404 - Page Not Found!", 'medical-clinic'); ?></h1>
				<h6 class="error_subtitle"><?php echo esc_html__("The page you trying to reach does not exist, or has been moved.", 'medical-clinic'); ?><br /><?php echo esc_html__("Please use the menus or the search box below to find what you are looking for.", 'medical-clinic'); ?></h6>

				<div class="error_cont">
					<?php 
					if ($cmsmasters_option['medical-clinic' . '_error_search']) { 
						get_search_form(); 
					}
					
					
					if ($cmsmasters_option['medical-clinic' . '_error_sitemap_button'] && $cmsmasters_option['medical-clinic' . '_error_sitemap_link'] != '') {
						echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option['medical-clinic' . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'medical-clinic') . '</a></div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

