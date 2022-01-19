<?php
session_start();

//APENAS USER LOGADO POSSUI ACESSO
//if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
//	session_destroy();
//	header('location: index.php');
//    exit();
//}

include("banco.php");
$pdo = dbConnect();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorEasy</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="/img/_logo/simbolo.png" />

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
        <!-- TUTORIAIS -->
        <div class="container-tutoriais">
            <!-- BUSCA -->
            <div>
                <div class="content-title-tutorial">
                    <form action="" method="GET">
                        <div class="ui fluid action input">
                            <input type="text" name="busca" value="<?=$_GET['busca']?>" placeholder="Pesquisar...">
                            <button class="ui icon button">
                                <i class="search icon"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <?php
                if(!isset($_GET['busca'])): ?>
                    <div class="ui placeholder segment">
                        <div class="ui icon header">
                            <i class="search icon"></i>
                            Aqui você encontra modelos simples e ilustrativos de tutoriais <br>
                            para diversas atividades facilitando ensinamento e o aprendizado.
                        </div>
                    </div>
                    <br>
                    <div class="ui four cards">
                        <?php

                        else:
                            $pesquisa = $_GET['busca'];
                            $pesquisa = $pdo->prepare("SELECT * FROM tutorial WHERE title LIKE '%$pesquisa%' ");
                            $pesquisa->execute();

                            if ($pesquisa == 0) { ?>
                            Nenhum resultado encontrado

                        <?php } else {
                            while($lista = $pesquisa->fetch(PDO::FETCH_ASSOC)):
                                $arquivo = '_arquivo/1/bbb.jpg';
                                if (is_file("_arquivo/" .  $lista['id'] . "/" . $lista['arquivo'])) {
				                    $arquivo = "_arquivo/" .  $lista['id'] . "/" . $lista['arquivo'];
			                    } ?>
                                <!-- card -->
                                <div class="ui card">
                                    <div class="content">
                                        <div class="header"><?=$lista['title'];?></div>
                                        <a class="image" href="tutorial.php?id=<?=$lista['id'];?>">
                                            <img class="ui large bordered rounded image" src="<?= $arquivo ?>">
                                        </a>
                                        <div class="description">
                                            <p><?=$lista['description'];?></p>
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="left floated like"><i class="like icon"></i> Gostei </span>
                                        <span class="right floated star"><i class="star icon"></i> Favoritar </span>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php } ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>