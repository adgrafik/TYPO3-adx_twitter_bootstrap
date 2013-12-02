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


class Fields extends \Tx_Powermail_Domain_Model_Fields {

	/**
	 * @var string $placeholder
	 */
	protected $placeholder;

	/**
	 * @var string $hideLabel
	 */
	protected $hideLabel;

	/**
	 * @var string $elementSize
	 */
	protected $elementSize;

	/**
	 * @var string $buttonClass
	 */
	protected $buttonClass;

	/**
	 * @var string $buttonBlock
	 */
	protected $buttonBlock;

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
	 * @var integer $checkboxInline
	 */
	protected $checkboxInline;

	/**
	 * @var string $checkboxInlineBreakpoint
	 */
	protected $checkboxInlineBreakpoint;

	/**
	 * @var string $datepickerType
	 */
	protected $datepickerType;

	/**
	 * @var string $datepickerFormat
	 */
	protected $datepickerFormat;

	/**
	 * @var integer $datepickerWeekStart
	 */
	protected $datepickerWeekStart;

	/**
	 * @var \DateTime $datepickerStartDate
	 */
	protected $datepickerStartDate;

	/**
	 * @var \DateTime $datepickerEndDate
	 */
	protected $datepickerEndDate;

	/**
	 * @var integer $datepickerStartView
	 */
	protected $datepickerStartView;

	/**
	 * @var integer $datepickerMinViewMode
	 */
	protected $datepickerMinViewMode;

	/**
	 * @var string $datepickerTodayButton
	 */
	protected $datepickerTodayButton;

	/**
	 * @var string $datepickerOrientation
	 */
	protected $datepickerOrientation;

	/**
	 * @var integer $datepickerDaysOfWeekDisabled
	 */
	protected $datepickerDaysOfWeekDisabled;

	/**
	 * @var boolean $datepickerCalendarWeeks
	 */
	protected $datepickerCalendarWeeks;

	/**
	 * @var boolean $datepickerAutoclose
	 */
	protected $datepickerAutoclose;

	/**
	 * @var boolean $datepickerTodayHighlight
	 */
	protected $datepickerTodayHighlight;

	/**
	 * @var boolean $datepickerKeyboardNavigation
	 */
	protected $datepickerKeyboardNavigation;

	/**
	 * @var boolean $datepickerForceParse
	 */
	protected $datepickerForceParse;

	/**
	 * @var string $datepickerLanguage
	 */
	protected $datepickerLanguage;


	/**
	 * Set placeholder
	 *
	 * @param string $placeholder
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setPlaceholder($placeholder) {
		$this->placeholder = $placeholder;
		return $this;
	}

	/**
	 * Get placeholder
	 *
	 * @return string
	 */
	public function getPlaceholder() {
		return $this->placeholder;
	}

	/**
	 * Set hideLabel
	 *
	 * @param string $hideLabel
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setHideLabel($hideLabel) {
		$this->hideLabel = $hideLabel;
		return $this;
	}

	/**
	 * Get hideLabel
	 *
	 * @return string
	 */
	public function getHideLabel() {
		return $this->hideLabel;
	}

	/**
	 * Set elementSize
	 *
	 * @param string $elementSize
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setElementSize($elementSize) {
		$this->elementSize = $elementSize;
		return $this;
	}

	/**
	 * Get elementSize
	 *
	 * @return string
	 */
	public function getElementSize() {
		return $this->elementSize;
	}

	/**
	 * Set buttonClass
	 *
	 * @param string $buttonClass
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setButtonClass($buttonClass) {
		$this->buttonClass = $buttonClass;
		return $this;
	}

	/**
	 * Get buttonClass
	 *
	 * @return string
	 */
	public function getButtonClass() {
		return $this->buttonClass;
	}

	/**
	 * Set buttonBlock
	 *
	 * @param string $buttonBlock
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setButtonBlock($buttonBlock) {
		$this->buttonBlock = $buttonBlock;
		return $this;
	}

	/**
	 * Get buttonBlock
	 *
	 * @return string
	 */
	public function getButtonBlock() {
		return $this->buttonBlock;
	}

	/**
	 * Set offset
	 *
	 * @param string $offset
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
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
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
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
	 * Set span
	 *
	 * @param string $span
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
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
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
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
	 * Set clear
	 *
	 * @param boolean $clear
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
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
	 * Set checkboxInline
	 *
	 * @param integer $checkboxInline
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setCheckboxInline($checkboxInline) {
		$this->checkboxInline = (integer) $checkboxInline;
		return $this;
	}

	/**
	 * Get checkboxInline
	 *
	 * @return integer
	 */
	public function getCheckboxInline() {
		return $this->checkboxInline;
	}

	/**
	 * Set checkboxInlineBreakpoint
	 *
	 * @param string $checkboxInlineBreakpoint
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setCheckboxInlineBreakpoint($checkboxInlineBreakpoint) {
		$this->checkboxInlineBreakpoint = $checkboxInlineBreakpoint;
		return $this;
	}

	/**
	 * Get checkboxInlineBreakpoint
	 *
	 * @return string
	 */
	public function getCheckboxInlineBreakpoint() {
		return $this->checkboxInlineBreakpoint;
	}

	/**
	 * Set datepickerType
	 *
	 * @param string $datepickerType
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerType($datepickerType) {
		$this->datepickerType = $datepickerType;
		return $this;
	}

	/**
	 * Get datepickerType
	 *
	 * @return string
	 */
	public function getDatepickerType() {
		return $this->datepickerType;
	}

	/**
	 * Set datepickerFormat
	 *
	 * @param string $datepickerFormat
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerFormat($datepickerFormat) {
		$this->datepickerFormat = $datepickerFormat;
		return $this;
	}

	/**
	 * Get datepickerFormat
	 *
	 * @return string
	 */
	public function getDatepickerFormat() {
		return $this->datepickerFormat;
	}

	/**
	 * Set datepickerWeekStart
	 *
	 * @param integer $datepickerWeekStart
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerWeekStart($datepickerWeekStart) {
		$this->datepickerWeekStart = (integer) $datepickerWeekStart;
		return $this;
	}

	/**
	 * Get datepickerWeekStart
	 *
	 * @return integer
	 */
	public function getDatepickerWeekStart() {
		return $this->datepickerWeekStart;
	}

	/**
	 * Set datepickerStartDate
	 *
	 * @param \DateTime $datepickerStartDate
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerStartDate(\DateTime $datepickerStartDate) {
		$this->datepickerStartDate = $datepickerStartDate;
		return $this;
	}

	/**
	 * Get datepickerStartDate
	 *
	 * @return \DateTime
	 */
	public function getDatepickerStartDate() {
		return $this->datepickerStartDate;
	}

	/**
	 * Set datepickerEndDate
	 *
	 * @param \DateTime $datepickerEndDate
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerEndDate(\DateTime $datepickerEndDate) {
		$this->datepickerEndDate = $datepickerEndDate;
		return $this;
	}

	/**
	 * Get datepickerEndDate
	 *
	 * @return \DateTime
	 */
	public function getDatepickerEndDate() {
		return $this->datepickerEndDate;
	}

	/**
	 * Set datepickerStartView
	 *
	 * @param integer $datepickerStartView
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerStartView($datepickerStartView) {
		$this->datepickerStartView = (integer) $datepickerStartView;
		return $this;
	}

	/**
	 * Get datepickerStartView
	 *
	 * @return integer
	 */
	public function getDatepickerStartView() {
		return $this->datepickerStartView;
	}

	/**
	 * Set datepickerMinViewMode
	 *
	 * @param integer $datepickerMinViewMode
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerMinViewMode($datepickerMinViewMode) {
		$this->datepickerMinViewMode = (integer) $datepickerMinViewMode;
		return $this;
	}

	/**
	 * Get datepickerMinViewMode
	 *
	 * @return integer
	 */
	public function getDatepickerMinViewMode() {
		return $this->datepickerMinViewMode;
	}

	/**
	 * Set datepickerTodayButton
	 *
	 * @param string $datepickerTodayButton
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerTodayButton($datepickerTodayButton) {
		$this->datepickerTodayButton = $datepickerTodayButton;
		return $this;
	}

	/**
	 * Get datepickerTodayButton
	 *
	 * @return string
	 */
	public function getDatepickerTodayButton() {
		return $this->datepickerTodayButton;
	}

	/**
	 * Set datepickerOrientation
	 *
	 * @param string $datepickerOrientation
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerOrientation($datepickerOrientation) {
		$this->datepickerOrientation = $datepickerOrientation;
		return $this;
	}

	/**
	 * Get datepickerOrientation
	 *
	 * @return string
	 */
	public function getDatepickerOrientation() {
		return $this->datepickerOrientation;
	}

	/**
	 * Set datepickerDaysOfWeekDisabled
	 *
	 * @param integer $datepickerDaysOfWeekDisabled
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerDaysOfWeekDisabled($datepickerDaysOfWeekDisabled) {
		$this->datepickerDaysOfWeekDisabled = (integer) $datepickerDaysOfWeekDisabled;
		return $this;
	}

	/**
	 * Get datepickerDaysOfWeekDisabled
	 *
	 * @return integer
	 */
	public function getDatepickerDaysOfWeekDisabled() {
		return $this->datepickerDaysOfWeekDisabled;
	}

	/**
	 * Set datepickerCalendarWeeks
	 *
	 * @param boolean $datepickerCalendarWeeks
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerCalendarWeeks($datepickerCalendarWeeks) {
		$this->datepickerCalendarWeeks = (boolean) $datepickerCalendarWeeks;
		return $this;
	}

	/**
	 * Get datepickerCalendarWeeks
	 *
	 * @return boolean
	 */
	public function isDatepickerCalendarWeeks() {
		return $this->datepickerCalendarWeeks;
	}

	/**
	 * Set datepickerAutoclose
	 *
	 * @param boolean $datepickerAutoclose
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerAutoclose($datepickerAutoclose) {
		$this->datepickerAutoclose = (boolean) $datepickerAutoclose;
		return $this;
	}

	/**
	 * Get datepickerAutoclose
	 *
	 * @return boolean
	 */
	public function isDatepickerAutoclose() {
		return $this->datepickerAutoclose;
	}

	/**
	 * Set datepickerTodayHighlight
	 *
	 * @param boolean $datepickerTodayHighlight
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerTodayHighlight($datepickerTodayHighlight) {
		$this->datepickerTodayHighlight = (boolean) $datepickerTodayHighlight;
		return $this;
	}

	/**
	 * Get datepickerTodayHighlight
	 *
	 * @return boolean
	 */
	public function isDatepickerTodayHighlight() {
		return $this->datepickerTodayHighlight;
	}

	/**
	 * Set datepickerKeyboardNavigation
	 *
	 * @param boolean $datepickerKeyboardNavigation
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerKeyboardNavigation($datepickerKeyboardNavigation) {
		$this->datepickerKeyboardNavigation = (boolean) $datepickerKeyboardNavigation;
		return $this;
	}

	/**
	 * Get datepickerKeyboardNavigation
	 *
	 * @return boolean
	 */
	public function isDatepickerKeyboardNavigation() {
		return $this->datepickerKeyboardNavigation;
	}

	/**
	 * Set datepickerForceParse
	 *
	 * @param boolean $datepickerForceParse
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerForceParse($datepickerForceParse) {
		$this->datepickerForceParse = (boolean) $datepickerForceParse;
		return $this;
	}

	/**
	 * Get datepickerForceParse
	 *
	 * @return boolean
	 */
	public function isDatepickerForceParse() {
		return $this->datepickerForceParse;
	}

	/**
	 * Set datepickerLanguage
	 *
	 * @param string $datepickerLanguage
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Fields
	 */
	public function setDatepickerLanguage($datepickerLanguage) {
		$this->datepickerLanguage = $datepickerLanguage;
		return $this;
	}

	/**
	 * Get datepickerLanguage
	 *
	 * @return string
	 */
	public function getDatepickerLanguage() {
		if ($this->datepickerLanguage) {
			return $this->datepickerLanguage;
		} else if ($GLOBALS['TSFE']->lang && $GLOBALS['TSFE']->lang != 'en') {
			return $GLOBALS['TSFE']->lang;
		} else {
			return;
		}
	}

	/**
	 * Get datepickerLanguage
	 *
	 * @return string
	 */
	public function getDatepickerLanguageJavaScriptFile() {
		$languagePathAndFilename = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:adx_twitter_bootstrap/Resources/Public/JavaScript/BootstrapDatepicker/1.2.x/locales/bootstrap-datepicker.' . $this->getDatepickerLanguage() . '.js');
		if (is_file($languagePathAndFilename)) {
			return $languagePathAndFilename;
		}
	}

	/**
	 * Get datepickerLanguage
	 *
	 * @return string
	 */
	public function getDatepickerOptions() {

		$options = array();

		if ($format = $this->getDatepickerFormat()) {
			$options['format'] = $format;
		}

		if ($language = $this->getDatepickerLanguage()) {
			$options['language'] = $language;
		}

		if ($weekStart = $this->getDatepickerWeekStart()) {
			$options['weekStart'] = $weekStart;
		}

		if ($startDate = $this->getDatepickerStartDate()) {
			$options['startDate'] = $startDate->format('m.d.Y');
		}

		if ($endDate = $this->getDatepickerEndDate()) {
			$options['endDate'] = $endDate->format('m.d.Y');
		}

		if ($orientation = $this->getDatepickerOrientation()) {
			$options['orientation'] = $orientation;
		}

		if ($startView = $this->getDatepickerStartView()) {
			$options['startView'] = $startView;
		}

		if ($minViewMode = $this->getDatepickerMinViewMode()) {
			$options['minViewMode'] = $minViewMode;
		}

		if ($todayBotton = $this->getDatepickerTodayButton()) {
			$options['todayBtn'] = $todayBotton;
		}

		if ($daysOfWeekDisabled = $this->getDatepickerDaysOfWeekDisabled()) {
			$options['daysOfWeekDisabled'] = $daysOfWeekDisabled;
		}

		if ($calendarWeeks = $this->isDatepickerCalendarWeeks()) {
			$options['calendarWeeks'] = $calendarWeeks;
		}

		if ($autoclose = $this->isDatepickerAutoclose()) {
			$options['autoclose'] = $autoclose;
		}

		if ($todayHighlight = $this->isDatepickerTodayHighlight()) {
			$options['todayHighlight'] = $todayHighlight;
		}

		if (($keyboardNavigation = $this->isDatepickerKeyboardNavigation()) === FALSE) {
			$options['keyboardNavigation'] = $keyboardNavigation;
		}

		if (($forceParse = $this->isDatepickerForceParse()) === FALSE) {
			$options['forceParse'] = $forceParse;
		}

		return json_encode($options);
	}

}

?>