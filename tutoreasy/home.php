<?php
 
 //perfil do usuário com todas as funcionalidades

session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    session_destroy();
    header('location: index.php');
    exit();

}

include 'banco.php';

 ///// LISTAR TUTORIAIS /////                                                
$stmt = $pdo->prepare ('SELECT * FROM tutorial WHERE user_id= ?');                  
$stmt->execute([$_SESSION['user_id']]);
$tutorial= $stmt->fetchAll();
///////////////////////////
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tutoriais</title>
</head>
<body>
 <h1> <?= $_SESSION['user_name']?>  </h1>

 <!--  SAIR/ EDITAR / DELETAR CONTA -->
 <a href="logout.php"><button>Sair</button></a>
 <a href="delete-usuario.php?id=<?=$_SESSION['user_id']?>"><button>Deletar conta</button></a>
 <td><a href="editar-user.php?id=<?=$_SESSION['user_id']?>"> <button>Editar</button> </a>
<!------------------------------------->

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

 <h2>Tutoriais</h2>


<!--  SALVAR TUTORIAL -->

<!--  PRA IMAGEM TEM QUE TER O enctype="multipart/form-data  MAS QUANDO USO O CAMPO NA TABELA FICA VAZIO
QUANDO USO $_POST NA PÁGINA UPDATE-TUTORIAL.PHP  E SAVE-TUTORIAL.PHP  -->
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
<form action="save-tutorial.php" method="POST" enctype="multipart/form-data">
	<h2>Crie um Tutorial </h2>
	<input type="text" name="title" placeholder="titulo">
    <input type="file" name="arquivo" equired name="arquivo"> 
    <input type="text" name="description" placeholder="Descrição">
	<input type="Submit" Value="Salvar">
</form><br>
<!---------------------->

<table border="3">
 	<?php foreach ($tutorial as $tuto): ?> 
 	<tr>
 		<td><?= $tuto['title'] ?></td>
 		<td><?= $tuto['arquivo']?></td>
        <td><?= $tuto['description'] ?></td>

<!--  EDITAR / APAGAR TUTORIAL -->
 		<td><a href="delete-tutorial.php?id=<?= $tuto['id']?>"> <button>Apagar</button></a></td>
 	    <td><a href="editar-tutorial.php?id=<?= $tuto['id']?>"> <button>Editar</button> </a>
<!------------------------------->
 	</td>

 	</tr>


 	<?php endforeach?>
</table>


</body>
</html>
