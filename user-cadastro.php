<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorEasy</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

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
                        <div class="field">
                            <div div class="ui left icon input floating-label">
                                <i class="user icon"></i>
                                <input type="text"          name="name"             placeholder="Nome">
                            </div>
                        </div>
                        <div class="field">
                            <div div class="ui left icon input floating-label">
                                <i class="user icon"></i>
                                <input type="text"          name="lastname"         placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="field">
                            <div div class="ui left icon input floating-label">
                                <i class="lock icon"></i>
                                <input type="email"         name="email"            placeholder="E-mail">
                            </div>
                        </div>
                        <div class="field">
                            <div div class="ui left icon input floating-label">
                                <i class="lock icon"></i>
                                <input type="password"      name="password"         placeholder="Senha">
                            </div>
                        </div>          
                        <input class="ui fluid large teal submit button" type="submit" value="Cadastrar-se">         
                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>
