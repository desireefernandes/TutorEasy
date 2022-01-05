<?php

session_start();

include 'banco.php';
$pdo = dbConnect();

$stmt = $pdo->prepare('UPDATE user set name =?, lastname=?, email=?, password=? where id =?');
$stmt->execute([$_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['id']]);

header('location: home.php');

?>
