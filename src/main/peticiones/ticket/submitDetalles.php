<?php

    require("../../conexionBD.php");

    $query = "SELECT p.id, nominaSolicitante, s.nombre, s.correo, s.telefono, titulo, departamento, s.campus, poblacion, campusConsulta, nivelAcademico, periodos, camposInformacion, condiciones, uso, comentarios, estado, asignado, o.opeMail, fechaAlta, asignadaPor, fechaEntrega, fechaAsignacion, fechaTerminacion FROM peticiones p, solicitantes s, operarios o WHERE p.nominaSolicitante = s.nomina AND p.asignado=o.nomina AND id=1;
    $result = consultaBD($query);

    if(!$result) 
        die(mysqli_error());


?>