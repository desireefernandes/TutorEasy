<?php
session_start();

//APENAS USER LOGADO POSSUI ACESSO
//if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
//	session_destroy();
//	header('location: index.php');
//    exit();
//}

//********************GG*************listar tutorial***********************************//
include 'banco.php';
$pdo = dbConnect();

$stmt =  $pdo->prepare('SELECT * FROM tutorial WHERE idtutorial = ? ' ); //user_id = ? não serve
$stmt->execute([$_SESSION['user_id']]);

$tutorial = $stmt->fetchAll();
//*******************GG************listar tutorial************************************//
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
</head>

<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="ui vertical stripe segment">
        <div class="ui text container">
            <div class="ui middle aligned center aligned grid">

                <h1>Você está logado, <?= $_SESSION['user_name']; ?>!</h1>

                <div class="item"><a href="user-delete.php?id=<?=$_SESSION['user_id']?>"> Deletar conta</a></div>
                <div class="item"><a href="logout.php"> Sair</a></div>

                <!--*************GG**********cadastro tutoriais********************-->
                <table>
                    <?php foreach ($tutorial as $tutoriais): ?>
                    <tr>
                        <td><?= $tutoriais['title'] ?></td>
                        <td><?= $tutoriais['description'] ?></td>
                        <td><a href="tutorial-delete.php?id=<?= $tutorial['id']?>"> Apagar tutorial</a></td>
                    </tr>
                    <?php endforeach?>
                </table>

                <!--*************GG*******formulário pra salvar um novo tutoriais***-->
                <form action="tutorial-save.php" method="POST">
                    <h2> Novo tutorial</h2>
                    <input type="text" name="title" placeholder="Titulo">
                    <input type="text" name="description" placeholder="Descrição">
                    <input type="Submit" Value="Salvar">
                </form>
                <!--**********************************************************************-->

                <!-- TUTORIAIS -->
                <section id="tutoriais">
                    <div class="ui vertical stripe segment">
                        <div class="ui middle aligned stackable grid container">
                            <div class="row">
                                <div class="eight wide column">
                                    <h3 class="ui header">Tutoriais</h3>

                                    <div class="row">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="header">Como usar o whatsapp</div>
                                                <a class="image" href="#">
                                                    <img src="img/manu3.jpeg" class="ui large bordered rounded image">
                                                </a>
                                                <div class="description">
                                                    <p>Como acessar o Whatsapp</p>
                                                </div>
                                            </div>
                                            <div class="extra content">
                                                <span class="left floated like"><i class="like icon"></i> Gostar </span>
                                                <span class="right floated star"><i class="star icon"></i> Favorito
                                                </span>
                                            </div>
                                        </div>

                                        <div class="ui card">
                                            <div class="content">
                                                <div class="header">Celular android</div>
                                                <a class="image" href="#">
                                                    <img src="img/manu2.jpg" class="ui large bordered rounded image">
                                                </a>
                                                <div class="description">
                                                    <p>Funcionalidades do celular</p>
                                                </div>
                                            </div>
                                            <div class="extra content">
                                                <span class="left floated like"><i class="like icon"></i> Gostar </span>
                                                <span class="right floated star"><i class="star icon"></i> Favorito
                                                </span>
                                            </div>
                                            <div class="six wide right floated column">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>