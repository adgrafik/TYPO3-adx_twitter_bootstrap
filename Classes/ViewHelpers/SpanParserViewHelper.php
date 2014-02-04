<?php
namespace AdGrafik\AdxTwitterBootstrap\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Arno Dudek <webmaster@adgrafik.at>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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


class SpanParserViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @param string $pattern
	 * @param string $ratio
	 * @param string $breakpoint
	 * @param integer $column
	 * @param string $default
	 * @return array
	 */
	public function render($ratio, $breakpoint, $column = 1, $pattern = 'col-%s-%s', $default = '') {

		$result = $default;
		$breakpoint = $breakpoint ?: 'xs';

		if ($ratio) {
			$ratio = strpos($ratio, ':')
				? \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(':', $ratio)
				: array($ratio);
			$result = sprintf($pattern, $breakpoint, $ratio[$column - 1]);
		}

		return $result;
	}

}

?>