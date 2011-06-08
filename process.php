<?php
if( isset($_POST) ){
	
	//form validation vars
	$formok = true;
	$errors = array();

	//submission data
	$ipaddress $_SERVER['REMOTE_ADDR'];
	$date = date('m/d/Y');
	$time = date('H:i:s');

	//form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$inquiry = $_POST['inquiry'];
	$message = $_POST['message'];

	//form validation to go here....

}
