<html>
    <head>
        <meta charset="UTF-8">
        <title>Realizar petición - DEI</title>
        <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
        <link rel="stylesheet" href="/WebEfectividad_2022/src/main/peticiones/forms/css/forms.css">
    </head>
    <body>
        <div class="navbar">
            <a href="/WebEfectividad_2022/src/main/menu/menu.php" id="logo"><img src="/WebEfectividad_2022/src/resources/logo.png" alt="Logo del Tecnológico de Monterrey."></a>
            <a href="/WebEfectividad_2022/src/main/menu/menu.php">Inicio</a>
            <a href="/WebEfectividad_2022/src/main/informativo/ayuda.html">Ayuda</a>
            <a id="logout" href="/WebEfectividad_2022/src/main/logout/logout.php">Cerrar sesión</a>
          </div>

          <div class="formulario">
            <form action="crearTicket.php" method="post">
                <h2>Nueva Petición</h2>

                <h3>Datos del solicitante</h3>
                
                <?php
                    include('listaSolicitante.php');
                ?>

                <h3>Datos de la petición</h3>

                <label class="formCat" for="pop">Población</label><br>
                <select id="pop" name="pop">
                    <option value="inscritos">Inscritos</option>
                    <option value="grupos">Grupos</option>
                    <option value="profesores">Profesores</option>
                    <option value="candidatos">Candidatos a graduacion</option>
                    <option value="graduados">Graduados</option>
                    <option value="bajas">Bajas</option>
                    <option value="ecoa">ECOA</option>
                    <option value="ecag">ECAG</option>
                </select>
                <br><br>
                
                <label class="formCat" for="campus">Campus</label><br>
                <div class="colLeft">
                    <p>Profesional</p>
                    <div>
                        <input type="checkbox" id="campus_mty" name="campus[]" value="Monterrey">
                        <label for="campus_mty">Monterrey</label>
                    </div>
                    <div>
                        <input type="checkbox" id="campus_laguna" name="campus[]" value="Laguna">
                        <label for="campus_laguna">Laguna</label>
                    </div>
                    <div>
                        <input type="checkbox" id="campus_salt" name="campus[]" value="Saltillo">
                        <label for="campus_salt">Saltillo</label>
                    </div>
                </div>
                
                <div class="colRight">
                    <p>Preparatoria</p>
                    <div>
                        <input type="checkbox" id="campus_egs" name="campus[]" value="Eugenio Garza Sada">
                        <label for="campus_egs">Eugenio Garza Sada</label>
                    </div>
                    <div>
                        <input type="checkbox" id="campus_egl" name="campus[]" value="Eugenio Garza Laguera">
                        <label for="campus_egl">Eugenio Garza Laguera</label>
                    </div>
                    <div>
                        <input type="checkbox" id="campus_santa" name="campus[]" value="Santa Catarina">
                        <label for="campus_santa">Santa Catarina</label>
                    </div>
                    <div>
                        <input type="checkbox" id="campus_cumbres" name="campus[]" value="Cumbres">
                        <label for="campus_cumbres">Cumbres</label>
                    </div>
                    <div>
                        <input type="checkbox" id="campus_valle" name="campus[]" value="Valle Alto">
                        <label for="campus_valle">Valle Alto</label>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br>

                <label class="formCat" for="nivel">Nivel académico</label><br><br>
                <div>
                    <div>
                        <input type="checkbox" id="nivel_prepa" name="nivel[]" value="Preparatoria">
                        <label for="nivel_prepa">Perparatoria</label>
                    </div>
                    <div>
                        <input type="checkbox" id="nivel_tec20" name="nivel[]" value="Profesional anteriores">
                        <label for="nivel_tec20">Profesional anteriores</label>
                    </div>
                    <div>
                        <input type="checkbox" id="nivel_tec21" name="nivel[]" value="Profesional Tec21">
                        <label for="nivel_tec21">Profesional Tec21</label>
                    </div>
                    <div>
                        <input type="checkbox" id="nivel_maestria" name="nivel[]" value="Maestria">
                        <label for="nivel_maestria">Maestria</label>
                    </div>
                    <div>
                        <input type="checkbox" id="nivel_doctorado" name="nivel[]" value="Doctorado">
                        <label for="nivel_doctorado">Doctorado</label>
                    </div>
                </div>
                <br>

                <label for="period">Ejercicios o periodos</label><br>
                <input style="width:80%;" type="text" id="period" name="period"><br><br>
                <label for="info">Columnas o campos de información</label><br>
                <input style="width:80%;" type="text" id="info" name="info"><br><br>
                <label for="conditions">Condiciones</label><br>
                <input style="width:80%;" type="text" id="conditions" name="conditions"><br><br>
                <label for="idk">Información</label><br>
                <textarea rows = "5" cols = "50" name = "idk"></textarea><br><br>
                <label for="comments">Comentarios</label><br>
                <textarea rows = "5" cols = "50" name = "comments"></textarea><br><br>

                <div class="button_div">
                    <input class="form_button" type="submit" value="Enviar">
                </div>
            </form>
          </div>
    </body>
</html>