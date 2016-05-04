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
				'Update from v1.0.x: Change segmentation to advanced spans.'
			);
			$allTwoColumns = '
                <field index="tx_adxtwitterbootstrap_twocolumns_reverse_order">
                    <value index="vDEF"></value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_expert_mode">
                    <value index="vDEF">0</value>
                </field>';
			$allThreeColumns = '
                <field index="tx_adxtwitterbootstrap_threecolumns_reverse_order">
                    <value index="vDEF"></value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_expert_mode">
                    <value index="vDEF">0</value>
                </field>';
			$allFourColumns = '
                <field index="tx_adxtwitterbootstrap_fourcolumns_reverse_order">
                    <value index="vDEF"></value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_expert_mode">
                    <value index="vDEF">0</value>
                </field>';
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_twocolumns_segmentation">
                    <value index="vDEF">1212</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_twocolumns_span">
                    <value index="vDEF">6,6</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column0">
                    <value index="vDEF">-1,6,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column1">
                    <value index="vDEF">-1,6,-1,-1</value>
                </field>' . $allTwoColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_twocolumns_segmentation">
                    <value index="vDEF">1323</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_twocolumns_span">
                    <value index="vDEF">4,8</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column0">
                    <value index="vDEF">-1,4,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column1">
                    <value index="vDEF">-1,8,-1,-1</value>
                </field>' . $allTwoColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_twocolumns_segmentation">
                    <value index="vDEF">2313</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_twocolumns_span">
                    <value index="vDEF">8,4</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column0">
                    <value index="vDEF">-1,8,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column1">
                    <value index="vDEF">-1,4,-1,-1</value>
                </field>' . $allTwoColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_twocolumns_segmentation">
                    <value index="vDEF">1434</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_twocolumns_span">
                    <value index="vDEF">3,9</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column0">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column1">
                    <value index="vDEF">-1,9,-1,-1</value>
                </field>' . $allTwoColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_twocolumns_segmentation">
                    <value index="vDEF">3414</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_twocolumns_span">
                    <value index="vDEF">9,3</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column0">
                    <value index="vDEF">-1,9,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column1">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>' . $allTwoColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_threecolumns_segmentation">
                    <value index="vDEF">131313</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_threecolumns_span">
                    <value index="vDEF">4,4,4</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column0">
                    <value index="vDEF">-1,4,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column1">
                    <value index="vDEF">-1,4,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column2">
                    <value index="vDEF">-1,4,-1,-1</value>
                </field>' . $allThreeColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_threecolumns_segmentation">
                    <value index="vDEF">121414</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_threecolumns_span">
                    <value index="vDEF">6,3,3</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column0">
                    <value index="vDEF">-1,6,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column1">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column2">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>' . $allThreeColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_threecolumns_segmentation">
                    <value index="vDEF">141214</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_threecolumns_span">
                    <value index="vDEF">3,6,3</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column0">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column1">
                    <value index="vDEF">-1,6,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column2">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>' . $allThreeColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_threecolumns_segmentation">
                    <value index="vDEF">141412</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_threecolumns_span">
                    <value index="vDEF">3,3,6</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column0">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column1">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column2">
                    <value index="vDEF">-1,6,-1,-1</value>
                </field>' . $allThreeColumns . '\'),
                	pi_flexform = REPLACE(pi_flexform, \'<field index="tx_adxtwitterbootstrap_columns_fourcolumns_segmentation">
                    <value index="vDEF">14141414</value>
                </field>\', \'<field index="tx_adxtwitterbootstrap_fourcolumns_span">
                    <value index="vDEF">3,3,3,3</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column0">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column1">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column2">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column3">
                    <value index="vDEF">-1,3,-1,-1</value>
                </field>' . $allFourColumns . '\')
				WHERE pi_flexform LIKE \'%<field index="tx_adxtwitterbootstrap_%_segmentation">%\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
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
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.0.x: Remove "_columns_" in field pi_flexform.'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET pi_flexform = REPLACE(pi_flexform, \'adxtwitterbootstrap_columns_\', \'adxtwitterbootstrap_\')
				WHERE pi_flexform LIKE \'%<field index="tx_adxtwitterbootstrap_columns%\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Update from v1.0.x: Update value of gridelements field "tx_gridelements_backend_layout".'
			);
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_gridelements_backend_layout = REPLACE(tx_gridelements_backend_layout, \'tx_adxtwitterbootstrap_columns_\', \'tx_adxtwitterbootstrap_\')
				WHERE tx_gridelements_backend_layout LIKE \'tx_adxtwitterbootstrap_columns_%\';
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
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_span = CONCAT_WS( \',\', -1, tx_adxtwitterbootstrap_span, -1, -1 )
				WHERE NOT tx_adxtwitterbootstrap_span LIKE \'%,%\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
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
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_offset = CONCAT_WS( \',\', -1, tx_adxtwitterbootstrap_offset, -1, -1 )
				WHERE NOT tx_adxtwitterbootstrap_offset LIKE \'%,%\';
			');
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
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
