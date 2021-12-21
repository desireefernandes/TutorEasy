

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
</body>
</html>