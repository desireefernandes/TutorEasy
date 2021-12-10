<?php

session_start();

include 'banco.php';
$pdo = dbConnect();

$stmt = $pdo->prepare('INSERT INTO tutorial (title, description, idtutorial) VALUES 
	(?,?,?)');
$stmt->execute([$_POST['title'], $_POST['description'], $_SESSION['idtutorial']]);



header('location: home-tutorial.php');


?>