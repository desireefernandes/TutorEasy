<?php

session_start();

include 'banco.php';

$stmt = $pdo->prepare('UPDATE USER set name =?, lastname=?, email=?, password=? where id =?');
$stmt->execute([$_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['id']]);

header('location: login.php');


?>

