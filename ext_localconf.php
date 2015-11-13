<?php
/**
 * Register some Slots
 */
/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\Dispatcher');

// Manipulate a value before sending
//$signalSlotDispatcher->connect(
//	'In2code\Powermail\Controller\FormController',
//	'createActionBeforeRenderView',
//	'In2code\Powermailextended\Controller\FormController',
//	'manipulateMailObjectOnCreate',
//	FALSE
//);

// Change receiver mail
//$signalSlotDispatcher->connect(
//	'In2code\Powermail\Domain\Service\SendMailService',
//	'sendTemplateEmailBeforeSend',
//	'In2code\Powermailextended\Domain\Service\SendMailService',
//	'manipulateMail',
//	FALSE
//);
