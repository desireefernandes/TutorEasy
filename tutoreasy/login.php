<?php

session_start();


include 'banco.php';
$pdo = dbConnect();


$email= $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("
	SELECT * FROM user 
	WHERE email = ? AND password = ?
	");

$stmt->execute([$email, $password]);

$linhas = $stmt->fetchAll();



if (sizeof($linhas) == 0) {
	header('location:index.php');
	exit();

}


session_start();
	$_SESSION['auth'] = true;
	$_SESSION['user_name'] = $linhas[0]['name'];
	$_SESSION['email'] = $linhas[0]['email'];
	$_SESSION['user_id'] = $linhas[0]['id'];
header('location:home.php');

?>