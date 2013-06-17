
#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_adxtwitterbootstrap_offset varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_span varchar(8) NOT NULL DEFAULT '',
	tx_adxtwitterbootstrap_inherit tinyint(4) DEFAULT '0' NOT NULL,
	tx_adxtwitterbootstrap_device_visibility varchar(32) NOT NULL DEFAULT '',
);