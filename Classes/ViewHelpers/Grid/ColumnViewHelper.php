<?php
namespace AdGrafik\AdxTwitterBootstrap\ViewHelpers\Grid;

/*																		*
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *																		*
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.										  *
 *																		*
 * This script is distributed in the hope that it will be useful, but	 *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-	*
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General	  *
 * Public License for more details.									   *
 *																		*/

use \TYPO3\CMS\Core\Utility\GeneralUtility;

class ColumnViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
	/**
	 * @var string
	 */
	protected $tagName = 'div';

	/**
	 * Arguments initialization
	 *
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerUniversalTagAttributes();
	}

	/**
	 * Will only render a row with columns if necessary.
	 *
	 * @param string $deviceSpan
	 * @param string $deviceOffset
	 * @return string
	 */
	public function render($deviceSpan = NULL, $deviceOffset = NULL) {
		// Nothing else to do, if nothing set.
		if ($deviceSpan === '-1,-1,-1,-1' && $deviceOffset === '-1,-1,-1,-1') {
			return $this->renderChildren();
		}

		$classes = array();
		$deviceSpan = $this->resolveSpanByDevice($deviceSpan);
		foreach ($deviceSpan as $device => $span) {
			if ($span !== -1) {
				$classes[] = sprintf('col-%s-%s', $device, $span);
			}
		}
		$deviceOffset = $this->resolveSpanByDevice($deviceOffset);
		foreach ($deviceOffset as $device => $span) {
			if ($span !== -1) {
				$classes[] = sprintf('col-%s-offset-%s', $device, $span);
			}
		}

		if (count($classes) === 0) {
			return $this->renderChildren();
		}

		$this->tag->addAttribute('class', implode(' ', $classes));
		$this->tag->setContent($this->renderChildren());
		$this->tag->forceClosingTag(true);
		return $this->tag->render();
	}

	/**
	 * resolveSpanByDevice
	 *
	 * @param string $span
	 * @return array
	 */
	protected function resolveSpanByDevice($span) {
		$span = $span ?: '-1,-1,-1,-1';
		$span = GeneralUtility::intExplode(',', $span, TRUE);
		$span = array(
			'xs' => intval($span[0]),
			'sm' => intval($span[1]),
			'md' => intval($span[2]),
			'lg' => intval($span[3]),
		);
		return $span;
	}
}
