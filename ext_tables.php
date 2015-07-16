<?php
/**
 * Include Static TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'Powermail Addition (after Powermail Template)'
);

/**
 * extend powermail fields tx_powermail_domain_model_fields
 */
$tempColumns = array (
	'tx_powermailextended_powermail_text' => array(
		'exclude' => 1,
		'label' => 'Text before field',
		'config' => array (
			'type' => 'text',
			'cols' => '32',
			'rows' => '2'
		)
	),
	'tx_powermailextended_powermail_readonly' => array(
		'exclude' => 1,
		'label' => 'Readonly',
		'config' => array (
			'type' => 'check'
		)
	),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
	'tx_powermail_domain_model_fields',
	$tempColumns,
	TRUE
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'tx_powermail_domain_model_fields',
	'--div--;Powermailextended, tx_powermailextended_powermail_text, tx_powermailextended_powermail_readonly',
	'',
	'after:own_marker_select'
);