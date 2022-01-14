<?php
session_start();

//APENAS USER LOGADO POSSUI ACESSO
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    session_destroy();
	header('location: login.php');
    exit();
}

include 'banco.php';
$pdo = dbConnect();

///// EDIÇÃO TUTORIAIS ///// 
$stmt = $pdo->prepare("
   SELECT * FROM tutorial
   WHERE id =  ? "); 
$stmt->execute([$_GET['id']]);
$tuto= $stmt -> fetch();
///////////////////////////

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorEasy</title>

    <link rel="stylesheet" href="css/style.css">
    <!--Semantic UI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <style>
        body {
            background: #F7F8F9;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="ui vertical stripe segment">

        <!-- Deixa o card centralizado e pequeno -->
        <div class="ui middle aligned center aligned grid">
            <!-- TUTORIAIS -->
            <div class="container-tutoriais">
                <!-- Form -->
                <div class="ui form">
                    <form action="update-tutorial.php" method="POST" enctype="multipart/form-data">
                        <h2 class="ui center aligned header">Editar Tutorial</h2>
                        <!-- input título -->
                        <div class="field">
                            <label>Título</label>
                            <input type="text" name="title" value="<?=$tuto['title']?>" placeholder="title" required>
                        </div>
                        <!-- input descrição -->
                        <div class="field">
                            <label>Descrição</label>
                            <input type="text" name="description" value="<?=$tuto['description']?>"
                                placeholder="description" required>
                        </div>
                        <!-- input arquivo -->
                        <div class="field">
                            <label> Upload imagem tutorial</label>
                            <?php $arquivo = '_arquivo/1/bbb.jpg';
                            if (is_file("_arquivo/" .  $tuto['id'] . "/" . $tuto['arquivo'])) {
				                $arquivo = "_arquivo/" .  $tuto['id'] . "/" . $tuto['arquivo'];
			                }
			            ?>
                            <img class="ui small image" src="<?= $arquivo ?>">
                            <input type="file" name="arquivo" value="<?=$tuto['arquivo']?>" placeholder="arquivo" required>
                        </div>
                        <!-- Submit -->
                        <div class="two ui buttons">
                            <a class="ui button" href="perfil-tutorial.php"> Voltar </a>
                            <input class="ui green button" type="Submit" Value="Salvar" required>
                            <input type="hidden" name="id" value="<?=$tuto['id']?>" required>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>