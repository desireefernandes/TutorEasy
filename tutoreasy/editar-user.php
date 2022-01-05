<?php
session_start();
//////////problemas no editar
 include 'banco.php'; 

 $stmt = $pdo->prepare(" SELECT * FROM user WHERE id =  ? "); 
 $stmt->execute([$_GET['id']]);
 $linhas= $stmt -> fetch();
?>

<style>
  form {
    border: 1px solid hsl(0, 34%, 60%);
    padding: 2em;
    max-width: 200px;
  }

  input,
  button {
    display: block;
    margin-top: .5em;
    padding: .5em;
  }
</style>

<form action="update-user.php" method="POST">
  <h2> Edite o Cadastro</h2>
  <input type="text" name="name" value="<?=$linhas['name']?>" placeholder="name">
  <input type="text" name="lastname" value="<?=$linhas ['lastname']?>" placeholder="lastname">
  <input type="text" name="email" value="<?=$linhas['email']?>" placeholder="email">
  <input type="password" name="password" value="<?=$linhas['password']?>" placeholder="password">
  <input type="Submit" Value="Salvar">
  <input type="hidden" name="id" value="<?=$linhas['id']?>">
</form>
