<?php
    session_start();
    if(isset($_SESSION["login"])){
        echo "<h1>página de gente importante</h1>";
        echo "<h2>Bienvenid@ $_SESSION[login]</h2>";
    }
    else {
        header("Location: https://dabe-01.000webhostapp.com/bootstrap1.2/loginAJAX.php");
        die();
    }
?>