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
	'tx_adxtwitterbootstrap_inherit' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_inherit',
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
);

if (version_compare(TYPO3_branch, '6.1', '<')) {
	t3lib_div::loadTCA('tt_content');
}
t3lib_extMgm::addTCAcolumns('tt_content', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette('tt_content', 'visibility', '--linebreak--,tx_adxtwitterbootstrap_device_visibility');
t3lib_extMgm::addFieldsToPalette('tt_content', 'visibility', 'tx_adxtwitterbootstrap_inherit', 'after:linkToTop');
t3lib_extMgm::addLLrefForTCAdescr('tt_content', 'EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf');

?>