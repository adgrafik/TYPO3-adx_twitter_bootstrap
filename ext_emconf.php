<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "adx_twitter_bootstrap".
 *
 * Auto generated 05-12-2012 12:30
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ad: Twitter Bootstrap',
	'description' => 'Twitter Bootstrap (http://twitter.github.com/bootstrap/)',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.2',
	'dependencies' => 'adx_less',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Arno Dudek',
	'author_email' => 'webmaster@adgrafik.at',
	'author_company' => 'ad:grafik',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'adx_less' => '1.0.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			't3jquery' => '2.0.6-',
		),
	),
	'_md5_values_when_last_written' => 'a:339:{s:9:"ChangeLog";s:4:"d63d";s:12:"ext_icon.gif";s:4:"d6ca";s:17:"ext_localconf.php";s:4:"7d14";s:14:"ext_tables.php";s:4:"6aea";s:28:"Classes/Service/UserFunc.php";s:4:"a340";s:30:"Configuration/TSconfig/Page.ts";s:4:"d8e2";s:45:"Configuration/TypoScript/Common/constants.txt";s:4:"235d";s:41:"Configuration/TypoScript/Common/setup.txt";s:4:"c425";s:44:"Configuration/TypoScript/Powermail/setup.txt";s:4:"ddbb";s:69:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/component.json";s:4:"8f40";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/CONTRIBUTING.md";s:4:"5a19";s:62:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/LICENSE";s:4:"34f8";s:63:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/Makefile";s:4:"678b";s:67:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/package.json";s:4:"fd24";s:64:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/README.md";s:4:"94ea";s:73:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/base-css.html";s:4:"c1eb";s:75:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/components.html";s:4:"a00c";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/customize.html";s:4:"22b1";s:71:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/extend.html";s:4:"d880";s:80:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/getting-started.html";s:4:"82df";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/index.html";s:4:"603b";s:75:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/javascript.html";s:4:"1d36";s:76:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/scaffolding.html";s:4:"1d15";s:95:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/css/bootstrap-responsive.css";s:4:"0bfd";s:84:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/css/bootstrap.css";s:4:"fbe0";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/css/docs.css";s:4:"1ddf";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/ico/apple-touch-icon-114-precomposed.png";s:4:"70ad";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/ico/apple-touch-icon-144-precomposed.png";s:4:"e035";s:106:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/ico/apple-touch-icon-57-precomposed.png";s:4:"8657";s:106:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/ico/apple-touch-icon-72-precomposed.png";s:4:"38f0";s:82:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/ico/favicon.ico";s:4:"b108";s:98:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bootstrap-mdo-sfmoma-01.jpg";s:4:"b1cc";s:98:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bootstrap-mdo-sfmoma-02.jpg";s:4:"5495";s:98:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bootstrap-mdo-sfmoma-03.jpg";s:4:"0f3d";s:101:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bs-docs-bootstrap-features.png";s:4:"ed6a";s:99:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bs-docs-masthead-pattern.png";s:4:"4a50";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bs-docs-responsive-illustrations.png";s:4:"1ee3";s:97:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/bs-docs-twitter-github.png";s:4:"fa78";s:101:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/glyphicons-halflings-white.png";s:4:"9bbc";s:95:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/glyphicons-halflings.png";s:4:"2516";s:93:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/grid-baseline-20px.png";s:4:"dc51";s:90:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/less-logo-large.png";s:4:"5551";s:99:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/responsive-illustrations.png";s:4:"1d47";s:99:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/8020select.png";s:4:"a5db";s:102:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/adoptahydrant.png";s:4:"1148";s:101:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/breakingnews.png";s:4:"d615";s:96:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/fleetio.png";s:4:"3669";s:102:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/gathercontent.png";s:4:"bbb4";s:95:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/jshint.png";s:4:"eb3f";s:94:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/kippt.png";s:4:"d9b7";s:99:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/example-sites/soundready.png";s:4:"6394";s:110:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-carousel.png";s:4:"b886";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-fluid.jpg";s:4:"86c1";s:106:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-hero.jpg";s:4:"9e13";s:118:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-marketing-narrow.png";s:4:"e44f";s:108:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-signin.png";s:4:"4b12";s:109:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-starter.jpg";s:4:"c6df";s:115:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/bootstrap-example-sticky-footer.png";s:4:"3f4a";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/browser-icon-chrome.png";s:4:"1352";s:104:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/browser-icon-firefox.png";s:4:"34a9";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/browser-icon-safari.png";s:4:"b03b";s:92:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/slide-01.jpg";s:4:"d0e5";s:92:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/slide-02.jpg";s:4:"4e4d";s:92:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/img/examples/slide-03.jpg";s:4:"b297";s:84:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/application.js";s:4:"af42";s:88:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-affix.js";s:4:"bcfd";s:88:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-alert.js";s:4:"2ab7";s:89:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-button.js";s:4:"821d";s:91:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-carousel.js";s:4:"4d06";s:91:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-collapse.js";s:4:"573c";s:91:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-dropdown.js";s:4:"9ab0";s:88:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-modal.js";s:4:"a96c";s:90:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-popover.js";s:4:"5079";s:92:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-scrollspy.js";s:4:"0a84";s:86:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-tab.js";s:4:"c36e";s:90:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-tooltip.js";s:4:"ec80";s:93:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-transition.js";s:4:"a325";s:92:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap-typeahead.js";s:4:"6eea";s:82:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap.js";s:4:"9cad";s:86:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/bootstrap.min.js";s:4:"8d10";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/jquery.js";s:4:"1565";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/README.md";s:4:"6f25";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/google-code-prettify/prettify.css";s:4:"a987";s:102:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/assets/js/google-code-prettify/prettify.js";s:4:"709b";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/index.js";s:4:"5bd9";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/package.json";s:4:"798e";s:95:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/LICENSE";s:4:"a832";s:96:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/Makefile";s:4:"c073";s:100:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/package.json";s:4:"380b";s:97:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/README.md";s:4:"ebc7";s:96:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/bin/hulk";s:4:"9acf";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/lib/compiler.js";s:4:"996d";s:100:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/lib/hogan.js";s:4:"d476";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/lib/template.js";s:4:"5468";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/index.html";s:4:"2276";s:101:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/index.js";s:4:"e659";s:104:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/mustache.js";s:4:"0d77";s:100:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec.js";s:4:"c629";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/html/list.html";s:4:"b947";s:105:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/Changes";s:4:"7d72";s:106:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/Rakefile";s:4:"8431";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/README.md";s:4:"dad6";s:108:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/TESTING.md";s:4:"74c2";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/comments.json";s:4:"9a86";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/comments.yml";s:4:"8368";s:119:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/delimiters.json";s:4:"231d";s:118:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/delimiters.yml";s:4:"f6d1";s:122:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/interpolation.json";s:4:"763c";s:121:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/interpolation.yml";s:4:"41f9";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/inverted.json";s:4:"3a96";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/inverted.yml";s:4:"84c2";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/partials.json";s:4:"dbe2";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/partials.yml";s:4:"dc56";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/sections.json";s:4:"74f5";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/sections.yml";s:4:"2f37";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/~lambdas.json";s:4:"6038";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/spec/specs/~lambdas.yml";s:4:"8351";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/test/templates/list.mustache";s:4:"b947";s:104:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/tools/release.js";s:4:"b124";s:110:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/tools/web_templates.js";s:4:"2c18";s:103:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/favicon.ico";s:4:"971a";s:111:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/index.html.mustache";s:4:"19d5";s:106:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/1.0.0/hogan.js";s:4:"0672";s:110:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/1.0.0/hogan.min.js";s:4:"2266";s:113:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.0/hogan.js";s:4:"0672";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.0/hogan.min.js";s:4:"2266";s:113:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.3/hogan.js";s:4:"6174";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.3/hogan.min.js";s:4:"478f";s:123:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.amd.js";s:4:"021b";s:126:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.common.js";s:4:"0f79";s:119:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.js";s:4:"b430";s:127:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.min.amd.js";s:4:"ab1a";s:130:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.min.common.js";s:4:"bd0c";s:123:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.min.js";s:4:"4d20";s:132:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.min.mustache.js";s:4:"63eb";s:128:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/hogan-1.0.5.mustache.js";s:4:"ea4e";s:122:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/template-1.0.5.js";s:4:"5468";s:126:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/builds/1.0.5/template-1.0.5.min.js";s:4:"aa1d";s:107:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/images/logo.png";s:4:"38c6";s:108:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/images/noise.png";s:4:"0955";s:119:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/images/small-hogan-icon.png";s:4:"2a4b";s:110:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/images/stripes.png";s:4:"9040";s:114:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/stylesheets/layout.css";s:4:"bd2c";s:116:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/web/stylesheets/skeleton.css";s:4:"a916";s:112:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/wrappers/amd.js.mustache";s:4:"212c";s:115:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/wrappers/common.js.mustache";s:4:"1f44";s:108:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/wrappers/js.mustache";s:4:"234d";s:117:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/build/node_modules/hogan.js/wrappers/mustache.js.mustache";s:4:"f68f";s:82:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/carousel.html";s:4:"9d8f";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/fluid.html";s:4:"4a51";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/hero.html";s:4:"d910";s:93:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/marketing-alternate.html";s:4:"9557";s:90:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/marketing-narrow.html";s:4:"428c";s:80:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/signin.html";s:4:"2188";s:90:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/starter-template.html";s:4:"8180";s:87:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/examples/sticky-footer.html";s:4:"b60e";s:85:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/layout.mustache";s:4:"61a2";s:93:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/base-css.mustache";s:4:"2932";s:95:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/components.mustache";s:4:"1e94";s:94:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/customize.mustache";s:4:"5f0e";s:91:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/extend.mustache";s:4:"a446";s:100:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/getting-started.mustache";s:4:"9510";s:90:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/index.mustache";s:4:"5442";s:95:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/javascript.mustache";s:4:"6c99";s:96:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/docs/templates/pages/scaffolding.mustache";s:4:"d588";s:89:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/img/glyphicons-halflings-white.png";s:4:"9bbc";s:83:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/img/glyphicons-halflings.png";s:4:"2516";s:76:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-affix.js";s:4:"bcfd";s:76:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-alert.js";s:4:"2ab7";s:77:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-button.js";s:4:"821d";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-carousel.js";s:4:"4d06";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-collapse.js";s:4:"573c";s:79:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-dropdown.js";s:4:"9ab0";s:76:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-modal.js";s:4:"a96c";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-popover.js";s:4:"5079";s:80:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-scrollspy.js";s:4:"0a84";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-tab.js";s:4:"c36e";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-tooltip.js";s:4:"ec80";s:81:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-transition.js";s:4:"a325";s:80:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/js/bootstrap-typeahead.js";s:4:"6eea";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/accordion.less";s:4:"1974";s:71:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/alerts.less";s:4:"1f65";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/bootstrap.less";s:4:"a6a5";s:76:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/breadcrumbs.less";s:4:"af0e";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/button-groups.less";s:4:"0af0";s:72:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/buttons.less";s:4:"34fe";s:73:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/carousel.less";s:4:"7eaa";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/close.less";s:4:"6608";s:69:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/code.less";s:4:"9919";s:85:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/component-animations.less";s:4:"187f";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/dropdowns.less";s:4:"81fe";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/forms.less";s:4:"b4db";s:69:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/grid.less";s:4:"2d24";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/hero-unit.less";s:4:"c9d7";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/labels-badges.less";s:4:"41d8";s:72:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/layouts.less";s:4:"9041";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/media.less";s:4:"291d";s:71:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/mixins.less";s:4:"5248";s:71:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/modals.less";s:4:"9feb";s:71:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/navbar.less";s:4:"6966";s:69:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/navs.less";s:4:"37bd";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/pager.less";s:4:"694f";s:75:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/pagination.less";s:4:"ba84";s:73:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/popovers.less";s:4:"a6d8";s:78:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/progress-bars.less";s:4:"2ba5";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/reset.less";s:4:"bbf2";s:86:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/responsive-1200px-min.less";s:4:"0cec";s:85:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/responsive-767px-max.less";s:4:"e8d0";s:87:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/responsive-768px-979px.less";s:4:"3024";s:82:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/responsive-navbar.less";s:4:"a41c";s:85:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/responsive-utilities.less";s:4:"6d8f";s:75:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/responsive.less";s:4:"449b";s:76:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/scaffolding.less";s:4:"f205";s:72:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/sprites.less";s:4:"752d";s:71:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/tables.less";s:4:"c22f";s:75:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/thumbnails.less";s:4:"2483";s:72:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/tooltip.less";s:4:"53e3";s:69:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/type.less";s:4:"cc22";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/utilities.less";s:4:"c7a2";s:74:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/variables.less";s:4:"d7b5";s:70:"Resources/Private/Distribution/twitter-bootstrap_2.2.1/less/wells.less";s:4:"7b11";s:37:"Resources/Private/LESS/accordion.less";s:4:"1974";s:34:"Resources/Private/LESS/alerts.less";s:4:"1f65";s:37:"Resources/Private/LESS/bootstrap.less";s:4:"e036";s:39:"Resources/Private/LESS/breadcrumbs.less";s:4:"af0e";s:41:"Resources/Private/LESS/button-groups.less";s:4:"0af0";s:35:"Resources/Private/LESS/buttons.less";s:4:"34fe";s:36:"Resources/Private/LESS/carousel.less";s:4:"7eaa";s:33:"Resources/Private/LESS/close.less";s:4:"6608";s:32:"Resources/Private/LESS/code.less";s:4:"9919";s:48:"Resources/Private/LESS/component-animations.less";s:4:"187f";s:37:"Resources/Private/LESS/dropdowns.less";s:4:"81fe";s:33:"Resources/Private/LESS/forms.less";s:4:"b4db";s:32:"Resources/Private/LESS/grid.less";s:4:"2d24";s:37:"Resources/Private/LESS/hero-unit.less";s:4:"c9d7";s:41:"Resources/Private/LESS/labels-badges.less";s:4:"41d8";s:35:"Resources/Private/LESS/layouts.less";s:4:"9041";s:33:"Resources/Private/LESS/media.less";s:4:"291d";s:34:"Resources/Private/LESS/mixins.less";s:4:"5248";s:34:"Resources/Private/LESS/modals.less";s:4:"9feb";s:34:"Resources/Private/LESS/navbar.less";s:4:"6966";s:32:"Resources/Private/LESS/navs.less";s:4:"37bd";s:33:"Resources/Private/LESS/pager.less";s:4:"694f";s:38:"Resources/Private/LESS/pagination.less";s:4:"ba84";s:36:"Resources/Private/LESS/popovers.less";s:4:"a6d8";s:41:"Resources/Private/LESS/progress-bars.less";s:4:"2ba5";s:33:"Resources/Private/LESS/reset.less";s:4:"bbf2";s:49:"Resources/Private/LESS/responsive-1200px-min.less";s:4:"0cec";s:48:"Resources/Private/LESS/responsive-767px-max.less";s:4:"e8d0";s:50:"Resources/Private/LESS/responsive-768px-979px.less";s:4:"3024";s:45:"Resources/Private/LESS/responsive-navbar.less";s:4:"a41c";s:48:"Resources/Private/LESS/responsive-utilities.less";s:4:"6d8f";s:38:"Resources/Private/LESS/responsive.less";s:4:"449b";s:39:"Resources/Private/LESS/scaffolding.less";s:4:"f205";s:35:"Resources/Private/LESS/sprites.less";s:4:"752d";s:34:"Resources/Private/LESS/tables.less";s:4:"c22f";s:38:"Resources/Private/LESS/thumbnails.less";s:4:"2483";s:35:"Resources/Private/LESS/tooltip.less";s:4:"53e3";s:32:"Resources/Private/LESS/type.less";s:4:"cc22";s:37:"Resources/Private/LESS/utilities.less";s:4:"c7a2";s:37:"Resources/Private/LESS/variables.less";s:4:"8d5b";s:33:"Resources/Private/LESS/wells.less";s:4:"7b11";s:56:"Resources/Private/Language/de.locallang_db_powermail.xlf";s:4:"1fc0";s:45:"Resources/Private/Language/locallang_conf.xlf";s:4:"d143";s:53:"Resources/Private/Language/locallang_db_powermail.xlf";s:4:"1bf2";s:57:"Resources/Private/PowermailTemplates/Layouts/Backend.html";s:4:"9bc2";s:57:"Resources/Private/PowermailTemplates/Layouts/Default.html";s:4:"d91a";s:56:"Resources/Private/PowermailTemplates/Layouts/Export.html";s:4:"3562";s:54:"Resources/Private/PowermailTemplates/Layouts/Mail.html";s:4:"3562";s:62:"Resources/Private/PowermailTemplates/Layouts/PowermailAll.html";s:4:"109e";s:60:"Resources/Private/PowermailTemplates/Partials/FormError.html";s:4:"ca7a";s:74:"Resources/Private/PowermailTemplates/Partials/GoogleAdwordsConversion.html";s:4:"0073";s:59:"Resources/Private/PowermailTemplates/Partials/HoneyPod.html";s:4:"043b";s:71:"Resources/Private/PowermailTemplates/Partials/MarketingInformation.html";s:4:"2252";s:64:"Resources/Private/PowermailTemplates/Partials/Forms/Captcha.html";s:4:"c2ff";s:62:"Resources/Private/PowermailTemplates/Partials/Forms/Check.html";s:4:"95ff";s:64:"Resources/Private/PowermailTemplates/Partials/Forms/Content.html";s:4:"bd6f";s:61:"Resources/Private/PowermailTemplates/Partials/Forms/Date.html";s:4:"a245";s:61:"Resources/Private/PowermailTemplates/Partials/Forms/File.html";s:4:"ae6b";s:63:"Resources/Private/PowermailTemplates/Partials/Forms/Hidden.html";s:4:"fc6e";s:61:"Resources/Private/PowermailTemplates/Partials/Forms/Html.html";s:4:"0e97";s:62:"Resources/Private/PowermailTemplates/Partials/Forms/Input.html";s:4:"52dd";s:65:"Resources/Private/PowermailTemplates/Partials/Forms/Location.html";s:4:"3408";s:65:"Resources/Private/PowermailTemplates/Partials/Forms/Password.html";s:4:"9e3a";s:62:"Resources/Private/PowermailTemplates/Partials/Forms/Radio.html";s:4:"5be2";s:62:"Resources/Private/PowermailTemplates/Partials/Forms/Reset.html";s:4:"1105";s:63:"Resources/Private/PowermailTemplates/Partials/Forms/Select.html";s:4:"a0e9";s:63:"Resources/Private/PowermailTemplates/Partials/Forms/Submit.html";s:4:"b01a";s:61:"Resources/Private/PowermailTemplates/Partials/Forms/Text.html";s:4:"1a75";s:65:"Resources/Private/PowermailTemplates/Partials/Forms/Textarea.html";s:4:"3140";s:67:"Resources/Private/PowermailTemplates/Partials/Forms/Typoscript.html";s:4:"afe1";s:66:"Resources/Private/PowermailTemplates/Partials/Module/ExportBe.html";s:4:"298f";s:66:"Resources/Private/PowermailTemplates/Partials/Module/FilterBe.html";s:4:"946b";s:66:"Resources/Private/PowermailTemplates/Partials/Module/SearchBe.html";s:4:"c219";s:61:"Resources/Private/PowermailTemplates/Partials/Output/Abc.html";s:4:"9f65";s:64:"Resources/Private/PowermailTemplates/Partials/Output/Export.html";s:4:"aa59";s:64:"Resources/Private/PowermailTemplates/Partials/Output/Search.html";s:4:"0a61";s:69:"Resources/Private/PowermailTemplates/Partials/Output/Field/Check.html";s:4:"893f";s:69:"Resources/Private/PowermailTemplates/Partials/Output/Field/Input.html";s:4:"3cb8";s:69:"Resources/Private/PowermailTemplates/Partials/Output/Field/Radio.html";s:4:"c892";s:70:"Resources/Private/PowermailTemplates/Partials/Output/Field/Select.html";s:4:"84ce";s:72:"Resources/Private/PowermailTemplates/Partials/Output/Field/Textarea.html";s:4:"bd6d";s:70:"Resources/Private/PowermailTemplates/Templates/Forms/Confirmation.html";s:4:"13e7";s:64:"Resources/Private/PowermailTemplates/Templates/Forms/Create.html";s:4:"32cc";s:62:"Resources/Private/PowermailTemplates/Templates/Forms/Form.html";s:4:"09e5";s:70:"Resources/Private/PowermailTemplates/Templates/Forms/OptinConfirm.html";s:4:"b253";s:70:"Resources/Private/PowermailTemplates/Templates/Forms/PowermailAll.html";s:4:"46aa";s:67:"Resources/Private/PowermailTemplates/Templates/Mails/OptinMail.html";s:4:"f028";s:70:"Resources/Private/PowermailTemplates/Templates/Mails/ReceiverMail.html";s:4:"aa71";s:68:"Resources/Private/PowermailTemplates/Templates/Mails/SenderMail.html";s:4:"b2b7";s:66:"Resources/Private/PowermailTemplates/Templates/Module/CheckBe.html";s:4:"911e";s:70:"Resources/Private/PowermailTemplates/Templates/Module/ExportCsvBe.html";s:4:"1685";s:70:"Resources/Private/PowermailTemplates/Templates/Module/ExportXlsBe.html";s:4:"4cac";s:65:"Resources/Private/PowermailTemplates/Templates/Module/ListBe.html";s:4:"2e12";s:70:"Resources/Private/PowermailTemplates/Templates/Module/ReportingBe.html";s:4:"3708";s:74:"Resources/Private/PowermailTemplates/Templates/Module/ReportingFormBe.html";s:4:"45f2";s:79:"Resources/Private/PowermailTemplates/Templates/Module/ReportingMarketingBe.html";s:4:"f8e5";s:63:"Resources/Private/PowermailTemplates/Templates/Output/Edit.html";s:4:"df08";s:68:"Resources/Private/PowermailTemplates/Templates/Output/ExportCsv.html";s:4:"a6f1";s:68:"Resources/Private/PowermailTemplates/Templates/Output/ExportXls.html";s:4:"71d4";s:63:"Resources/Private/PowermailTemplates/Templates/Output/List.html";s:4:"efd7";s:62:"Resources/Private/PowermailTemplates/Templates/Output/Rss.html";s:4:"04f0";s:63:"Resources/Private/PowermailTemplates/Templates/Output/Show.html";s:4:"2663";s:85:"Resources/Private/PowermailTemplates/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"55e2";s:54:"Resources/Public/Images/glyphicons-halflings-white.png";s:4:"9bbc";s:48:"Resources/Public/Images/glyphicons-halflings.png";s:4:"2516";s:46:"Resources/Public/JavaScript/bootstrap-affix.js";s:4:"bcfd";s:46:"Resources/Public/JavaScript/bootstrap-alert.js";s:4:"2ab7";s:47:"Resources/Public/JavaScript/bootstrap-button.js";s:4:"821d";s:49:"Resources/Public/JavaScript/bootstrap-carousel.js";s:4:"4d06";s:49:"Resources/Public/JavaScript/bootstrap-collapse.js";s:4:"573c";s:49:"Resources/Public/JavaScript/bootstrap-dropdown.js";s:4:"9ab0";s:46:"Resources/Public/JavaScript/bootstrap-modal.js";s:4:"a96c";s:48:"Resources/Public/JavaScript/bootstrap-popover.js";s:4:"5079";s:50:"Resources/Public/JavaScript/bootstrap-scrollspy.js";s:4:"0a84";s:44:"Resources/Public/JavaScript/bootstrap-tab.js";s:4:"c36e";s:48:"Resources/Public/JavaScript/bootstrap-tooltip.js";s:4:"ec80";s:51:"Resources/Public/JavaScript/bootstrap-transition.js";s:4:"a325";s:50:"Resources/Public/JavaScript/bootstrap-typeahead.js";s:4:"6eea";}',
	'suggests' => array(
	),
);

?>