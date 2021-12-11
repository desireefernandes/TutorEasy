<?php

$id= $_GET['id'];

include 'banco.php';

$stmt = $pdo->prepare('DELETE FROM tutorial WHERE id= ?');
$stmt->execute([$id]);


header('location: home.php');


?>