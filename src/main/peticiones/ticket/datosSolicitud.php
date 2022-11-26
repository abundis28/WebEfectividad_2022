<?php
    $id = $_SESSION['id'];


    $query = "SELECT poblacion, campusConsulta, nivelAcademico, periodos, camposInformacion, condiciones, uso, comentarios FROM peticiones WHERE id='$id'";
    $result = consultaBD($query);

    if(!$result) 
        die(mysqli_error());


    $data = mysqli_fetch_array($result);
    echo 'Población: ' . $data['poblacion'] . '<br>';
    echo 'Campus: ' . $data['campusConsulta'] . '<br>';
    echo 'Nivel Académico: ' . $data['nivelAcademico'] . '<br>';
    echo 'Periodos: ' . $data['periodos'] . '<br>';
    echo 'Campos de Información: ' . $data['camposInformacion'] . '<br>';
    echo 'Condiciones: ' . $data['condiciones'] . '<br>';
    echo 'Uso: ' . $data['uso'] . '<br>';
    echo 'Comentarios: ' . $data['comentarios'] . '<br>';
?>