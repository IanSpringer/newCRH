<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.5
 * 
 * Profile Vertical Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_contact_info = get_post_meta(get_the_ID(), 'cmsmasters_profile_contact_info', true);

$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>
<!--_________________________ Start Profile Vertical Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	if (has_post_thumbnail()) {
		medical_clinic_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, false, false, false);
	}
	
	
	echo '<div class="profile_inner">' . 
		'<div class="profile_inner_header_wrap">';
		
			medical_clinic_profile_heading(get_the_ID(), 'h3', $cmsmasters_profile_subtitle, 'h6');
			
			medical_clinic_get_profile_contact_info($cmsmasters_profile_contact_info, false, 'h3');
		
		echo '</div>';
		
		medical_clinic_profile_exc_cont();
		
		medical_clinic_profile_social_icons($cmsmasters_profile_social, $profile_id);
		
	echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Profile Vertical Article _________________________ -->

