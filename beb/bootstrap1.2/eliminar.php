<?php
$mysqli = new mysqli("localhost","id3799910_users","admin123","id3799910_usuarios");
    $consulta = "DELETE FROM usuarios WHERE id = $_GET[id]";

    $resultado = $mysqli->query($consulta);

    
?>