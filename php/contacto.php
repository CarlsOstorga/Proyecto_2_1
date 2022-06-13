<?php
session_start();
$varsesion = $_SESSION['correo'];
if ($varsesion == null || $varsesion = '') {
    echo '
    <script>
        alert("Por favor iniciar sesion!!!");
        window.location = "login.HTML"
    </script>
    ';
    die();
}
?>

<!DOCTYPE html align="center">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body align="center">
    <img class="logo" src="imagenes/0001.png" alt=""> <br>

    <p class="conta">
    <h1>♣ Contacto ♣</h1>
    </p>

    <div align="center" class="float">


        <a href="https://api.whatsapp.com/send?phone=50374768123&text=Hola, quisiera más información sobre los juegos."
            class="float" target="_blank">
            <i class="fab fa-whatsapp" title="Whatsapp"></i>
        </a>

        <a href="https://www.facebook.com/GAMER-503-105521555258913/" class="float" target="_blank">
            <i class="fab fa-facebook" title="Facebook"></i>
        </a>
        <link rel="stylesheet" href="#">
        <a href="#" class="float" target="_blank">
            <i class="fab fa-instagram" title="Instagram"></i>
        </a>

        <a href="#" class="float" target="_blank">
            <i class="fab fa-twitter" title="Twitter"></i>
        </a>

        <link rel="stylesheet" href="css/estilo_contac.css">
    </div>

</body>
<h2>Nuestra ubicación</h2>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15506.082921724654!2d-89.24154041598196!3d13.686881544661729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632e2afad31d7d%3A0x40f719aa05749a78!2sMultiplaza!5e0!3m2!1ses-419!2ssv!4v1634939939132!5m2!1ses-419!2ssv"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<center class="ubic">
    <a href="menu_cliente.php"><i class="fas fa-arrow-circle-left" title="Atras"></i></a>
    <a href="index.HTML"><i class="fas fa-home" title="Inicio"></i></a>
    <a
        href="https://www.google.com/maps/dir/13.646504,-89.1801214/multiplaza/@13.6656631,-89.24102,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8f632e2afad31d7d:0x40f719aa05749a78!2m2!1d-89.2487455!2d13.6793947"><i
            class="fas fa-map-marker-alt" title="Ubicación"></i></a>
</center>
<h4 align="center">@ Derechos reservados EXPRESARTE.</h4>

</html>