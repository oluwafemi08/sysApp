<?php
include_once "index.php";


$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : "";
$action = isset($_POST['action']) ? $_POST['action'] : "";

if ($action == "signin") {

	$signin = new Signin;

	$data = [

		'email' => trim($email),
		'password' => $password
	];
	$signin->handler($data);

	header('location: home.php');
}

if ($action == "register") {
	$register = new Register;

	$data = [
		'first_name' => trim($first_name),
		'last_name' => trim($last_name),
		'email' => trim($email),
		'password' => $password,
		'confirm_password' => $confirm_password,
	];
	$register->handler($data);
	// var_dump($data);
}

// $signin = new Signin; 
// var_dump($signin);
