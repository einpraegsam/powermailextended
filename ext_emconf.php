<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'powermailextended',
    'description' => 'Sample Extension to extend powermail: 
        Add new validators, Add new Fieldtypes or Add new Field Properties',
    'category' => 'plugin',
    'version' => '4.0.0',
    'state' => 'beta',
    'author' => 'Powermail dev team',
    'author_email' => 'alexander.kellner@in2code.de',
    'author_company' => 'in2code.de',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.99.99',
            'powermail' => '8.0.0-8.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
