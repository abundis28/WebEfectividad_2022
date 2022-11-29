<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú - DEI</title>
        <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
        <link rel="stylesheet" href="./css/menu.css">
    </head>
    <body>
        <div class="navbar">
            <a href="#" id="logo"><img src="/WebEfectividad_2022/src/resources/logo.png" alt="Logo del Tecnológico de Monterrey."></a>
            <a href="#">Inicio</a>
            <a href="/WebEfectividad_2022/src/main/informativo/acerca.html">Acerca de</a>
            <a href="/WebEfectividad_2022/src/main/informativo/equipo.html">Equipo</a>
            <a href="/WebEfectividad_2022/src/main/informativo/ayuda.html">Ayuda</a>
            <a id="logout" href="/WebEfectividad_2022/src/main/logout/logout.php">Cerrar sesión</a>
        </div>
        <h1>Menú inicial</h1>
        <div class="espacio_s"></div>

        <div id="menu_grid">
        <?php
            require("../conexionBD.php");
            $username = $_SESSION['usuario'];
            $query_user = "SELECT * FROM operarios WHERE username = \"$username\"";
            $result_user = consultaBD($query_user);
            if (mysqli_num_rows($result_user) != 0) {
             while($row = mysqli_fetch_array($result_user)) {
                 $nomina = $row['nomina'];
                 $permisos = $row['permisos'];
             }
             if ($permisos == 1){
      
                echo("<a href=\"/WebEfectividad_2022/src/main/peticiones/forms/formulario.php\"><img src=\"/WebEfectividad_2022/src/resources/Menu/Realizar.png\" alt=\"Crear petición\"></a>");
                echo("<a href=\"/WebEfectividad_2022/src/main/peticiones/lista/lista_pet.php\"><img src=\"/WebEfectividad_2022/src/resources/Menu/Seguimiento.png\" alt=\"Dar seguimiento\"></a>");
            }
             elseif($permisos == 2){
                echo("<a href=\"/WebEfectividad_2022/src/main/peticiones/lista/lista_pet.php\"><img src=\"/WebEfectividad_2022/src/resources/Menu/Seguimiento.png\" alt=\"Dar seguimiento\"></a>");
                echo('<a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_atender.php"><img src="/WebEfectividad_2022/src/resources/Menu/Atender.png" alt="Atender petición"></a>');
                
             }
             elseif($permisos == 3){
                echo("<a href=\"/WebEfectividad_2022/src/main/peticiones/lista/lista_pet.php\"><img src=\"/WebEfectividad_2022/src/resources/Menu/Seguimiento.png\" alt=\"Dar seguimiento\"></a>");
                echo('<a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_atender.php"><img src="/WebEfectividad_2022/src/resources/Menu/Atender.png" alt="Atender petición"></a>');
                echo('<a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_administrar.php"><img src="/WebEfectividad_2022/src/resources/Menu/Administrar.png" alt="Administrar"></a>');
             }
             else{
                echo('<a href="/WebEfectividad_2022/src/main/peticiones/forms/formulario.php"><img src="/WebEfectividad_2022/src/resources/Menu/Realizar.png" alt="Crear petición"></a>');
                echo("<a href=\"/WebEfectividad_2022/src/main/peticiones/lista/lista_pet.php\"><img src=\"/WebEfectividad_2022/src/resources/Menu/Seguimiento.png\" alt=\"Dar seguimiento\"></a>");
                echo('<a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_atender.php"><img src="/WebEfectividad_2022/src/resources/Menu/Atender.png" alt="Atender petición"></a>');
                echo('<a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_administrar.php"><img src="/WebEfectividad_2022/src/resources/Menu/Administrar.png" alt="Administrar"></a>');
             }
            }
        ?>
        <!--
            <a href="/WebEfectividad_2022/src/main/peticiones/forms/formulario.php"><img src="/WebEfectividad_2022/src/resources/Menu/Realizar.png" alt="Crear petición"></a>
            <a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_pet.php"><img src="/WebEfectividad_2022/src/resources/Menu/Seguimiento.png" alt="Dar seguimiento"></a>
            <a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_atender.php"><img src="/WebEfectividad_2022/src/resources/Menu/Atender.png" alt="Atender petición"></a>
            <a href="/WebEfectividad_2022/src/main/peticiones/lista/lista_administrar.php"><img src="/WebEfectividad_2022/src/resources/Menu/Administrar.png" alt="Administrar"></a>
        !-->
        </div>
    </body>
</html>