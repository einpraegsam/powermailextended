<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(function () {
    /**
     * Register some Slots
     */
    /** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class
    );

    // Manipulate a value before sending example
    $signalSlotDispatcher->connect(
        \In2code\Powermail\Controller\FormController::class,
        'createActionBeforeRenderView',
        \In2code\Powermailextended\Controller\FormController::class,
        'manipulateMailObjectOnCreate',
        false
    );

    // Change receiver mail example
    $signalSlotDispatcher->connect(
        \In2code\Powermail\Domain\Service\Mail\SendMailService::class,
        'sendTemplateEmailBeforeSend',
        \In2code\Powermailextended\Domain\Service\SendMailService::class,
        'manipulateMail',
        false
    );

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Repository\FormRepository::class] = [
        'className' => \In2code\Powermailextended\Domain\Repository\FormRepository::class
    ];
});
