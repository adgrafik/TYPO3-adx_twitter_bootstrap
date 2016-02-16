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


/**
 * Class Page
 * @package AdGrafik\AdxTwitterBootstrap\Domain\Model
 */
class Form extends \In2code\Powermail\Domain\Model\Form {

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdGrafik\AdxTwitterBootstrap\Domain\Model\Page>
	 * @lazy
	 */
	protected $pages;

	/**
	 * @var string $headerLayout
	 */
	protected $headerLayout;

	/**
	 * @var string $offset
	 */
	protected $offset;

	/**
	 * @var string $span
	 */
	protected $span;

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdGrafik\AdxTwitterBootstrap\Domain\Model\Page> $pages
	 * @return void
	 */
	public function setPages($pages) {
		$this->pages = $pages;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdGrafik\AdxTwitterBootstrap\Domain\Model\Page>
	 */
	public function getPages() {
		return $this->pages;
	}

	/**
	 * Set headerLayout
	 *
	 * @param string $headerLayout
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Form
	 */
	public function setHeaderLayout($headerLayout) {
		$this->headerLayout = $headerLayout;
		return $this;
	}

	/**
	 * Get headerLayout
	 *
	 * @return string
	 */
	public function getHeaderLayout() {
		return $this->headerLayout;
	}

	/**
	 * Set offset
	 *
	 * @param string $offset
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Form
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
	 * Set span
	 *
	 * @param string $span
	 * @return \AdGrafik\AdxTwitterBootstrap\Domain\Model\Form
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

}
