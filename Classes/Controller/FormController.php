<?php
namespace In2code\Powermailextended\Controller;

use In2code\Powermail\Controller\FormController as FormControllerPowermail;
use In2code\Powermail\Domain\Model\Mail;

/**
 * Class FormController
 *
 * @package In2code\Powermailextended\Controller
 */
class FormController {

	/**
	 * @param Mail $mail
	 * @param string $hash
	 * @param FormControllerPowermail $pObj
	 * @return void
	 */
	public function manipulateMailObjectOnCreate(Mail $mail, $hash, $pObj) {
		foreach ($mail->getAnswers() as $answer) {
			if ($answer->getValue() === 'alex') {
				$answer->setValue('alexander');
			}
		}
	}
}