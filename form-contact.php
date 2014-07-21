<?php

$error = array();
$response = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$regex = '/^[A-ZÑa-zñÑáéóúí ]+$/';
	if (!preg_match($regex, $_POST['name'])) {
	    $error['name'] = '<li>El nombre es incorrecto</li>';
	}

	$regex = '/^[^0-9][A-z0-9_\-]*([.][A-z0-9_\-]+)*[@][A-z0-9_\-]+([.][A-z0-9_\-]+)*[.][A-z]{2,4}$/';
	if (!preg_match($regex, $_POST['email'])) {
	    $error['mail'] = '<li>El email es incorrecto</li>';
	}

	$regex = '/^[a-zA-Z0-9ñÑáéóúí[:space:]]*$/';
	if (!preg_match($regex, $_POST['query'])) {
	    $error['query'] = '<li>La consulta es incorrecta</li>';
	} 

	$regex = '/^\d+$/';
	if (!preg_match($regex, $_POST['phone'])) {
	    $error['phone'] = '<li>telefono incorrecto</li>';
	} 


	if(isset($error['name'])) {
		if(!$response){
			$response = '<ul class="error">';
		}
		$response .= $error['name'];
	}

	if(isset($error['mail'])) {
		if(!$response){
			$response = '<ul class="error">';
		}
		$response .= $error['mail'];	
	}

	if(isset($error['phone'])) {
		if(!$response){
			$response = '<ul class="error">';
		}
		$response .= $error['phone'];	
	}

	if(isset($error['query'])) {
		if(!$response){
			$response = '<ul class="error">';
		}
		$response .= $error['query'];	
	}

	if($response != false) {
		$response .= '</ul>';
	} else {
		$msg = "Nombre:" . $_POST['name'] . " \n";
		$msg .= "email:" . $_POST['mail'] . "\n";
		$msg .= "Telefono:" . $_POST['phone'] . "\n";
		$msg .= "Consulta:\n" . $_POST['query'];
		$headers = 'From: webmaster@example.com' . "\r\n" .
				    "Reply-To:" . $_POST['mail'] . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();
		mail('info@laboratoriofleibor.com.ar','Fleibor Website [Consulta]',$msg,$headers);
	}
}