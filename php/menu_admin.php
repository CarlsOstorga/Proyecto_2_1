<?php
session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
    echo '
    <script>
        alert("No le es permitido entrar asi, por favor iniciar sesion!!!");
        window.location = "loginAdmin.php"
    </script>
    ';
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/menu_admin.css">
</head>
<img src="imagenes/0001.png" alt="">

<body>
    <h1 class="titu"><i class="fab fa-playstation"></i> MENU ADMIN <i class="fab fa-xbox"></i></h1>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="ingresoProducto.php">Ingreso productos</a>
                </li>
                <li>
                    <a href="php/resultado_encuesta.php">Respuestas de encuesta</a>
                </li>
                <li>
                    <a href="php/listado_productos.php">Listado de productos</a>
                </li>
                <li>
                    <a href="php/mostrar_clientes.php">Listado de clientes registrados</a>
                </li>
                <li>
                    <a href="proyecto_final_g8/index.HTML">Primer y segundo avance</a>
                </li>
                <li>
                    <a href="#">Diagrama bd</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
<p class="mens">
<h1>
    Bievenido Admin, ¿que vamos a hacer hoy?
    tu eres el master vamos a divertirnos.
</h1>
<center class="log">
    <a href="index.HTML"><i class="fas fa-home" title="Inicio"></i></a>
    <a href="perfil_admin.php"><i class="fas fa-user-cog" title="Perfil Admins"></i></a>
    <a href="php/cerrar_session_admin.php"><i class="fas fa-power-off" title="Cerrar sesión"></i></a>
</center>
</p>
<h4 align="center">@ Derechos reservados de EXPRESARTE.</h4>

</html>