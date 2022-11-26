<?php
    $id = $_SESSION['id'];


    $query = "SELECT estado, nomina, operador, opeMail, fechaAlta, asignadoPor, fechaEntrega, fechaAsignacion, fechaTerminacion  FROM peticiones p, operarios o WHERE p.asignado=o.nomina AND id='$id'";
    $result = consultaBD($query);

    if(!$result) 
        die(mysqli_error());


    $data = mysqli_fetch_array($result);
    echo 'Estado de la Petición: ' . $data['estado'] . '<br>';
    echo 'Petición asignada a: ' . $data['operador'] . '<br>';
    echo 'Correo Electrónico: ' . $data['opeMail'] . '<br>';
    echo 'Fecha y hora de alta: ' . $data['fechaAlta'] . '<br>';
    echo 'Petición asignada por: ' . $data['asignadoPor'] . '<br>';
    echo 'Fecha compromiso de entrega: ' . $data['fechaEntrega'] . '<br>';
    echo 'Fecha y hora de asignación: ' . $data['fechaAsignacion'] . '<br>';
    echo 'Fecha y hora de terminación: ' . $data['fechaTerminacion'] . '<br>';
?>