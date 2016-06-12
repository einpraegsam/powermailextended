<?php
namespace In2code\Powermailextended\Domain\Service;

use In2code\Powermail\Domain\Model\Mail;
use TYPO3\CMS\Core\Mail\MailMessage;

/**
 * SendMailService
 *
 * @package powermailextend
 */
class SendMailService
{

    /**
     * Manipulate message object short before powermail send the mail
     *
     * @param MailMessage $message
     */
    public function manipulateMail($message)
    {
        // overwrite the receiver
        $message->setTo(
            array(
                'anotheremail@domain.org' => 'receiverName'
            )
        );
    }
}
