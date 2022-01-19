<?php session_start(); ?>

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

  <!--Conteúdo index - INICIO-->
  <!-- Banner 1-->
  <section class="sec" id="inicio">
    <div class="content">
      <div class="mxw800p">
        <!-- <h1 class="huge ui header" >Bem-vindo
          <br>ao TutorEasy</h1> -->
        <br><br><br><br>
        <p>Aqui você encontra modelos simples e ilustrativos de<br>
          tutoriais para diversas atividades facilitando<br>
          ensinamento e o aprendizado.</p>
        <?php if(isset($_SESSION['user_id'])): ?>
        <?php else: ?>
        <a href="login.php" class="ui teal button huge ui button ui left floated button">Cadastrar-se</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Banner 2-->
  <section class="sec-1" id="participar">
    <div class="content-1">
      <div class="mxw800p-1">
        <!-- <h1 class="huge ui header" >Bem-vindo
          <br>ao TutorEasy</h1> -->
        <br><br><br><br>
        <p class="direita">TutorEasy é uma plataforma online que disponibiliza<br>
          tutoriais de fácil entendimento para pessoas que não<br>
          possuem vivência com a tecnologia, visando desenvolver a<br>
          independência desse público principalmente em atividades<br>
          diárias como: Pagar contas, transferências financeiras<br>
          ou uma simples chamada de vídeo. </p>
        <?php if(isset($_SESSION['user_id'])): ?>
        <?php else: ?>
        <a href="login.php" class="ui teal button huge ui button ui right floated button">Participar</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- benner 3-->
  <section class="sec-3" id="contribuir">
  </section>

  <!-- banner 4-->
  <section class="sec-4" id="contribuir1">
  </section>

  <!-- banner 5-->
  <section class="sec-5" id="quemsomos">
  </section>

  <!-- TUTORIAIS
  REFERENCIA: https://codepen.io/onion2k/pen/xxZYBVj-->
  <h2 class="ui center aligned header">Tutoriais</h2>
  <section class="cardsTuto" id="tutoriais">
    <input type="radio" name="position" checked />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <main id="carousel">
      <div class="yyy">
        <div class="ui card">
          <div class="content">
            <div class="header">Como instalar um aplicativo</div>
            <a class="image" href="#">
              <img src="img/tutoriais/comoInstalarApp.jpeg" class="ui large bordered rounded image">
            </a>
            <div class="description">
              <p>Tutorial de como usar instalar um app no celular</p>
            </div>
          </div>
          <div class="extra content">
            <span class="left floated like"><i class="like icon"></i> Gostar </span>
            <span class="right floated star"><i class="star icon"></i> Favorito </span>
          </div>
        </div>
      </div>
      <div class="yyy">
        <div class="ui card">
          <div class="content">
            <div class="header">Como fazer pix</div>
            <a class="image" href="#">
              <img src="img/tutoriais/FazerPix.png" class="ui large bordered rounded image">
            </a>
            <div class="description">
              <p>Tutorial rápido de como realizar pix</p>

            </div>
          </div>
          <div class="extra content">
            <span class="left floated like"><i class="like icon"></i> Gostar </span>
            <span class="right floated star"><i class="star icon"></i> Favorito </span>
          </div>
        </div>
      </div>
      <div class="yyy">
        <div class="ui card">
          <div class="content">
            <div class="header">Como usar PlayStore</div>
            <a class="image" href="#">
              <img src="img/tutoriais/baixar.png" class="ui large bordered rounded image">
            </a>
            <div class="description">
              <p>Ótimo tutorial de como usar PlayStore no celular</p>

            </div>
          </div>
          <div class="extra content">
            <span class="left floated like"><i class="like icon"></i> Gostar </span>
            <span class="right floated star"><i class="star icon"></i> Favorito </span>
          </div>
        </div>
      </div>
      <div class="yyy">
        <div class="ui card">
          <div class="content">
            <div class="header">Como usar o whatsapp</div>
            <a class="image" href="#">
              <img src="img/tutoriais/wpp.png" class="ui large bordered rounded image">
            </a>
            <div class="description">
              <p>Fazer vídeo chamada e muito mais, uma ajudinha!</p>

            </div>
          </div>
          <div class="extra content">
            <span class="left floated like"><i class="like icon"></i> Gostar </span>
            <span class="right floated star"><i class="star icon"></i> Favorito </span>
          </div>
        </div>
      </div>
      <div class="yyy">
        <div class="ui card">
          <div class="content">
            <div class="header">Como salvar contato</div>
            <a class="image" href="#">
              <img src="img/tutoriais/salvarContato.jpeg" class="ui large bordered rounded image">
            </a>
            <div class="description">
              <p>Bom tutorial rápido de como salvar contato</p>

            </div>
          </div>
          <div class="extra content">
            <span class="left floated like"><i class="like icon"></i> Gostar </span>
            <span class="right floated star"><i class="star icon"></i> Favorito </span>
          </div>
        </div>
      </div>
      <main>
  </section>

  <!-- banner 6-->
  <section class="sec-6" id="contato">
  </section>

  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>

</html>