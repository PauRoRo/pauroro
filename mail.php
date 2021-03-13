<?php

/**
 * SCRIPT PARA ENVIAR CORREOS DESDE PHP
 * 
 * Script sencillo para enviar datos de un formulario
 * por correo mediante MAIL de PHP
 
 
if(isset($_POST['submit'])){

  $nombre = htmlspecialchars($_POST['nombre']);
	$correo = htmlspecialchars($_POST['correo']);
	$comentarios = htmlspecialchars($_POST['mensaje']);
	
	$subject = "Formulario de contacto de PAGINA WEB PAULA";
	$para = "paulina2807G@gmail.com";
	$de = "paulina2807G@gmail.com";
	$mensaje = "Alguien ha enviado un formulario.";
	$mensaje .= "\n";
	$mensaje .= "Aquí están los datos: ";
	$mensaje .= "\n\n";
	$mensaje .= "Nombre: ".$nombre."\n";
	$mensaje .= "Correo: ".$correo."\n";
	$mensaje .= "Comentarios: ".$mensaje."\n\n";
	$mensaje .= "----------------------\n";
	$mensaje .= "Guarde este correo para futuras revisiones.";
	
	if(mail($para, $subject,$mensaje,"From: $de")){
		header("Location: mensaje_exitoso.html");
		exit();
	}
	
	// fin

} else {

	echo "No se ha enviado ningún form";

}

?>
