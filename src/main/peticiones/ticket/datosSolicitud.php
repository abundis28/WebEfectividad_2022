<?php
    $id = $_SESSION['id'];


    $query = "SELECT id, nominaSolicitante, nombre, correo, telefono, titulo, departamento, campus, poblacion, campusConsulta, nivelAcademico, periodos, camposInformacion, condiciones, uso, comentarios, estado, asignado, opeMail, fechaAlta, asignadoPor, fechaEntrega, fechaAsignacion, fechaTerminacion FROM peticiones p, solicitantes s, operarios o WHERE p.nominaSolicitante = s.nomina AND p.asignado=o.nomina AND id='$id'";
    $result = consultaBD($query);

    if(!$result) 
        die(mysqli_error());


    $data = mysqli_fetch_array($result);
    echo 'Nomina: ' . $data['nomina'] . '<br>';
    echo 'Nombre: ' . $data['nombre'] . '<br>';
    echo 'Correo: ' . $data['correo'] . '<br>';
    echo 'Telefono/ext: ' . $data['telefono'] . '<br>';
    echo 'Trato: ' . $data['titulo'] . '<br>';
    echo 'Departament/Area: ' . $data['departamento'] . '<br>';
    echo 'Escuela/Campus: ' . $data['campus'] . '<br>';
?>