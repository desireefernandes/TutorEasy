<?php

session_start();



include 'banco.php';


 $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "arquivo/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

   

   // $sql_code = "INSERT INTO tutorial (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
  

$stmt = $pdo->prepare('INSERT INTO tutorial (title, arquivo, description, user_id) VALUES (?,?,?,?)');

$stmt->execute( [$_POST['title'], $_POST['arquivo'], $_POST['description'], $_SESSION['user_id']]);

}

// DESSA FORMA COM $_FILES SÓ APARECE O NOME ARRAY
//$stmt = $pdo->prepare('INSERT INTO tutorial (title, imagem, description, user_id) VALUES (?,?,?,?)');

//$stmt->execute([$_POST['title'], $_FILES['imagem'], $_POST['description'], $_SESSION['user_id']]);

header('location: home.php');


?>

