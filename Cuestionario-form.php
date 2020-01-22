<?php 

	if (isset($_POST["submit"])) {
	
	$body = "From: $name\n E-mail: $email\n ";

	$from = 'Formulario de contacto';
	$human = intval ($_POST['human']);
	$to = 'samarquitectura.com.mx';
	$subject = 'Mensaje de Modulo de Cotizacion de Pag Web';

	$zipCode $_POST['zipCode'];
	$locationTxt $_POST['locationTxt'];
	$firstName $_POST['firstName'];
	$lastName $_POST['lastName'];
	$email $_POST['email'];	
	$phone $_POST['phone'];
	$lugar $_POST['lugar'];
	$trabajo $_POST['trabajo'];
	$file $_POST['file'];
	$promo $_POST['promo'];


	if (!$_POST['zipCode']) {
		$errZipCode = 'Introdizca el cp';
	}

	if (!$_POST['firstName']) {
		$errFirstName = 'Introdizca el nombre';
	}

	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Introdizca el email';
	}

	if (!$_POST['phone']) {
		$errPhone = 'Introdizca el telefono';
	}

	if ($human !==5) {
		$errHuman = 'Verificacion anti SPAM';
	}

	if (!errZipCode && !errEmail && !errPhone && !firstName &!errHuman) {
		if (mail($to,$subject,$body,$from)) {
			$result='<div class="alert-succes">En breve un Asesor se comunicara con usted </div>';
		}
		else{
			$result='<div class="alert-danger">No se pudo enviar el mensaje,intente otraves</div>'
		}
	}
}
 ?>