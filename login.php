<?php
session_start();

include 'banco.php';
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

</head>

<body>
  <!-- navbar -->
  <?php include 'header.php'; ?>

  <div class="ui vertical stripe segment">
    <div class="ui text container">

      <div class="ui middle aligned center aligned grid">
        <div class="column">
          <h2 class="ui teal image header">
            <div class="content">Acessar conta</div>
          </h2>

          <!--Formulario -->
          <form class="ui large form" action="validar-login.php" method="POST">
            <div class="ui stacked segment">

              <div class="field">
                <div class="required field">
                  <div class="ui left icon input floating-label">
                    <i class="envelope icon"></i>
                    <!-- INPUT EMAIL-->
                    <input type="email" name="email" placeholder="E-mail" required>
                  </div>
                </div>
              </div>

              <div class="field">
                <div class="required field">
                  <div class="ui left icon input floating-label">
                    <i class="lock icon"></i>
                    <!-- INPUT SENHA-->
                    <input type="password" name="password" placeholder="Senha" required>
                  </div>
                </div>
                <input class="ui fluid large teal submit button" type="submit" value="Entrar">
              </div>
            </div>

            <div class="ui error message">
              <!--Mensagem de erro-->
            </div>

          </form>

          <div class="ui message">
            Novo por aqui? <a href="user-cadastro.php">Cadastre-se</a>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>

</html>
