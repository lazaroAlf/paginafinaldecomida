<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $mysqli = new mysqli("localhost","id3799910_users","admin123","id3799910_usuarios");
        $consulta = "SELECT id,nombre,correo,password FROM usuarios WHERE id = $_GET[id]";

        $resultado = $mysqli->query($consulta);
        $fila = $resultado->fetch_assoc();
    
    ?>
    <form action="procesarActualizacion.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo$fila["nombre"] ?>">
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" name="correo" value="<?php echo$fila["correo"] ?>">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo$fila["password"] ?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo$fila["id"] ?>">
            <input type="submit" name="enviar" value="actualizar">
        </div>
    </form>
</body>
</html>
