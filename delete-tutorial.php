<?php
session_start();

$idtutorial= $_GET['id'];
include 'banco.php';

$pdo = dbConnect();

$stmt = $pdo->prepare("DELETE FROM tutorial WHERE id= ?");
$stmt->execute([$idtutorial]);

header('location: perfil-tutorial.php');

?>
