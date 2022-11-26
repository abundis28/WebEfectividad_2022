<?php
    require("../../conexionBD.php");

    $user = $_SESSION['usuario'];
    $query = "SELECT nomina, nombre, correo, telefono, titulo, departamento, campus FROM solicitantes WHERE username = '$user'";
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