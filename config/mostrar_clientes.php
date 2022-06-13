<?php
session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
    echo '
    <script>
        alert("No le es permitido entrar asi, por favor iniciar sesion!!!");
        window.location = "../loginadmin.php"
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
    <title>Listado Clientes</title>
    <link rel="shortcut icon" href="../imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilo_list_cliente.css">
</head>

<body>
    <center>
        <table>
            <br>
            <h1><i class="fab fa-playstation"></i> Clientes de EXPRESARTE <i class="fab fa-xbox"></i></h1>
            <thead>
                <h1>
                    <tr>

                        <th><br>id_cliente<br><br></th>
                        <th>nombre</th>
                        <th>edad</th>
                        <th>contacto</th>
                        <th>ciudad</th>
                        <th>correo</th>
                        <th>usuario</th>
                        <th>Opreción</th>
                    </tr>
                </h1>
            </thead>
            <tbody align="center">
                <?php

                include 'conexion_db.php';
                $query = "SELECT * FROM clientes";
                $resultado = $conexion->query($query);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id_cliente'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['edad'] ?> años</td>
                    <td><?php echo $row['contacto'] ?></td>
                    <td><?php echo $row['ciudad'] ?></td>
                    <td><?php echo $row['correo'] ?></td>
                    <td><?php echo $row['usuario'] ?></td>
                    <td>
                        <a href="eliminar_cliente.php?id_cliente=<?php echo $row['id_cliente']; ?>"><i
                                class="fas fa-trash-alt" title="Eliminar registro"></i></a>
                    </td>
                </tr>

                <?php

                }
                ?>
            </tbody>
        </table>
    </center>
    <div class="float">
        <a href="../menu_admin.php"><i class="fas fa-arrow-circle-left" title="Atras"></i></a>
        <a href="../index.php"><i class="fas fa-home" title="Inicio"></i></a>
    </div>

</body>
<br><br><br>
<h4 align="center">@ Derechos reservados EXPRESARTE.</h4>

</html>