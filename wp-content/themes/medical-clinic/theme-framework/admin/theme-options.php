<?php 
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.0
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */


/* Single Options */
function medical_clinic_single_options_meta_fields($custom_all_meta_fields) {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$custom_all_meta_fields_new = array();
	
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'profile') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'profile') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'profile') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if (
				$custom_all_meta_field['id'] == 'cmsmasters_profile_social'
			) {	
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Profile Contact Info Title', 'medical-clinic'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_profile_contact_info_block_title', 
					'type'	=> 'text_long', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Profile Contact Info', 'medical-clinic'), 
					'desc'	=> esc_html__('Add contact info for this profile', 'medical-clinic'), 
					'id'	=> 'cmsmasters_profile_contact_info', 
					'type'	=> 'contact', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} elseif (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'project')  
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if (
				$custom_all_meta_field['id'] == 'cmsmasters_project_link_text'
			) {	
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Project Icon', 'medical-clinic'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_project_icon', 
					'type'	=> 'icon', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__("Project Read More Text", 'medical-clinic'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_project_more', 
					'type'	=> 'text', 
					'hide'	=> '', 
					'std'	=> esc_html__('Read More', 'medical-clinic') 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'medical_clinic_single_options_meta_fields');


