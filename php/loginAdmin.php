<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href=" rel=stylesheet">


    <link rel="stylesheet" href="css/loginAdomin.css">
</head>

<body>
    <div>
        <form action="php/login_admin.php" method="POST" class="formulario__login">
            <h2 align="center">EXPRESARTE</h2>
            <h2>Iniciar Sesión de Admin</h2>
            <input type="text" name="usuario" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" required="">
            <input type="password" name="contrasena" placeholder="Contraseña" pattern="[A-Za-z0-9_-]{1,15}" required="">
            <button>Entrar</button>
            <h3>Hola Admid</h3>
            <p>Inicia sesión para entrar en la página y hacer lo que quieras.</p>
            <a href="index.HTML" class="float"><i class="fas fa-home" title="Inicio"></i></a>
        </form>
    </div>
    <script src="assets/js/script.js"></script>

</body>
<br>
<h4 align="center">@ Derechos reservados EXPRESARTE.</h4>

</html>