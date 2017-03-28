/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.3
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Heading Extend
 */

var cmsmasters_heading_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_heading.fields) {
	if (id === 'animation') {
		cmsmasters_heading_new_fields['custom_check'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_check, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			}
		};
		cmsmasters_heading_new_fields['width_monitor'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_width_monitor, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.heading_field_size_zero_note + "</span>", 
			def : 		'767', 
			required : 	false, 
			width : 	'number', 
			min : 		'320', 
			depend : 	'custom_check:true' 
		};
		cmsmasters_heading_new_fields['custom_font_size'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_font_size, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.heading_field_size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'custom_check:true' 
		};
		cmsmasters_heading_new_fields['custom_line_height'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_line_height, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.heading_field_size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'custom_check:true' 
		};
		
		cmsmasters_heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else {
		cmsmasters_heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_heading.fields = cmsmasters_heading_new_fields;



/**
 * Tab Extend
 */

var tab_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_tab.fields) {
	if (id === 'custom_colors') {
		tab_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_tab.fields[id];
		
		
		tab_new_fields['color'] = { 
			type : 		'rgba', 
			title : 	cmsmasters_shortcodes.tab_field_tab_color_title, 
			descr : 	cmsmasters_shortcodes.tab_field_tab_color_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			depend : 	'custom_colors:true' 
		};
		
		tab_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_tab.fields[id];
	} else if (id === 'bg_color') {
		cmsmastersMultipleShortcodes.cmsmasters_tab.fields[id]['title'] = cmsmasters_theme_shortcodes.tab_field_highlight_bg_color_title;
		
		
		tab_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_tab.fields[id];
	} else {
		tab_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_tab.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_tab.fields = tab_new_fields;



/**
 * Portfolio Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {

	if (id === 'metadata_grid') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises'] = {
			'title' : 			cmsmasters_shortcodes.choice_title, 
			'excerpt' : 		cmsmasters_shortcodes.choice_excerpt, 
			'categories' : 		cmsmasters_shortcodes.choice_categories, 
			'comments' : 		cmsmasters_shortcodes.choice_comments, 
			'likes' : 			cmsmasters_shortcodes.choice_likes, 
			'rollover' : 		cmsmasters_shortcodes.choice_rollover, 
			'icon' : 			cmsmasters_theme_shortcodes.portfolio_field_metadata_choises_icon, 
			'more' : 			cmsmasters_theme_shortcodes.portfolio_field_metadata_choises_more
		};
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 			cmsmasters_shortcodes.choice_likes, 
			'rollover' : 		cmsmasters_shortcodes.choice_rollover, 
			'icon' : 			cmsmasters_theme_shortcodes.portfolio_field_metadata_choises_icon
		};
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;



/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'layout_mode') {
		cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises']['puzzle'] = cmsmasters_theme_shortcodes.blog_field_layout_mode_puzzle;
		
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;



/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	cmsmasters_theme_shortcodes.quotes_field_slider_type_title, 
			descr : 	cmsmasters_theme_shortcodes.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	cmsmasters_theme_shortcodes.quotes_field_type_choice_box, 
						'center' : 	cmsmasters_theme_shortcodes.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		quotes_new_fields[id] = cmsmastersShortcodes.cmsmasters_quotes.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_quotes.fields = quotes_new_fields;



/**
 * Quote Item Extend
 */

var quote_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_quote.fields) {
	if (id === 'subtitle') {
		quote_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_quote.fields[id];
		
		
		quote_new_fields['color'] = { 
			type : 		'rgba', 
			title : 	cmsmasters_theme_shortcodes.quotes_field_item_color_title, 
			descr : 	cmsmasters_theme_shortcodes.quotes_field_item_color_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half'
		};
	} else {
		quote_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_quote.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_quote.fields = quote_new_fields;



/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = posts_slider_new_fields;



/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'excerpt' : 	cmsmasters_shortcodes.choice_excerpt, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes, 
			'rollover' :	cmsmasters_shortcodes.choice_rollover, 
			'icon' : 		cmsmasters_theme_shortcodes.posts_slider_field_metadata_choises_icon, 
			'more' : 		cmsmasters_theme_shortcodes.posts_slider_field_metadata_choises_more
		};
		
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = posts_slider_new_fields;


