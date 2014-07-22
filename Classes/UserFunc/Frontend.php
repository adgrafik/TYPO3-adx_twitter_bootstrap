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
		0 => '',
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
	 * @var string $currentUid
	 */
	static protected $currentUid;

	/**
	 * @var array $free
	 */
	static protected $free = array(
		'xs' => 12,
		'sm' => 12,
		'md' => 12,
		'lg' => 12,
	);

	/**
	 * renderColumns
	 *
	 * @param string $content
	 * @param array $parameters
	 * @return string
	 */
	public function renderColumnClasses($content, $parameters) {

		if ($this->cObj->checkIf($parameters['if.']) === FALSE) {
			return $content;
		}

		$reverseOrder = $this->cObj->stdWrap($parameters['reverseOrder'], $parameters['reverseOrder.']);
		$format = $this->cObj->stdWrap($parameters['format'], $parameters['format.']) ?: 'col-%s-%s';
		$forceMaxSpan = $this->cObj->stdWrap($parameters['forceMaxSpan'], $parameters['forceMaxSpan.']);
		$forceMinSpan = (boolean) $this->cObj->stdWrap($parameters['forceMinSpan'], $parameters['forceMinSpan.']);
		$deviceSpanAsString = $this->cObj->stdWrap($parameters['deviceSpan'], $parameters['deviceSpan.']) ?: '-1,-1,-1,-1';
		$deviceSpan = $this->resolveSpanByDevice($deviceSpanAsString);

		if (isset($deviceSpan[$forceMaxSpan])) {
			$deviceSpan[$forceMaxSpan] = 12;
		}

		$total = array(
			'xs' => 12,
			'sm' => 12,
			'md' => 12,
			'lg' => 12,
		);

		// Reset free span if parsing new content element.
		if ($reverseOrder && self::$currentUid != $this->cObj->data['uid']) {
			self::$currentUid = $this->cObj->data['uid'];
			self::$free = $total;
		}

		$classes = array();
		$reverseAt;
		foreach ($deviceSpan as $device => $span) {

			// Add span class for current device.
			if ($forceMinSpan === FALSE && $span > 0 || $forceMinSpan && $span >= 0) {
				$classes[] = sprintf($format, $device, $span);
			}

			// Set device when the reverse begins.
			if ($device === $reverseOrder) {
				$reverseAt = $reverseOrder;
			}

			// No pull and push needed if span is -1 or no reverse is set.
			if ($span === 0 || $reverseAt === NULL) {
				continue;
			}

			// Do magic offset calculation.
			$offset = $total[$device] - self::$free[$device] - (self::$free[$device] = self::$free[$device] - $deviceSpan[$device]);
			if ($offset > 0) {
				$classes[] = sprintf('col-%s-pull-%s', $device, $offset);
			} else if ($offset < 0) {
				$classes[] = sprintf('col-%s-push-%s', $device, $offset * -1);
			}
		}

		return implode(' ', $classes);
	}

	/**
	  * renderVisibilityClasses
	  *
	  * @param string $content
	  * @param array $parameters
	  * @return string
	  */
	public function renderVisibilityClasses($content, $parameters) {
		$visibility = (integer) $this->cObj->stdWrap($parameters['visibility'], $parameters['visibility.']);
		return self::$visibilityMatrix[$visibility];
	}

	/**
	  * parseClearfixClasses
	  *
	  * @param string $content
	  * @param array $parameters
	  * @return string
	  */
	public function renderClearfixClasses($content, $parameters) {
		$clear = (integer) $this->cObj->stdWrap($parameters['clear'], $parameters['clear.']);
		return self::$clearMatrix[$clear];
	}

	/**
	 * resolveSpanByDevice
	 *
	 * @param string $span
	 * @return array
	 */
	protected function resolveSpanByDevice($span) {

		if (preg_match('/[0-9]{1,2},?/', $span) === FALSE) {
			$span = '0,0,0,0';
		}

		$span = \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(',', $span, TRUE);
		$span = array(
			'xs' => intval($span[0]),
			'sm' => intval($span[1]),
			'md' => intval($span[2]),
			'lg' => intval($span[3]),
		);

		return $span;
	}

	/**
	 * resolveSpanByDevice
	 *
	 * @param string $span
	 * @param integer $columns
	 * @return array
	 */
	protected function resolveColumnsByDevice($span, $columns = 12) {

		if (preg_match('/[0-9]{1,2},?/', $span) === FALSE) {
			$span = '0,0,0,0';
		}

		$span = \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(',', $span, TRUE);
		$span = array(
			'xs' => $xs = ($span[0] ? intval($columns / $span[0]) : 1),
			'sm' => $sm = ($span[1] ? intval($columns / $span[1]) : $xs),
			'md' => $md = ($span[2] ? intval($columns / $span[2]) : $sm),
			'lg' => $span[3] ? intval($columns / $span[3]) : $md,
		);

		return $span;
#\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->contentData);
	}

}
?>
