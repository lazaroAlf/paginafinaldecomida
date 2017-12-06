<?php
$mysqli = new mysqli("localhost","id3799910_users","admin123","id3799910_usuarios");

if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: ".$mysqli->connect_error;
}

$consulta = "SELECT * FROM usuarios";
$resultado = $mysqli->query($consulta);

while($fila = $resultado->fetch_assoc()){
    if($fila["correo"] == $correo && $fila["password"] == $password){
        $autenticado = true;
    }
}
?>