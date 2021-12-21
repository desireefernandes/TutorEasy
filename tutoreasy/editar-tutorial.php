<?php


 include 'banco.php'; 

 $stmt = $pdo->prepare("
    SELECT * FROM TUTORIAL
    WHERE id =  ? "); 
 $stmt->execute([$_GET['id']]);
 $tuto= $stmt -> fetch();


  ?>


<style>
            form {
                border: 1px solid hsl(0, 34%, 60%);
                padding: 2em;
                max-width: 400px;
            }
            input, button {
                display: block;
                margin-top: .5em;
                padding: .5em;
            }
</style>

<!--  PRA IMAGEM TEM QUE TER O enctype="multipart/form-data  MAS QUANDO USO O CAMPO NA TABELA FICA VAZIO
QUANDO USO $_POST NA PÁGINA UPDATE-TUTORIAL.PHP  E SAVE-TUTORIAL.PHP  -->

<form action="update-tutorial.php" method="POST" enctype="multipart/form-data">

<h2> Edite o Tutorial</h2>
	<input type="text" name="title"       value="<?=$tuto['title']?>"       placeholder="title">
	<input type="file" name="arquivo"      value="<?=$tuto['arquivo']?>"      placeholder="arquivo">
	<input type="text" name="description" value="<?=$tuto['description']?>" placeholder="description">

	<input type="Submit" Value="Salvar">
	<input type="hidden" name="id" value="<?=$tuto['id']?>">

</form>
