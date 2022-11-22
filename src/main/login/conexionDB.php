<!DOCTYPE html>
<html>
    <?php

    $servidor = "localhost";
    $usuario = $_POST["input-usuario"];
    $password = $_POST["input-password"];
    $baseDeDatos = "efectividad";

    if(!($conexion = mysqli_connect($servidor, $usuario, $password))){
        echo "Error conectando a la base de datos. <br>";
        exit();
    }else{
        echo "Listo, estamos conectados. <br>";
        echo "Bienvenido $usuario";
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