<?php
    require("../../conexionBD.php");

    $id = $_SESSION['id'];

    if(!(isset($_POST['oper']))) {
        echo 'faltan valores de llenar';
    } else {
        $operador = $_POST['oper'];
    }

    $consulta = "UPDATE peticiones SET asignado = '$operador' WHERE id = '$id'";
    $resultado = consultaBD($consulta);

    $consulta = "UPDATE peticiones SET estado = 'Asignada' WHERE id = '$id'";
    $resultado = consultaBD($consulta);

    if($resultado == FALSE){
        die(mysqli_error());
    }else{
        echo "<br> Datos guardados. <br>";
    }

    header("Location:/WebEfectividad_2022/src/main/peticiones/lista/lista_administrar.php");
?>