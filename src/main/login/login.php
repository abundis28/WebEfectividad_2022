<?php
  
    require ("../conexionBD.php");

    session_start();
    $_SESSION['usuario'] = $_POST["login-usuario"];
    $_SESSION['password'] = $_POST["login-password"];


    try{
        connect($_SESSION['usuario'], $_SESSION['password']);
        header("Location:/WebEfectividad_2022/src/main/menu/menu.php");
        mysqli_close($conexion);
    }catch(Exception $e){
        header("Location:/WebEfectividad_2022/src/main/login/login.html");
        mysqli_close($conexion);
    }
?>
