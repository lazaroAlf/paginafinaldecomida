<?php
    if(isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];

        $mysqli = new mysqli("localhost","id3799910_users","admin123","id3799910_usuarios");
        $consulta = "INSERT INTO usuarios (nombre,correo,password) VALUES ('$nombre','$correo','$password')";

        $resultado = $mysqli->query($consulta);
    }
?>