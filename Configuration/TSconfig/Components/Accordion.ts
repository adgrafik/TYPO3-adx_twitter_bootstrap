
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_accordion {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.accordion.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.accordion.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Components/Accordion.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/Accordion.gif,EXT:adx_twitter_bootstrap/Resources/Public/Icons/16x16/Accordion.gif

	config {

		colCount = 1
		rowCount = 1

		rows {
			1 {
				columns {
					1 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.accordion.column1
						colPos = 0
					}
				}
			}
		}
	}
}