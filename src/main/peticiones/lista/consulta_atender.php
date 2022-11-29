<?php
    require("../../conexionBD.php");

    

   $username = $_SESSION['usuario'];


    $query = "SELECT id, nombre, fechaAlta, fechaAsignacion, fechaTerminacion, estado, operador, fechaEntrega 
    FROM peticiones p, solicitantes s, operarios o 
    WHERE o.username = \"$username\" AND p.nominaSolicitante = s.nomina AND p.asignado=o.nomina
    ORDER BY id";
    echo '<script>console.log("Query text was created!"); </script>';
    $result = consultaBD($query);

    //
    echo '<script>console.log("Query was executed!"); </script>';

    //WHERE s.username = "$username" AND p.nominaSolicitante = s.nomina
    //WHERE s.username = \"$username\" AND 
    if(!$result) 
        die(mysqli_error());

    while($row = mysqli_fetch_array($result)) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$row['fechaAlta'].'</td><td>'.$row['fechaAsignacion'].'</td><td>'.$row['fechaTerminacion'].'</td><td>'.$row['estado'].'</td><td>'.$row['operador'].'</td><td>'.$row['fechaEntrega'].'</td><td><form id=detalles action=../ticket/submitDetalles.php method=post><button id=detalles name=detalles type=submit value='.$row['id'].' class=detalles/>Detalles</button></form></td></tr>';
    }

?>