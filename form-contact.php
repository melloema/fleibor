<?php

$error = array();

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$regex = "=?^_`{|}~-]+)*@ (?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil| biz|info|mobi|name|aero|asia|jobs|museum)\b";
	if (preg_match($regex, $_POST['email'])) {
	    $error[] = 'email incorrecto';
	}

	echo $error[0];
}
