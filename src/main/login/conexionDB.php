<!DOCTYPE html>
<html>
    <?php

    $servidor = "localhost";
    $usuario = $_POST["login-usuario"];
    $password = $_POST["login-password"];
    $baseDeDatos = "efectividad";

    if(!($conexion = mysqli_connect($servidor, $usuario, $password))){
        echo "Error conectando a la base de datos. <br>";
        exit();
    }else{
        header("Location: /WebEfectividad_2022/src/main/menu/menu.html");
    }

    if(!mysqli_select_db($conexion, $baseDeDatos)){
        echo "Error seleccionando la base de datos. <br>";
        exit();
    }else{
        echo "Obtuvimos la base de datos $baseDeDatos sin problema. <br>";
    }

    mysqli_close($conexion);

    ?>
</html>