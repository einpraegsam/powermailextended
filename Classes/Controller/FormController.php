<?php
namespace In2code\Powermailextended\Controller;

/**
 * Using a Slot to call a Powermail Signal
 *
 * Class FormControllerExtended
 * @package In2code\Powermailextended\Controller
 */
class FormController {

	/**
	 * @param \In2code\Powermail\Domain\Model\Mail $mail
	 * @param string $hash
	 * @param \In2code\Powermail\Controller\FormController $pObj
	 */
	public function manipulateMailObjectOnCreate($mail, $hash, $pObj) {
		foreach ($mail->getAnswers() as $answer) {
			if ($answer->getValue() === 'alex') {
				$answer->setValue('alexander');
			}
		}
	}
}