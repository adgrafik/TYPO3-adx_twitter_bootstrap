
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_tabs {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.tabs.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.tabs.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Components/Tabs.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/Tabs.gif,EXT:adx_twitter_bootstrap/Resources/Public/Icons/16x16/Tabs.gif

	config {

		colCount = 1
		rowCount = 1

		rows {
			1 {
				columns {
					1 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.tabs.column1
						colPos = 0
					}
				}
			}
		}
	}
}