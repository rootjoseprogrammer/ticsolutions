<?php
require 'class.simple_mail.php';

$name    = $_POST['name']; // required
$email   = $_POST['email']; // required
$subject = $_POST['subject']; // required
$message = $_POST['message']; // required

$mail = SimpleMail::make()
        ->setTo('hola@ticsolutions.org', 'Contacto')
        ->setSubject("TIC-SOLUTIONS-WEB:" . $subject)
        ->setFrom($mail, $mail)
        ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
        ->setHtml()
        ->setMessage('<strong>TIC-SOLUTIONS-WEB:</strong> <BR> <p>{$message}</p>');
$send = $mail->send();

if ($send) {
    echo 'OK';
} else {
    echo $send;
}