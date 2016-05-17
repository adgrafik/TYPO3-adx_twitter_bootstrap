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
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
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
	 * @var boolean
	 */
	protected $powermailIsActive;

	/**
	 * Get identificators for diffrent versions.
	 * @var array
	 */
	protected $constraints = array(
		'tt_content' => array(
			// v1.0.x
			'v1.0.x-segmentation' => 'pi_flexform LIKE \'%_segmentation">%\'',
			'v1.0.x-span' => 'NOT tx_adxtwitterbootstrap_span LIKE \'%,%\'',
			'v1.0.x-offset' => 'NOT tx_adxtwitterbootstrap_offset LIKE \'%,%\'',
			// v1.1.x
			'v1.1.x-columns' => 'pi_flexform LIKE \'%<field index="tx_adxtwitterbootstrap_%columns_span_column1">%\' AND pi_flexform NOT LIKE \'%<field index="tx_adxtwitterbootstrap_%columns_span_column0">%\'',
			'v1.1.x-span' => 'FIND_IN_SET( \'0\', tx_adxtwitterbootstrap_span ) AND NOT FIND_IN_SET( \'-1\', tx_adxtwitterbootstrap_span )',
			'v1.1.x-offset' => 'FIND_IN_SET( \'0\', tx_adxtwitterbootstrap_offset ) AND NOT FIND_IN_SET( \'-1\', tx_adxtwitterbootstrap_offset )',
		),
		'tx_powermail_domain_model_form' => array(
			// v1.0.x
			'v1.0.x-css-to-layout' => 'css = \'form-horizontal\'',
		),
	);

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->databaseConnection = $GLOBALS['TYPO3_DB'];
		$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['adx_twitter_bootstrap']);
		$this->powermailIsActive = ($extensionConfiguration['extensions.']['activatePowermail'] && ExtensionManagementUtility::isLoaded('powermail'));
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
	}

	/**
	 * Return TRUE if update for given version is needed.
	 *
	 * @param string $version
	 * @return boolean
	 */
	protected function requireUpdate() {
		$query = '';
		foreach ($this->constraints as $table => $constraints) {
			if ($this->powermailIsActive === FALSE && $table === 'tx_powermail_domain_model_form') {
				continue;
			}
			$query = '( ' . implode(' ) OR ( ', $constraints) . ' )';
			$result = $this->databaseConnection->exec_SELECTcountRows(
				'DISTINCT uid',
				$table,
				$query
			);
			if ($result) {
				return TRUE;
			}
		}
		return FALSE;
	}

	/**
	 * This update changes the theme value from relative directory to the name of the directory only.
	 *
	 * @return void
	 */
	protected function update() {
		if ($this->requireUpdate() === FALSE) {
			$this->messageArray[] = array(FlashMessage::OK, 'No update needed.');
			return;
		}
		$defaultValues = array(
			'twocolumns_span_column0' => '-1,6,-1,-1',
			'twocolumns_clear_column0' => '',
			'twocolumns_span_column1' => '-1,6,-1,-1',
			'twocolumns_reverse_order' => '',
			'twocolumns_expert_mode' => '',
			'twocolumns_layout' => '',
			'twocolumns_equal_height' => '',
			'twocolumns_visibility_column0' => '',
			'twocolumns_visibility_column1' => '',
			'threecolumns_span_column0' => '-1,-1,4,-1',
			'threecolumns_clear_column0' => '',
			'threecolumns_span_column1' => '-1,-1,4,-1',
			'threecolumns_clear_column1' => '',
			'threecolumns_span_column2' => '-1,-1,4,-1',
			'threecolumns_reverse_order' => '',
			'threecolumns_expert_mode' => '',
			'threecolumns_layout' => '',
			'threecolumns_equal_height' => '',
			'threecolumns_visibility_column0' => '',
			'threecolumns_visibility_column1' => '',
			'threecolumns_visibility_column2' => '',
			'fourcolumns_span_column0' => '-1,-1,3,-1',
			'fourcolumns_clear_column0' => '',
			'fourcolumns_span_column1' => '-1,-1,3,-1',
			'fourcolumns_clear_column1' => '',
			'fourcolumns_span_column2' => '-1,-1,3,-1',
			'fourcolumns_clear_column2' => '',
			'fourcolumns_span_column3' => '-1,-1,3,-1',
			'fourcolumns_reverse_order' => '',
			'fourcolumns_expert_mode' => '',
			'fourcolumns_layout' => '',
			'fourcolumns_equal_height' => '',
			'fourcolumns_visibility_column0' => '',
			'fourcolumns_visibility_column1' => '',
			'fourcolumns_visibility_column2' => '',
			'fourcolumns_visibility_column3' => '',
		);
		$templateTwoColumns = '<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<T3FlexForms>
    <data>
        <sheet index="tx_adxtwitterbootstrap_twocolumns_grid">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_clear_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_span_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_reverse_order">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_expert_mode">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
        <sheet index="tx_adxtwitterbootstrap_twocolumns_appearance">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_twocolumns_layout">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_equal_height">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
        <sheet index="tx_adxtwitterbootstrap_twocolumns_visibility">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_twocolumns_visibility_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_twocolumns_visibility_column1">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
    </data>
</T3FlexForms>';
		$templateThreeColumns = '<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<T3FlexForms>
    <data>
        <sheet index="tx_adxtwitterbootstrap_threecolumns_grid">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_clear_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_clear_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_span_column2">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_reverse_order">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_expert_mode">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
        <sheet index="tx_adxtwitterbootstrap_threecolumns_appearance">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_threecolumns_layout">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_equal_height">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
        <sheet index="tx_adxtwitterbootstrap_threecolumns_visibility">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_threecolumns_visibility_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_visibility_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_threecolumns_visibility_column2">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
    </data>
</T3FlexForms>';
		$templateFourColumns = '<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<T3FlexForms>
    <data>
        <sheet index="tx_adxtwitterbootstrap_fourcolumns_grid">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_clear_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_clear_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column2">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_clear_column2">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_span_column3">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_reverse_order">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_expert_mode">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
        <sheet index="tx_adxtwitterbootstrap_fourcolumns_appearance">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_fourcolumns_layout">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_equal_height">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
        <sheet index="tx_adxtwitterbootstrap_fourcolumns_visibility">
            <language index="lDEF">
                <field index="tx_adxtwitterbootstrap_fourcolumns_visibility_column0">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_visibility_column1">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_visibility_column2">
                    <value index="vDEF">%s</value>
                </field>
                <field index="tx_adxtwitterbootstrap_fourcolumns_visibility_column3">
                    <value index="vDEF">%s</value>
                </field>
            </language>
        </sheet>
    </data>
</T3FlexForms>';
		// Update columns.
		$rows = $this->databaseConnection->exec_SELECTgetRows('uid, tx_gridelements_backend_layout, pi_flexform', 'tt_content', 'tx_gridelements_backend_layout LIKE \'%tx_adxtwitterbootstrap%\' AND ( ( ' . $this->constraints['tt_content']['v1.0.x-segmentation'] . ' ) OR ( ' . $this->constraints['tt_content']['v1.1.x-columns'] . ' ) )');
		if (count($rows)) {
			$flexFormTools = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class);
			foreach ($rows as &$row) {
				$values = $defaultValues;
				$flexFormTools->traverseFlexFormXMLData('tt_content', 'pi_flexform', $row);
				$data = $flexFormTools->traverseFlexFormXMLData_Data;
				$segmentation = NULL;
				$col0of2 = $col1of2 = $col0of3 = $col1of3 = $col2of3 = $col0of4 = $col1of4 = $col2of4 = $col3of4 = NULL;
				if ($row['tx_gridelements_backend_layout'] == 'tx_adxtwitterbootstrap_columns_twocolumns') {
					$segmentation = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_twocolumns_general/lDEF/tx_adxtwitterbootstrap_columns_twocolumns_segmentation/vDEF', $data);
				}
				if ($row['tx_gridelements_backend_layout'] == 'tx_adxtwitterbootstrap_twocolumns') {
					$segmentation = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_grid/lDEF/tx_adxtwitterbootstrap_twocolumns_span/vDEF', $data);
				}
				if ($row['tx_gridelements_backend_layout'] == 'tx_adxtwitterbootstrap_columns_threecolumns') {
					$segmentation = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_threecolumns_general/lDEF/tx_adxtwitterbootstrap_columns_threecolumns_segmentation/vDEF', $data);
				}
				if ($row['tx_gridelements_backend_layout'] == 'tx_adxtwitterbootstrap_threecolumns') {
					$segmentation = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_span/vDEF', $data);
				}
				if ($row['tx_gridelements_backend_layout'] == 'tx_adxtwitterbootstrap_columns_fourcolumns') {
					$segmentation = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_threecolumns_general/lDEF/tx_adxtwitterbootstrap_columns_fourcolumns_segmentation/vDEF', $data);
				}
				if ($row['tx_gridelements_backend_layout'] == 'tx_adxtwitterbootstrap_fourcolumns') {
					$segmentation = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_span/vDEF', $data);
				}
				// If expert mode was enabled, overwrite values.
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_grid/lDEF/tx_adxtwitterbootstrap_twocolumns_expert_mode/vDEF', $data)) {
					$values['twocolumns_expert_mode'] = '1';
					$col0of2 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_grid/lDEF/tx_adxtwitterbootstrap_twocolumns_span_column1/vDEF', $data);
					$col1of2 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_grid/lDEF/tx_adxtwitterbootstrap_twocolumns_span_column2/vDEF', $data);
					if ($col0of2 && $col1of2) {
						$col0of2 = $this->updateSpanValues($col0of2);
						$col1of2 = $this->updateSpanValues($col1of2);
					}
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_expert_mode/vDEF', $data)) {
					$values['threecolumns_expert_mode'] = '1';
					$col0of3 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_span_column1/vDEF', $data);
					$col1of3 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_span_column2/vDEF', $data);
					$col2of3 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_span_column3/vDEF', $data);
					if ($col0of3 && $col1of3 && $col2of3) {
						$col0of3 = $this->updateSpanValues($col0of3);
						$col1of3 = $this->updateSpanValues($col1of3);
						$col2of3 = $this->updateSpanValues($col2of3);
					}
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_expert_mode/vDEF', $data)) {
					$values['fourcolumns_expert_mode'] = '1';
					$col0of4 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_span_column1/vDEF', $data);
					$col1of4 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_span_column2/vDEF', $data);
					$col2of4 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_span_column3/vDEF', $data);
					$col3of4 = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_span_column4/vDEF', $data);
					if ($col0of4 && $col1of4 && $col2of4 && $col3of4) {
						$col0of4 = $this->updateSpanValues($col0of4);
						$col1of4 = $this->updateSpanValues($col1of4);
						$col2of4 = $this->updateSpanValues($col2of4);
						$col3of4 = $this->updateSpanValues($col3of4);
					}
				}
				switch ($segmentation) {
					case '1212':
					case '6,6':
						$values['twocolumns_span_column0'] = '-1,6,-1,-1';
						$values['twocolumns_span_column1'] = '-1,6,-1,-1';
						break;
					case '1323':
					case '4,8':
						$values['twocolumns_span_column0'] = '-1,4,-1,-1';
						$values['twocolumns_span_column1'] = '-1,8,-1,-1';
						break;
					case '2313':
					case '8,4':
						$values['twocolumns_span_column0'] = '-1,8,-1,-1';
						$values['twocolumns_span_column1'] = '-1,4,-1,-1';
						break;
					case '1434':
					case '3,9':
						$values['twocolumns_span_column0'] = '-1,3,-1,-1';
						$values['twocolumns_span_column1'] = '-1,9,-1,-1';
						break;
					case '3414':
					case '9,3':
						$values['twocolumns_span_column0'] = '-1,9,-1,-1';
						$values['twocolumns_span_column1'] = '-1,3,-1,-1';
						break;
					case '131313':
					case '4,4,4':
						$values['threecolumns_span_column0'] = '-1,4,-1,-1';
						$values['threecolumns_span_column1'] = '-1,4,-1,-1';
						$values['threecolumns_span_column2'] = '-1,4,-1,-1';
						break;
					case '121414':
					case '6,3,3':
						$values['threecolumns_span_column0'] = '-1,6,-1,-1';
						$values['threecolumns_span_column1'] = '-1,3,-1,-1';
						$values['threecolumns_span_column2'] = '-1,3,-1,-1';
						break;
					case '141214':
					case '3,6,3':
						$values['threecolumns_span_column0'] = '-1,3,-1,-1';
						$values['threecolumns_span_column1'] = '-1,6,-1,-1';
						$values['threecolumns_span_column2'] = '-1,3,-1,-1';
						break;
					case '141412':
					case '3,6,3':
						$values['threecolumns_span_column0'] = '-1,3,-1,-1';
						$values['threecolumns_span_column1'] = '-1,3,-1,-1';
						$values['threecolumns_span_column2'] = '-1,6,-1,-1';
						break;
					case '14141414':
					case '3,3,3,3':
						$values['fourcolumns_span_column0'] = '-1,3,-1,-1';
						$values['fourcolumns_span_column1'] = '-1,3,-1,-1';
						$values['fourcolumns_span_column2'] = '-1,3,-1,-1';
						$values['fourcolumns_span_column3'] = '-1,3,-1,-1';
						break;
					case NULL:
						if ($col0of2 && $col1of2) {
							$values['twocolumns_span_column0'] = $col0of2;
							$values['twocolumns_span_column1'] = $col1of2;
						}
						if ($col0of3 && $col1of3 && $col2of3) {
							$values['threecolumns_span_column0'] = $col0of3;
							$values['threecolumns_span_column1'] = $col1of3;
							$values['threecolumns_span_column2'] = $col2of3;
						}
						if ($col0of4 && $col1of4 && $col2of4 && $col3of4) {
							$values['fourcolumns_span_column0'] = $col0of4;
							$values['fourcolumns_span_column1'] = $col1of4;
							$values['fourcolumns_span_column2'] = $col2of4;
							$values['fourcolumns_span_column3'] = $col3of4;
						}
						break;
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_grid/lDEF/tx_adxtwitterbootstrap_twocolumns_clear_column1/vDEF', $data)) {
					$values['twocolumns_clear_column0'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_clear_column1/vDEF', $data)) {
					$values['threecolumns_clear_column0'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_clear_column2/vDEF', $data)) {
					$values['threecolumns_clear_column1'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_clear_column1/vDEF', $data)) {
					$values['fourcolumns_clear_column0'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_clear_column2/vDEF', $data)) {
					$values['fourcolumns_clear_column1'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_clear_column3/vDEF', $data)) {
					$values['fourcolumns_clear_column2'] = '1';
				}
				if ($reverseOrder = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_grid/lDEF/tx_adxtwitterbootstrap_twocolumns_reverse_order/vDEF', $data)) {
					$values['twocolumns_reverse_order'] = $reverseOrder;
				}
				if ($reverseOrder = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_grid/lDEF/tx_adxtwitterbootstrap_threecolumns_reverse_order/vDEF', $data)) {
					$values['threecolumns_reverse_order'] = $reverseOrder;
				}
				if ($reverseOrder = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_grid/lDEF/tx_adxtwitterbootstrap_fourcolumns_reverse_order/vDEF', $data)) {
					$values['fourcolumns_reverse_order'] = $reverseOrder;
				}
				if (($layout = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_twocolumns_general/lDEF/tx_adxtwitterbootstrap_columns_twocolumns_layout/vDEF', $data)) || ($layout = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_appearance/lDEF/tx_adxtwitterbootstrap_twocolumns_layout/vDEF', $data))) {
					$values['twocolumns_layout'] = $layout;
				}
				if (($layout = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_threecolumns_general/lDEF/tx_adxtwitterbootstrap_columns_threecolumns_layout/vDEF', $data)) || ($layout = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_appearance/lDEF/tx_adxtwitterbootstrap_threecolumns_layout/vDEF', $data))) {
					$values['threecolumns_layout'] = $layout;
				}
				if (($layout = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_fourcolumns_general/lDEF/tx_adxtwitterbootstrap_columns_fourcolumns_layout/vDEF', $data)) || ($layout = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_appearance/lDEF/tx_adxtwitterbootstrap_fourcolumns_layout/vDEF', $data))) {
					$values['fourcolumns_layout'] = $layout;
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_twocolumns_general/lDEF/tx_adxtwitterbootstrap_columns_twocolumns_equal_height/vDEF', $data) || $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_appearance/lDEF/tx_adxtwitterbootstrap_twocolumns_equal_height/vDEF', $data)) {
					$values['twocolumns_equal_height'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_threecolumns_general/lDEF/tx_adxtwitterbootstrap_columns_threecolumns_equal_height/vDEF', $data) || $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_appearance/lDEF/tx_adxtwitterbootstrap_threecolumns_equal_height/vDEF', $data)) {
					$values['threecolumns_equal_height'] = '1';
				}
				if ($flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_columns_fourcolumns_general/lDEF/tx_adxtwitterbootstrap_columns_fourcolumns_equal_height/vDEF', $data) || $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_appearance/lDEF/tx_adxtwitterbootstrap_fourcolumns_equal_height/vDEF', $data)) {
					$values['fourcolumns_equal_height'] = '1';
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_visibility/lDEF/tx_adxtwitterbootstrap_twocolumns_hide_column1/vDEF', $data)) {
					$values['twocolumns_visibility_column0'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_twocolumns_visibility/lDEF/tx_adxtwitterbootstrap_twocolumns_hide_column2/vDEF', $data)) {
					$values['twocolumns_visibility_column1'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_visibility/lDEF/tx_adxtwitterbootstrap_threecolumns_hide_column1/vDEF', $data)) {
					$values['threecolumns_visibility_column0'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_visibility/lDEF/tx_adxtwitterbootstrap_threecolumns_hide_column2/vDEF', $data)) {
					$values['threecolumns_visibility_column1'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_threecolumns_visibility/lDEF/tx_adxtwitterbootstrap_threecolumns_hide_column3/vDEF', $data)) {
					$values['threecolumns_visibility_column2'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_visibility/lDEF/tx_adxtwitterbootstrap_fourcolumns_hide_column1/vDEF', $data)) {
					$values['fourcolumns_visibility_column0'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_visibility/lDEF/tx_adxtwitterbootstrap_fourcolumns_hide_column2/vDEF', $data)) {
					$values['fourcolumns_visibility_column1'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_visibility/lDEF/tx_adxtwitterbootstrap_fourcolumns_hide_column3/vDEF', $data)) {
					$values['fourcolumns_visibility_column2'] = $hide;
				}
				if ($hide = $flexFormTools->getArrayValueByPath('data/tx_adxtwitterbootstrap_fourcolumns_visibility/lDEF/tx_adxtwitterbootstrap_fourcolumns_hide_column4/vDEF', $data)) {
					$values['fourcolumns_visibility_column3'] = $hide;
				}
				switch ($row['tx_gridelements_backend_layout']) {
					case 'tx_adxtwitterbootstrap_columns_twocolumns':
					case 'tx_adxtwitterbootstrap_twocolumns':
						$row['tx_gridelements_backend_layout'] = 'tx_adxtwitterbootstrap_twocolumns';
						$row['pi_flexform'] = sprintf(
							$templateTwoColumns,
							$values['twocolumns_span_column0'],
							$values['twocolumns_clear_column0'],
							$values['twocolumns_span_column1'],
							$values['twocolumns_reverse_order'],
							$values['twocolumns_expert_mode'],
							$values['twocolumns_layout'],
							$values['twocolumns_equal_height'],
							$values['twocolumns_visibility_column0'],
							$values['twocolumns_visibility_column1']
						);
						break;
					case 'tx_adxtwitterbootstrap_columns_threecolumns':
					case 'tx_adxtwitterbootstrap_threecolumns':
						$row['tx_gridelements_backend_layout'] = 'tx_adxtwitterbootstrap_threecolumns';
						$row['pi_flexform'] = sprintf(
							$templateThreeColumns,
							$values['threecolumns_span_column0'],
							$values['threecolumns_clear_column0'],
							$values['threecolumns_span_column1'],
							$values['threecolumns_clear_column1'],
							$values['threecolumns_span_column2'],
							$values['threecolumns_reverse_order'],
							$values['threecolumns_expert_mode'],
							$values['threecolumns_layout'],
							$values['threecolumns_equal_height'],
							$values['threecolumns_visibility_column0'],
							$values['threecolumns_visibility_column1'],
							$values['threecolumns_visibility_column2']
						);
						break;
					case 'tx_adxtwitterbootstrap_columns_fourcolumns':
					case 'tx_adxtwitterbootstrap_fourcolumns':
						$row['tx_gridelements_backend_layout'] = 'tx_adxtwitterbootstrap_fourcolumns';
						$row['pi_flexform'] = sprintf(
							$templateFourColumns,
							$values['fourcolumns_span_column0'],
							$values['fourcolumns_clear_column0'],
							$values['fourcolumns_span_column1'],
							$values['fourcolumns_clear_column1'],
							$values['fourcolumns_span_column2'],
							$values['fourcolumns_clear_column2'],
							$values['fourcolumns_span_column3'],
							$values['fourcolumns_reverse_order'],
							$values['fourcolumns_expert_mode'],
							$values['fourcolumns_layout'],
							$values['fourcolumns_equal_height'],
							$values['fourcolumns_visibility_column0'],
							$values['fourcolumns_visibility_column1'],
							$values['fourcolumns_visibility_column2'],
							$values['fourcolumns_visibility_column3']
						);
						break;
				}
			}

			$query = $this->databaseConnection->INSERTmultipleRows('tt_content', array('uid', 'tx_gridelements_backend_layout', 'pi_flexform'), $rows);
			$query .= ' ON DUPLICATE KEY UPDATE tx_gridelements_backend_layout = VALUES( tx_gridelements_backend_layout ), pi_flexform = VALUES( pi_flexform );';
			$this->databaseConnection->admin_query($query);
			$affectedRows = $this->databaseConnection->sql_affected_rows();
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Updated column modules. Total records updated: ' . $affectedRows
			);
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
		}

		// Update span field
		if ($this->databaseConnection->exec_SELECTcountRows('DISTINCT uid', 'tt_content', $this->constraints['tt_content']['v1.0.x-span'])) {
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_span = CONCAT_WS( \',\', -1, IF( tx_adxtwitterbootstrap_span, tx_adxtwitterbootstrap_span, -1 ), -1, -1 )
				WHERE NOT tx_adxtwitterbootstrap_span LIKE \'%,%\';
			');
			$affectedRows = $this->databaseConnection->sql_affected_rows();
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Updated column span from v1.0.x. Total records updated: ' . $affectedRows
			);
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
		}
		if ($this->databaseConnection->exec_SELECTcountRows('DISTINCT uid', 'tt_content', $this->constraints['tt_content']['v1.1.x-span'])) {
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
			$affectedRows = $this->databaseConnection->sql_affected_rows();
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Updated column span from v1.1.x. Total records updated: ' . $affectedRows
			);
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
		}

		// Update offset field
		if ($this->databaseConnection->exec_SELECTcountRows('DISTINCT uid', 'tt_content', $this->constraints['tt_content']['v1.0.x-offset'])) {
			$this->databaseConnection->admin_query('
				UPDATE tt_content
				SET tx_adxtwitterbootstrap_offset = CONCAT_WS( \',\', -1, IF( tx_adxtwitterbootstrap_offset, tx_adxtwitterbootstrap_offset, -1 ), -1, -1 )
				WHERE NOT tx_adxtwitterbootstrap_offset LIKE \'%,%\';
			');
			$affectedRows = $this->databaseConnection->sql_affected_rows();
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Updated column offset from v1.0.x. Total records updated: ' . $affectedRows
			);
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
		}
		if ($this->databaseConnection->exec_SELECTcountRows('DISTINCT uid', 'tt_content', $this->constraints['tt_content']['v1.1.x-offset'])) {
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
			$affectedRows = $this->databaseConnection->sql_affected_rows();
			$this->messageArray[] = array(
				FlashMessage::NOTICE,
				'Updated column offset from v1.1.x. Total records updated: ' . $affectedRows
			);
			if ($this->databaseConnection->sql_error()) {
				$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
			}
		}

		// Update powermail
		if ($this->powermailIsActive && $this->databaseConnection->exec_SELECTcountRows('DISTINCT uid', 'tx_powermail_domain_model_form', $this->constraints['tx_powermail_domain_model_form']['v1.0.x-css-to-layout'])) {
			$rows = $this->databaseConnection->exec_SELECTgetRows('uid, css', 'tx_powermail_domain_model_form', $this->constraints['tx_powermail_domain_model_form']['v1.0.x-css-to-layout']);
			if (count($rows)) {
				$formPids = array();
				foreach ($rows as $row) {
					$formPids[] = $row['uid'];
				}
				$query = $this->databaseConnection->INSERTmultipleRows('tx_powermail_domain_model_form', array('uid', 'css'), $rows);
				$query .= ' ON DUPLICATE KEY UPDATE css = \'\';';
				$this->databaseConnection->admin_query($query);
				$rows = $this->databaseConnection->exec_SELECTgetRows('uid, tx_adxtwitterbootstrap_layout, tx_adxtwitterbootstrap_label_to_field_ratio', 'tx_powermail_domain_model_page', 'tx_adxtwitterbootstrap_layout = \'\' AND forms IN( ' . implode(', ', $formPids) . ' )');
				if (count($rows)) {
					$query = $this->databaseConnection->INSERTmultipleRows('tx_powermail_domain_model_page', array('uid', 'tx_adxtwitterbootstrap_layout'), $rows);
					$query .= ' ON DUPLICATE KEY UPDATE tx_adxtwitterbootstrap_layout = \'form-horizontal\', tx_adxtwitterbootstrap_label_to_field_ratio = \'4:8\';';
					$this->databaseConnection->admin_query($query);
					$affectedRows = $this->databaseConnection->sql_affected_rows();
					$this->messageArray[] = array(
						FlashMessage::NOTICE,
						'Updated powermail layout from v1.0.x. Total records updated: ' . $affectedRows
					);
					if ($this->databaseConnection->sql_error()) {
						$this->messageArray[] = array(FlashMessage::ERROR, 'Error: ' . $this->databaseConnection->sql_error());
					}
				}
			}
		}
	}

	/**
	 * @param string $value
	 * @return string
	 */
	protected function updateSpanValues($value) {
		$value = explode(',', $value);
		$value = array_replace($value,
			array_fill_keys(
				array_keys($value, '0'),
				'-1'
			)
		);
		return implode(',', $value);
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
#\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($flexFormTools);

}
