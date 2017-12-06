<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>correo</th>
                <th>password</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mysqli = new mysqli("localhost","id3799910_users","admin123","id3799910_usuarios");
                $consulta = "SELECT id,nombre,correo,password FROM usuarios";

                $resultado = $mysqli->query($consulta);
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>
                        <td>$fila[id]</td>
                        <td>$fila[nombre]</td>
                        <td>$fila[correo]</td>
                        <td>$fila[password]</td>
                        <td>
                            <a href=\"actualizar.php?id=$fila[id]\">actualizar</a>
                            <a href=\"eliminar.php?id=$fila[id]\">eliminar</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>