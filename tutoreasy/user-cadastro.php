<?php

include 'banco.php';
$pdo = dbConnect();

 $name =$_POST['name'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $password= $_POST['password'];

$stmt = $pdo->prepare("
	INSERT INTO user (name, lastname, email, password) VALUES (?,?,?,?)");

$stmt->execute([$name, $lastname, $email, $password]);

header('location:index.php')
?>
