<?php
include 'conexion_db.php';
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_admin = mysqli_query($conexion, "SELECT * FROM administradores WHERE usuario='$usuario'
and contrasena='$contrasena'");

if (mysqli_num_rows($validar_admin) > 0) {
    $_SESSION['usuario'] = $usuario;
    header("location: ../menu_admin.php");
    exit();
} else {
    echo '
        <script>
            alert("Usted no es admin!");
            window.location = "../loginAdmin.php"
        </script>
        ';
    exit();
}
