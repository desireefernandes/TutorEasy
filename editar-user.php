<?php
session_start();
//////////problemas no editar
include 'banco.php';
$pdo = dbConnect();
 
$id = $_GET['id'];

$stmt = $pdo->prepare(" SELECT * FROM user WHERE id =  ? "); 
$stmt->execute([$id]);
$linhas= $stmt -> fetch();
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
          <form action="update-user.php" method="POST" enctype="multipart/form-data">
            <h2 class="ui center aligned header">Editar Dados</h2>
            <div class="two fields">
              <!-- input título -->
              <div class="field">
                <label>Nome</label>
                <input type="text" name="name" value="<?=$linhas['name']?>" placeholder="name" required>
              </div>
              <!-- input sobrenome -->
              <div class="field">
                <label>Sobrenome</label>
                <input type="text" name="lastname" value="<?=$linhas ['lastname']?>" placeholder="lastname" required>
              </div>
            </div>
            <!-- input email -->
            <div class="field">
              <label>E-mail</label>
              <input type="text" name="lastname" value="<?=$linhas ['lastname']?>" placeholder="lastname" required>
            </div>
            <div class="two fields">
              <!-- input senha -->
              <div class="field">
                <label>Senha</label>
                <input type="password" name="password" value="<?=$linhas['password']?>" placeholder="password" required>
              </div>
              <!-- input confirme senha -->
              <div class="field">
                <label>Confirme a senha</label>
                <input type="password" name="password" value="<?=$linhas['password']?>" placeholder="***********"
                  required>
              </div>
            </div>
            <!-- Submit -->
            <div class="two ui buttons">
              <a class="ui button" href="perfil-user.php"> Voltar </a>
              <input class="ui green button" type="Submit" Value="Salvar">
              <input type="hidden" name="id" value="<?=$linhas['id']?>">
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