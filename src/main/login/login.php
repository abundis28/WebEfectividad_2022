<?php
    include "../conexionBD.php";
    include "../credentials.php";

    $usuarioInput = $_POST["login-usuario"];
    $passwordInput = $_POST["login-password"];

    $usuario = $usuarioInput;
    $password = $passwordInput;


    try{
        connect($usuario, $password);
        header("Location:/WebEfectividad_2022/src/main/menu/menu.html");
        mysqli_close($conexion);
    }catch(Exception $e){
        header("Location:/WebEfectividad_2022/src/main/login/login.html");
        mysqli_close($conexion);
    }
?>
