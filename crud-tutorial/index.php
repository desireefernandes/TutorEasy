

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
            input, button {
                display: block;
                margin-top: .5em;
                padding: .5em;
            }
</style>

<body>
    <h1>Cadastre-se</h1>
    <form action="cadastro.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit">
    </form>

    <h1>Login</h1>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit">
    </form>
</body>
</html>