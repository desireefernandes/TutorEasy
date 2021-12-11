<?php

session_start();

include 'banco.php';
$stmt = $pdo->prepare('INSERT INTO tutorial (title, description, user_id) VALUES (?,?,?)');
$stmt->execute([$_POST['title'], $_POST['description'], $_SESSION['user_id']]);

header('location: home.php');


?>