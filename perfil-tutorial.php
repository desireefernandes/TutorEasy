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
                        <a class="ui right floated button ui green button" href="#abrirModal">Criar tutorial</a>
                    </div>
                </div>

            </div>

            <!--  SALVAR TUTORIAL -->
            <!--MODAL-->
            <div id="abrirModal" class="modal">
                <!--Container Formulário-->
                <div class="container-modal">
                    <!--Botão fechar-->
                    <a href="#fechar" title="Fechar" class="fechar">x</a>
                    <!--Formulário-->
                    <?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
                    <div class="ui form">
                        <form action="save-tutorial.php" method="POST" enctype="multipart/form-data">
                            <h2 class="ui center aligned header">Adicionar Tutorial</h2>
                            <!-- input título -->
                            <div class="field">
                                <label>Título</label>
                                <input type="text" name="title" placeholder="Ex: Como fazer pix">
                            </div>
                            <!-- input descrição -->
                            <div class="field">
                                <label>Descrição</label>
                                <textarea rows="2" type="text" name="description"
                                    placeholder="Sobre o que é seu tutorial?"></textarea>
                                <!--<input type="text" name="description" placeholder="Descrição">-->
                            </div>
                            <!-- input arquivo -->
                            <div class="field">
                                <label> Upload imagem tutorial</label>
                                <input type="file" name="arquivo" equired name="arquivo">
                            </div>
                            <!-- Submit -->
                            <input class="fluid ui button ui green button" type="Submit" Value="Salvar">
                        </form>
                    </div>
                    <!---------------------->
                </div>
                <!--end Formulário-->
            </div>
            <!--end modal-->

            <!-- CARDS -->
            <div class="ui four cards">
                <?php foreach ($tutorial as $tuto): ?>
                <?php $arquivo = '_arquivo/1/bbb.jpg';
                        if (is_file("_arquivo/" .  $tuto['id'] . "/" . $tuto['arquivo'])) {
				            $arquivo = "_arquivo/" .  $tuto['id'] . "/" . $tuto['arquivo'];
			            }
			        ?>
                <!-- CARD-->
                <div class="ui card">
                    <div class="content">
                        <div class="header"><?= $tuto['title'] ?></div>
                        <a class="image" href="#">
                            <img class="ui large bordered rounded image" src="<?= $arquivo ?>">
                        </a>
                        <div class="description">
                            <p><?= $tuto['description'] ?></p>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="two ui buttons">
                            <a class="ui blue basic button" href="editar-tutorial.php?id=<?= $tuto['id']?>">Editar</a>
                            <a class="ui red basic button" href="#abrirModalExcluir">Excluir</a>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>

            <!--  Confirmação excluir -->
            <!--MODAL-->
            <div id="abrirModalExcluir" class="modal">
                <div class="container-modal">
                    <!--Conteúdo-->
                    <div>
                        <br>
                        <div class="header">
                            <p class="ui center aligned header">Deseja realmente excluir o tutorial?</p>
                        </div>
                        <br>
                        <div class="two ui buttons">
                            <a class="ui button" href="#fechar" title="Fechar">Cancelar</a>
                            <a class="ui red button" href="delete-tutorial.php?id=<?= $tuto['id']?>">Excluir</a>
                        </div>
                    </div>
                    <!-- end Conteúdo-->
                </div>
            </div>
            <!--end modal-->

        </div>

    </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>