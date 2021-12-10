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
                        <div class="content">Cadastro</div>
                    </h2>

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
                                    <input type="email" name="email" placeholder="E-mail"required>
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
                                        <input type="password" name="verificationPassword"
                                            placeholder="Confirma a senha" required>
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