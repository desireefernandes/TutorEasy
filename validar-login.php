<?php
	session_start();
	
	include 'banco.php';
	$pdo = dbConnect();

	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	//Validação
	$stmt = $pdo->prepare("
		SELECT * FROM user
		WHERE email = ? AND password = ?
	");	
	$stmt->execute([$email, $password]);

	//error
	$linhas = $stmt->fetchAll();	
	if (sizeof($linhas) == 0) {
		$_SESSION['flash_error'] = ['E-mail ou senha incorretos', 1];
		header('location: login.php');
		exit();	
	}	

	//Sessão
	session_start();
	$_SESSION['auth'] = true;
	$_SESSION['user_name'] = $linhas[0]['name'];
	$_SESSION['email'] = $linhas[0]['email'];
	$_SESSION['user_id'] = $linhas[0]['iduser'];	
	
	header('location: home-tutorial.php');
?>
