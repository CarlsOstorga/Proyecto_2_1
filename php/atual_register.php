<?php
session_start();
$varsesion = $_SESSION['correo'];
if ($varsesion == null || $varsesion = '') {
    echo '
    <script>
        alert("Por favor iniciar sesion!!!");
        window.location = "login.php"
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
    <title>Login y Registro de usuarios</title>
    <link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href=" rel=stylesheet">
    <link rel="stylesheet" href="css/estilo_actuali.css">
</head>

<body>

    <?php
    include 'php/conexion_db.php';

    $correo = $_SESSION['correo'];

    $query = "SELECT * FROM clientes WHERE correo = '$correo'";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    ?>
    <br><br><br><br>
    <form action="php/actualizar_data_cli.php?correo=<?php echo $row['correo']; ?>" method="POST">
        <h1>EXPRESARTE</h1><br>
        <h2>Editar Perfeil</h2><br>
        <label> • Nombre: </label> <input size="25" type="text" name="nombre" placeholder="Nombre completo"
            pattern="{20,75}" required="" value="<?php echo $row['nombre'] ?>"><br><br>
        <label> • Edad: </label> <input size="1" type="text" name="edad" placeholder="Edad" pattern="{2}" required=""
            value="<?php echo $row['edad'] ?>"> años <br><br>
        <label> • Contacto: </label> <input size="10" type=" text" name="contacto" placeholder="Contacto"
            pattern="{8,20}" required="" value="<?php echo $row['contacto'] ?>"><br><br>
        <label> • Ciudad: </label> <input size="20" type="text" name="ciudad" placeholder="Ciudad" pattern="{10,50}"
            required="" value="<?php echo $row['ciudad'] ?>"><br><br>
        <label> • Correo. </label> <input size="25" type="text" name="correo" placeholder="Correo Electronico"
            pattern="[A-Za-z0-9.@]{10,25}" required="" value="<?php echo $row['correo'] ?>"><br><br>
        <label> • Usuario: </label> <input size="2" type="text" name="usuario" placeholder="Usuario"
            pattern="[A-Za-z0-9.@]{4,10}" required="" value="<?php echo $row['usuario'] ?>"><br><br>
        <label> • Clave: </label> <input size="10" type="password" name="contrasena" placeholder="Contraseña"
            pattern="[A-Za-z0-9.@]{8,20}" required="" title="LA CONSTRASEÑA DEBE SE DE MINIMO 8 DIGITOS!!"><br><br>
        <button>Actualizar</button><br><br><br><br>
        <a href="perfil_cliente.php" class="float"><i class="fas fa-arrow-circle-left" title="Atras"></i></a>
        <a href="index.php" class="float"><i class="fas fa-home" title="Inicio"></i></a>
    </form>
</body><br><br>

<div class="nodo">
    <h4> ©Derechos reservados EXPRESARTE.</h4>
</div><br>


</html>