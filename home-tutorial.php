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
    <!-- banner -->
    <div class="banner">
        <h1 id="title-banner">
        <!--TutorEasy<br>
        Aqui você encontra modelos simples e ilustrativos de<br>
        tutoriais para diversas atividades facilitando<br>
        ensinamento e o aprendizado.<br>
            ⇣
        </h1> -->
    </div>
    <!-- <div class="ui vertical stripe segment"> -->
        <!-- TUTORIAIS -->
        <div class="container-tutoriais">
            <div class="content-title-tutorial">
                <h1>Tutoriais</h1>
            </div>
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
                                <span class="left floated like"><i class="like icon"></i> Gostei </span>
                                <span class="right floated star"><i class="star icon"></i> Favoritar </span>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    <!-- </div> -->
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>

</html>
