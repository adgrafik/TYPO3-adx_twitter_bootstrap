
#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_adxtwitterbootstrap_offset varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_inherit tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxtwitterbootstrap_device_visibility varchar(32) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_link_content_element tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_powermail_domain_model_pages'
#
CREATE TABLE tx_powermail_domain_model_pages (
	tx_adxtwitterbootstrap_hide_legend tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxtwitterbootstrap_offset varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_end_of_row tinyint(4) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_powermail_domain_model_fields'
#
CREATE TABLE tx_powermail_domain_model_fields (
	tx_adxtwitterbootstrap_offset varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_end_of_row tinyint(4) DEFAULT '0' NOT NULL,
);