

<!DOCTYPE html>
<html>
<head>
    <title>Tutorial</title>
</head>
<style>
            form {
                border: 1px solid hsl(0, 34%, 60%);
                padding: 2em;
                max-width: 200px;
            }
                li {
                border: 1px solid hsl(0, 34%, 60%);
                padding: 2em;
                max-width: 400px;
            }

            input, button {
                display: block;
                margin-top: .5em;
                padding: .5em;
            }
</style>

<body>
    <h1>Cadastre-se</h1>
    <form action="user-cadastro.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>

    <h1>Login</h1>
    <form action="login.php" method="POST">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder=" password">
        <input type="submit">
    </form>


<!-- LISTAGEM DE TODOS OS TUTORIAIS CADASTRADOS INDEPENDENTE DO USUÁRIO QUE CADASTROU -->


<?php

session_start();

include("banco.php");

?>

<h2>Listagem dos Tutoriais Cadastrados</h2>


<ul>
    <?php

    $listagem = $pdo->prepare("SELECT * FROM tutorial");
    $listagem->execute();
    while($lista = $listagem->fetch(PDO::FETCH_ASSOC)): 
    ?>

<!-- LISTAGEM DOS VALUES USER_ID, TITLE, ARQUIVO, DESCRIPTION E O ID DO TUTORIAL-->

    <li><?php echo $lista['user_id']; ?> - 
        <?php echo $lista['title']; ?> - 
        <?php echo $lista['arquivo']; ?> - 
        <?php echo $lista['description']; ?> -
        <?php echo $lista['id']; ?>
        
    </li>

<?php endwhile; ?>

</ul>



</body>
</html>






