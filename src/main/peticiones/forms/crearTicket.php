<?php

    include("conexionDB.php");
    $usuario = $_POST[""];


    $consulta = "INSERT INTO peticiones(matricula, nombre, apellido, nota) VALUES('00123567', 'George', 'Smith', 8) ";
    $resultado = consultaBD($consulta);

    if($resultado == FALSE){
        die(mysqli_error());
    }else{
        echo "<br> Datos guardados. <br>";
    }
?>