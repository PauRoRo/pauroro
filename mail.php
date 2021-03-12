<?php

$nombre = $_POST['nombre'];
$correo= $_POST['correo'];
$mensaje= $_POST['mensaje'];

$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'paulina2807g@gmail.com';                     //SMTP username
    $mail->Password   = 'kingsandqueens30';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('paulina2807g@gmail.com', $nombre);
    $mail->addAddress('paulina2807g@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = $body;
    $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
          );
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo '<script>
    alert("Mensaje se envió correctamente");
    window.history.go(-1);
    </script>';

} catch (Exception $e) {
    echo "Hubo error al enviar mensaje: {$mail->ErrorInfo}";
}

// // get data from form
// mail($to,$subject,$txt,$headers);
// //redirect
// header("Location:mensaje.html");
?>
