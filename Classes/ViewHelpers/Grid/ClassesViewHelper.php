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

class ClassesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @param string $span
	 * @param string $offset
	 * @return string
	 */
	public function render($span = NULL, $offset = NULL) {

		$classes = array();
		$deviceSpan = $this->resolveSpanByDevice($span);
		foreach ($deviceSpan as $device => $span) {
			if ($span !== -1) {
				$classes[] = sprintf('col-%s-%s', $device, $span);
			}
		}
		$deviceOffset = $this->resolveSpanByDevice($offset);
		foreach ($deviceOffset as $device => $span) {
			if ($span !== -1) {
				$classes[] = sprintf('col-%s-offset-%s', $device, $span);
			}
		}

		return implode(' ', $classes);
	}

	/**
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
