<?php
defined('TYPO3_MODE') or die();

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['adx_twitter_bootstrap']);

if ($extensionConfiguration['extensions.']['activatePowermail'] && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('powermail')) {

	$tempColumns = array(
		'tx_adxtwitterbootstrap_hide_label' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_label',
			'displayCond' => 'FIELD:type:!IN:typoscript,text,html,content,reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.screenReadersOnly', 'screenReader'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_hide_legend.invisible', 'invisible'),
				),
			),
		),
		'tx_adxtwitterbootstrap_element_size' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size',
			'displayCond' => 'FIELD:type:IN:input,textarea,select,country,location,password,date,file,reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'inherit',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.inherit', 'inherit'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.lg', 'lg'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.default', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_element_size.sm', 'sm'),
				),
			),
		),
		'tx_adxtwitterbootstrap_button_class' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class',
			'displayCond' => 'FIELD:type:IN:reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.default', 'btn btn-default'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.primary', 'btn btn-primary'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.success', 'btn btn-success'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.info', 'btn btn-info'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.warning', 'btn btn-warning'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.danger', 'btn btn-danger'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_class.link', 'btn btn-link'),
				),
			),
		),
		'tx_adxtwitterbootstrap_button_block' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_button_block',
			'displayCond' => 'FIELD:type:IN:reset,submit',
			'exclude' => 1,		
			'config' => array(
				'type' => 'check',
				'items' => array(
					'1'	=> array(
						'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
					),
				),
			),
		),
		'tx_adxtwitterbootstrap_span' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.1', '1'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.2', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.3', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.4', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.5', '5'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.6', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.7', '7'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.8', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.9', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.10', '10'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.11', '11'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '12'),
				),
			),
		),
		'tx_adxtwitterbootstrap_span_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span_breakpoint',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_offset',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', ''),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.1', '1'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.2', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.3', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.4', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.5', '5'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.6', '6'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.7', '7'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.8', '8'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.9', '9'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.10', '10'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.11', '11'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '12'),
				),
			),
		),
		'tx_adxtwitterbootstrap_offset_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_offset_breakpoint',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
		'tx_adxtwitterbootstrap_clear' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_clear',
			'exclude' => 1,		
			'config' => array(
				'type' => 'check',
				'items' => array(
					'1'	=> array(
						'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
					),
				),
			),
		),
		'tx_adxtwitterbootstrap_checkbox_inline' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_checkbox_inline',
			'displayCond' => 'FIELD:type:IN:check,radio',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => '',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.none', '0'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.runIn', '-1'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.16', '2'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.14', '3'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.13', '4'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_span.12', '6'),
				),
			),
		),
		'tx_adxtwitterbootstrap_checkbox_inline_breakpoint' => array(		
			'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint',
			'displayCond' => 'FIELD:type:IN:check,radio',
			'exclude' => 1,		
			'config' => array(
				'type' => 'select',
				'default' => 'xs',
				'items' => array(
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.xs', 'xs'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.sm', 'sm'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.md', 'md'),
					array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_breakpoint.lg', 'lg'),
				),
			),
		),
	);

	$GLOBALS['TCA']['tx_powermail_domain_model_field']['palettes']['apperance'] = array(
		'showitem' => 'tx_adxtwitterbootstrap_hide_label,tx_adxtwitterbootstrap_element_size,tx_adxtwitterbootstrap_button_class,tx_adxtwitterbootstrap_button_block,--linebreak--,tx_adxtwitterbootstrap_span,tx_adxtwitterbootstrap_span_breakpoint,--linebreak--,tx_adxtwitterbootstrap_offset,tx_adxtwitterbootstrap_offset_breakpoint,--linebreak--,tx_adxtwitterbootstrap_clear,--linebreak--,tx_adxtwitterbootstrap_checkbox_inline,tx_adxtwitterbootstrap_checkbox_inline_breakpoint',
		'canNotCollapse' => TRUE,
	);

	if ($extensionConfiguration['components.']['activateDatepicker']) {

		$tempColumnsDatepicker = array(
			'tx_adxtwitterbootstrap_datepicker_type' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'default' => '',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.none', ''),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.default', 'default'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.before', 'before'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_type.after', 'after'),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_format' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_format',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,	
				'config' => array(
					'type' => 'input',
					'size' => 8,
					'max' => 12,
					'placeholder' => 'mm/dd/yyyy',
				),
			),
			'tx_adxtwitterbootstrap_datepicker_week_start' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_week_start',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.su', 0),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.mo', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.tu', 2),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.we', 3),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.th', 4),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.fr', 5),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.sa', 6),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_start_date' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_date',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'default' => 0,
					'size' => 9,
					'max' => 20,
					'eval' => 'date',
				),
			),
			'tx_adxtwitterbootstrap_datepicker_end_date' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_end_date',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,
				'config' => array(
					'type' => 'input',
					'default' => 0,
					'size' => 9,
					'max' => 20,
					'eval' => 'date',
				),
			),
			'tx_adxtwitterbootstrap_datepicker_start_view' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view.0', 0),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view.1', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_start_view.2', 2),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_min_view_mode' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode.0', 0),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode.1', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_min_view_mode.2', 2),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_today_button' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button.disabled', 'disabled'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button.enabled', 'enabled'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_button.linked', 'linked'),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_orientation' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'select',
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.auto', 'auto'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.topAuto', 'topAuto'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.bottomAuto', 'bottomAuto'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.autoLeft', 'autoLeft'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.topLeft', 'topLeft'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.bottomLeft', 'bottomLeft'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.autoRight', 'autoRight'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.topRight', 'topRight'),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_orientation.bottomRight', 'bottomRight'),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_days_of_week_disabled' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_days_of_week_disabled',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'cols' => 7,
					'items' => array(
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.su', 1),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.mo', 2),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.tu', 4),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.we', 8),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.th', 16),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.fr', 32),
						array('LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_day_of_week.sa', 64),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_calendar_weeks' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_calendar_weeks',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_autoclose' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_autoclose',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_today_highlight' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_today_highlight',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_keyboard_navigation' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_keyboard_navigation',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
			'tx_adxtwitterbootstrap_datepicker_force_parse' => array(		
				'label' => 'LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_adxtwitterbootstrap_datepicker_force_parse',
				'displayCond' => 'FIELD:type:IN:date',
				'exclude' => 1,		
				'config' => array(
					'type' => 'check',
					'default' => TRUE,
					'items' => array(
						'1'	=> array(
							'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
						),
					),
				),
			),
		);

		$tempColumns = array_merge($tempColumns, $tempColumnsDatepicker);

		$GLOBALS['TCA']['tx_powermail_domain_model_field']['palettes']['datepicker'] = array(
			'showitem' => 'tx_adxtwitterbootstrap_datepicker_type,--linebreak--,tx_adxtwitterbootstrap_datepicker_format,tx_adxtwitterbootstrap_datepicker_week_start,tx_adxtwitterbootstrap_datepicker_start_date,tx_adxtwitterbootstrap_datepicker_end_date,--linebreak--,tx_adxtwitterbootstrap_datepicker_orientation,tx_adxtwitterbootstrap_datepicker_start_view,tx_adxtwitterbootstrap_datepicker_min_view_mode,tx_adxtwitterbootstrap_datepicker_today_button,--linebreak--,tx_adxtwitterbootstrap_datepicker_days_of_week_disabled,--linebreak--,tx_adxtwitterbootstrap_datepicker_calendar_weeks,tx_adxtwitterbootstrap_datepicker_autoclose,tx_adxtwitterbootstrap_datepicker_today_highlight,tx_adxtwitterbootstrap_datepicker_keyboard_navigation,tx_adxtwitterbootstrap_datepicker_force_parse',
			'canNotCollapse' => TRUE,
		);
	}

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_field', $tempColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_field', '--div--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_form.palette.apperance,--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_form.palette.apperance;apperance', '', 'after:own_marker_select');
	// Add datepicker component.
	if ($extensionConfiguration['components.']['activateDatepicker']) {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_powermail_domain_model_field', '--palette--;LLL:EXT:adx_twitter_bootstrap/Resources/Private/Language/locallang_db_powermail.xlf:tx_powermail_domain_model_field.palette.datepicker;datepicker', '', 'after:tx_adxtwitterbootstrap_checkbox_inline_breakpoint');
	}
}
