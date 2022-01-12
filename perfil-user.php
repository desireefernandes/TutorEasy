<?php
session_start();

include 'banco.php';
$pdo = dbConnect();

//APENAS USER LOGADO POSSUI ACESSO
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    session_destroy();
    header('location: login.php');
    exit();
}
                                             
$stmt = $pdo->prepare ('SELECT * FROM user WHERE id= ?');                  
$stmt->execute([$_SESSION['user_id']]);
$dados = $stmt->fetchAll();

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
       <!--  <div class="ui middle aligned center aligned grid"> -->
            <!-- PERFIL -->
            <div class="container-user">
                <div class="content-title-user">
                    <h1>Meu perfil</h1>
                </div>
                <h4 class="perfil-dados" >Nome: <?= $_SESSION['user_name']; ?> <br>
                    Sobrenome: <?=$_SESSION['lastname']; ?><br>
                    E-mail: <?=$_SESSION['email'];?> </h4>
                <div><!--Nav buttons--> 
                    <div class="grid">
                        <a class="ui blue button " href="editar-user.php?id=<?=$_SESSION['user_id']?>">Editar dados</a>
                        <a class="ui red button" href="delete-usuario.php?id=<?=$_SESSION['user_id']?>">Excluir conta</a>
                    </div>
                    <a class="ui right floated button" href="logout.php">Sair</a>

                </div>
            </div><!--conteiner-->

       <!--  </div> -->
    </div>
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>

</html>