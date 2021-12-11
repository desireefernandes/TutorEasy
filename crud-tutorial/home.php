<?php

session_start();
if (!isset($_SESSION['user_id'])) {

	header('location: index.php');
	exit();


}

include 'banco.php';
$stmt = $pdo->prepare ('SELECT * FROM tutorial WHERE user_id = ?');
$stmt->execute([$_SESSION['user_id']]);

$tutorial = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutoriais</title>
</head>
<body>
 <h1> <?= $_SESSION['username']?>  </h1>
 <a href="logout.php"><button>Sair</button></a>
 <a href="delete-usuario.php"><button>Deletar conta</button></a>


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

 <h2>Tutoriais</h2>

<form action="save.php" method="POST">
	<h2> </h2>
	<input type="text" name="title" placeholder="Título">
	<input type="text" name="description" placeholder="Descrição">
	<input type="Submit" Value="Salvar">
</form><br>

<table border="3">
 	<?php foreach ($tutorial as $tuto): ?> 
 	<tr>
 		<td><?= $tuto['title'] ?></td>
 		<td><?= $tuto['description'] ?></td>
 		<td><a href="delete-tutorial.php?id=<?= $tuto['id']?>"> <button>Apagar</button></a></td>
 	<td><a href="edit.php?id=<?= $tuto['id']?>"> <button>Editar</button> </a>

 	</td>

 	</tr>
 	<?php endforeach?>
</table>

</body>
</html>
