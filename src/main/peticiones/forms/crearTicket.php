<?php
    require("../../conexionBD.php");

    $poblacion = $_POST['pop'];
    
    echo $poblacion;

    $campus = $_POST['campus'];
    $Ncamp = count($campus);
    for($icamp = 0; $icamp < $Ncamp; $icamp++) {
        echo $campus[$icamp];
    }

    $nivel = $_POST['nivel'];
    $Nnivel = count($nivel);
    for($inivel = 0; $inivel < $Nnivel; $inivel++) {
        echo $nivel[$inivel];
    }

    $periodo = $_POST['period'];
    echo $periodo;

    $info = $_POST['info'];
    echo $info;

    $condiciones = $_POST['conditions'];
    echo $condiciones;

    $informacion = $_POST['idk'];
    echo $informacion;

    $comentarios= $_POST['comments'];
    echo $comentarios;

    // $consulta = "INSERT INTO peticiones(matricula, nombre, apellido, nota) VALUES('00123567', 'George', 'Smith', 8) ";
    // $resultado = consultaBD($consulta);

    // if($resultado == FALSE){
    //     die(mysqli_error());
    // }else{
    //     echo "<br> Datos guardados. <br>";
    // }
?>