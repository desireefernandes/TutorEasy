<?php
	session_start();

	// echo"GET";
	// var_dump($_GET);
	// print("POST");
	// var_dump($_POST);

	include 'banco.php';

	$name 		= $_POST['name'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	$stmt = $pdo-> prepare("
		INSERT INTO user (name, lastname, email, password)
		VALUES (?, ?, ?, ?)
		");

	$stmt->execute([$name, $lastname, $email, $password]);

	header('location: login.php');

?>
