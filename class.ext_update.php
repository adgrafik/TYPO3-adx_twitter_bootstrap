<?php
namespace AdGrafik\AdxTwitterBootstrap;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Arno Dudek <webmaster@adgrafik.at>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Update class for the extension manager.
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class ext_update {

	/**
	 * Array of flash messages (params) array[][status,title,message]
	 *
	 * @var array
	 */
	protected $messageArray = array();

	/**
	 * @var \TYPO3\CMS\Core\Database\DatabaseConnection
	 */
	protected $databaseConnection;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->databaseConnection = $GLOBALS['TYPO3_DB'];
	}

	/**
	 * Main update function called by the extension manager.
	 *
	 * @return string
	 */
	public function main() {
		$this->update();
		return $this->generateOutput();
	}

	/**
	 * Called by the extension manager to determine if the update menu entry
	 * should by showed.
	 *
	 * @return bool
	 */
	public function access() {
		return TRUE;
		return 
			$this->requireUpdateFromVersion('1.0.x') || 
			$this->requireUpdateFromVersion('1.1.x');
	}

	/**
	 * Return TRUE if update needed.
	 *
	 * @return boolean
	 */
	protected function requireUpdateFromVersion($version) {
		switch ($version) {
			case '1.0.x':
				// The new starting column number will be "0".
				$result = (boolean) $this->databaseConnection->exec_SELECTcountRows(
					'*',
					'tt_content',
					'pi_flexform LIKE \'%<field index="tx_adxtwitterbootstrap_%columns_span_column1">%\' AND pi_flexform NOT LIKE \'%<field index="tx_adxtwitterbootstrap_%columns_span_column0">%\''
				);
				break;
			case '1.1.x':
				// Find values "" or "0" in span and offset field assumed there is no field defined with "0,0,0,0" in upcomming versions.
				// In other words, if the field have the explizit value "0,0,0,0" in furter versions, then it will be updated too.
				$result = (boolean) $this->databaseConnection->exec_SELECTcountRows(
					'*',
					'tt_content',
					'tx_adxtwitterbootstrap_span = \'\' OR tx_adxtwitterbootstrap_span = \'0\' OR ( FIND_IN_SET( \'0\', tx_adxtwitterbootstrap_span ) AND NOT FIND_IN_SET( \'-1\', tx_adxtwitterbootstrap_span ) ) OR tx_adxtwitterbootstrap_offset = \'\' OR tx_adxtwitterbootstrap_offset = \'0\' OR ( FIND_IN_SET( \'0\', tx_adxtwitterbootstrap_offset ) AND NOT FIND_IN_SET( \'-1\', tx_adxtwitterbootstrap_offset ) )'
				);
				break;
		}
		return $result;
	}

	/**
	 * This update changes the theme value from relative directory to the name of the directory only.
	 *
	 * @return void
	 */
	protected function update() {
		if ($this->requireUpdateFromVersion('1.0.x')) {
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.0.x: Change starting column number from "1" to "0" and change FlexForm field name "hide" to "visibility" in field "pi_flexform" of table "tt_content".'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET pi_flexform = REPLACE(pi_flexform, \'_column1\', \'_column0\'),
					pi_flexform = REPLACE(pi_flexform, \'_column2\', \'_column1\'),
					pi_flexform = REPLACE(pi_flexform, \'_column3\', \'_column2\'),
					pi_flexform = REPLACE(pi_flexform, \'_column4\', \'_column3\'),
					pi_flexform = REPLACE(pi_flexform, \'columns_hide_column\', \'columns_visibility_column\')
				WHERE pi_flexform LIKE \'%<field index="tx_adxtwitterbootstrap_%columns_span_column1">%\' AND pi_flexform NOT LIKE \'%<field index="tx_adxtwitterbootstrap_%columns_span_column0">%\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
		}
		if ($this->requireUpdateFromVersion('1.1.x')) {
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.1.0: Change span values from "", "0" to "-1,-1,-1,-1" in field "tx_adxtwitterbootstrap_span" of table "tt_content".'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_span = \'-1,-1,-1,-1\'
				WHERE tx_adxtwitterbootstrap_span = \'\' OR tx_adxtwitterbootstrap_span = \'0\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.1.1: Change span values from "0" to "-1" in each column in field "tx_adxtwitterbootstrap_span" of table "tt_content" if "-1" is not found.'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_span = CONCAT_WS(
					\',\',
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 1 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 1 ), \',\', -1 ) ),
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 2 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 2 ), \',\', -1 ) ),
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 3 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 3 ), \',\', -1 ) ),
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 4 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_span, \',\', 4 ), \',\', -1 ) )
				)
				WHERE FIND_IN_SET( \'0\', tx_adxtwitterbootstrap_span ) AND NOT FIND_IN_SET( \'-1\', tx_adxtwitterbootstrap_span );
			');
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.1.0: Change offset values from "", "0" to "-1,-1,-1,-1" in field "tx_adxtwitterbootstrap_offset" of table "tt_content".'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_offset = \'-1,-1,-1,-1\'
				WHERE tx_adxtwitterbootstrap_offset = \'\' OR tx_adxtwitterbootstrap_offset = \'0\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.1.1: Change offset values from "0" to "-1" in each column in field "tx_adxtwitterbootstrap_offset" of table "tt_content" if "-1" is not found.'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_offset = CONCAT_WS(
					\',\',
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 1 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 1 ), \',\', -1 ) ),
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 2 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 2 ), \',\', -1 ) ),
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 3 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 3 ), \',\', -1 ) ),
					IF( SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 4 ), \',\', -1 ) = 0, -1, SUBSTRING_INDEX( SUBSTRING_INDEX( tx_adxtwitterbootstrap_offset, \',\', 4 ), \',\', -1 ) )
				)
				WHERE FIND_IN_SET( \'0\', tx_adxtwitterbootstrap_offset ) AND NOT FIND_IN_SET( \'-1\', tx_adxtwitterbootstrap_offset );
			');
		}
	}

	/**
	 * Generates output by using flash messages.
	 *
	 * @return string
	 */
	protected function generateOutput() {
		$output = '';
		foreach ($this->messageArray as $messageItem) {
			/** @var \TYPO3\CMS\Core\Messaging\FlashMessage $flashMessage */
			$flashMessage = GeneralUtility::makeInstance(
				'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
				$messageItem[2],
				$messageItem[1],
				$messageItem[0]);
			$output .= $flashMessage->render();
		}
		return $output;
	}

}
