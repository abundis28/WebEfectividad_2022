<?php
require("../../conexionBD.php");

$id = $_SESSION['id'];


$query = "SELECT id, nominaSolicitante, nombre, correo, telefono, titulo, departamento, campus, poblacion, campusConsulta, nivelAcademico, periodos, camposInformacion, condiciones, uso, comentarios, estado, asignado, opeMail, fechaAlta, asignadoPor, fechaEntrega, fechaAsignacion, fechaTerminacion FROM peticiones p, solicitantes s, operarios o WHERE p.nominaSolicitante = s.nomina AND p.asignado=o.nomina AND id='$id'";
$result = consultaBD($query);

if(!$result) 
    die(mysqli_error());


?>