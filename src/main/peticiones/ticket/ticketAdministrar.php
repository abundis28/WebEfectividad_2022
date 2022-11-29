<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de peticiones - DEI</title>
        <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
        <link rel="stylesheet" href="/WebEfectividad_2022/src/main/peticiones/ticket/css/ticket.css">
    </head>
    <body>
        <div class="navbar">
            <a href="/WebEfectividad_2022/src/main/menu/menu.html" id="logo"><img src="/WebEfectividad_2022/src/resources/logo.png" alt="Logo del Tecnológico de Monterrey."></a>
            <a href="/WebEfectividad_2022/src/main/menu/menu.html">Inicio</a>
            <a href="/WebEfectividad_2022/src/main/informativo/ayuda.html">Ayuda</a>
            <a id="logout" href="/WebEfectividad_2022/src/main/logout/logout.php">Cerrar sesión</a>
        </div>
        <div class="consultaPeticion">
            <div class="datosPeticion">
                <h2>CONSULTAR PETICIÓN</h2>
                <h3>Datos del solicitante</h3>
                    <?php
                        include 'datosSolicitante.php';
                    ?>
                <h3>Datos de la petición</h3>
                    <?php
                        include 'datosSolicitud.php';
                    ?>
                <h3>Asignar petición</h3>
                    <form action='asignarPeticion.php' method='post'>
                        <label for='oper'>Operador</label><br>
                        <select id='oper' name='oper'>
                            <?php 
                                    $query = "SELECT nomina, operador FROM operarios";
                                    $result = consultaBD($query);
                                
                                    
                                    if(!$result) 
                                        die(mysqli_error());
                                
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<option value='.$row['nomina'].'>'.$row['operador'].'</option>';
                                    }
                            ?>
                        </select>
                        <input class='form_button' type='submit' value='Asignar'>
                    </form>
            </div>
        </div>
    </body>
</html>