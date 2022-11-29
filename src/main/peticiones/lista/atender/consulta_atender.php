<?php
    session_start();
    require("../../../conexionBD.php");

    $user = "{$_SESSION['usuario']}";

    $query_user = "SELECT * FROM operarios WHERE username = '$user'";
    $result_user = consultaBD($query_user);

    while($row = mysqli_fetch_array($result_user)) {
        $nomina = $row['nomina'];
        $permisos = $row['permisos'];
    }

    if ($permisos > 1){
        $query = "SELECT id, nombre, fechaAlta, fechaAsignacion, fechaTerminacion, estado, operador, fechaEntrega FROM peticiones p, solicitantes s, operarios o WHERE p.nominaSolicitante = s.nomina AND p.asignado=o.nomina AND p.asignado = '$nomina' AND p.estado != 'Atendida' ORDER BY id";
    }

    $result = consultaBD($query);

    while($row = mysqli_fetch_array($result)) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$row['fechaAlta'].'</td><td>'.$row['fechaAsignacion'].'</td><td>'.$row['fechaTerminacion'].'</td><td>'.$row['estado'].'</td><td>'.$row['operador'].'</td><td>'.$row['fechaEntrega'].'</td><td><form id=detalles action=../ticket/submitDetalles.php method=post><button id=detalles name=detalles type=submit value='.$row['id'].' class=detalles/>Detalles</button></form></td></tr>';
    }
?>
