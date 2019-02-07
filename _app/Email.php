<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'iau.copiadora@gmail.com';                 // SMTP username
        $this->mail->Password = 'copiadora25';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to
        $this->mail->CharSet = "utf-8";
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('iau.sti@sc.usp.br', 'Sistema de envio de e-mail');
    }

    public function sendmail($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replayEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o Email: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }

}
