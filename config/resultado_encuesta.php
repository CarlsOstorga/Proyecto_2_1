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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado encuesta</title>
    <link rel="shortcut icon" href="../imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilo_resPregu.css">
</head>

<body>
    <center>
        <table>
            <br>
            <h1><i class="fab fa-playstation"></i> Resultados de encuesta de EXPRESARTE <i class="fab fa-xbox"></i></h1>
            <thead>
                <h1>
                    <tr>
                        <th colspan="11"><br>Preguntas <br><br></th>
                    </tr>
                    <tr>
                        <th>id_pregunta </th>
                        <th># 1. ¿Cómo conoció nuestra página?</th>
                        <th># 2. ¿Nos visita a menudo?</th>
                        <th># 3. ¿Volvería a visitarnos?</th>
                        <th># 4. ¿Como considera nuestra sistema en linea?</th>
                        <th># 5. ¿Que le parece nuestro catalogo?</th>
                        <th># 6. ¿Le gustan nuestros juegos?</th>
                        <th># 7. ¿Que juego le gustaria que estuviera en nuestro catalogo?</< /th>
                        <th># 8. ¿Alguna sugerencia para mejorar nuestro servicio?</th>
                        <th># 9. ¿Algo que no te guste de nuestro servicio?</th>
                        <th># 10. ¿Nos recomendarias?</th>
                    </tr>
                    <tr>
                        <th colspan="11"><br>Respuestas <br><br></th>
                    </tr>
                </h1>
            </thead>
            <tbody>
                <?php
                include 'conexion_db.php';
                $query = "SELECT * FROM encuesta";
                $resultado = $conexion->query($query);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id_encuesta'] ?></td>
                    <td><?php echo $row['respuesta_1'] ?></td>
                    <td><?php echo $row['respuesta_2'] ?></td>
                    <td><?php echo $row['respuesta_3'] ?></td>
                    <td><?php echo $row['respuesta_4'] ?></td>
                    <td><?php echo $row['respuesta_5'] ?></td>
                    <td><?php echo $row['respuesta_6'] ?></td>
                    <td><?php echo $row['respuesta_7'] ?></td>
                    <td><?php echo $row['respuesta_8'] ?></td>
                    <td><?php echo $row['respuesta_9'] ?></td>
                    <td><?php echo $row['respuesta_10'] ?></td>
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
<br><br>
<h4 align="center">EXPRESARTE</h4>

</html>