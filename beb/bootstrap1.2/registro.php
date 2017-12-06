<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="procesarRegistro.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" name="correo">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="enviar" value="registrarse">
        </div>
    </form>
</body>
</html>