<?php
    session_start();
    require ("../conexionBD.php");

    $usuario = $_POST["login-usuario"];
    $clave = $_POST["login-password"];

    $query = "SELECT * FROM operarios WHERE username = \"$usuario\" AND password = \"$clave\"";
    $result = consultaBD($query);

    if (mysqli_num_rows($result) == 0) {
        header("Location:/WebEfectividad_2022/src/main/login/login_error.html");
    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['password'] = $clave;
        header("Location:/WebEfectividad_2022/src/main/menu/menu.php");
    }
?>
