<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
function sendMail()
{
  // Enable or disable exceptions via variable
  $debug = false;
  try {
    // Create instance of PHPMailer class
    $mail = new PHPMailer($debug);

    if ($debug) {
      // issue a detailed log
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    }

    // Authentication with SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    // Login
    $mail->Host = "smtp.mail.com";
    $mail->Port = 587;
    $mail->Username = "test@mail.com";
    $mail->Password = "";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->setFrom('test@mail.com', 'test');
    $mail->addAddress('testn@mail.com', 'testl');

    //$mail->addAttachment("/uploads/recipes/salade.jpg", "salade.jpg");

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->isHTML(true);
    $mail->Subject = 'Utilisateur enregistré sur Cuisinea';
    $mail->Body = 'Un utilisateur vient de s\'inscrire sur <b>Cuisinea</b>.';
    $mail->AltBody = 'Un utilisateur vient de s\'inscrire sur Cuisinea';

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: " . $e->getMessage();
  }
}
