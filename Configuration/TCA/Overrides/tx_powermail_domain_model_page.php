<?php
defined('TYPO3_MODE') or die();

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['adx_twitter_bootstrap']);

if ($extensionConfiguration['extensions.']['activatePowermail'] && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('powermail')) {

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
		'tx_adxtwitterbootstrap_element_size' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size',
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
		'tx_adxtwitterbootstrap_span' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.1', '1'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.2', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.3', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.4', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.5', '5'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.6', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.7', '7'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.8', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.9', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.10', '10'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.11', '11'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '12'),
				),
			),
		),
		'tx_adxtwitterbootstrap_span_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span_breakpoint',
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
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.1', '1'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.2', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.3', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.4', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.5', '5'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.6', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.7', '7'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.8', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.9', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.10', '10'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.11', '11'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '12'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_offset_breakpoint',
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
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span_breakpoint',
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

	$GLOBALS['TCA']['tx_powermail_domain_model_page']['palettes']['apperance'] = array(
		'showitem' => 'tx_adxtwitterbootstrap_layout,tx_adxtwitterbootstrap_hide_legend,tx_adxtwitterbootstrap_element_size,--linebreak--,tx_adxtwitterbootstrap_span,tx_adxtwitterbootstrap_span_breakpoint,--linebreak--,tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_offset_breakpoint,--linebreak--,tx_adxtwitterbootstrap_clear,--linebreak--,tx_adxtwitterbootstrap_label_to_field_ratio,tx_adxtwitterbootstrap_label_to_field_ratio_breakpoint',
		'canNotCollapse' => TRUE,
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_page', $tempColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_page', '--div--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_form.palette.apperance,--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_form.palette.apperance;apperance', '', 'after:css');
}
