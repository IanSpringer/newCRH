/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.0.5
 * 
 * Timetable Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */


/**
 * Timetable
 */
cmsmastersShortcodes.cmsmasters_timetable = { 
	title : 	cmsmasters_timetable_shortcodes.timetable_title, 
	icon : 		'admin-icon-table', 
	pair : 		false, 
	content : 	false, 
	visual : 	false, 
	multiple : 	false, 
	def : 		"", 
	fields : { 
		// Shortcode ID
		shortcode_id : { 
			type : 		'hidden', 
			title : 	'', 
			descr : 	'', 
			def : 		'', 
			required : 	true, 
			width : 	'full' 
		}, 
		// Events
		event : { 
			type : 		'select_multiple', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_event_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_event_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_timetable_shortcodes.timetable_field_event_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsmasters_timetable_shortcodes.timetable_events 
		}, 
		// Event categories
		event_category : { 
			type : 		'select_multiple', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_event_category_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_event_category_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_timetable_shortcodes.timetable_field_event_category_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsmasters_timetable_shortcodes.timetable_event_categories 
		}, 
		// Hour categories
		hour_category : { 
			type : 		'select_multiple', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_hour_category_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_hour_category_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_timetable_shortcodes.timetable_field_hour_category_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsmasters_timetable_shortcodes.timetable_hour_categories 
		}, 
		// Columns
		columns : { 
			type : 		'select_multiple', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_columns_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_columns_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_timetable_shortcodes.timetable_field_columns_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsmasters_timetable_shortcodes.timetable_columns 
		}, 
		// Hour measure
		measure : { 
			type : 		'select', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_measure_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_measure_descr, 
			def : 		'1', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 		cmsmasters_timetable_shortcodes.timetable_field_measure_choice_hour, 
						'0.5' : 	cmsmasters_timetable_shortcodes.timetable_field_measure_choice_half_hour, 
						'0.25' : 	cmsmasters_timetable_shortcodes.timetable_field_measure_choice_quarter_hour 
			} 
		}, 
		// Filter style
		filter_style : { 
			type : 		'select', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_filter_style_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_filter_style_descr, 
			def : 		'dropdown_list', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'dropdown_list' : 	cmsmasters_timetable_shortcodes.timetable_field_filter_style_choice_dropdown_list, 
						'tabs' : 			cmsmasters_timetable_shortcodes.timetable_field_filter_style_choice_tabs 
			} 
		}, 
		// Filter kind
		filter_kind : { 
			type : 		'select', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_filter_kind_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_filter_kind_descr, 
			def : 		'event', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'event' : 			cmsmasters_timetable_shortcodes.timetable_field_filter_kind_choice_event, 
						'event_category' : 	cmsmasters_timetable_shortcodes.timetable_field_filter_kind_choice_event_category 
			} 
		}, 
		// Filter label
		filter_label : { 
			type : 		'input', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_filter_label_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_filter_label_descr, 
			def : 		cmsmasters_timetable_shortcodes.timetable_field_filter_label_def, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Time format
		time_format : { 
			type : 		'select', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_time_format_title, 
			descr : 	'', 
			def : 		'H.i', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'H.i' : 	'09.03', 
						'H:i' : 	'09:03', 
						'g:i a' : 	'9:03 am', 
						'g:i A' : 	'9:03 AM', 
						'custom' : 	cmsmasters_timetable_shortcodes.timetable_field_time_format_choice_custom 
			} 
		}, 
		// Time format custom
		time_format_custom : { 
			type : 		'input', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_time_format_custom_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			depend : 	'time_format:custom' 
		}, 
		// Hide 'All Events' view
		hide_all_events_view : { 
			type : 		'checkbox', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_hide_all_events_view_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 	cmsmasters_shortcodes.choice_enable 
			} 
		}, 
		// Hide first (hours) column
		hide_hours_column : { 
			type : 		'checkbox', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_hide_hours_column_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 	cmsmasters_shortcodes.choice_enable 
			} 
		}, 
		// Show end hour in first (hours) column
		show_end_hour : { 
			type : 		'checkbox', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_show_end_hour_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 	cmsmasters_shortcodes.choice_enable 
			} 
		}, 
		// Event block layout
		event_layout : { 
			type : 		'select', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_descr, 
			def : 		'1', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_choice_type + ' 1', 
						'2' : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_choice_type + ' 2', 
						'3' : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_choice_type + ' 3', 
						'4' : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_choice_type + ' 4', 
						'5' : 	cmsmasters_timetable_shortcodes.timetable_field_event_layout_choice_type + ' 5' 
			} 
		}, 
		// Hide empty rows
		hide_empty : { 
			type : 		'checkbox', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_hide_empty_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 	cmsmasters_shortcodes.choice_enable 
			} 
		}, 
		// Disable event url
		disable_event_url : { 
			type : 		'checkbox', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_disable_event_url_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1' : 	cmsmasters_shortcodes.choice_enable 
			} 
		}, 
		// Text align
		text_align : { 
			type : 		'select', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_text_align_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_text_align_descr, 
			def : 		'center', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'center' : 		cmsmasters_shortcodes.choice_center, 
						'left' : 		cmsmasters_shortcodes.choice_left, 
						'right' : 		cmsmasters_shortcodes.choice_right, 
			} 
		}, 
		// Id
		id : { 
			type : 		'input', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_id_title, 
			descr : 	cmsmasters_timetable_shortcodes.timetable_field_id_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_timetable_shortcodes.timetable_field_id_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		}, 
		// Row height (in px)
		row_height : { 
			type : 		'input', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_row_height_title, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_zero_note + "</span>", 
			def : 		'31', 
			required : 	false, 
			width : 	'number', 
			min : 		'0' 
		}, 
		// Timetable box background color
		box_bg_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_bg_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_bg_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Timetable box hover background color
		box_hover_bg_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_hover_bg_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_hover_bg_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Timetable box border color
		box_bd_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_bd_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_bd_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Timetable box text color
		box_txt_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_txt_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_txt_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Timetable box hover text color
		box_hover_txt_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_hover_txt_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_hover_txt_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Timetable box hours text color
		box_hours_txt_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_hours_txt_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_hours_txt_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Timetable box hours hover text color
		box_hours_hover_txt_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_box_hours_hover_txt_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.box_hours_hover_txt_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Row 1 style background color
		row1_bg_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_row1_bg_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.row1_bg_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Row 1 style text color
		row1_txt_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_row1_txt_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.row1_txt_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Row 2 style background color
		row2_bg_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_row2_bg_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.row2_bg_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Row 2 style text color
		row2_txt_color : { 
			type : 		'rgba', 
			title : 	cmsmasters_timetable_shortcodes.timetable_field_row2_txt_color_title, 
			descr : 	'', 
			def : 		cmsmasters_timetable_shortcodes.row2_txt_color, 
			required : 	false, 
			width : 	'half' 
		}, 
		// Additional Classes
		classes : { 
			type : 		'input', 
			title : 	cmsmasters_shortcodes.classes_title, 
			descr : 	cmsmasters_shortcodes.classes_descr, 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		} 
	} 
};

