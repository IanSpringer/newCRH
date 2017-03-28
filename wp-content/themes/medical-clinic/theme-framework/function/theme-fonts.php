<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.1
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function medical_clinic_theme_fonts() {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.1
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body, 
	.header_top .meta_wrap, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	.cmsmasters_comment_item .comment-edit-link, 
	.cmsmasters_comment_item .comment-reply-link, 
	.cmsmasters_comment_item .cmsmasters_comment_item_date, 
	.cmsmasters_pricing_table .cmsmasters_period, 
	.cmsmasters_slider_project .cmsmasters_slider_project_inner .cmsmasters_project_read_more, 
	#wp-calendar thead th {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_content_font_google_font']) . $cmsmasters_option['medical-clinic' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_content_font_font_style'] . ";
	}
	
	.header_top .meta_wrap * {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_comment_item .comment-edit-link, 
	.cmsmasters_comment_item .comment-reply-link, 
	.cmsmasters_comment_item .cmsmasters_comment_item_date {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content, 
	.cmsmasters_pricing_table .cmsmasters_period, 
	.cmsmasters_notice .notice_content, 
	.cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	#wp-calendar, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs a {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] + 1) . "px;
	}
	
	.header_top .meta_wrap [class^=cmsmasters-icon-]:before,
	.header_top .meta_wrap [class*= cmsmasters-icon-]:before {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_content_font_line_height'] + 8) . "px;
	}
	
	.cmsmasters_theme_icon_cancel {
		font-family:'Times New Roman';
		font-weight: normal;
	}

	.cmsmasters_pricing_table .cmsmasters_period {
		text-transform:lowercase;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['medical-clinic' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_link_font_google_font']) . $cmsmasters_option['medical-clinic' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a, 
	.top_line_nav > li > a, 
	.footer_nav > li > a, 
	ul.navigation > a > span .nav_subtitle {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_nav_title_font_google_font']) . $cmsmasters_option['medical-clinic' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_text_transform'] . ";
	}
	
	.navigation > li > a .nav_tag, 
	.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_title_font_font_size'] - 2) . "px;
	}
	
	ul.navigation > li > a > span .nav_title {
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_title_font_line_height'] - 6) . "px;
	}
	
	ul.navigation > li > a > span .nav_subtitle {
		font-weight:400; /* static */
	}
	
	ul.navigation > li > a > span .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_title_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_title_font_line_height'] - 10) . "px;
		text-transform:uppercase;
	}
	
	.footer_nav > li:before {
		height:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_size'] . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		#header .navigation li a {
			font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_nav_title_font_google_font']) . $cmsmasters_option['medical-clinic' . '_nav_title_font_system_font'] . ";
			font-size:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['medical-clinic' . '_nav_title_font_text_transform'] . ";
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.nav_tag {
		text-transform:uppercase;
	}
	
	.top_line_nav ul li a {
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_line_height'] + 2) . "px;
	}
	
	.mid_nav > li ul .nav_subtitle, 
	.bot_nav > li ul .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_nav_dropdown_font_line_height'] - 4) . "px;
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title, 
	.cmsmasters_pricing_table .cmsmasters_price, 
	.cmsmasters_pricing_table .cmsmasters_coins, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h1_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h1_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h1_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units {
		font-size:16px; /* static */
		line-height:22px; /* static */
	}

	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price, 
	.cmsmasters_pricing_table .cmsmasters_coins, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 8) . "px;
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['medical-clinic' . '_h1_font_line_height'] + 15) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.comment-respond .comment-reply-title, 
	.cmsmasters_post_default .cmsmasters_post_title a, 
	.cmsmasters_open_post .cmsmasters_post_title {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h2_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_post_default .cmsmasters_post_title a, 
	.cmsmasters_open_post .cmsmasters_post_title {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h2_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h2_font_line_height'] + 4) . "px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a, 
	.post_nav a, 
	.cmsmasters_pricing_table .cmsmasters_currency, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h3_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency {
		line-height:" . $cmsmasters_option['medical-clinic' . '_h3_font_font_size'] . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.widgettitle, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	.about_author .about_author_cont_title a, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .cmsmasters_quote_content {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h4_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .cmsmasters_quote_content {
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h4_font_line_height'] + 10) . "px;
	}
	
	#bottom .widgettitle {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h4_font_font_size'] - 2) . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	.cmsmasters_toggles .cmsmasters_toggle_title a, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap, 
	.cmsmasters_pricing_table .pricing_title, 
	.cmsmasters_archive_type .cmsmasters_archive_item_type {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h5_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_twitter_wrap .published {
		height:" . $cmsmasters_option['medical-clinic' . '_h5_font_line_height'] . "px;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	.cmsmasters_quotes_slider .cmsmasters_quote_content, 
	.cmsmasters_table tr td, 
	.cmsmasters_table tr th {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_h6_font_google_font']) . $cmsmasters_option['medical-clinic' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['medical-clinic' . '_h6_font_text_decoration'] . ";
	}
	
	.error .error_subtitle, 
	.cmsmasters_quotes_grid .cmsmasters_quote_site a, 
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_h6_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_content {
		line-height:" . ((int) $cmsmasters_option['medical-clinic' . '_h6_font_line_height'] + 8) . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_button_font_google_font']) . $cmsmasters_option['medical-clinic' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but {
		font-weight:normal; /* static */
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['medical-clinic' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['medical-clinic' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['medical-clinic' . '_button_font_line_height'] . "px;
	}
	
	.cmsmasters_post_default .cmsmasters_post_read_more, 
	.cmsmasters_post_masonry .cmsmasters_post_read_more, 
	.cmsmasters_post_timeline .cmsmasters_post_read_more, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_read_more, 
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more, 
	.cmsmasters_slider_project .cmsmasters_slider_project_inner .cmsmasters_project_read_more, 
	.cmsmasters_project_read_more {
		font-weight:" . $cmsmasters_option['medical-clinic' . '_button_font_font_weight'] . ";
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a {
		line-height:" . $cmsmasters_option['medical-clinic' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	form .formError .formErrorContent, 
	.cmsmasters_likes a, 
	.cmsmasters_comments a, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner *, 
	.cmsmasters_project_grid .cmsmasters_project_category, 
	.cmsmasters_project_grid .cmsmasters_project_category a, 
	.cmsmasters_project_puzzle .cmsmasters_project_footer *, 
	.cmsmasters_slider_post .published, 
	.cmsmasters_slider_post .cmsmasters_likes *, 
	.cmsmasters_slider_post .cmsmasters_comments *, 
	.cmsmasters_slider_post .cmsmasters_slider_post_footer *, 
	.cmsmasters_slider_project .cmsmasters_slider_project_category, 
	.cmsmasters_slider_project .cmsmasters_slider_project_category a, 
	.cmsmasters_slider_project .cmsmasters_slider_project_footer *, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_date, 
	.post.cmsmasters_puzzle_type .cmsmasters_likes *, 
	.post.cmsmasters_puzzle_type .cmsmasters_comments *, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_wrap_info > span *, 
	.cmsmasters_quotes_slider .cmsmasters_quote_subtitle, 
	.cmsmasters_quotes_slider .cmsmasters_quote_site a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .published {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_small_font_google_font']) . $cmsmasters_option['medical-clinic' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['medical-clinic' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_subtitle, 
	.cmsmasters_quotes_slider .cmsmasters_quote_site a, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner * {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_small_font_font_size'] + 1) . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_small_font_google_font']) . $cmsmasters_option['medical-clinic' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['medical-clinic' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['medical-clinic' . '_small_font_line_height'] . "px !important;
	}
	
	.cmsmasters_likes a, 
	.cmsmasters_comments a {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_small_font_font_size'] + 3) . "px;
	}
	
	.cmsmasters_likes a span, 
	.cmsmasters_comments a span {
		font-size:" . ((int) $cmsmasters_option['medical-clinic' . '_small_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_likes a:before, 
	.cmsmasters_comments a:before {
		line-height:" . $cmsmasters_option['medical-clinic' . '_small_font_line_height'] . "px;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option,
	code {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_input_font_google_font']) . $cmsmasters_option['medical-clinic' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['medical-clinic' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_quote_font_google_font']) . $cmsmasters_option['medical-clinic' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['medical-clinic' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['medical-clinic' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['medical-clinic' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . medical_clinic_get_google_font($cmsmasters_option['medical-clinic' . '_quote_font_google_font']) . $cmsmasters_option['medical-clinic' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['medical-clinic' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['medical-clinic' . '_quote_font_font_style'] . ";
	}
/***************** Finish Theme Font Styles ******************/


";
	
	
	return apply_filters('medical_clinic_theme_fonts_filter', $custom_css);
}

