<?php
session_start();

function connect($usuario, $password){
    $conexion = mysqli_connect("localhost", $usuario, $password, "efectividad"); //Returns false if it fails

    if(!$conexion){
        return FALSE;

    }else{
        return TRUE;
    }
}

function consultaBD($consulta){

    echo '<script>console.log("Initiating connection!"); </script>';

    $mysqlsession = mysqli_connect("localhost", $_SESSION['usuario'], $_SESSION['password'], "efectividad");

    
    if($mysqlsession)
    {
        echo '<script>console.log("Initiating query!"); </script>';

        $resultado = mysqli_query($mysqlsession, $consulta);
        if($resultado){
            echo '<script>console.log("Executed Query!"); </script>';
            return $resultado;
        }
        else
        {
            echo '<script>console.log("Failed Query!"); </script>';
        }
    }
    else{
        echo '<script>console.log("Failed connection!"); </script>';
        return FALSE;
    }

}

?>

