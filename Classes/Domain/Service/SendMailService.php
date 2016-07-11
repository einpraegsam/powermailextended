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
     * @param SendMailServicePowermail $sendMailService
     */
    public function manipulateMail($message, &$email, SendMailServicePowermail $sendMailService)
    {
        // change receiver name and email for a defined senderemail (as an example)
        if ($sendMailService->getMail()->getSenderMail() === 'manipulatereceiver@powermailextended.org') {
            $email['receiverName'] = 'in2code.de';
            $email['receiverEmail'] = 'alex@in2code.de';

            $message->setTo([$email['receiverEmail'] => $email['receiverName']]);
        }
    }
}
