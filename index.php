<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/stylelogin.css">
</head>
<body>
    <div id="container">
        <h1>Login</h1>
        <form action="actions/login.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" placeholder="E-mail" name="email" id="email" required=""><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Contraseña" name="password" id="password" required=""><br><br>

            <input type="submit" name="login" id="login" value="Login"><br><br>
        </form>
        <a href="signup.php">¿No tiene cuenta? Crear Cuenta</a>
    </div>
</body>
</html>
