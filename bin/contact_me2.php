<?php
// check if fields passed are empty
if(empty($_POST['name'])  	||
   empty($_POST['email']) 	||
   empty($_POST['experiencia'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$experiencia = $_POST['experiencia'];
$estudios = $_POST['estudios'];
$objetivos = $_POST['objetivos'];
$fecha = $_POST['fecha'];

$fecha2 = date("d-m-Y", strtotime($fecha));

// create email body and send it	
$to = 'contacto@donalcides.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Formulario de CV Don Alcides:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Recibiste un mensaje de tu formulario de CV.\n\n"."Detalles:\n\nNombre:\n$name\n\nFecha de Nacimiento:\n$fecha2\n\nEmail:\n$email_address\n\nEstudios:\n$estudios\n\nExperiencia:\n$experiencia\n\nObjetivos/Comentarios:\n$objetivos";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>