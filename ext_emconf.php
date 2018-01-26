<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "powermail".
 *
 * Auto generated 04-07-2013 17:03
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'powermailextended',
    'description' => 'Sample Extension to extend powermail: 
        Add new validators, Add new Fieldtypes or Add new Field Properties',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '4.0.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => 'uploads/tx_powermail',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Powermail dev team',
    'author_email' => 'alexander.kellner@in2code.de',
    'author_company' => 'in2code.de',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.99.99',
            'powermail' => '5.3.0-5.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    '_md5_values_when_last_written' => '',
];
