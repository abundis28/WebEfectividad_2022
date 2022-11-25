<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location:/WebEfectividad_2022/src/main/login/login.html");
?>