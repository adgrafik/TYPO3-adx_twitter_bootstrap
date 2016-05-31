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

class RowViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {

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
	 * @param string $span
	 * @param string $offset
	 * @return string
	 */
	public function render($span = NULL, $offset = NULL) {
		// Nothing else to do, if nothing set.
		if ($span === '-1,-1,-1,-1' && $offset === '-1,-1,-1,-1') {
			return $this->renderChildren();
		}

		$this->tag->addAttribute('class', 'row');
		$this->tag->setContent($this->renderChildren());
		$this->tag->forceClosingTag(true);
		return $this->tag->render();
	}
}
