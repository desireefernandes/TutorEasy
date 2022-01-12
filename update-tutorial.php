<?php

session_start();

include 'banco.php';
$pdo = dbConnect();

 $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "arquivo/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

//ASSIM FICA SALVO APENAS O NOME DA IMAGEM

$stmt = $pdo->prepare('UPDATE tutorial set title =?, arquivo=?, description=? where id =?');
$stmt->execute([$_POST['title'], $_POST['arquivo'], $_POST['description'], $_POST['id']]);

// DESSA FORMA COM $_FILES SÓ APARECE O NOME ARRAY
//$stmt = $pdo->prepare('UPDATE TUTORIAL set title =?, imagem=?, description=? where id =?');
//$stmt->execute([$_POST['title'], $_FILES['imagem'], $_POST['description'], $_POST['id']]);

}

header('location: perfil-tutorial.php');

?>
