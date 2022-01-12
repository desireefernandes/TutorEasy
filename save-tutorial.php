<?php
session_start();

include 'banco.php';
$pdo = dbConnect();

$msg = false;
$nome_imagem = $_FILES['arquivo']['name'];

$stmt = $pdo->prepare('INSERT INTO tutorial (title, arquivo, description, user_id) VALUES (?,?,?,?)');
$stmt->execute( [$_POST['title'], $nome_imagem, $_POST['description'], $_SESSION['user_id']]);

$ultimo_id = $pdo->lastInsertId();
var_dump($ultimo_id);
include 'save-imagem.php';
print_r($stmt->errorInfo());

// DESSA FORMA COM $_FILES SÓ APARECE O NOME ARRAY
//$stmt = $pdo->prepare('INSERT INTO tutorial (title, imagem, description, user_id) VALUES (?,?,?,?)');

//$stmt->execute([$_POST['title'], $_FILES['imagem'], $_POST['description'], $_SESSION['user_id']]);

header('location: perfil-tutorial.php');

?>
