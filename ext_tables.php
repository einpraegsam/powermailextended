<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(function () {
    /**
     * Include Static TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'powermailextended',
        'Configuration/TypoScript',
        'Powermail Addition (after Powermail Template)'
    );

    /**
     * Extend powermail fields tx_powermail_domain_model_field
     */
    $tempColumns = [
        'tx_powermailextended_powermail_text' => [
            'exclude' => 1,
            'label' => 'Text before field',
            'config' => [
                'type' => 'text',
                'cols' => '32',
                'rows' => '2'
            ]
        ],
        'tx_powermailextended_powermail_readonly' => [
            'exclude' => 1,
            'label' => 'Readonly',
            'config' => [
                'type' => 'check'
            ]
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_powermail_domain_model_field', $tempColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_powermail_domain_model_field',
        '--div--;Powermailextended, tx_powermailextended_powermail_text, tx_powermailextended_powermail_readonly',
        '',
        'after:own_marker_select'
    );
});
