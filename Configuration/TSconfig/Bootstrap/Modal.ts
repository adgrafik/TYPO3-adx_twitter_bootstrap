
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxtwitterbootstrap_modal {

	title = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.modal.title
	description = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.modal.description
	flexformDS = FILE:EXT:adx_twitter_bootstrap/Configuration/FlexForm/Bootstrap/Modal.xml
	icon = EXT:adx_twitter_bootstrap/Resources/Public/Icons/24x24/Modal.gif,EXT:adx_twitter_bootstrap/Resources/Public/Icons/16x16/Modal.gif

	config {

		colCount = 1
		rowCount = 1

		rows {
			1 {
				columns {
					1 {
						name = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db.xlf:TSconfig.modal.column1
						colPos = 0
					}
				}
			}
		}
	}
}