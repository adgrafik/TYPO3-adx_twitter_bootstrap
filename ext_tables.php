<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// Add static TypoScript
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/2.2.x', 'ad: Twitter Bootstrap 2.2.x common');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/2.3.x', 'ad: Twitter Bootstrap 2.3.x common');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/DeviceVisibility/4.6/', 'ad: Twitter Bootstrap device visibility 4.6.x');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/DeviceVisibility/4.7/', 'ad: Twitter Bootstrap device visibility 4.7.x');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/GridelementsPatch/1.4.1/', 'ad: Twitter Bootstrap patch for gridelements >= v1.4.1');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/GridelementsPatch/2.0.0/', 'ad: Twitter Bootstrap patch for gridelements >= v2.0.0');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Components/Columns/', 'ad: Twitter Bootstrap columns');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Components/Carousel/', 'ad: Twitter Bootstrap carousel');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Components/Tabs/', 'ad: Twitter Bootstrap tabs');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Components/Accordion/', 'ad: Twitter Bootstrap accordion');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/2.0.0/', 'ad: Twitter Bootstrap for powermail 2.0.0 >');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/2.0.5/', 'ad: Twitter Bootstrap for powermail 2.0.5 >');


/**
 * Add-ons for tt_content
 */
$tempColumns = array(
	'tx_adxtwitterbootstrap_offset' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_offset',
		'exclude' => 1,
		'config' => array(
			'type' => 'input',
			'size' => '5',
			'max' => '5',
			'eval' => 'int',
			'range' => array(
				'lower' => '0'
			),
			'default' => 0
		),
	),
	'tx_adxtwitterbootstrap_span' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_span',
		'exclude' => 1,
		'config' => array(
			'type' => 'input',
			'size' => '5',
			'max' => '5',
			'eval' => 'int',
			'range' => array(
				'lower' => '0'
			),
			'default' => 0
		),
	),
	'tx_adxtwitterbootstrap_device_visibility' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility',
		'exclude' => 1,
		'config' => array(
			'type' => 'check',
			'cols' => 3,
			'items' => array(
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.hideOnDesktop'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.hideOnTablet'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.hideOnPhone'),
			),
		),
	),
	'tx_adxtwitterbootstrap_inherit' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_inherit',
		'exclude' => 1,		
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', ''),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_inherit.1', 1),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_inherit.2', 2),
			),
		),
	),
	'tx_adxtwitterbootstrap_link_content_element' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_link_content_element',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
);

if (version_compare(TYPO3_branch, '6.1', '<')) {
	t3lib_div::loadTCA('tt_content');
}
t3lib_extMgm::addTCAcolumns('tt_content', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette('tt_content', 'frames', 'tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_span', 'after:spaceAfter');
t3lib_extMgm::addFieldsToPalette('tt_content', 'visibility', '--linebreak--,tx_adxtwitterbootstrap_device_visibility');
t3lib_extMgm::addFieldsToPalette('tt_content', 'visibility', 'tx_adxtwitterbootstrap_inherit', 'after:linkToTop');
t3lib_extMgm::addFieldsToPalette('tt_content', 'frames', '--linebreak--,tx_adxtwitterbootstrap_link_content_element', 'after:section_frame');
t3lib_extMgm::addLLrefForTCAdescr('tt_content', 'EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf');


/**
 * Add-ons for tt_content
 */
$tempColumns = array(
	'tx_adxtwitterbootstrap_hide_legend' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.tx_adxtwitterbootstrap_hide_legend',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_adxtwitterbootstrap_offset' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.tx_adxtwitterbootstrap_offset',
		'exclude' => 1,
		'config' => array(
			'type' => 'input',
			'size' => '5',
			'max' => '5',
			'eval' => 'int',
			'range' => array(
				'lower' => '0'
			),
			'default' => 0
		),
	),
	'tx_adxtwitterbootstrap_span' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.tx_adxtwitterbootstrap_span',
		'exclude' => 1,
		'config' => array(
			'type' => 'input',
			'size' => '5',
			'max' => '5',
			'eval' => 'int',
			'range' => array(
				'lower' => '0'
			),
			'default' => 0
		),
	),
	'tx_adxtwitterbootstrap_end_of_row' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.tx_adxtwitterbootstrap_end_of_row',
		'exclude' => 1,		
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
);


if (version_compare(TYPO3_branch, '6.1', '<')) {
	t3lib_div::loadTCA('tx_powermail_domain_model_pages');
	t3lib_div::loadTCA('tx_powermail_domain_model_fields');
}

$TCA['tx_powermail_domain_model_pages']['palettes']['bootstrapAddition'] = array(
	'showitem' => 'tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_span,tx_adxtwitterbootstrap_end_of_row,tx_adxtwitterbootstrap_hide_legend',
	'canNotCollapse' => TRUE,
);

t3lib_extMgm::addTCAcolumns('tx_powermail_domain_model_pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('tx_powermail_domain_model_pages', '--palette--;;bootstrapAddition', '', 'after:css');

// Remove unused fields for fields.
unset($tempColumns['tx_adxtwitterbootstrap_hide_legend']);

$TCA['tx_powermail_domain_model_fields']['palettes']['bootstrapAddition'] = array(
	'showitem' => 'tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_span,tx_adxtwitterbootstrap_end_of_row',
	'canNotCollapse' => TRUE,
);

t3lib_extMgm::addTCAcolumns('tx_powermail_domain_model_fields', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('tx_powermail_domain_model_fields', '--palette--;;bootstrapAddition', '', 'after:css');

// Using mixed-ins hack from Franz Koch to make map table extendable.
// @see http://lists.typo3.org/pipermail/typo3-project-typo3v4mvc/2010-September/006497.html
$TCA['tx_powermail_domain_model_pages']['ctrl']['type'] = 'deleted';

$TCA['tx_powermail_domain_model_fields']['ctrl']['type'] = 'deleted';

?>