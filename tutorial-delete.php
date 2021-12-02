<?php

$id= $_GET['id'];

include 'banco.php';

$stmt = $pdo->prepare('DELETE FROM tutorial WHERE idtutorial= ?');
$stmt->execute([$id]);


header('location: tutorial-criar.php');


?>