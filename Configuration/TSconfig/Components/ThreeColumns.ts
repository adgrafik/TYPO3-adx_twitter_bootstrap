
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_columns_threecolumns {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.threeColumns.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.threeColumns.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Components/ThreeColumns.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/ThreeColumns.gif,EXT:ad_gridelements_flexslider/Resources/Public/Icons/16x16/ThreeColumns.gif

	config {

		colCount = 3
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
					3 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.column3
						colPos = 2
					}
				}
			}
		}
	}
}