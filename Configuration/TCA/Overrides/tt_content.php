<?php
defined('TYPO3_MODE') or die();

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['adx_twitter_bootstrap']);

$tempColumns = array(
	'tx_adxtwitterbootstrap_span' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_span',
		'exclude' => 1,
		'config' => array(
			'type' => 'user',
			'default' => '-1,-1,-1,-1',
			'userFunc' => 'AdGrafik\AdxTwitterBootstrap\UserFunc\Backend->getSpanColumnFieldsExpert',
		),
	),
	'tx_adxtwitterbootstrap_offset' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_offset',
		'exclude' => 1,
		'config' => array(
			'type' => 'user',
			'default' => '-1,-1,-1,-1',
			'startAt' => 0,
			'userFunc' => 'AdGrafik\AdxTwitterBootstrap\UserFunc\Backend->getSpanColumnFieldsExpert',
		),
	),
	'tx_adxtwitterbootstrap_device_visibility' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility',
		'exclude' => 1,
		'config' => array(
			'type' => 'check',
			'cols' => 1,
			'items' => array(
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.xs'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.sm'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.md'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_device_visibility.lg'),
			),
		),
	),
	'tx_adxtwitterbootstrap_inherit' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_inherit',
		'exclude' => 1,		
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', 0),
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
	'tx_adxtwitterbootstrap_image_style' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_image_style',
		'exclude' => 1,		
		'config' => array(
			'type' => 'select',
			'default' => '',
			'items' => array(
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_image_style.none', ''),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_image_style.rounded', 'img-rounded'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_image_style.circle', 'img-circle'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_image_style.thumbnail', 'img-thumbnail'),
			),
		),
	),
	'tx_adxtwitterbootstrap_image_responsive' => array(		
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:tx_adxtwitterbootstrap_image_responsive',
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '--linebreak--,tx_adxtwitterbootstrap_span,--linebreak--,tx_adxtwitterbootstrap_offset,--linebreak--,tx_adxtwitterbootstrap_link_content_element', 'after:section_frame');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'image_settings', 'tx_adxtwitterbootstrap_image_style', 'after:image_effects');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'visibility', '--linebreak--,tx_adxtwitterbootstrap_device_visibility');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'visibility', 'tx_adxtwitterbootstrap_inherit', 'after:linkToTop');

if ($extensionConfiguration['components.']['activateResponsiveImage']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'image_settings', 'tx_adxtwitterbootstrap_image_responsive', 'before:imageborder');
}

// Get rid of width and height limitation of images.
unset($GLOBALS['TCA']['tt_content']['columns']['imagewidth']['config']['range'], $GLOBALS['TCA']['tt_content']['columns']['imageheight']['config']['range']);

// Add bootstrap layouts.
$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['items'] = array(
	array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', ''),
);

// Add bootstrap frames.
$GLOBALS['TCA']['tt_content']['columns']['section_frame']['config']['items'] = array(
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.none', ''),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.well', 'well'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.well.sm', 'well well-sm'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.well.lg', 'well well-lg'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.jumbotron', 'jumbotron'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.background.primary', 'bg-primary'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.background.success', 'bg-success'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.background.info', 'bg-info'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.background.warning', 'bg-warning'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.background.danger', 'bg-danger'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.alert.success', 'alert alert-success'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.alert.info', 'alert alert-info'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.alert.warning', 'alert alert-warning'),
	array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:sectionFrame.alert.danger', 'alert alert-danger'),
);

// Allow negativ values of content space.
unset($GLOBALS['TCA']['tt_content']['columns']['spaceBefore']['config']['range'], $GLOBALS['TCA']['tt_content']['columns']['spaceAfter']['config']['range']);

// Add responsive margin.
$GLOBALS['TCA']['tt_content']['columns']['spaceBefore']['config']['eval'] = 'null';
$GLOBALS['TCA']['tt_content']['columns']['spaceAfter']['config']['eval'] = 'null';

$tempColumns = array(
	'tx_adxtwitterbootstrap_space_before' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceBefore',
		'displayCond' => 'FIELD:spaceBefore:=:',
		'exclude' => TRUE,
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.default', ''),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.lg', 'margin-lg'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.md', 'margin-md'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.sm', 'margin-sm'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.xs', 'margin-xs'),
			),
		),
	),
	'tx_adxtwitterbootstrap_space_after' => array(
		'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter',
		'displayCond' => 'FIELD:spaceAfter:=:',
		'exclude' => TRUE,
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.default', ''),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.lg', 'margin-lg'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.md', 'margin-md'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.sm', 'margin-sm'),
				array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:spaceAfter.xs', 'margin-xs'),
			),
		),
	),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '--linebreak--', 'before:spaceBefore');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', 'tx_adxtwitterbootstrap_space_before', 'after:spaceBefore');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '--linebreak--', 'before:spaceAfter');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', 'tx_adxtwitterbootstrap_space_after', 'replace:section_frame');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', 'section_frame, --linebreak--', 'after:layout');
