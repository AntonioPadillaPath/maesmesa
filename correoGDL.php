<?php

$destino = 'punkstar_ap@hotmail.com';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$contenido = "<b>NOMBRE:</b> " . $nombre . "<br><b>CORREO:</b> " . $correo . "<br><b>TELÉFONO: </b>" . $telefono . "<br><b>MENSAJE: </b>" . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.live.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'punkstar_ap@hotmail.com';                     // SMTP username
    $mail->Password   = 'Diosconmig0';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($destino, $nombre);
    $mail->addAddress('punkstar_ap@hotmail.com', 'Antonio User');     // Add a recipient

    //Con acentos y carácteres
    $mail->CharSet = 'UTF-8';

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contacto MAESMESA';
    $mail->Body    = $contenido;

    $mail->send();
    //echo '<script>
    //alert("Mensaje enviado correctamente")
    //</script>';
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 500)</script>";
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}

//header('Location:index.html');