<?php

$id= $_GET['id'];

include 'banco.php';
$pdo = dbConnect();

$stmt = $pdo->prepare('DELETE FROM tutorial WHERE idtutorial= ?');
$stmt->execute([$id]);


header('location: tutorial-criar.php');


?>