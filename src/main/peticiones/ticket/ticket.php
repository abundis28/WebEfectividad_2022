<html>
    <head>
        <meta charset="UTF-8">
        <title>Petición - DEI</title>
        <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
        <link rel="stylesheet" href="/WebEfectividad_2022src/main/peticiones/ticket/css/ticket.css">
    </head>
    <body>
        <div class="navbar">
            <a href="/WebEfectividad_2022/src/main/menu/menu.html" id="logo"><img src="/WebEfectividad_2022/src/resources/logo.png" alt="Logo del Tecnológico de Monterrey."></a>
            <a href="/WebEfectividad_2022/src/main/menu/menu.html">Inicio</a>
            <a href="/WebEfectividad_2022/src/main/informativo/ayuda.html">Ayuda</a>
            <a id="logout" href="/WebEfectividad_2022/src/main/logout/logout.php">Cerrar sesión</a>
        </div>
        <div class="consultaPeticion">
            <h2>CONSULTAR PETICIÓN</h2>
            <?php
            include 'consultaTicket'.php;
            ?>
        </div>
    </body>
</html>