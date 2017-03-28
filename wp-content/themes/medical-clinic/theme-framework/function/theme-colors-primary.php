<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.2
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function medical_clinic_theme_colors_primary() {
	$cmsmasters_option = medical_clinic_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version 	1.0.2
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'footer') ? ".cmsmasters_color_scheme_{$scheme} .bottom_inner input[type=submit]," : '') . "
	" . (($scheme == 'footer') ? ".cmsmasters_color_scheme_{$scheme} .bottom_inner input[type=button]," : '') . "	
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.cmsmasters_likes a, 
	{$rule}.cmsmasters_comments a, 
	{$rule}.cmsmasters_likes a:hover, 
	{$rule}.cmsmasters_comments a:hover, 
	{$rule}.post_nav > span > .post_nav_link_title, 
	{$rule}.post_nav > span > a, 
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_subtitle, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_footer .cmsmasters_post_wrap_info > span, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_date .published, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_subtitle, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_subtitle, 
	{$rule}.search_bar_wrap button, 
	{$rule}.cmsmasters_sitemap_wrap li a, 
	{$rule}#page .widget_custom_posts_tabs_entries .cmsmasters_tabs_list_item a, 
	{$rule}.widget_tag_cloud a, 
	{$rule}.widget_archive ul li a:before, 
	{$rule}.widget_categories ul li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder, 
	{$rule}textarea::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder, 
	{$rule}textarea:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.footer_nav > li:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_color']) . "
	}
	
	@media only screen and (min-width: 768px) {
		{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_left .cmsmasters_tabs_list_item.current_tab {
			border-right-color:transparent;
		}
		
		{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_right .cmsmasters_tabs_list_item.current_tab {
			border-left-color:transparent;
		}
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a, 
	{$rule}.footer_custom_html, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_date, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_title a, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_date_link .published, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_footer > span a, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_date, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_title a, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_date_link .published, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_footer > span a, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_title a, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_footer > span a:hover, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_date:before, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_title a, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_date, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_title, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags > a:hover, 
	{$rule}.cmsmasters_single_slider .cmsmasters_post_date, 
	{$rule}.cmsmasters_single_slider .cmsmasters_post_date_link .published, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_header a, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_header a, 
	{$rule}.cmsmasters_comments a:hover:before, 
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_date:before, 
	{$rule}.cmsmasters_wrap_pagination .page-numbers.current, 
	{$rule}.cmsmasters_wrap_pagination .page-numbers:hover, 
	{$rule}.post_nav > span:hover > .post_nav_link_title, 
	{$rule}.post_nav > span:hover > a, 
	{$rule}.cmsmasters_single_slider_item_title a, 
	{$rule}.cmsmasters_req, 
	{$rule}.cmsmasters_open_project .cmsmasters_project_title, 
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_title, 
	{$rule}.cmsmasters_open_profile .profile_contact_info_item [class^='cmsmasters-icon-']:before, 
	{$rule}.cmsmasters_open_profile .profile_contact_info_item [class*=' cmsmasters-icon-']:before, 
	{$rule}.cmsmasters_profile .profile_contact_info [class^='cmsmasters-icon-']:before, 
	{$rule}.cmsmasters_profile .profile_contact_info [class*=' cmsmasters-icon-']:before, 
	{$rule}.cmsmasters_project_grid .cmsmasters_project_title a, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper .cmsmasters_post_date_link .published, 
	{$rule}.cmsmasters_profile .cmsmasters_profile_title a, 
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title:hover a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item:hover a, 
	{$rule}.cmsmasters_twitter_wrap .twr_icon, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_icon, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_content:before,  
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_content:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_title, 
	{$rule}.search_bar_wrap button:hover, 
	{$rule}.cmsmasters_sitemap_wrap li a:hover, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_title a, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_date:before, 
	{$rule}#wp-calendar	#today, 
	{$rule}.widget_custom_contact_info_entries > span:before, 
	{$rule}.widget_custom_contact_info_entries .adress_wrap:before, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .published:before, 
	{$rule}.widget_nav_menu ul li.current-menu-item a, 
	{$rule}.widget_nav_menu ul li a:hover, 
	{$rule}.widget_tag_cloud a:hover, 
	{$rule}.widget_wysija .wysija-required {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date_link:not(:hover) .cmsmasters_post_date, 
	{$rule}.cmsmasters_prev_arrow:hover, 
	{$rule}.cmsmasters_next_arrow:hover, 
	{$rule}.post_nav > span:hover .cmsmasters_prev_arrow, 
	{$rule}.post_nav > span:hover .cmsmasters_next_arrow, 
	{$rule}.share_posts a:hover, 
	{$rule}#page .profile_social_icons_list .cmsmasters_social_icon:hover, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .puzzle_post_content_wrap, 
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_pricing_table .pricing_title, 
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner_top, 
	{$rule}.cmsmasters_table tr th, 
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon, 
	{$rule}#wp-calendar thead th, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs_list_item a:before, 
	{$rule}.sticky.has-post-thumbnail:before, 
	{$rule}.sticky:not(.has-post-thumbnail) .cmsmasters_post_cont:before, 
	{$rule}.cmsmasters_profile_vertical .cmsmasters_img_wrap a:after, 
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap a:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}textarea:focus, 
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date_link:not(:hover) .cmsmasters_post_date, 
	{$rule}.cmsmasters_prev_arrow:hover, 
	{$rule}.cmsmasters_next_arrow:hover, 
	{$rule}.post_nav > span:hover .cmsmasters_prev_arrow, 
	{$rule}.post_nav > span:hover .cmsmasters_next_arrow, 
	{$rule}.share_posts a:hover, 
	{$rule}#page .profile_social_icons_list .cmsmasters_social_icon:hover, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .puzzle_post_content_wrap, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper:before, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper:after, 
	{$rule}.cmsmasters_table thead tr {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_inner .cmsmasters_quote_icon, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item.current_tab, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle, 
	{$rule}body .cmsmasters_open_profile .profile_sidebar > div, 
	{$rule}body .cmsmasters_open_project .project_sidebar > div {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_left .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_right .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.post.cmsmasters_puzzle_type:nth-child(odd) .cmsmasters_post_cont .puzzle_post_img_wrap a:after {
		background: -moz-linear-gradient(top,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.3) 0%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 1) 100%);
		background: -webkit-linear-gradient(top,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.3) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 1) 100%);
		background: linear-gradient(to bottom,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.3) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 1) 100%);
	}
	
	{$rule}.post.cmsmasters_puzzle_type:nth-child(even) .cmsmasters_post_cont .puzzle_post_img_wrap a:after {
		background: -moz-linear-gradient(top,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 1) 0%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.3) 100%);
		background: -webkit-linear-gradient(top,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 1) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.3) 100%);
		background: linear-gradient(to bottom,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 1) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.3) 100%);
	}
	
	{$rule}.cmsmasters_header_search_form { 
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . ", 0.8);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}#page .cmsmasters_social_icon:hover, 
	{$rule}a:hover,
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_date_link:hover .published, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_footer > span a:hover, 	
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_date_link:hover .published, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_footer > span a:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_footer > span a:hover, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_read_more:hover, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags > a, 
	{$rule}.cmsmasters_single_slider .cmsmasters_post_date_link:hover .published, 	
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_header a:hover, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more:hover, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_header a:hover, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_post_read_more:hover, 
	{$rule}.cmsmasters_likes a:before, 
	{$rule}.cmsmasters_comments a:before, 
	{$rule}.owl-buttons > div, 
	{$rule}.cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_next_arrow, 
	{$rule}.cmsmasters_single_slider_item_title a:hover, 
	{$rule}.cmsmasters_project_grid .cmsmasters_project_title a:hover, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper .cmsmasters_post_date_link:hover .published, 
	{$rule}.cmsmasters_profile .cmsmasters_profile_title a:hover, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_site a:hover, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_title a:hover, 
	{$rule}.widget_custom_twitter_entries .tweet_text > a:hover	{
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . " {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	" . (($scheme == 'footer') ? ".cmsmasters_color_scheme_{$scheme} .bottom_inner input[type=submit]:hover," : '') . "
	" . (($scheme == 'footer') ? ".cmsmasters_color_scheme_{$scheme} .bottom_inner input[type=button]:hover," : '') . "	
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.img_placeholder_small, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_read_more, 
	{$rule}.cmsmasters_post_default .published, 		
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more, 
	{$rule}.cmsmasters_post_masonry .published, 	
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_read_more, 
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_read_more, 
	{$rule}.cmsmasters_single_slider .cmsmasters_post_read_more, 
	{$rule}.cmsmasters_single_slider .published, 
	{$rule}.cmsmasters_slider_post .published, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more, 
	{$rule}.cmsmasters_wrap_pagination .page-numbers, 
	{$rule}.cmsmasters_button, 
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_date .published, 
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_date, 
	{$rule}.cmsmasters_project_read_more, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	{$rule}.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	{$rule}.cmsmasters_notice .notice_close, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_quote .cmsmasters_quote_content, 
	{$rule}.cmsmasters_profile .profile_contact_info > span *, 
	{$rule}.cmsmasters_table tfoot td, 
	{$rule}.cmsmasters_table tfoot th, 
	{$rule}.error .error_subtitle, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type, 
	{$rule}#wp-calendar	thead th, 
	{$rule}#page .widget_custom_posts_tabs_entries .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.widget_nav_menu ul li a, 
	{$rule}.widget_custom_twitter_entries .tweet_time {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs a:before, 
	{$rule}form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_header_search_form button, 
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close, 
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a:hover, 
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	{$rule}.headline_outer .headline_inner .headline_text .entry-title, 
	{$rule}.headline_outer .headline_inner .headline_text .entry-subtitle, 
	{$rule}.headline_outer .headline_inner .headline_icon, 
	{$rule}#page .cmsmasters_social_icon, 
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.owl-buttons > div:hover, 
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date_link:not(:hover) .cmsmasters_post_date, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a, 
	{$rule}.cmsmasters_prev_arrow:hover, 
	{$rule}.cmsmasters_next_arrow:hover, 
	{$rule}.post_nav > span:hover .cmsmasters_prev_arrow, 
	{$rule}.post_nav > span:hover .cmsmasters_next_arrow, 
	{$rule}.share_posts a:hover, 
	{$rule}#page .profile_social_icons_list .cmsmasters_social_icon:hover, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover span[class^='cmsmasters-icon-'], 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover span[class*=' cmsmasters-icon-'], 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_title	a, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_footer a, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_likes a:before, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_comments a:before, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_date:before, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_date .published, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_title a, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_content, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_read_more, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_meta_info a:before, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_meta_info a > span, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_wrap_info > span, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .cmsmasters_post_wrap_info a, 
	{$rule}.cmsmasters_notice .notice_close:hover, 
	{$rule}.cmsmasters_pricing_table .pricing_title, 
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_title, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_site a, 
	{$rule}.cmsmasters_table tr th, 
	{$rule}#wp-calendar thead th, 
	{$rule}.sticky.has-post-thumbnail:before, 
	{$rule}.sticky:not(.has-post-thumbnail) .cmsmasters_post_cont:before, 
	{$rule}.widget_custom_colored_text_entries .widget_colored_cell_inner *, 
	{$rule}.widget_custom_colored_text_entries .widget_colored_cell_inner a, 
	{$rule}.cmsmasters_profile_vertical .cmsmasters_img_wrap a:before, 
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap a:before	{ 
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before, 
	{$rule}.owl-pagination .owl-page, 
	{$rule}.owl-buttons > div, 
	{$rule}.cmsmasters_button, 
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}.cmsmasters_profile_horizontal, 
	{$rule}.cmsmasters_profile_vertical, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont, 
	{$rule}.cmsmasters_open_profile .profile_sidebar > div,  
	{$rule}.cmsmasters_open_project .project_sidebar > div,  
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	{$rule}.cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_next_arrow, 
	{$rule}#page .profile_social_icons_list .cmsmasters_social_icon, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_content_wrap, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item, 
	{$rule}.cmsmasters_notice .notice_close, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_icon, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .owl-pagination .owl-page, 
	{$rule}#page .widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner_top:before, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_field input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) { 
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_field input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_field input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a, 
	{$rule}.cmsmasters_header_search_form button:hover, 
	{$rule}.widget_custom_colored_text_entries .widget_colored_cell_inner a:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . ", 0.5);
	}
	
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:hover {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . ", 0.3);
	}
	
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . ", 0.3);
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.img_placeholder_small, 
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_img.with_caption, 
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_header, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle, 
	{$rule}.cmsmasters_tabs .cmsmasters_tab_inner, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_content, 
	{$rule}.cmsmasters_table tfoot td, 
	{$rule}.cmsmasters_table tfoot th {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.share_posts	a, 
	{$rule}#page .profile_social_icons_list .cmsmasters_social_icon, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_title	a:hover, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a:hover, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_likes a:hover:before, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_likes a.active:before, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_comments a:hover:before, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_footer a:hover, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before, 
	{$rule}.blog.timeline:before, 
	{$rule}.blog.timeline .post:before, 
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page:hover, 
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page.active, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert:after, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert span, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:before, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote:before, 
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'footer') ? ".cmsmasters_footer_small," : '') . "
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select, 
	{$rule}option,
	{$rule}hr,
	{$rule}fieldset, 
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_footer, 
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_footer, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_footer, 
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_inner_meta, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_inner_header, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_footer, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_content, 
	{$rule}.cmsmasters_wrap_pagination .page-numbers, 
	{$rule}.cmsmasters_button, 
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}.cmsmasters_open_post, 
	{$rule}.cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_next_arrow, 
	{$rule}.post_nav, 
	{$rule}.share_posts	a, 
	{$rule}.cmsmasters_comment_item, 
	{$rule}.cmsmasters_open_project, 
	{$rule}.cmsmasters_open_project .project_sidebar > div, 
	{$rule}.cmsmasters_open_project .project_details_item, 
	{$rule}.cmsmasters_open_project .project_features_item, 
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_header, 
	{$rule}.cmsmasters_open_profile .profile_sidebar > div, 
	{$rule}.cmsmasters_open_profile .profile_details_item, 
	{$rule}.cmsmasters_open_profile .profile_features_item, 
	{$rule}.cmsmasters_open_profile .profile_contact_info_item, 
	{$rule}#page .profile_social_icons_list .cmsmasters_social_icon, 
	{$rule}.cmsmasters_project_grid	.cmsmasters_project_content, 
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_content_wrap,
	{$rule}.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper:before, 
	{$rule}.cmsmasters_profile .profile, 
	{$rule}.cmsmasters_profile_vertical .profile_inner_header_wrap, 
	{$rule}.cmsmasters_profile_horizontal .profile_inner > *, 
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_info, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap, 
	{$rule}.cmsmasters_tabs .cmsmasters_tab_inner, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item, 
	{$rule}.cmsmasters_notice .notice_close, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	{$rule}.cmsmasters_pricing_table .feature_list li, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_icon, 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_content, 
	{$rule}.cmsmasters_quotes_grid, 
	{$rule}.cmsmasters_table tr, 
	{$rule}.widget_pages ul li, 
	{$rule}.widget_categories ul li, 
	{$rule}.widget_archive ul li, 
	{$rule}.widget_meta ul li, 
	{$rule}.widget_recent_comments ul li, 
	{$rule}.widget_recent_entries ul li, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list, 
	{$rule}.widget_nav_menu ul li, 
	{$rule}.widget_tag_cloud a, 
	{$rule}.widget_custom_twitter_entries .tweet_text, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 768px) {
		#page .widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_border']) . "
		}
	}
	/* Finish Borders Color */
	
	
	/* Start Secondary Color */
	{$rule}.color_2,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}ul li:before, 
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title:before, 
	{$rule}.cmsmasters_likes a.active:before, 
	{$rule}.cmsmasters_likes a:hover:before, 
	{$rule}.widget_custom_twitter_entries .tweet_time:before, 
	{$rule}.widget_custom_twitter_entries .tweet_text > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . "
	}
	
	" . (($scheme == 'footer') ? ".bottom_inner .widget .widgettitle:before," : '') . "
	{$rule}.cmsmasters_dropcap.type2, 
	{$rule}#slide_top:hover, 
	{$rule}.owl-buttons > div:hover, 
	{$rule}.cmsmasters_project_puzzle .project_outer:not(.cmsmasters_puzzle_with_icon_and_content):hover .cmsmasters_img_rollover > a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current, 	
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover span[class^='cmsmasters-icon-'], 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover span[class*=' cmsmasters-icon-'], 
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_notice .notice_close:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current, 
	{$rule}.cmsmasters_notice .notice_close:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#bottom ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}#bottom ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['medical-clinic' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('medical_clinic_theme_colors_primary_filter', $custom_css);
}

