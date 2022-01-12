<?php
session_start();

//APENAS USER LOGADO POSSUI ACESSO
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    session_destroy();
	header('location: index.php');
    exit();
}

include 'banco.php';
$pdo = dbConnect();

 ///// LISTAR TUTORIAIS /////                                                
 $stmt = $pdo->prepare ('SELECT * FROM tutorial WHERE user_id= ?');                  
 $stmt->execute([$_SESSION['user_id']]);
 $tutorial= $stmt->fetchAll();
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

        .ui.four.cards {}
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="ui vertical stripe segment">
        <!-- TUTORIAIS -->
        <div class="container-tutoriais">

            <div class="content-title-tutorial">

                <div class="ui right aligned grid">
                    <div class="left floated left aligned six wide column">
                        <h1>Meus tutoriais</h1>
                    </div>
                    <div class="right floated left aligned six wide column">
                        <a class="ui right floated button ui green button">Criar tutorial</a>
                    </div>
                </div>

            </div>

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

            <!-- CARDS -->
            <div class="ui four cards">
                <?php
                $listagem = $pdo->prepare("SELECT * FROM tutorial");
                $listagem->execute();
                    while($lista = $listagem->fetch(PDO::FETCH_ASSOC)): 
                ?>
                <div class="ui card">
                    <div class="content">
                        <div class="header"><?=$lista['title'];?></div>
                        <a class="image" href="#">
                            <img src="img/manu3.jpeg" class="ui large bordered rounded image">
                        </a>
                        <div class="description">
                            <p><?=$lista['description'];?></p>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="ui two bottom attached buttons">
                            <div class="ui blue basic button">Editar</div>
                            <div class="ui red basic button">Excluir</div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>


        </div>

    </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>