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
	}
	common.show := addToList(header)
}
