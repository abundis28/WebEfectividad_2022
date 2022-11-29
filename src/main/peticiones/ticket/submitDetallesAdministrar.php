<?php
    session_start();

    $_SESSION['id'] = $_POST["detalles"];
    
    header("Location:/WebEfectividad_2022/src/main/peticiones/ticket/ticketAdministrar.php");
?>