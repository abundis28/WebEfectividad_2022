<?php
    require("../../conexionBD.php");

    $query = "SELECT p.id, nombre, fechaAlta, fechaAsignacion, fechaTerminacion, estado, operador, fechaEntrega FROM peticiones p, solicitantes s, operarios o WHERE p.nominaSolicitante = s.nomina AND p.asignado=o.nomina ORDER BY id";
    $result = consultaBD($query);

    if(!$result) 
        die(mysqli_error());

    while($row = mysqli_fetch_array($result)) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$row['fechaAlta'].'</td><td>'.$row['fechaAsignacion'].'</td><td>'.$row['fechaTerminacion'].'</td><td>'.$row['estado'].'</td><td>'.$row['operador'].'</td><td>'.$row['fechaEntrega'].'</tr>';
    }
?>