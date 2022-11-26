<?php
    require("../../conexionBD.php");

    if(!(isset($_POST['pop']))) {
        echo 'faltan valores de llenar';
    } else {
        $poblacion = $_POST['pop'];
    }

    if(!(isset($_POST['campus']))) {
        echo 'faltan valores de llenar';
    } else {
        $campus = $_POST['campus'];
        $campusStr = implode(', ', $campus);
    }

    if(!(isset($_POST['nivel']))) {
        echo 'faltan valores de llenar';
    } else {
        $nivel = $_POST['nivel'];
        $nivelStr = implode(', ', $nivel);
    }

    if(!(isset($_POST['period']))) {
        echo 'faltan valores de llenar';
    } else {
        $periodo = $_POST['period'];
    }

    if(!(isset($_POST['info']))) {
        echo 'faltan valores de llenar';
    } else {
        $info = $_POST['info'];
    }

    if(!(isset($_POST['conditions']))) {
        echo 'faltan valores de llenar';
    } else {
        $condiciones = $_POST['conditions'];
    }

    if(!(isset($_POST['idk']))) {
        echo 'faltan valores de llenar';
    } else {
        $informacion = $_POST['idk'];
    }

    if(!(isset($_POST['comments']))) {
        echo 'faltan valores de llenar';
    } else {
        $comentarios= $_POST['comments'];
    }

    $consulta = "INSERT INTO peticiones(poblacion, campusConsulta, nivelAcademico, periodos, camposInformacion, condiciones, uso, comentarios, estado) 
                VALUES('$poblacion', '$campusStr', '$nivelStr', '$periodo', '$info', '$condiciones', '$informacion', '$comentarios', Por Asignar)";
    $resultado = consultaBD($consulta);

    if($resultado == FALSE){
        die(mysqli_error());
    }else{
        echo "<br> Datos guardados. <br>";
    }
?>