<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Users/admin/Documents/pythoncurso/jessa/vendor/phpmailer/src/Exception.php';
require '/Users/admin/Documents/pythoncurso/jessa/vendor/phpmailer/src/PHPMailer.php';
require '/Users/admin/Documents/pythoncurso/jessa/vendor/phpmailer/src/SMTP.php';




// Instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP de Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ericksaldivarregalado@gmail.com'; // Tu dirección de correo de Gmail
    $mail->Password = 'pissdrunk'; // Tu contraseña de Gmail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configuración del correo electrónico
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('ericksaldivarregalado@gmail.com'); // Correo del destinatario
    $mail->Subject = 'Mensaje enviado desde el formulario';
    $mail->Body = $_POST['message'];

    // Envío del correo electrónico
    $mail->send();
    echo 'El mensaje se envió correctamente.';
} catch (Exception $e) {
    echo 'Error al enviar el mensaje: ' . $mail->ErrorInfo;
}
?>


