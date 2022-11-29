<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de peticiones - DEI</title>
        <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
        <link rel="stylesheet" href="/WebEfectividad_2022/src/main/peticiones/lista/css/lista.css">
    </head>
    <body>
        <div class="navbar">
            <a href="/WebEfectividad_2022/src/main/menu/menu.php" id="logo"><img src="/WebEfectividad_2022/src/resources/logo.png" alt="Logo del Tecnológico de Monterrey."></a>
            <a href="/WebEfectividad_2022/src/main/menu/menu.php">Inicio</a>
            <a href="/WebEfectividad_2022/src/main/informativo/ayuda.html">Ayuda</a>
            <a id="logout" href="/WebEfectividad_2022/src/main/logout/logout.php">Cerrar sesión</a>
        </div>  
        <div class="lista_pet">
            <h2>Administrar Peticiones</h2>
            <table>
                <tr>
                    <th>No.</th>
                    <th>SOLICITANTE</th>
                    <th>FECHA DE ALTA</th>
                    <th>FECHA DE ASIGNACIÓN</th>
                    <th>FECHA DE TERMINO</th>
                    <th>ESTADO</th>
                    <th>ASIGNADO</th>
                    <th>FECHA COMPROMISO DE ENTREGA</th>
                    <th>VER PETICIÓN</th>
                </tr>
                <?php
                    include ('consulta_admin.php');
                ?>
            </table>  
        </div>      
    </body>
</html>

