
/**
 * Settings for powermail.
 */
[userFunc = user_adxtwitterbootstrap_isExtensionLoaded(powermail)]

TCEFORM {

	tx_powermail_domain_model_forms {

		css {

			removeItems = layout1,layout2,layout3

			addItems {

				form-horizontal = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_forms.labelLeftLeftAligned
			}
		}
	}

	tx_powermail_domain_model_pages {

		css {

			removeItems = layout1,layout2,layout3

			addItems {

				defaultNoLegend = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.defaultNoLegend
				columnsTwo = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.columnsTwo
				columnsTwoNoLegend = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_pages.columnsTwoNoLegend
			}
		}
	}

	tx_powermail_domain_model_fields {

		css {

			removeItems = layout1,layout2,layout3

			addItems {

				columnFull = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnFull
				columnHalf = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnHalf
				columnHalfSingleRow = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnHalfSingleRow
				columnThird = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnThird
				columnThirdSingleRow = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnThirdSingleRow
				columnTwoThird = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnTwoThird
				columnTwoThirdSingleRow = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnTwoThirdSingleRow
				columnQuarter = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnQuarter
				columnQuarterSingleRow = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnQuarterSingleRow
				columnTwoQuarter = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnTwoQuarter
				columnTwoQuarterSingleRow = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnTwoQuarterSingleRow
				columnThreeQuarter = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnThreeQuarter
				columnThreeQuarterSingleRow = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnThreeQuarterSingleRow
				--div-- = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnInner
				columnInnerInline = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnInnerInline
				columnInnerHalf = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnInnerHalf
				columnInnerThird = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnInnerThird
				columnInnerQuarter = LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_fields.columnInnerQuarter
			}
		}
	}
}

[end]