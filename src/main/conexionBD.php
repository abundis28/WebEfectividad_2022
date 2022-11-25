<?php
session_start();

function connect($usuario, $password){
    if(!($conexion = mysqli_connect("localhost", $usuario, $password, "efectividad"))){
        return FALSE;
    }else{
        return TRUE;
    }
}

function consultaBD($consulta){
    $resultado = mysqli_query(mysqli_connect("localhost", $_SESSION['usuario'], $_SESSION['password'], "efectividad"), $consulta);
    if($resultado){
        return $resultado;
    }else{
        return FALSE;
    }

}

?>

