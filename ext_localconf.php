<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

call_user_func(function ($extKey) {
	$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);
	// include TSconfig
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/NewContentElementWizard.ts">');
	if ($extensionConfiguration['components.']['activateTwoColumns']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/TwoColumns.ts">');
	}
	if ($extensionConfiguration['components.']['activateThreeColumns']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/ThreeColumns.ts">');
	}
	if ($extensionConfiguration['components.']['activateFourColumns']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/FourColumns.ts">');
	}
	if ($extensionConfiguration['components.']['activateCarousel']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/Carousel.ts">');
	}
	if ($extensionConfiguration['components.']['activateTabs']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/Tabs.ts">');
	}
	if ($extensionConfiguration['components.']['activateAccordion']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/Accordion.ts">');
	}
	if ($extensionConfiguration['components.']['activateModal']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/Modal.ts">');
	}
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TSconfig/Bootstrap/ResponsiveImage.ts">');

	// Set another default for tt_content imagecols.
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
		TCAdefaults.tt_content.imagecols = 1
	');
}, $_EXTKEY);
