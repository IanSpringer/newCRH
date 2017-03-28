<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.3
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(esc_html__('Please do not load this page directly. Thanks!', 'medical-clinic'));
}


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'medical-clinic') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h2 class="post_comments_title">';
		
		
		comments_number(esc_attr__('No Comments', 'medical-clinic'), esc_attr__('Comment', 'medical-clinic') . ' (1)', esc_attr__('Comments', 'medical-clinic') . ' (%)');
		
		
		echo '</h2>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="comments_nav">';
				
				if (get_previous_comments_link()) {
					echo '<span class="comments_nav_prev cmsmasters_theme_icon_comments_nav_prev">';
						
						previous_comments_link(esc_attr__('Older Comments', 'medical-clinic'));
						
					echo '</span>';
				}
				
				
				if (get_next_comments_link()) {
					echo '<span class="comments_nav_next cmsmasters_theme_icon_comments_nav_next">';
						
						next_comments_link(esc_attr__('Newer Comments', 'medical-clinic'));
						
					echo '</span>';
				}
				
			echo '</aside>';
		}
		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'medical_clinic_mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="comments_nav">';
				
				if (get_previous_comments_link()) {
					echo '<span class="comments_nav_prev cmsmasters_theme_icon_comments_nav_prev">';
						
						previous_comments_link(esc_attr__('Older Comments', 'medical-clinic'));
						
					echo '</span>';
				}
				
				
				if (get_next_comments_link()) {
					echo '<span class="comments_nav_next cmsmasters_theme_icon_comments_nav_next">';
						
						next_comments_link(esc_attr__('Newer Comments', 'medical-clinic'));
						
					echo '</span>';
				}
				
			echo '</aside>';
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<p class="comment-form-author">' . "\n" . 
			'<label for="author">' . esc_html__('Your name', 'medical-clinic') . (($req) ? '<span class="cmsmasters_req">*</span>' : '') . '</label>' . "\n" . 
			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . '/>' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<label for="email">' . esc_html__('Email', 'medical-clinic') . (($req) ? '<span class="cmsmasters_req">*</span>' : '') . '</label>' . "\n" . 
			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . '/>' . "\n" . 
		'</p>' . "\n" 
	);
	
	
	echo "\n\n";
	
	
	comment_form(array( 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'comment_field' => 		'<p class="comment-form-comment">' . 
									'<label for="comment">' . esc_html__('Message', 'medical-clinic') . '</label>' . 
									'<textarea name="comment" id="comment" cols="67" rows="2"></textarea>' . 
								'</p>', 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'medical-clinic') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'medical-clinic') . 
									'</a> ' 
									. esc_html__('to post a comment', 'medical-clinic') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'medical-clinic') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'medical-clinic') . '">' . 
										esc_html__('Log out?', 'medical-clinic') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'<p class="comment-notes">' . 
										esc_html__('Your email address will not be published.', 'medical-clinic') . 
									'</p>' . "\n", 
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_attr__('Leave a Reply', 'medical-clinic'), 
		'title_reply_to' => 		esc_attr__('Leave your comment to', 'medical-clinic'), 
		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'medical-clinic'), 
		'label_submit' => 			esc_attr__('Submit', 'medical-clinic') 
	));
}

