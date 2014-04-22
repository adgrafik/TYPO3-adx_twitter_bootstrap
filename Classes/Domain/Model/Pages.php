<?php
namespace AdGrafik\AdxTwitterBootstrap\Domain\Model;

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


class Pages extends \Tx_Powermail_Domain_Model_Pages {

	/**
	 * @var string $layout
	 */
	protected $layout;

	/**
	 * @var string $hideLegend
	 */
	protected $hideLegend;

	/**
	 * @var string $offset
	 */
	protected $offset;

	/**
	 * @var string $offsetBreakpoint
	 */
	protected $offsetBreakpoint;

	/**
	 * @var string $span
	 */
	protected $span;

	/**
	 * @var string $spanBreakpoint
	 */
	protected $spanBreakpoint;

	/**
	 * @var boolean $clear
	 */
	protected $clear;

	/**
	 * @var string $labelToFieldRatio
	 */
	protected $labelToFieldRatio;

	/**
	 * @var string $labelToFieldRatioBreakpoint
	 */
	protected $labelToFieldRatioBreakpoint;

	/**
	 * Set layout
	 *
	 * @param string $layout
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
		return $this;
	}

	/**
	 * Get layout
	 *
	 * @return string
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Set hideLegend
	 *
	 * @param string $hideLegend
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setHideLegend($hideLegend) {
		$this->hideLegend = $hideLegend;
		return $this;
	}

	/**
	 * Get hideLegend
	 *
	 * @return string
	 */
	public function getHideLegend() {
		return $this->hideLegend;
	}

	/**
	 * Set span
	 *
	 * @param string $span
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setSpan($span) {
		$this->span = $span;
		return $this;
	}

	/**
	 * Get span
	 *
	 * @return string
	 */
	public function getSpan() {
		return $this->span;
	}

	/**
	 * Set spanBreakpoint
	 *
	 * @param string $spanBreakpoint
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setSpanBreakpoint($spanBreakpoint) {
		$this->spanBreakpoint = $spanBreakpoint;
		return $this;
	}

	/**
	 * Get spanBreakpoint
	 *
	 * @return string
	 */
	public function getSpanBreakpoint() {
		return $this->spanBreakpoint;
	}

	/**
	 * Get span class
	 *
	 * @return string
	 */
	public function getSpanClass() {
		$class = $this->getSpan()
			? sprintf('col-%s-%s', $this->getSpanBreakpoint(), $this->getSpan())
			: 'col-xs-12';
		return $class;
	}

	/**
	 * Set offset
	 *
	 * @param string $offset
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setOffset($offset) {
		$this->offset = $offset;
		return $this;
	}

	/**
	 * Get offset
	 *
	 * @return string
	 */
	public function getOffset() {
		return $this->offset;
	}

	/**
	 * Set offsetBreakpoint
	 *
	 * @param string $offsetBreakpoint
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setOffsetBreakpoint($offsetBreakpoint) {
		$this->offsetBreakpoint = $offsetBreakpoint;
		return $this;
	}

	/**
	 * Get offsetBreakpoint
	 *
	 * @return string
	 */
	public function getOffsetBreakpoint() {
		return $this->offsetBreakpoint;
	}

	/**
	 * Get offset class
	 *
	 * @return string
	 */
	public function getOffsetClass() {
		$class = $this->getOffset()
			? sprintf('col-%s-offset-%s', $this->getOffsetBreakpoint(), $this->getOffset())
			: '';
		return $class;
	}

	/**
	 * Set clear
	 *
	 * @param boolean $clear
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setClear($clear) {
		$this->clear = (boolean) $clear;
		return $this;
	}

	/**
	 * Get clear
	 *
	 * @return boolean
	 */
	public function isClear() {
		return $this->clear;
	}

	/**
	 * Set labelToFieldRatio
	 *
	 * @param string $labelToFieldRatio
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setLabelToFieldRatio($labelToFieldRatio) {
		$this->labelToFieldRatio = $labelToFieldRatio;
		return $this;
	}

	/**
	 * Get labelToFieldRatio
	 *
	 * @return string
	 */
	public function getLabelToFieldRatio() {
		return $this->labelToFieldRatio;
	}

	/**
	 * Set labelToFieldRatioBreakpoint
	 *
	 * @param string $labelToFieldRatioBreakpoint
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Pages
	 */
	public function setLabelToFieldRatioBreakpoint($labelToFieldRatioBreakpoint) {
		$this->labelToFieldRatioBreakpoint = $labelToFieldRatioBreakpoint;
		return $this;
	}

	/**
	 * Get labelToFieldRatioBreakpoint
	 *
	 * @return string
	 */
	public function getLabelToFieldRatioBreakpoint() {
		return $this->labelToFieldRatioBreakpoint ?: 'xs';
	}

	/**
	 * Get labelToFieldRatio as array
	 *
	 * @return string
	 */
	public function getLabelToFieldRatioClass() {

		$labelClass = $fieldClass = '';
		$labelToFieldRatio = $this->getLabelToFieldRatio();

		if (strpos($labelToFieldRatio, ':')) {
			$labelToFieldRatio = \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(':', $labelToFieldRatio);
			$labelClass = sprintf('col-%s-%s', $this->getLabelToFieldRatioBreakpoint(), $labelToFieldRatio[0]);
			$fieldClass = sprintf('col-%s-%s', $this->getLabelToFieldRatioBreakpoint(), $labelToFieldRatio[1]);
		}

		$classes = array(
			'label' => $labelClass,
			'field' => $fieldClass,
		);

		return $classes;
	}

}
?>