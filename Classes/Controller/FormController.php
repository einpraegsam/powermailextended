<?php
namespace In2code\Powermailextended\Controller;

use In2code\Powermail\Domain\Model\Mail;

/**
 * Class FormController
 *
 * @package In2code\Powermailextended\Controller
 */
class FormController
{

    /**
     * @param Mail $mail
     * @return void
     */
    public function manipulateMailObjectOnCreate(Mail $mail)
    {
        foreach ($mail->getAnswers() as $answer) {
            if ($answer->getValue() === 'alex') {
                $answer->setValue('alexander');
            }
        }
    }
}
