
#
# Update from > 1.0.0
# WARNING! Perform backup of you database first !!!
#

# Change FlexForm parameter names from "column1" one up to "column0" and "hide" to "visibility".
UPDATE tt_content
SET 
	pi_flexform = REPLACE(pi_flexform, '_column1', '_column0'),
	pi_flexform = REPLACE(pi_flexform, '_column2', '_column1'),
	pi_flexform = REPLACE(pi_flexform, '_column3', '_column2'),
	pi_flexform = REPLACE(pi_flexform, '_column4', '_column3'),
	pi_flexform = REPLACE(pi_flexform, 'columns_hide_column', 'columns_visibility_column')
WHERE pi_flexform LIKE '%<field index="tx_adxtwitterbootstrap_%columns_span_column1">%' AND pi_flexform NOT LIKE '%<field index="tx_adxtwitterbootstrap_%columns_span_column0">%';

# Change span value from "0" or "" (< 1.1.0) and from "0,0,0,0" (> 1.1.1) to "-1,-1,-1,-1".
UPDATE tt_content
SET tx_adxtwitterbootstrap_span = '-1,-1,-1,-1'
WHERE tx_adxtwitterbootstrap_span = '0' OR tx_adxtwitterbootstrap_span = '' OR tx_adxtwitterbootstrap_span = '0,0,0,0';

UPDATE tt_content
SET tx_adxtwitterbootstrap_span = CONCAT_WS(
	',',
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 1 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 1 ), ',', -1 ) ),
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 2 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 2 ), ',', -1 ) ),
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 3 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 3 ), ',', -1 ) ),
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 4 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, ',', 4 ), ',', -1 ) )
)
WHERE FIND_IN_SET( '0', tx_adxtwitterbootstrap_span ) AND NOT FIND_IN_SET( '-1', tx_adxtwitterbootstrap_span );

# Change offset value from "0" or "" (< 1.1.0) and from "0,0,0,0" (> 1.1.1) to "-1,-1,-1,-1".
UPDATE tt_content
SET tx_adxtwitterbootstrap_offset = '-1,-1,-1,-1'
WHERE tx_adxtwitterbootstrap_offset = '0' OR tx_adxtwitterbootstrap_offset = '' OR tx_adxtwitterbootstrap_offset = '0,0,0,0';

UPDATE tt_content
SET tx_adxtwitterbootstrap_offset = CONCAT_WS(
	',',
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 1 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 1 ), ',', -1 ) ),
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 2 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 2 ), ',', -1 ) ),
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 3 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 3 ), ',', -1 ) ),
	IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 4 ), ',', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, ',', 4 ), ',', -1 ) )
)
WHERE FIND_IN_SET( '0', tx_adxtwitterbootstrap_offset ) AND NOT FIND_IN_SET( '-1', tx_adxtwitterbootstrap_offset );
