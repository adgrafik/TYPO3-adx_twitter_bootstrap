<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/**
 * @param string $extensionName
 * @return boolean
 */
function user_adxtwitterbootstrap_isExtensionLoaded($extensionName) {
	return t3lib_extMgm::isLoaded($extensionName);
}

?>