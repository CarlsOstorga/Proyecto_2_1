<?php

include 'conexion_db.php';

$correo = $_REQUEST['correo'];


$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$contacto = $_POST['contacto'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);


$query = " UPDATE clientes SET nombre='$nombre', edad='$edad', contacto='$contacto', ciudad='$ciudad', correo='$correo', usuario='$usuario', contrasena='$contrasena' WHERE correo = '$correo'";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("La actualización de sus datos fue exitosa!!!!");
        window.location = "login.html"
    </script>
    ';
} else {
    echo '
    <script>
        alert("La actualización de sus datos fue fallida intenta de nuevo!!!!");
        window.location = "login.html"
    </script>
    ';

    mysqli_close($conexion);
}