<?php
session_start();

if ($_SESSION['flash_error']){
  $_SESSION['flash_error'][1]--;
  if ($_SESSION['flash_error'][1] < 0) {
    unset($_SESSION['flash_error']);
  }
}
elseif ($_SESSION['flash_login']){
  $_SESSION['flash_login'][1]--;
  if ($_SESSION['flash_login'][1] < 0) {
    unset($_SESSION['flash_login']);
  }
}

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

          <!--Title-->
          <h2 class="ui teal image header">
            <div class="content">Acessar conta</div>
          </h2>

          <!--Mensagem de erro-->
          <?php if ($_SESSION['flash_error']): ?>
            <div class="ui red message">
              <div class="content">
                <!--Conteúdo msg-->
                <?= $_SESSION['flash_error'][0] ?>
              </div>
            </div>
          <?php endif ?>
          <!--Mensagem de login-->
          <?php if ($_SESSION['flash_login']): ?>
            <div class="ui green message">
              <div class="content">
                <!--Conteúdo msg-->
                <?= $_SESSION['flash_login'][0] ?>
              </div>
            </div>
          <?php endif ?>

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