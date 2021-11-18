<?php
	session_start();

	include 'banco.php';

	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	$stmt = $pdo->prepare("
		SELECT * FROM user
		WHERE email = ? AND password = ?
	");	

	$stmt->execute([$email, $password]);

	$linhas = $stmt->fetchAll();	

	if (sizeof($linhas) == 0) {
		header('location: erro.php');
		exit();	
	}	

	$_SESSION['email'] = $linhas[0]['email'];
	$_SESSION['user_id'] = $linhas[0]['iduser'];	
	
	header('location: home-tutorial.php');
?>
