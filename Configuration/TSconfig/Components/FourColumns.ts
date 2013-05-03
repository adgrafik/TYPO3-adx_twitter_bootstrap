
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_columns_fourcolumns {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.fourColumns.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.fourColumns.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Components/FourColumns.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/FourColumns.gif,EXT:adx_twitter_bootstrap/Resources/Public/Icons/16x16/FourColumns.gif

	config {

		colCount = 4
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
					4 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.columns.column4
						colPos = 3
					}
				}
			}
		}
	}
}