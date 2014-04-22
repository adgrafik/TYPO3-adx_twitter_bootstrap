
#
# WARNING! Perform backup of you database first !!!
# Run this update only once !!!
#

#
# Update from > 1.1.0
#

UPDATE tt_content
SET 
	pi_flexform = REPLACE(pi_flexform, '_column1', '_column0'),
	pi_flexform = REPLACE(pi_flexform, '_column2', '_column1'),
	pi_flexform = REPLACE(pi_flexform, '_column3', '_column2'),
	pi_flexform = REPLACE(pi_flexform, '_column4', '_column3'),
	pi_flexform = REPLACE(pi_flexform, 'columns_hide_column', 'columns_visibility_column')
WHERE pi_flexform LIKE '%<field index="tx_adxtwitterbootstrap_%columns_span_column1">%';

UPDATE tt_content
SET tx_adxtwitterbootstrap_span = '0,0,0,0'
WHERE tx_adxtwitterbootstrap_span = '0' OR tx_adxtwitterbootstrap_span = '';

UPDATE tt_content
SET tx_adxtwitterbootstrap_offset = '0,0,0,0'
WHERE tx_adxtwitterbootstrap_offset = '0' OR tx_adxtwitterbootstrap_offset = '';
