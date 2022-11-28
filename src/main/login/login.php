<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - DEI</title>
        <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
        <link rel="stylesheet" href="./css/login.css">
    </head>
    <body> 
        <div id="contenedor-login">
            <h1>Efectividad Institucional</h1>
            <h2>Inicio de sesión</h2>
            <img src="/WebEfectividad_2022/src/resources/logo.png" alt="Logo del Tecnológico de Monterrey">
              
            <form id="login-form" action="login_backend.php" method="post">
                <input type="text" name="login-usuario" id="login-usuario" placeholder="Usuario">
                <input type="password" name="login-password" id="login-password" placeholder="Contraseña">
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </body>
</html>
