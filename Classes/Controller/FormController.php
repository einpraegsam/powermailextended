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
        // example how to get an answer from the mail object and manipulate a value (set firstname if email fits)
        if ($mail->getAnswersByFieldMarker()['email']->getValue() === 'manipulatesender@powermailextended.org') {
            $mail->getAnswersByFieldMarker()['firstname']->setValue('heyholetsgo');
        }
    }
}
