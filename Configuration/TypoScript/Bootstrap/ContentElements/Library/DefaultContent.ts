
# Default configuration for content elements which are using FLUIDTEMPLATE directly
lib.defaultContent >
lib.defaultContent = FLUIDTEMPLATE
lib.defaultContent {
	templateName = Default
	templateRootPaths {
		0 = EXT:adx_twitter_bootstrap/Resources/Private/ContentElements/Templates/
		10 = {$plugin.tx_adxtwitterbootstrap.content.templateRootPath}
	}
	partialRootPaths {
		0 = EXT:adx_twitter_bootstrap/Resources/Private/ContentElements/Partials/
		10 = {$plugin.tx_adxtwitterbootstrap.content.partialRootPath}
	}
	layoutRootPaths {
		0 = EXT:adx_twitter_bootstrap/Resources/Private/ContentElements/Layouts/
		10 = {$plugin.tx_adxtwitterbootstrap.content.layoutRootPath}
	}
	settings {
		defaultHeaderType = {$styles.content.defaultHeaderType}
/*
		media {
			popup {
				bodyTag = <body style="margin:0; background:#fff;">
				wrap = <a href="javascript:close();"> | </a>
				width = {$styles.content.textmedia.linkWrap.width}
				height = {$styles.content.textmedia.linkWrap.height}
				crop.data = file:current:crop

				JSwindow = 1
				JSwindow {
					newWindow = {$styles.content.textmedia.linkWrap.newWindow}
					if.isFalse = {$styles.content.textmedia.linkWrap.lightboxEnabled}
				}

				directImageLink = {$styles.content.textmedia.linkWrap.lightboxEnabled}

				linkParams.ATagParams.dataWrap =  class="{$styles.content.textmedia.linkWrap.lightboxCssClass}" rel="{$styles.content.textmedia.linkWrap.lightboxRelAttribute}"
			}
		}
*/
	}
}
