<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once(__DIR__ . '/vendor/autoload.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require('PHPMailer-master/src/Exception.php');
require('PHPMailer-master/src/PHPMailer.php');
require('PHPMailer-master/src/SMTP.php');


$postData = $_POST;

$nom = "";
$email = "";
$subject = "";
$message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($postData['name']) && !empty($postData['email']) && !empty($postData['subject']) && !empty($postData['message'])) {
        if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
            $errormsg = "L'email saisi n'est pas valide !";
        }
        $nom = trim(htmlspecialchars(strip_tags($postData['name'])));
        $email = trim(htmlspecialchars(strip_tags($postData['email'])));
        $subject = trim(htmlspecialchars(strip_tags($postData['subject'])));
        $message = trim(htmlspecialchars(strip_tags($postData['message'])));

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $_ENV['SMTP_USER'];                     //SMTP username
            $mail->Password   = $_ENV['SMTP_PASS'];                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@example.com', 'Portfolio');
            $mail->addAddress($_ENV['SMTP_USER']);

            $mail->CharSet = 'UTF-8';

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Portfolio - Formulaire de contact envoyé par ' . $nom;
            $mail->Body = '

                <h2><span style="color:#04f430;">Nom :</span> ' . $nom . '</h2>
                <h2><span style="color:#04f430;">Email :</span> ' . $email . '</h2>
                <h2><span style="color:#04f430;">Objet :</span> ' . $subject . '</h2>
                <p><span style="color:#04f430;">Message :</span> ' . $message . '</p>
            
                ';


            $mail->AltBody = 'Nom : ' . $nom . "\r\n" .
                'Email : ' . $email . "\r\n" .
                'Objet : ' . $subject . "\r\n" .
                'Message : ' . $message . "\r\n";

            $mail->send();
            header('Location: confirmation-contact.php');
            exit;
        } catch (Exception $e) {
            $errormsg = "Erreur lors de l'envoi : {$mail->ErrorInfo}";
        }
    } else {
        $errormsg = "Tous les champs du formulaire de contact ne sont pas remplis !";
    }
}
