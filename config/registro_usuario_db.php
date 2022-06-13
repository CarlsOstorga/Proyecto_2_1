<?php

include 'conexion_db.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$contacto = $_POST['contacto'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

/*encriptacion de contraseña*/
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO clientes(nombre, edad, contacto, ciudad, correo, usuario, contrasena)
            VALUES('$nombre', '$edad', '$contacto', '$ciudad', '$correo', '$usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Registro exitoso!!!!");
        window.location = "../menu_cliente.php"
    </script>
    ';
} else {
    echo '
    <script>
        alert("Registro no exitoso!!!!");
        window.location = "../login.php"
    </script>
    ';

    mysqli_close($conexion);
}
