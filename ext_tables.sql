
#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_adxtwitterbootstrap_span varchar(16) NOT NULL DEFAULT '-1,-1,-1,-1',
	tx_adxtwitterbootstrap_offset varchar(16) NOT NULL DEFAULT '-1,-1,-1,-1',
	tx_adxtwitterbootstrap_link_content_element tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxtwitterbootstrap_image_style varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_image_responsive tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxtwitterbootstrap_inherit tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxtwitterbootstrap_device_visibility tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_powermail_domain_model_forms'
#
CREATE TABLE tx_powermail_domain_model_forms (
	tx_adxtwitterbootstrap_span varchar(16) NOT NULL DEFAULT '-1,-1,-1,-1',
	tx_adxtwitterbootstrap_offset varchar(16) NOT NULL DEFAULT '-1,-1,-1,-1',
	tx_adxtwitterbootstrap_header_layout tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_powermail_domain_model_pages'
#
CREATE TABLE tx_powermail_domain_model_pages (
	tx_adxtwitterbootstrap_layout varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_hide_legend varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_element_size varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span_breakpoint varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_offset varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_offset_breakpoint varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_clear tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_label_to_field_ratio varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_label_to_field_ratio_breakpoint varchar(2) NOT NULL DEFAULT '',
);

#
# Table structure for table 'tx_powermail_domain_model_fields'
#
CREATE TABLE tx_powermail_domain_model_fields (
	tx_adxtwitterbootstrap_placeholder varchar(255) DEFAULT NULL,
	tx_adxtwitterbootstrap_hide_label varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_element_size varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_button_class varchar(255) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_button_block tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_span varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span_breakpoint varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_offset varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_offset_breakpoint varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_clear tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_checkbox_inline smallint(6) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_checkbox_inline_breakpoint varchar(2) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_datepicker_type varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_datepicker_format varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_datepicker_week_start tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_start_date int(8) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_end_date int(8) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_start_view tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_min_view_mode tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_today_button varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_datepicker_orientation varchar(16) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_datepicker_days_of_week_disabled smallint(6) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_calendar_weeks tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_autoclose tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_today_highlight tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_keyboard_navigation tinyint(4) NOT NULL DEFAULT '0',
	tx_adxtwitterbootstrap_datepicker_force_parse tinyint(4) NOT NULL DEFAULT '0',
);