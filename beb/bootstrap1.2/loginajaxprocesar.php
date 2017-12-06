<?php
     $mysqli = new mysqli("localhost","id3799910_users","admin123","id3799910_usuarios");
    session_start();
    $correo = $_POST["correo"];
    $pass = $_POST["pass"];

    $consulta = "SELECT correo,nombre FROM usuarios
                WHERE correo = '$correo'
                AND password = '$pass'";
    
    $resultado = $mysqli->query($consulta);

    if(mysqli_num_rows($resultado) > 0){
        $_SESSION["login"]=$correo;
        echo "Usuario correcto";
    }
    else {
        echo "No se encontró el usuario o la contraseña no coincide";
    }
?>