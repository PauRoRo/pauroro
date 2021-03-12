<?php
$nombreCliente = $_POST['nombre'];
$emailCliente  = $_POST['Correo'];
$msjCliente    = $_POST['mensaje'];

$paraCliente    = $emailCliente;
$tituloCliente  = "Mi Formulario de Contacto..";
$mensajeCliente = "<html>".

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: Bogota Colombia<paulina2807g@gmail.com>';
$enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);

echo "<script>
    window.location='https://pauroro.com/español.html#contacto/mensaje_exitoso.html';
</script>";

?>
