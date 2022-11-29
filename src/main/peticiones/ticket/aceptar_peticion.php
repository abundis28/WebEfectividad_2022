<?php
    require("../../conexionBD.php");

    $id = $_SESSION['id'];
    $user = $_SESSION['usuario'];
    $query = "UPDATE peticiones
    SET estado = 'Atendida'
    WHERE id = '$id'";
    $result = consultaBD($query);

    header("Location:/WebEfectividad_2022/src/main/peticiones/lista/lista_atender.php");
?>