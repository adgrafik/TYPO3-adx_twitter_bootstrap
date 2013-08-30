<?php

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


/**
 *
 *
 * @package powermail
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_AdxTwitterBootstrap_Domain_Model_Pages extends Tx_Powermail_Domain_Model_Pages {

	/**
	 * @var boolean $hideLegend
	 */
	protected $hideLegend;

	/**
	 * @var integer $offset
	 */
	protected $offset;

	/**
	 * @var integer $span
	 */
	protected $span;

	/**
	 * @var boolean $endOfRow
	 */
	protected $endOfRow;

	/**
	 * Set hideLegend
	 *
	 * @param boolean $hideLegend
	 * @return Tx_AdxTwitterBootstrap_Domain_Model_Pages
	 */
	public function setHideLegend($hideLegend) {
		$this->hideLegend = (boolean) $hideLegend;
		return $this;
	}

	/**
	 * Get hideLegend
	 *
	 * @return boolean
	 */
	public function isHideLegend() {
		return $this->hideLegend;
	}

	/**
	 * Set offset
	 *
	 * @param integer $offset
	 * @return Tx_AdxTwitterBootstrap_Domain_Model_Fields
	 */
	public function setOffset($offset) {
		$this->offset = (integer) $offset;
		return $this;
	}

	/**
	 * Get offset
	 *
	 * @return integer
	 */
	public function getOffset() {
		return $this->offset;
	}

	/**
	 * Set span
	 *
	 * @param integer $span
	 * @return Tx_AdxTwitterBootstrap_Domain_Model_Fields
	 */
	public function setSpan($span) {
		$this->span = (integer) $span;
		return $this;
	}

	/**
	 * Get span
	 *
	 * @return integer
	 */
	public function getSpan() {
		return $this->span;
	}

	/**
	 * Set endOfRow
	 *
	 * @param boolean $endOfRow
	 * @return Tx_AdxTwitterBootstrap_Domain_Model_Fields
	 */
	public function setEndOfRow($endOfRow) {
		$this->endOfRow = (boolean) $endOfRow;
		return $this;
	}

	/**
	 * Get endOfRow
	 *
	 * @return boolean
	 */
	public function isEndOfRow() {
		return $this->endOfRow;
	}

}
?>