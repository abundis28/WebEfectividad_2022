<?php
include ("credentials.php");

function connect($usuario, $password){
    if(!($conexion = mysqli_connect("localhost", $usuario, $password, "efectividad"))){
        return FALSE;
    }else{
        return TRUE;
    }
}

function consultaBD($consulta){
    $resultado = mysqli_query(mysqli_connect("localhost", $usuario, $password, "efectividad"), $consulta);
    if($resultado){
        return $resultado;
    }else{
        return FALSE;
    }

}

?>

