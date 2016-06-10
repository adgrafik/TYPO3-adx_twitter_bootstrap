<?php
namespace AdGrafik\AdxTwitterBootstrap\ViewHelpers;

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

class TagViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
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
		$this->registerArgument('condition', 'boolean', 'Condition if tag must be rendered.', FALSE);
		$this->registerArgument('conditionAnd', 'boolean', 'Condition if tag must be rendered.', FALSE);
		$this->registerArgument('conditionOr', 'boolean', 'Condition if tag must be rendered.', FALSE);
		$this->registerArgument('conditionKey', 'string', 'Condition if tag must be rendered.');
	}

	/**
	 * Will only render a row with columns if necessary.
	 *
	 * @param string $tagName
	 * @param array $style
	 * @param array $class
	 * @param bool $forceClosing
	 * @return string
	 */
	public function render($tagName = NULL, array $styles = NULL, array $classes = NULL, $forceClosing = TRUE) {
		if ($tagName) {
			$this->tagName = $tagName;
		}

		if ($this->evaluateCondition($this->arguments) === FALSE) {
			return $this->renderChildren();
		}

		$classValues = array();
		if ($class = $this->tag->getAttribute('class')) {
			$classValues[] = $class;
		}
		foreach ($classes as $value) {
			$value = trim($value);
			if ($value) {
				$classValues[] = $value;
			}
		}
		if (count($classValues)) {
			$this->tag->addAttribute('class', implode(' ', $classValues));
		} else if ($this->arguments['conditionKey'] == 'hasClasses') {
			return $this->renderChildren();
		}

		$styleValues = array();
		if ($style = $this->tag->getAttribute('style')) {
			$styleValues[] = $style;
		}
		foreach ($styles as $key => $value) {
			$value = trim($value, ' ;');
			if ($value) {
				$styleValues[] = $key . ': ' . $value . ';';
			}
		}
		if (count($styleValues)) {
			$this->tag->addAttribute('style', implode(' ', $styleValues));
		}

		if ($this->arguments['conditionKey'] == 'hasAttributes' && count($this->tag->getAttributes()) == 0) {
			return $this->renderChildren();
		}

		$this->tag->setContent($this->renderChildren());
		$this->tag->forceClosingTag($forceClosing);
		return $this->tag->render();
	}

	/**
	 * This method decides if the condition is TRUE or FALSE.
	 *
	 * @param array $arguments
	 * @return bool
	 */
	protected function evaluateCondition($arguments = NULL) {
		if (isset($arguments['condition'])) {
			if (isset($arguments['conditionAnd'])) {
				return ($arguments['condition'] && $arguments['conditionAnd']);
			} else if (isset($arguments['conditionOr'])) {
				return ($arguments['condition'] || $arguments['conditionOr']);
			} else {
				return $arguments['condition'];
			}
		}
		return TRUE;
	}
}
