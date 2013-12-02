
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_twocolumns {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.twoColumns.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.twoColumns.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Bootstrap/TwoColumns.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/TwoColumns.gif,EXT:adx_twitter_bootstrap/Resources/Public/Icons/16x16/TwoColumns.gif

	config {

		colCount = 2
		rowCount = 1

		rows {
			1 {
				columns {
					1 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.column1
						colPos = 0
					}
					2 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.column2
						colPos = 1
					}
				}
			}
		}
	}
}