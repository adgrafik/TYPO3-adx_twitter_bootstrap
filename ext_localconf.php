<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// load user function
include_once(t3lib_extMgm::extPath('adx_twitter_bootstrap') . 'Classes/Service/UserFunc.php');

// include TSconfig
$typoScriptConfig = t3lib_div::getUrl(t3lib_div::getFileAbsFileName('EXT:adx_twitter_bootstrap/Configuration/TSconfig/Page.ts'));
t3lib_extMgm::addPageTSConfig($typoScriptConfig);

?>