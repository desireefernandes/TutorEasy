<?php
session_start();

include 'banco.php';
$pdo = dbConnect();

if ($_SESSION['flash_error']){
    $_SESSION['flash_error'][1]--;
    if ($_SESSION['flash_error'][1] < 0) {
      unset($_SESSION['flash_error']);
    }
  }

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorEasy</title>
    <link rel="icon" type="imagem/png" href="/img/_logo/simbolo.png" />

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
        <div class="ui text container">

            <div class="ui middle aligned center aligned grid">
                <div class="column">

                    <!--title -->
                    <h2 class="ui teal image header">
                        <div class="content">Cadastro</div>
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

                    <!-- formulario -->
                    <form class="ui large form" action="user-validar-cadastro.php" method="POST">
                        <div class="two fields">
                            <!-- input nome -->
                            <div class="field">
                                <div class="required field">
                                    <div div class="ui left icon input floating-label">
                                        <i class="user icon"></i>
                                        <input type="text" name="name" placeholder="Nome" required>
                                    </div>
                                </div>
                            </div>
                            <!-- input sobrenome -->
                            <div class="field">
                                <div class="required field">
                                    <div div class="ui left icon input floating-label">
                                        <i class="user icon"></i>
                                        <input type="text" name="lastname" placeholder="Sobrenome" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- input email -->
                        <div class="field">
                            <div class="required field">
                                <div div class="ui left icon input floating-label">
                                    <i class="envelope icon"></i>
                                    <input type="email" name="email" placeholder="E-mail" required>
                                </div>
                            </div>
                        </div>
                        <div class="two fields">
                            <!-- input senha -->
                            <div class="field">
                                <div class="required field">
                                    <div div class="ui left icon input floating-label">
                                        <i class="lock icon"></i>
                                        <input type="password" name="password" placeholder="Crie uma senha" required>
                                    </div>
                                </div>
                            </div>
                            <!-- input confirmar senha -->
                            <div class="field">
                                <div class="required field">
                                    <div div class="ui left icon input floating-label">
                                        <i class="lock icon"></i>
                                        <input type="password" name="confirm_password"
                                            placeholder="Confirme a senha" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cadastrar -->
                        <input class="ui fluid large teal submit button" type="submit" value="Cadastrar-se">
                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript">
        //
    </script>

</body>

</html>