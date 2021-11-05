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
      <img src="#" class="image">
      <div class="content">
        Acessar conta
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui input floating-label">
            <input type="text" name="username" placeholder="Nome">
           <!-- <label>Username</label> -->
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input floating-label">
            <i class="user icon"></i>
            <input type="email" name="email" placeholder="E-mail">
           <!-- <label>E-mail address</label> -->
          </div>
        </div>
        <div class="field">
          <div class="ui right icon input floating-label">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Senha">
           <!-- <label>Password</label> -->
          </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Não tem cadastro? <a href="#">Clique aqui</a>
    </div>
  </div>

    </div>

</body>

</html> 
 
 