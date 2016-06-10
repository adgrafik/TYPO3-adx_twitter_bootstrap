# *******************************************************
# Define content elements in "New Content Element Wizard"
# *******************************************************

mod.wizards.newContentElement.wizardItems {
	common.elements {
		header {
			iconIdentifier = content-header
			title = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:common_headerOnly_title
			description = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:common_headerOnly_description
			tt_content_defValues {
				CType = header
			}
		}
		text {
			iconIdentifier = content-text
			title = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:common_regularText_title
			description = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:common_regularText_description
			tt_content_defValues {
				CType = text
			}
		}
		div {
			iconIdentifier = content-special-div
			title = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:special_divider_title
			description = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:special_divider_description
			tt_content_defValues {
				CType = div
			}
		}
	}
	common.show := addToList(header,text,div)
}
