
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_carousel {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.carousel.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.carousel.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Bootstrap/Carousel.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/Carousel.gif,EXT:adx_twitter_bootstrap/Resources/Public/Icons/16x16/Carousel.gif

	config {

		colCount = 1
		rowCount = 1

		rows {
			1 {
				columns {
					1 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.carousel.column1
						colPos = 0
					}
				}
			}
		}
	}
}