<?php session_start(); ?>

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

    <!--Conteúdo index - INICIO-->
    <section id="inicio">
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Ensinando fácil</h3>
                    <p> Aqui você encontra modelos simples e ilustrativos de tutoriais para diversas atividades 
                     facilitando ensinamento e o aprendizado.</p>
                     
                
                    <!--<h3 class="ui header">Como funciona</h3>-->
                    <p>Os usuários inscritos na plataforma podem contribuir criando novos tutoriais personalizados que atendam as necessidades de pessoas de seu convívio ou de sua comunidade.</p>
                   <!--  <p>Exemplo de tutorial</P>
                   <img src="img/manu3.jpeg"  class="ui large bordered rounded image">-->
        
                    <h3 class="ui header">Tenha em mãos qualquer tutorial</h3>
                    <p>Faça downloads, tire prints ou até mesmo imprima e compartilhe com quem você ama.</p>

                </div>
                <div class="six wide right floated column">
                    <img src="img/People1.png"  class="ui large bordered rounded image">
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
    </section>



    <!-- TUTORIAIS -->
<section id= "tutoriais">
<div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Tutoriais</h3>
                    
                    

                    <div class="ui card">
  <div class="content">
    <div class="header">Como usar o whatsapp</div>
    <a class="image" href="#">
    <img src="img/manu3.jpeg" class="ui large bordered rounded image">
  </a>
    <div class="description">
      <p>como acessar o whatsapp</p>

    </div>
  </div>
  <div class="extra content">
    <span class="left floated like"><i class="like icon"></i> Gostar </span>
    <span class="right floated star"><i class="star icon"></i> Favorito </span>
  </div>
                  </div>

                <div class="ui card">
  <div class="content">
    <div class="header">Celular android</div>
    <a class="image" href="#">
    <img src="img/manu2.jpg" class="ui large bordered rounded image">
  </a>
    <div class="description">
      <p>Funcionalidades do celular</p>

    </div>
  </div>
  <div class="extra content">
    <span class="left floated like"><i class="like icon"></i> Gostar </span>
    <span class="right floated star"><i class="star icon"></i> Favorito </span>
  </div>
                <div class="six wide right floated column">
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>

</section>


<!-- QUEM SOMOS -->
<section id="quemsomos">
<div class="ui vertical stripe segment">
        <div class="ui text container">
            <h3 class="ui header">Estamos aqui para te ajudar</h3>
            <p>Está é uma plataforma online que disponibiliza tutoriais de fácil entendimento para pessoas que não possuem vivência com a tecnologia, visando desenvolver a independência desse público principalmente em atividades diárias como: Pagar contas, transferências financeiras ou uma simples chamada de vídeo. Os usuários inscritos na plataforma podem contribuir criando novos tutoriais personalizados que atendam as necessidades de pessoas de seu convívio e/ou comunidade. Dessa forma, nosso objetivo é criar uma plataforma gratuita e colaborativa que leve aprendizado ao máximo de pessoas de forma social e inclusiva, criando um mecanismo que ajuda e democratiza o acesso à tecnologia para todos.</p>
          <!--  <a class="ui orange button">Lorem Ipsum</a> -->
            <h4 class="ui horizontal header divider"> 
                <a href="#inicio">.</a>    
               <h3 class="ui header">Como funciona</h3>
                <p>Os usuários inscritos na plataforma podem contribuir criando novos tutoriais personalizados que atendam as necessidades de pessoas de seu convívio e/ou comunidade. Dessa forma, nosso objetivo é criar uma plataforma gratuita e colaborativa que leve aprendizado ao máximo de pessoas de forma social e inclusiva, criando um mecanismo que ajuda e democratiza o acesso à tecnologia para todos.</p>
          <!-- <a class="ui orange button">Lorem Ipsum</a> -->
            <h4 class="ui horizontal header divider">
                <a href="#inicio">.</a>   
            </h4>
            <h3 class="ui header">Desenvolvedores</h3>

            <div class="ui items">
  <div class="item">
    <a class="ui tiny image">
    <img src="/img/people2.png">
    </a>
    <div class="content">
      <p class="header">Aline Martineli</p>
      <div class="description">
        <p> is a library scientist living in New York City.</p>
      </div>
    </div>
  </div>
  <div class="item">
    <a class="ui tiny image">
    <img src="/img/people2.png">
    </a>
    <div class="content">
      <p class="header">Ana Beatriz</p>
      <div class="description">
      <p> is a library scientist living in New York City.</p>      
    </div>
    </div>
  </div>
  <div class="item">
    <a class="ui tiny image">
    <img src="/img/people2.png">
    </a>
    <div class="content">
      <p class="header">Desiree Fernandes</p>
      <div class="description">
      <p> is a library scientist living in New York City.</p>
          </div>
    </div>
  </div>
  <div class="item">
    <a class="ui tiny image">
    <img src="/img/people2.png">
    </a>
    <div class="content">
      <p class="header">Gleiciane Galdino</p>
      <div class="description">
      <p> is a library scientist living in New York City.</p>      
    </div>
    </div>
  </div>
  <div class="item">
    <a class="ui tiny image">
    <img src="/img/people2.png">
    </a>
    <div class="content">
      <p class="header">Wirpson Andrade</p>
      <div class="description">
      <p> is a library scientist living in New York City.</p>
          </div>
    </div>
  </div>
</div>
            <!--<a class="ui orange button">Lorem Ipsum</a>-->
            <h4 class="ui horizontal header divider">
               <!-- <a href="#">.</a>  --> 
        </div>
    </div>

</section>





<!-- AINDA SERIA O INDEX (O FIMZINHO)-->
    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3>Alguma sugestão?</h3>
                    <p>Entre em contato pelo nosso E-mail: tutoreasy@gmail.com.br</p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment">
        <div class="ui text container">
            <h3 class="ui header">Contribua com nossa plataforma</h3>
            <p>Qualquer pessoa pode contribuir com nosso banco de tutoriais, eles podem ser criados em um simples papel ou editor de imagem e disponibilizado aqui, O único requisito é que ele seja claro e objetivo já que nosso público alvo são pessoas que não são familiarizadas com dispositivos eletrônicos e tecnologia em geral.</p>
           <!--  <a class="ui orange button">Lorem Ipsum</a>
            <h4 class="ui horizontal header divider">
                <a href="#"></a>
          </h4>
            <h3 class="ui header">Lorem ipsum ligula lobortis temp</h3>
            <p>Tristique commodo primis purus nisi himenaeos. lacinia fermentum aenean augue libero tortor class habitant turpis potenti cubilia eros ultricies habitasse, neque commodo orci elementum justo at ac fusce nostra rutrum conubi.</p>
            <a class="ui orange button">Lorem Ipsum</a>-->
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>
