<?php
session_start();
$varsesion = $_SESSION['correo'];
if ($varsesion == null || $varsesion = '') {
    echo '
    <script>
        alert("Por favor iniciar sesion!!!");
        window.location = "config/login.HTML"
        
    </script>
    ';
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- css/estilo_menu_c.css -->
    <link rel="stylesheet" href="../fontawesome/estilo_menu_c.css">
</head>

<body align=" center">
    <img src="imagenes/0001.png" alt="">
    <h1 align="center"><i class="fab fa-playstation"></i> MENU <i class="fab fa-xbox"></i></h1><br><br>
    <header>
        <ul>
            <li>
                <a href="catalogo.php"><i class="fas fa-th-list"></i> Catalogo</a>
            </li>
            <li>

                <a href="encuesta.php"><i class="fas fa-poll"></i> Encuesta</a>
            </li>
            <li>
                <a href="contacto.php"><i class="fas fa-envelope"></i> Contacto</a>
            </li>
        </ul>
    </header>
</body>
<h1>
    Bienvenido a la familia, es un gusto para nosotros
    que formes partes de nuestra familia EXPRESARTE.
</h1>
<center class="log">
    <a href="index.HTML"><i class="fas fa-home" title="Inicio"></i></a>
    <a href="perfil_cliente.php?correo=<?php echo $_SESSION['correo']; ?>"><i class="fas fa-user-alt"
            title="Mi perfil"></i></a>
    <a href="php/cerrar_sesion.php"><i class="fas fa-power-off" title="Cerrar sesión"></i></a>
</center>

<h4 align="center"> ©Derechos reservados de EXPRESARTE.</h4>

</html>