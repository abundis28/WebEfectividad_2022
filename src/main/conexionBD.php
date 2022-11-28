<?php
function consultaBD($consulta){
    $conexion = mysqli_connect("localhost", "root", "root", "efectividad");
    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        return $resultado;
    }else{
        return FALSE;
    }
    mysqli_close($conexion);
}
?>

