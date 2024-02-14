<?php
declare(strict_types=1);

return [
    \In2code\Powermail\Domain\Model\Field::class => [
        'subclasses' => [
            1 => \In2code\Powermailextended\Domain\Model\Field::class,
        ],
    ],
    \In2code\Powermail\Domain\Model\Page::class => [
        'subclasses' => [
            1 => \In2code\Powermailextended\Domain\Model\Page::class,
        ],
    ],
    \In2code\Powermail\Domain\Model\Form::class => [
        'subclasses' => [
            1 => \In2code\Powermailextended\Domain\Model\Form::class,
        ],
    ],
    \In2code\Powermailextended\Domain\Model\Field::class => [
        'tableName' => 'tx_powermail_domain_model_field',
    ],
    \In2code\Powermailextended\Domain\Model\Page::class => [
        'tableName' => 'tx_powermail_domain_model_page',
    ],
    \In2code\Powermailextended\Domain\Model\Form::class => [
        'tableName' => 'tx_powermail_domain_model_form',
    ],
];
