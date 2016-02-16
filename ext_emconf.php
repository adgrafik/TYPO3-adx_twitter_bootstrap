<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "adx_twitter_bootstrap".
 *
 * Auto generated 22-04-2014 10:39
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'ad: Twitter Bootstrap',
	'description' => 'Adds new content elements based on gridelements and powermail styles for the framework Bootstrap (http://twitter.github.com/bootstrap/)',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.1.1',
	'dependencies' => 'cms,version,adx_less,gridelements,powermail',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Arno Dudek',
	'author_email' => 'webmaster@adgrafik.at',
	'author_company' => 'ad:grafik',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '7.4.0-7.99.99',
			'adx_less' => '1.1.2-1.2.99',
			'gridelements' => '4.0.0-4.99.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
			't3jquery' => '2.7.0-2.7.99',
			'powermail' => '2.1.12-2.99.99',
		),
	),
	'suggests' => 
	array (
	),
);
