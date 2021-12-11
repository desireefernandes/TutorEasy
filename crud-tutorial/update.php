<?php

session_start();

include 'banco.php';

$stmt = $pdo->prepare('UPDATE tutorial set title =?, description=? where id =?');
$stmt->execute([$_POST['title'], $_POST['description'], $_POST['id']]);

header('location: home.php');


?>