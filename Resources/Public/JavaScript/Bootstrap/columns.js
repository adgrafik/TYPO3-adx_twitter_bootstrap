/** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 ************************************************************************************************
 *
 * @copyright 2012, Arno Dudek, http://www.adgrafik.at
 * @license The GNU General Public License, http://www.gnu.org/copyleft/gpl.html.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 *
 ************************************************************************************************
 ** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


(function($){
	// Equals height of grid boxes.
	$.fn.adxEqualColumnHeight = function(){
		this.each(function(index, element){
			var $element = $(element),
				$target = $element.find('> [class*="col-"]');
			if ($element.data('target')){
				$target = $element.find($element.data('target'));
			}
			$target.height(Math.max.apply($target, $.map($target, function(element){ return $(element).height() })));
		});
	}
})(jQuery);