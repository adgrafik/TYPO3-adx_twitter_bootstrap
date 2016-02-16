<?php
defined('TYPO3_MODE') or die();

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['adx_twitter_bootstrap']);

if ($extensionConfiguration['extensions.']['activatePowermail'] && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('powermail')) {

	$tempColumns = array(
		'tx_adxtwitterbootstrap_header_layout' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array(
						'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
						'0'
					),
					array(
						'LLL:EXT:cms/locallang_ttc.xlf:header_layout.I.1',
						'1'
					),
					array(
						'LLL:EXT:cms/locallang_ttc.xlf:header_layout.I.2',
						'2'
					),
					array(
						'LLL:EXT:cms/locallang_ttc.xlf:header_layout.I.3',
						'3'
					),
					array(
						'LLL:EXT:cms/locallang_ttc.xlf:header_layout.I.4',
						'4'
					),
					array(
						'LLL:EXT:cms/locallang_ttc.xlf:header_layout.I.5',
						'5'
					),
					array(
						'LLL:EXT:cms/locallang_ttc.xlf:header_layout.I.6',
						'100'
					)
				),
				'default' => '3'
			)
		),
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

	$GLOBALS['TCA']['tx_powermail_domain_model_forms']['palettes']['header'] = array(
		'showitem' => 'title,--linebreak--,tx_adxtwitterbootstrap_header_layout',
		'canNotCollapse' => TRUE,
	);

	$GLOBALS['TCA']['tx_powermail_domain_model_forms']['palettes']['layout'] = array(
		'showitem' => 'css,--linebreak--,tx_adxtwitterbootstrap_span,--linebreak--,tx_adxtwitterbootstrap_offset',
		'canNotCollapse' => TRUE,
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_forms', $tempColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_forms', '--palette--;;header', '', 'replace:title');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_forms', '--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_forms.palette.apperance;layout', '', 'replace:css');
}
