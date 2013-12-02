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


class Frontend {

	/**
	 * @var array $visibilityMatrix
	 */
	static protected $visibilityMatrix = array(
		1 => 'hidden-xs',
		2 => 'hidden-sm',
		3 => 'hidden-xs hidden-sm',
		4 => 'hidden-md',
		5 => 'hidden-xs hidden-md',
		6 => 'hidden-sm hidden-md',
		7 => 'visible-lg',
		8 => 'hidden-lg',
		9 => 'hidden-xs hidden-lg',
		10 => 'hidden-sm hidden-lg',
		11 => 'visible-md',
		12 => 'hidden-md hidden-lg',
		13 => 'visible-sm',
		14 => 'visible-xs',
		15 => 'hidden',
	);

	/**
	 * @var array $clearMatrix
	 */
	static protected $clearMatrix = array(
		1 => 'clearfix visible-xs',
		2 => 'clearfix visible-sm',
		3 => 'clearfix visible-xs visible-sm',
		4 => 'clearfix visible-md',
		5 => 'clearfix visible-xs visible-md',
		6 => 'clearfix visible-sm visible-md',
		7 => 'clearfix hidden-lg',
		8 => 'clearfix visible-lg',
		9 => 'clearfix visible-xs visible-lg',
		10 => 'clearfix visible-sm visible-lg',
		11 => 'clearfix hidden-md',
		12 => 'clearfix visible-md visible-lg',
		13 => 'clearfix hidden-sm',
		14 => 'clearfix hidden-xs',
		15 => 'clearfix',
	);

	/**
	 * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface $configurationManager
	 */
	protected $configurationManager;

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager $objectManager
	 */
	protected $objectManager;

	/**
	 * @var \TYPO3\CMS\Extbase\SignalSlot_Dispatcher $signalSlotDispatcher
	 */
	protected $signalSlotDispatcher;

	/**
	 * @var \TYPO3\CMS\Fluid\View\StandaloneView $view
	 */
	protected $view;

	/**
	 * @var array $contentData
	 */
	protected $contentData;

	/**
	 * @return void
	 */
	public function initializeAction() {
		$this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$this->signalSlotDispatcher = $this->objectManager->get('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
		$this->view = $this->objectManager->get('TYPO3\\CMS\\Fluid\\View\\StandaloneView');
		$this->contentData = $this->cObj->data;
	}

	/**
	  * action show form for creating new mails
	  *
	  * @param string $content
	  * @param array $parameters
	  * @return string
	  */
	public function renderColumns($content, $parameters) {

		$this->initializeAction();

		$this->signalSlotDispatcher->dispatch(__CLASS__, __FUNCTION__ . 'BeforeRender', array($this));

		$this->view->setTemplatePathAndFilename(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($parameters['templateFile']));

		$classes = array('row');
		$layout = $this->getFlexFormValue('layout');
		if ($layout) {
			$classes[] = $layout;
		}

		$equalHeight = (boolean) $this->getFlexFormValue('equal_height');
		if ($equalHeight) {
			$classes[] = 'equal-height';
		}

		$reverseOrder = $this->getFlexFormValue('reverse_order');
		$expertMode = (boolean) $this->getFlexFormValue('expert_mode');

		$row = array(
			'class' => implode(' ', $classes),
		);

		$total = $free = array(
			'xs' => 12,
			'sm' => 12,
			'md' => 12,
			'lg' => 12,
		);
		$columns = array();
		for ($x = 0; $x < 12; $x++) {

			$column = $x + 1;
			$classes = array();

			if ($this->getFlexFormValue('span_column' . $column) === NULL) {
				break;
			}

			$spans = $this->getFlexFormValue('span_column' . $column) ?: '0,0,0,0';
			$spans = \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(',', $spans, TRUE);
			$spans = array(
				'xs' => $spans[0],
				'sm' => $spans[1],
				'md' => $spans[2],
				'lg' => $spans[3],
			);

			foreach ($spans as $device => $span) {

				if ($span) {
					$classes[] = sprintf('col-%s-%s', $device, $span);
				}

				if ($device !== $reverseOrder) {
					continue;
				}

				// Do magic offset calculation.
				$offset = $total[$device] - $free[$device] - ($free[$device] = $free[$device] - $spans[$device]);
				if ($offset > 0) {
					$classes[] = sprintf('col-%s-pull-%s', $device, $offset);
				} else if ($offset < 0) {
					$classes[] = sprintf('col-%s-push-%s', $device, $offset * -1);
				}
			}

			$clear = 0;
			if ($expertMode) {
				$clear = (integer) $this->getFlexFormValue('clear_column' . $column);
				if ($clear) {
					$clear = static::$clearMatrix[$clear];
				}
			}

			$visibility = (integer) $this->getFlexFormValue('hide_column' . $column);
			if ($visibility) {
				$classes[] = static::$visibilityMatrix[$visibility];
			}

			$content = $this->contentData['tx_gridelements_view_column_' . $x];

			$columns[$column] = array(
				'span' => $spans,
				'visibility' => $visibility,
				'class' => implode(' ', $classes),
				'clear' => $clear,
				'content' => $content,
			);
		}

		$this->view->assignMultiple(array(
			'data' => $this->contentData,
			'row' => $row,
			'columns' => $columns,
		));

		$this->signalSlotDispatcher->dispatch(__CLASS__, __FUNCTION__ . 'AfterRender', array($this));

		return $this->view->render();

#\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->contentData);
	}

	/**
	  * parseAccordion
	  *
	  * @param string $content
	  * @param array $parameters
	  * @return string
	  */
	public function renderAccordion($content, $parameters) {

		$this->initializeAction();

		$this->signalSlotDispatcher->dispatch(__CLASS__, __FUNCTION__ . 'BeforeRender', array($this));

		$this->view->setTemplatePathAndFilename(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($parameters['templateFile']));

		$columnsCount = $this->getFlexFormValue('columns');
		$children = $this->contentData['tx_gridelements_view_children'];

		$itemGroups = array();
		for ($x = 0, $y = -1; $x < count($children); $x++) {
			if ($x % $columnsCount == 0) {
				$y++;
			}
			$itemGroups[$y][$x] = $children[$x];
		}

		$this->view->assignMultiple(array(
			'data' => $this->contentData,
			'itemGroups' => $itemGroups,
			'layout' => $this->getFlexFormValue('layout'),
			'span' => floor(12 / $columnsCount),
			'collapsible' => (integer) $this->getFlexFormValue('collapsible'),
			'active' => (integer) $this->getFlexFormValue('active') - 1,
			'slideToPosition' => (integer) $this->getFlexFormValue('slide_to_position'),
			'slideOffset' => (integer) $this->getFlexFormValue('slide_offset'),
			'ajaxLoading' => (integer) $this->getFlexFormValue('ajax_loading'),
		));

		$this->signalSlotDispatcher->dispatch(__CLASS__, __FUNCTION__ . 'AfterRender', array($this));

		return $this->view->render();
	}

	/**
	  * parseAccordion
	  *
	  * @param string $content
	  * @param array $parameters
	  * @return string
	  */
	public function renderTabs($content, $parameters) {

		$this->initializeAction();

		$this->signalSlotDispatcher->dispatch(__CLASS__, __FUNCTION__ . 'BeforeRender', array($this));

		$this->view->setTemplatePathAndFilename(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($parameters['templateFile']));

		$this->view->assignMultiple(array(
			'data' => $this->contentData,
			'items' => $this->contentData['tx_gridelements_view_children'],
			'layout' => $this->getFlexFormValue('layout'),
			'active' => (integer) $this->getFlexFormValue('active') - 1,
			'slideToPosition' => (integer) $this->getFlexFormValue('slide_to_position'),
			'slideOffset' => (integer) $this->getFlexFormValue('slide_offset'),
			'ajaxLoading' => (integer) $this->getFlexFormValue('ajax_loading'),
		));

		$this->signalSlotDispatcher->dispatch(__CLASS__, __FUNCTION__ . 'AfterRender', array($this));

		return $this->view->render();

#\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->contentData);
	}

	/**
	  * parseAccordion
	  *
	  * @param string $content
	  * @param array $parameters
	  * @return string
	  */
	public function renderSpan($content, $parameters) {

		$pattern = isset($parameters['pattern.'])
			? $this->cObj->stdWrap($parameters['pattern'], $parameters['pattern.'])
			: $parameters['pattern'];
		$default = isset($parameters['default.'])
			? $this->cObj->stdWrap($parameters['default'], $parameters['default.'])
			: $parameters['default'] ?: '';
		$value = isset($parameters['value.'])
			? ($this->cObj->stdWrap($parameters['value'], $parameters['value.']) ?: '0,0,0,0')
			: $parameters['value'];
		$spans = \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(',', $value, TRUE);
		$spans = array(
			'xs' => $spans[0],
			'sm' => $spans[1],
			'md' => $spans[2],
			'lg' => $spans[3],
		);

		$classes = array();
		foreach ($spans as $device => &$span) {
			if ($span) {
				$classes[] = sprintf($pattern, $device, $span);
			}
		}

		if (count($classes) === 0 && $default) {
			$classes[] = $default;
		}

		$content = implode(' ', $classes);

		if (isset($parameters['stdWrap.'])) {
			$content = $this->cObj->stdWrap($content, $parameters['stdWrap.']);
		}

		return $content;
	}

	/**
	  * Returns the FlexForm field value from current backend layout.
	  *
	  * @param string $fieldName
	  * @return mixed
	  */
	protected function getFlexFormValue($fieldName) {
		$key = 'flexform_' . $this->contentData['tx_gridelements_backend_layout'] . '_' . $fieldName;
		return $this->contentData[$key];
	}

}
?>
