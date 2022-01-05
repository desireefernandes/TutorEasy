<?php
session_start();

$idtutorial= $_GET['id'];

include 'banco.php';

$stmt = $pdo->prepare("DELETE FROM tutorial WHERE id= ?");
$stmt->execute([$idtutorial]);

header('location: home.php');

?>
