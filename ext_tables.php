<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// Add static TypoScript
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Common/', 'ad: Twitter Bootstrap common');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Powermail/', 'ad: Twitter Bootstrap for powermail');

?>