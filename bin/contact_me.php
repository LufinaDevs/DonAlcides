<?php
// check if fields passed are empty
if(empty($_POST['name'])  	||
   empty($_POST['email']) 	||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'contacto@donalcides.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Formulario de contacto Don Alcides:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Recibiste un mensaje de tu formulario de contacto.\n\n"."Detalles:\n\nNombre:\n$name\n\nEmail:\n$email_address\n\nMensaje:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>