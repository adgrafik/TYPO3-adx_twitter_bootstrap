<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

// Add TypoScript gridelements patch.
$versionGridelements = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('gridelements');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/GridelementsPatch/2.0.x/', 'ad: Bootstrap patch for gridelements');


// Add static TypoScript
$bootstrapBranch = $extensionConfiguration['versions.']['bootstrap'] ?: '3.3.x';
$bootstrapDatepickerBranch = $extensionConfiguration['versions.']['bootstrapDatepicker'] ?: '1.2.x';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/Common/', 'ad: Bootstrap common');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/DeviceVisibility/', 'ad: Bootstrap content device visibility');

if ($extensionConfiguration['components.']['activateResponsiveImage']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/ResponsiveImage/', 'ad: Bootstrap responsive image');
}

if ($extensionConfiguration['components.']['activateTwoColumns'] || $extensionConfiguration['components.']['activateThreeColumns'] || $extensionConfiguration['components.']['activateFourColumns']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/Columns/', 'ad: Bootstrap columns');
}

if ($extensionConfiguration['components.']['activateCarousel']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/Carousel/', 'ad: Bootstrap carousel');
}

if ($extensionConfiguration['components.']['activateTabs']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/Tabs/', 'ad: Bootstrap tabs');
}

if ($extensionConfiguration['components.']['activateAccordion']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/Accordion/', 'ad: Bootstrap accordion');
}

if ($extensionConfiguration['components.']['activateModal']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Bootstrap/' . $bootstrapBranch . '/Modal/', 'ad: Bootstrap modal');
}

if ($extensionConfiguration['components.']['activateDatepicker']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/BootstrapDatepicker/' . $bootstrapDatepickerBranch . '/', 'ad: Bootstrap datepicker');
}

if ($extensionConfiguration['extensions.']['activatePowermail'] && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('powermail')) {
	// Add static TypoScript
	$versionPowermail = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('powermail');
	switch (TRUE) {
		case version_compare($versionPowermail, '2.4', '>='):
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/2.4.x/', 'ad: Bootstrap for powermail');
			break;
		case version_compare($versionPowermail, '2.1', '>='):
		case version_compare($versionPowermail, '2.2', '>='):
		case version_compare($versionPowermail, '2.3', '>='):
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/2.1.x/', 'ad: Bootstrap for powermail');
			break;
		case version_compare($versionPowermail, '2.0', '>='):
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/2.0.x/', 'ad: Bootstrap for powermail');
			break;
	}
}

?>