<?php
//get data from form  
$name = $_POST['nombre'];
$email= $_POST['correo'];
$message= $_POST['mensaje'];

$to =  "paulina2807@hotmail.com";

$subject = "Contacto desde web Paula";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: paulina2807@hotmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:mensaje_exitoso.html");
?>
