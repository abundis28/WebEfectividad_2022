<?php
    require("../../conexionBD.php");

    

   $username = $_SESSION['usuario'];

   $query = "SELECT * FROM operarios WHERE username = \"$username\"";
   $result = consultaBD($query);

   if (mysqli_num_rows($result) == 0) {
    $query = "SELECT id, nombre, fechaAlta, fechaAsignacion, fechaTerminacion, estado, operador, fechaEntrega 
    FROM peticiones p, solicitantes s, operarios o 
    WHERE s.username = \"$username\" AND p.nominaSolicitante = s.nomina AND p.asignado=o.nomina
    ORDER BY id";
    echo '<script>console.log("Query text for permission lvl 1 was created!"); </script>';
   }else{
    while($row = mysqli_fetch_array($result)) {
        $nomina = $row['nomina'];
        $permisos = $row['permisos'];
    }
    $query = "SELECT id, nombre, fechaAlta, fechaAsignacion, fechaTerminacion, estado, operador, fechaEntrega 
    FROM peticiones p, solicitantes s, operarios o 
    WHERE p.nominaSolicitante = s.nomina AND p.asignado=o.nomina AND p.asignado = '$nomina' AND p.estado = 'Atendida' 
    ORDER BY id";
    echo '<script>console.log("Query text for permission lvl 2/3 was created!"); </script>';
   }
    $result = consultaBD($query);

    echo '<script>console.log("Query was executed!"); </script>';

    if(!$result) 
        die(mysqli_error());

    while($row = mysqli_fetch_array($result)) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$row['fechaAlta'].'</td><td>'.$row['fechaAsignacion'].'</td><td>'.$row['fechaTerminacion'].'</td><td>'.$row['estado'].'</td><td>'.$row['operador'].'</td><td>'.$row['fechaEntrega'].'</td><td><form id=detalles action=../ticket/submitDetalles.php method=post><button id=detalles name=detalles type=submit value='.$row['id'].' class=detalles/>Detalles</button></form></td></tr>';
    }

?>