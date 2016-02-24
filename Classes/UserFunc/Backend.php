<?php
namespace AdGrafik\AdxTwitterBootstrap\UserFunc;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Arno Dudek <webmaster@adgrafik.at>
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

use TYPO3\CMS\Backend\Form\FormEngine;

class Backend {

	/**
	 * getSpanColumnFields
	 *
	 * @param array $parameters
	 * @param mixed $formEngine
	 * @return string
	 */
	public function getSpanColumnFields($parameters, $formEngine) {

		// Translate option labels first.
		foreach ($parameters['parameters']['segments'] as &$segment) {
			$segment[0] = \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate($segment[0], 'adx_twitter_bootstrap');
		}

		$formFieldClass = 'tx-adxtwitterbootstrap-' . md5($parameters['itemFormElID']); // Class wrapping complete field to find children per jQuery.
		$fieldClass = 'tx-adxtwitterbootstrap-' . md5($parameters['itemFormElID']); // Class of current value field in simple mode.
		$fieldColumnsClass = 'tx-adxtwitterbootstrap-columns'; // Class of all column fields of expert mode.
		$fieldDevicesClass = 'tx-adxtwitterbootstrap-device';

		$formField  = '<div class="' . $formFieldClass . '">'; // All field wrapping.

		// Add device fields of simple mode.
		$formField .= $this->getDeviceSelectField($parameters, 'xs');
		$formField .= $this->getDeviceSelectField($parameters, 'sm');
		$formField .= $this->getDeviceSelectField($parameters, 'md');

		$formField .= '<div class="clearfix"></div>';

		$formField .= sprintf('
			<script type="text/javascript">
				(function($){
				$(document).ready(function(){

					var $formField = $(\'.%1$s\'),
						$field = $formField.find(\'.%1$s\'),
						$fieldColumns = $formField.parents(\'.typo3-TCEforms-flexForm, .t3js-formengine-field-item\').find(\'.%2$s\'),
						$fieldDevices = $formField.find(\'.%3$s\');

					// Hide expert mode fields.
					$fieldColumns.closest(\'.form-section\').hide();

					// Get simple mode values from expert mode fields.
					var devices = [];
					$fieldColumns.each(function(index, column){
						var deviceValues = $(column).val().split(\',\');
						for (var device = 0; device < 3; device++) {
							if (!devices[device]) devices[device] = [];
							devices[device].push(deviceValues[device]);
						}
					});

					// Fill simple mode fields.
					$fieldDevices.each(function(index, device){

						// Set only if combination is found.
						var deviceValue = devices[index].join(\',\');
						if ($(device).find(\'option[value="\' + deviceValue + \'"]\').length){
							$(device).val(deviceValue);
						}

						// Define onchange function.
						$(device).change(function(){

							// Get column values from device values.
							var columnValues = [];
							$fieldDevices.each(function(index, device){
								var columns = $(device).val().split(\',\');
								for (var column = 0; column < columns.length; column++){
									if (!columnValues[column]) columnValues[column] = [];
									columnValues[column].push(columns[column]);
								}
							});

							// Set column values.
							$fieldColumns.each(function(index, column){
								// Always attach an empty value for large devices which are not setted in simple mode.
								columnValues[index].push(\'0\');
								$(column).val(columnValues[index].join(\',\'));
							});
						})
					});
				});
				})(TYPO3.jQuery);
			</script>',
			$formFieldClass,
			$fieldColumnsClass,
			$fieldDevicesClass
		);

		$formField .= '</div>';

		return $formField;
	}

	/**
	 * getDeviceSelectField
	 *
	 * @param array $parameters
	 * @param string $device
	 * @return string
	 */
	private function getDeviceSelectField($parameters, $device) {

		$fieldDevicesClass = 'tx-adxtwitterbootstrap-device';
		$onchange = htmlspecialchars(implode('', $parameters['fieldChangeFunc']));

		$formField  = '<span class="t3-form-palette-field-container col-sm-3" style="display: block;">';
		$formField .= '<label class="t3-form-palette-field-label class-main3" style="font-weight: normal;">' . \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:flexform.columns.grid.span.' . $device, 'adx_twitter_bootstrap') . '</label>';
		$formField .= '<span class="t3-form-palette-field class-main5"><div class="t3-form-field-item">';
		$formField .= '<select class="select ' . $fieldDevicesClass . '" onchange="' . $onchange . '">';

		foreach ($parameters['parameters']['segments'] as &$segment) {
			$formField .= '<option value="' . $segment[1] . '">' . $segment[0] . '</option>';
		}

		$formField .= '</select>';
		$formField .= '</div></span>';
		$formField .= '</span>';

		return $formField;
	}

	/**
	 * getSpanColumnFields
	 *
	 * @param array $parameters
	 * @param mixed $formEngine
	 * @return string
	 */
	public function getSpanColumnFieldsExpert($parameters, $formEngine) {

		$valueXs = preg_replace('/(-?\d+),-?\d+,-?\d+,-?\d+/', '$1', $parameters['itemFormElValue']);
		$valueSm = preg_replace('/-?\d+,(-?\d+),-?\d+,-?\d+/', '$1', $parameters['itemFormElValue']);
		$valueMd = preg_replace('/-?\d+,-?\d+,(-?\d+),-?\d+/', '$1', $parameters['itemFormElValue']);
		$valueLg = preg_replace('/-?\d+,-?\d+,-?\d+,(-?\d+)/', '$1', $parameters['itemFormElValue']);

		$fieldColumnsClass = 'tx-adxtwitterbootstrap-columns'; // Class of all column fields of expert mode.

		$formField  = '<input class="' . $fieldColumnsClass . '" type="hidden" name="' . $parameters['itemFormElName'] . '" value="' . htmlspecialchars($parameters['itemFormElValue']) . '" />';
		$formField .= $this->getDeviceSelectFieldExpert($parameters, 'xs', $valueXs);
		$formField .= $this->getDeviceSelectFieldExpert($parameters, 'sm', $valueSm);
		$formField .= $this->getDeviceSelectFieldExpert($parameters, 'md', $valueMd);
		$formField .= $this->getDeviceSelectFieldExpert($parameters, 'lg', $valueLg);

		$formField .= '<div class="clearfix"></div>';

		return $formField;
	}

	/**
	 * getModalInfo
	 *
	 * @param array $parameters
	 * @param mixed $formEngine
	 * @return string
	 */
	public function getModalInfo($parameters, $formEngine) {
		return (strpos('NEW', $parameters['row']['uid']) === FALSE)
			? sprintf('<div class="alert alert-info">Use following code to open the modal with a button:<br />
<pre>&lt;button class="btn btn-primary btn-lg" data-target="#modal-%1$s" data-toggle="modal" type="button"&gt;Button title&lt;/button&gt;</pre>
or as a link:<br />
<pre>&lt;a data-target="#modal-%1$s" data-toggle="modal" href="#modal-%1$s"&gt;Link title&lt;/a&gt;</pre></div>', $parameters['row']['uid'])
			: '<div class="alert alert-warning">Save record to get a description how to use.</div>';
	}

	/**
	 * getDeviceSelectField
	 *
	 * @param array $parameters
	 * @param string $device
	 * @param integer $value
	 * @return string
	 */
	private function getDeviceSelectFieldExpert($parameters, $device, $value) {

		$startAt = isset($parameters['fieldConf']['config']['startAt']) ? intval($parameters['fieldConf']['config']['startAt']) : 1;
		$fieldDevicesClass = 'tx-adxtwitterbootstrap-device-' . md5($parameters['itemFormElID']);
		$onchange = 'var fieldValues = []; TYPO3.jQuery(\'.' . $fieldDevicesClass . '\').each(function(index, element){ if (element.value) fieldValues.push(element.value); }); document.editform[\'' . $parameters['itemFormElName'] . '\'].value = fieldValues.join(\',\');' . htmlspecialchars(implode('', $parameters['fieldChangeFunc']));

		$formField  = '<span class="tx-adxtwitterbootstrap-span-column t3-form-palette-field-container col-sm-3">';
		$formField .= '<label class="t3-form-palette-field-label class-main3" style="font-weight: normal;">' . \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:flexform.columns.grid.span.' . $device, 'adx_twitter_bootstrap') . '</label>';
		$formField .= '<span class="t3-form-palette-field class-main5"><div class="t3-form-field-item">';
		$formField .= '<select class="select ' . $fieldDevicesClass . '" onchange="' . $onchange . '">';
		$formField .= '<option value="-1">' . \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:flexform.columns.grid.span.inherit', 'adx_twitter_bootstrap') . '</option>';
		for ($i = $startAt; $i <= 12; $i++) {
			$label = \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:flexform.columns.grid.span', 'adx_twitter_bootstrap', array($i));
			$formField .= '<option value="' . $i . '"' . ($i == $value ? ' selected="selected"' : '') . '>' . $label . '</option>';
		}
		$formField .= '</select>';
		$formField .= '</div></span>';
		$formField .= '</span>';

		return $formField;
	}

}
