<?php
// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el Correo
$to = "paulina2807@hotmail.com";
$asunto = "Contacto desde web Paula";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

//Enviando Mensaje
// mail($to, $asunto, $carta);
// header('Location:mensaje_exitoso.html');
// header('Location:English/message.html')
if($email!=NULL){
    mail($to,$asunto,$carta);
}
//redirect
header("Location:mensaje_exitoso.html");

 ?>
