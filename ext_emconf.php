<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'powermailextended',
    'description' => 'Sample Extension to extend powermail: 
        Add new validators, Add new Fieldtypes or Add new Field Properties',
    'category' => 'plugin',
    'version' => '5.0.0',
    'state' => 'beta',
    'author' => 'Powermail dev team',
    'author_email' => 'alexander.kellner@in2code.de',
    'author_company' => 'in2code.de',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'powermail' => '9.0.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
