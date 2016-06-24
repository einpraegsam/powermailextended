<?php
namespace In2code\Powermailextended\Domain\Service;

use In2code\Powermail\Domain\Service\SendMailService as SendMailServicePowermail;
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
     * @param array $email
     * @param SendMailServicePowermail $originalService
     */
    public function manipulateMail($message, &$email, SendMailServicePowermail $originalService)
    {
        // overwrite the receiver in the email array to have it saved correctly!
        $email['receiverName'] = 'John Mega';
        $email['receiverEmail'] = 'john@mega.com';

        $message->setTo([$email['receiverEmail'] => $email['receiverName']]);
    }
}
