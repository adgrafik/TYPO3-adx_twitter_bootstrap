<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

// Add TypoScript gridelements patch.
$versionGridelements = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('gridelements');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/GridelementsPatch/2.0.x/', 'ad: Bootstrap patch for gridelements');

/**
 * Add-ons for tt_content
 */

// Add static TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/Common/', 'ad: Bootstrap common');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/DeviceVisibility/', 'ad: Bootstrap content device visibility');
if ($extensionConfiguration['components.']['activateResponsiveImage']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/ResponsiveImage/', 'ad: Bootstrap responsive image');
}
if ($extensionConfiguration['components.']['activateTwoColumns'] || $extensionConfiguration['components.']['activateThreeColumns'] || $extensionConfiguration['components.']['activateFourColumns']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/Columns/', 'ad: Bootstrap columns');
}
if ($extensionConfiguration['components.']['activateCarousel']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/Carousel/', 'ad: Bootstrap carousel');
}
if ($extensionConfiguration['components.']['activateTabs']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/Tabs/', 'ad: Bootstrap tabs');
}
if ($extensionConfiguration['components.']['activateAccordion']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/3.0.x/Accordion/', 'ad: Bootstrap accordion');
}
if ($extensionConfiguration['components.']['activateDatepicker']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/BootstrapDatepicker/1.2.x/', 'ad: Bootstrap datepicker');
}

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
			'cols' => 4,
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'frames', '--linebreak--,tx_adxtwitterbootstrap_span,--linebreak--,tx_adxtwitterbootstrap_offset,--linebreak--,tx_adxtwitterbootstrap_link_content_element', 'after:section_frame');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'image_settings', 'tx_adxtwitterbootstrap_image_style', 'after:image_effects');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'visibility', '--linebreak--,tx_adxtwitterbootstrap_device_visibility');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'visibility', 'tx_adxtwitterbootstrap_inherit', 'after:linkToTop');

if ($extensionConfiguration['components.']['activateResponsiveImage']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'image_settings', 'tx_adxtwitterbootstrap_image_responsive', 'before:imageborder');
}

// Get rid of width and height limitation of images.
unset($TCA['tt_content']['columns']['imagewidth']['config']['range'], $TCA['tt_content']['columns']['imageheight']['config']['range']);


/**
 * Add-ons for powermail
 */
if ($extensionConfiguration['extensions.']['activatePowermail'] && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('powermail')) {

	// Add static TypoScript
	$versionPowermail = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('powermail');
	if (version_compare($versionPowermail, '2.0.10', '>=')) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/2.0.10/', 'ad: Bootstrap for powermail');
	}

	$tempColumns = array(
		'tx_adxtwitterbootstrap_span' => array(
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span',
			'exclude' => 1,
			'config' => array(
				'type' => 'user',
				'default' => '-1,-1,-1,-1',
				'userFunc' => 'AdGrafik\AdxTwitterBootstrap\UserFunc\Backend->getSpanColumnFieldsExpert',
			),
		),
		'tx_adxtwitterbootstrap_offset' => array(
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_offset',
			'exclude' => 1,
			'config' => array(
				'type' => 'user',
				'default' => '-1,-1,-1,-1',
				'startAt' => 1,
				'userFunc' => 'AdGrafik\AdxTwitterBootstrap\UserFunc\Backend->getSpanColumnFieldsExpert',
			),
		),
	);

	$TCA['tx_powermail_domain_model_forms']['palettes']['layout'] = array(
		'showitem' => 'css,--linebreak--,tx_adxtwitterbootstrap_span,--linebreak--,tx_adxtwitterbootstrap_offset',
		'canNotCollapse' => TRUE,
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_forms', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_forms', '--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_forms.palette.apperance;layout', '', 'replace:css');

	$tempColumns = array(
		'tx_adxtwitterbootstrap_layout' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_layout',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_layout.default', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_layout.horizontal', 'form-horizontal'),
				),
			),
		),
		'tx_adxtwitterbootstrap_hide_legend' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.screenReadersOnly', 'screenReader'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.invisible', 'invisible'),
				),
			),
		),
		'tx_adxtwitterbootstrap_span' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.16', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.14', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.13', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.23', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.34', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.56', '10'),
				),
			),
		),
		'tx_adxtwitterbootstrap_span_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_offset',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.16', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.14', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.13', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.23', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.34', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.56', '10'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
		'tx_adxtwitterbootstrap_clear' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_clear',
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
		'tx_adxtwitterbootstrap_label_to_field_ratio' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_label_to_field_ratio',
			'displayCond' => 'FIELD:tx_adxtwitterbootstrap_layout:=:form-horizontal',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '4:8',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_ratio.1212', '6:6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_ratio.1323', '4:8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_ratio.2313', '8:4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_ratio.1434', '3:9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_ratio.3414', '9:3'),
				),
			),
		),
		'tx_adxtwitterbootstrap_label_to_field_ratio_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'displayCond' => 'FIELD:tx_adxtwitterbootstrap_layout:=:form-horizontal',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
	);

	$TCA['tx_powermail_domain_model_pages']['palettes']['layout'] = array(
		'showitem' => 'css,tx_adxtwitterbootstrap_layout,tx_adxtwitterbootstrap_hide_legend,--linebreak--,tx_adxtwitterbootstrap_span,tx_adxtwitterbootstrap_span_breakpoint,tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_offset_breakpoint,--linebreak--,tx_adxtwitterbootstrap_clear,--linebreak--,tx_adxtwitterbootstrap_label_to_field_ratio,tx_adxtwitterbootstrap_label_to_field_ratio_breakpoint',
		'canNotCollapse' => TRUE,
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_pages', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_pages', '--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_forms.palette.apperance;layout', '', 'replace:css');

	$tempColumns = array(
		'tx_adxtwitterbootstrap_hide_label' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_label',
			'displayCond' => 'FIELD:type:!IN:reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.screenReadersOnly', 'screenReader'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.invisible', 'invisible'),
				),
			),
		),
		'tx_adxtwitterbootstrap_element_size' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size',
			'displayCond' => 'FIELD:type:IN:input,textarea,select,password,date,file,reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.lg', 'lg'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.default', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.sm', 'sm'),
				),
			),
		),
		'tx_adxtwitterbootstrap_button_class' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class',
			'displayCond' => 'FIELD:type:IN:reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.default', 'btn btn-default'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.primary', 'btn btn-primary'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.success', 'btn btn-success'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.info', 'btn btn-info'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.warning', 'btn btn-warning'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.danger', 'btn btn-danger'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.link', 'btn btn-link'),
				),
			),
		),
		'tx_adxtwitterbootstrap_button_block' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_block',
			'displayCond' => 'FIELD:type:IN:reset,submit',
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
		'tx_adxtwitterbootstrap_placeholder' => array(
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_placeholder',
			'displayCond' => 'FIELD:type:IN:input,textarea,password',
			'exclude' => 1,
			'config' => array(
				'type' => 'input',
				'eval' => 'null',
				'placeholder' => '__row|title',
			),
		),
		'tx_adxtwitterbootstrap_span' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.16', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.14', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.13', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.23', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.34', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.56', '10'),
				),
			),
		),
		'tx_adxtwitterbootstrap_span_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_offset',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.16', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.14', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.13', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.23', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.34', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.56', '10'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
		'tx_adxtwitterbootstrap_clear' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_clear',
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
		'tx_adxtwitterbootstrap_checkbox_inline' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_checkbox_inline',
			'displayCond' => 'FIELD:type:IN:check,radio',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', '0'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.runIn', '-1'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.16', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.14', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.13', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '6'),
				),
			),
		),
		'tx_adxtwitterbootstrap_checkbox_inline_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'displayCond' => 'FIELD:type:IN:check,radio',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
	);

	$TCA['tx_powermail_domain_model_fields']['palettes']['apperance'] = array(
		'showitem' => 'css,tx_adxtwitterbootstrap_hide_label,tx_adxtwitterbootstrap_element_size,tx_adxtwitterbootstrap_button_class,tx_adxtwitterbootstrap_button_block,--linebreak--,tx_adxtwitterbootstrap_span,tx_adxtwitterbootstrap_span_breakpoint,--linebreak--,tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_offset_breakpoint,tx_adxtwitterbootstrap_clear,--linebreak--,tx_adxtwitterbootstrap_checkbox_inline,tx_adxtwitterbootstrap_checkbox_inline_breakpoint',
		'canNotCollapse' => TRUE,
	);

	if ($extensionConfiguration['components.']['activateDatepicker']) {

		$tempColumnsDatepicker = array(
			'tx_adxtwitterbootstrap_datepicker_type' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'default' => '',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.none', ''),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.default', 'default'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.before', 'before'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.after', 'after'),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_format' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_format',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,	
				'config' => array(
					'type' => 'input',
					'size' => 8,
					'max' => 12,
					'placeholder' => 'mm/dd/yyyy',
				),
			),
			'tx_adxtwitterbootstrap_datepicker_week_start' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_week_start',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.su', 0),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.mo', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.tu', 2),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.we', 3),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.th', 4),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.fr', 5),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.sa', 6),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_start_date' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_date',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'default' => 0,
					'size' => 9,
					'max' => 20,
					'eval' => 'date',
				),
			),
			'tx_adxtwitterbootstrap_datepicker_end_date' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_end_date',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'default' => 0,
					'size' => 9,
					'max' => 20,
					'eval' => 'date',
				),
			),
			'tx_adxtwitterbootstrap_datepicker_start_view' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view.0', 0),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view.1', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view.2', 2),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_min_view_mode' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode.0', 0),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode.1', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode.2', 2),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_today_button' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button.disabled', 'disabled'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button.enabled', 'enabled'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button.linked', 'linked'),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_orientation' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.auto', 'auto'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.topAuto', 'topAuto'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.bottomAuto', 'bottomAuto'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.autoLeft', 'autoLeft'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.topLeft', 'topLeft'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.bottomLeft', 'bottomLeft'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.autoRight', 'autoRight'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.topRight', 'topRight'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.bottomRight', 'bottomRight'),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_days_of_week_disabled' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_days_of_week_disabled',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'cols' => 7,
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.su', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.mo', 2),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.tu', 4),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.we', 8),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.th', 16),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.fr', 32),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.sa', 64),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_calendar_weeks' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_calendar_weeks',
				'displayCond' => 'FIELD:type:IN:date',
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
			'tx_adxtwitterbootstrap_datepicker_autoclose' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_autoclose',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_today_highlight' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_highlight',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_keyboard_navigation' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_keyboard_navigation',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_force_parse' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_force_parse',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
		);

		$tempColumns = array_merge($tempColumns, $tempColumnsDatepicker);

		$TCA['tx_powermail_domain_model_fields']['palettes']['datepicker'] = array(
			'showitem' => 'tx_adxtwitterbootstrap_datepicker_type,--linebreak--,tx_adxtwitterbootstrap_datepicker_format,tx_adxtwitterbootstrap_datepicker_week_start,tx_adxtwitterbootstrap_datepicker_start_date,tx_adxtwitterbootstrap_datepicker_end_date,--linebreak--,tx_adxtwitterbootstrap_datepicker_orientation,tx_adxtwitterbootstrap_datepicker_start_view,tx_adxtwitterbootstrap_datepicker_min_view_mode,tx_adxtwitterbootstrap_datepicker_today_button,--linebreak--,tx_adxtwitterbootstrap_datepicker_days_of_week_disabled,--linebreak--,tx_adxtwitterbootstrap_datepicker_calendar_weeks,tx_adxtwitterbootstrap_datepicker_autoclose,tx_adxtwitterbootstrap_datepicker_today_highlight,tx_adxtwitterbootstrap_datepicker_keyboard_navigation,tx_adxtwitterbootstrap_datepicker_force_parse',
			'canNotCollapse' => TRUE,
		);
	}

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_fields', $tempColumns, 1);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tx_powermail_domain_model_fields', '3', '--linebreak--,tx_adxtwitterbootstrap_placeholder', 'after:feuser_value');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_fields', '--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_forms.palette.apperance;apperance', '', 'replace:css');
	if ($extensionConfiguration['components.']['activateDatepicker']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_fields', '--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.palette.datepicker;datepicker', '', 'after:tx_adxtwitterbootstrap_checkbox_inline_breakpoint');
	}

	// Using mixed-ins hack from Franz Koch to make map table extendable.
	// @see http://lists.typo3.org/pipermail/typo3-project-typo3v4mvc/2010-September/006497.html
	$TCA['tx_powermail_domain_model_forms']['ctrl']['type'] = 'deleted';
	$TCA['tx_powermail_domain_model_pages']['ctrl']['type'] = 'deleted';
	$TCA['tx_powermail_domain_model_fields']['ctrl']['type'] = 'deleted';
}

?>