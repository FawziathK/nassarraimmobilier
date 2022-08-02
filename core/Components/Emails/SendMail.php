<?php

namespace Synext\Components\Emails;

use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;


class SendMail
{
    const SMTPUSER = 'mailler@nassarraimmobilier.com';
    const SMTPPASS = 'maillerNasarraimmobilier003';
    const SMTPSERVER = 'smtp.hostinger.fr';
    const SMTPPORT = '587';
    const SMTPSECURED = 'tls';

    public static function to(string $titre, string $from, string $to, string $replyto, string $subject, string $message): bool
    {
        $from = [$from, explode("@", $from)[0]];
        try {
            $transport = (new Swift_SmtpTransport(self::SMTPSERVER, self::SMTPPORT, self::SMTPSECURED))
                ->setUsername(self::SMTPUSER)
                ->setPassword(self::SMTPPASS);
            $mailer = new Swift_Mailer($transport);
            $content = (new Swift_Message())
                ->setSubject($subject)
                ->setFrom($from[0], $titre)
                ->setReplyTo($replyto)
                ->setTo($to)
                ->setBody($message, 'text/html');
            if ($mailer->send($content)) {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function _to(string $titre = null, string $from, string $to, string $replyto, string $subject, string $message)
    {
        $headers = "From: explode('@',$from)[0] <" . $from . ">\r\n";
        $headers .= "Reply-To: {$replyto}" . "\r\n";
        $headers .= "CC: $from\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        return mail($to, $subject, $message, $headers);
    }
}