<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el Correo
$destinatario = "paulina2807@hotmail.com";
$asunto = "Contacto desde web Paula";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

$host = $_SERVER['HTTP_HOST'];
$ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$html = 'mensaje_exitoso.html';
$url = "http://$host$ruta/$html";

//Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Location: $url");
//header('Location: mensaje_exitoso.html')
//header('Location: English/message.html');
 ?>
