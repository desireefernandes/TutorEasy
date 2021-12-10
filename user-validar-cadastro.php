<?php
	session_start();

	include 'banco.php';
	$pdo = dbConnect();

	$name 		= $_POST['name'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];
	
	//Inserindo dados no banco, criando conta
	$stmt = $pdo-> prepare("
		INSERT INTO user (name, lastname, email, password)
		VALUES (?, ?, ?, ?)
		");

	$stmt->execute([$name, $lastname, $email, $password]);

	header('location: login.php');

?>
