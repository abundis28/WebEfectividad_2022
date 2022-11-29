<?php

    $query = "SELECT nomina, operador FROM operarios";
    $result = consultaBD($query);

    
    if(!$result) 
        die(mysqli_error());

    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['nomina']."'>".$row['operador']."</option>";
    }
?>