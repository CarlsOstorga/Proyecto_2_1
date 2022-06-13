<?php
session_start();
include 'conexion_db.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM clientes WHERE
correo='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['correo'] = $correo;
    header("location: ../menu_cliente.php");
} else {
    echo '
    <script>
        alert("Usuario no existe, por favor verifique los datos introducidos!!!");
        window.location = "login.php"
    </script>
    ';
    exit();
}