<?php

 include 'banco.php'; 

 $stmt = $pdo->prepare("
	SELECT * FROM tutorial
	WHERE id =  ? "); 
 $stmt->execute([$_GET['id']]);
 $tuto= $stmt -> fetch();


  ?>
<style>
            form {
                border: 1px solid hsl(0, 34%, 60%);
                padding: 2em;
                max-width: 200px;
            }
            input, button {
                display: block;
                margin-top: .5em;
                padding: .5em;
            }
</style>

<form action="update.php" method="POST">

<h2> Edite o tutorial</h2>
<input type="text" name="title" value="<?=$tuto['title']?>" placeholder="title">

<input type="text" name="description" value="<?=$tuto['description']?>" placeholder="description">
	
	<input type="Submit" Value="Salvar">
	<input type="hidden" name="id" value="<?=$tuto['id']?>">

</form>