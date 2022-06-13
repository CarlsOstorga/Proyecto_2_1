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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href=" rel=stylesheet">
</head>

<body>
    <div>
        <form action="php/ingreso_respuestas.php" method="POST" class="">
            <h1">ENCUESTA EXPRESARTE </h1><br><br>


                <label># 1. ¿Cómo conoció nuestra página?</label><br><br>
                <input type="radio" name="respuesta_1" required="" value="Desde la Web"> Desde la Web <br>
                <input type="radio" name="respuesta_1" required="" value="Con un anuncio"> Con un anuncio<br>
                <input type="radio" name="respuesta_1" required="" value="Amigo/contacto"> Amigo/contacto<br><br>

                <label># 2. ¿Nos visita a menudo?</label><br><br>
                <input type="radio" name="respuesta_2" required="" value="Es la primera vez"> Primera vez <br>
                <input type="radio" name="respuesta_2" required="" value="Si"> Si<br>
                <input type="radio" name="respuesta_2" required="" value="No"> No<br><br>

                <label># 3. ¿Volvería a visitarnos?</label><br><br>
                <input type="radio" name="respuesta_3" required="" value="Si"> Si<br>
                <input type="radio" name="respuesta_3" required="" value="No"> No<br>
                <input type="radio" name="respuesta_3" required="No lo se"> No lo se<br><br>

                <label># 4. ¿Como considera nuestra sistema en linea?</label><br><br>
                <select name="respuesta_4">
                    <option selected disabled>- Seleccione una respuesta -</option>
                    <option required value="Exelente"> Exelente</option>
                    <option required value="Muy Bueno"> Muy Bueno</option>
                    <option required value="Bueno"> Bueno</option>
                    <option required value="Malo"> Malo</option>
                </select><br><br>

                <label># 5. ¿Que le parece nuestro catalogo?</label><br><br>
                <select name="respuesta_5">
                    <option selected disabled>- Seleccione una respuesta -</option>
                    <option required value="Exelente"> Exelente</option>
                    <option required value="Muy Bueno"> Muy Bueno</option>
                    <option required value="Bueno"> Bueno</option>
                    <option required value="Malo"> Malo</option>
                </select><br><br>

                <label># 6. ¿Le gustan nuestros juegos?</label><br><br>
                <input type="radio" name="respuesta_6" required="" value="Si"> Si<br>
                <input type="radio" name="respuesta_6" required="" value="No"> No<br><br>

                <label># 7. ¿Que juego le gustaria que estuviera en nuestro catalogo?</label><br>
                <input class="resp" type="text" name="respuesta_7" required="" size="40"
                    placeholder="Digite nombre de juego"><br><br>

                <label># 8. ¿Alguna sugerencia para mejorar nuestro servicio?</label><br>
                <input class="resp" type="text" name="respuesta_8" required="" size="40"
                    placeholder="Escriba su sugerencia"><br><br>

                <label># 9. ¿Algo que no te guste de nuestro servicio?</label><br>
                <input class="resp" type="text" name="respuesta_9" required="" size="40"
                    placeholder="Escriba su respuesta"><br><br>

                <label># 10. ¿Nos recomendarias?</label><br>
                <input type="radio" name="respuesta_10" required="" value="Si"> Si<br>
                <input type="radio" name="respuesta_10" required="" value="No"> No<br>
                <input type="radio" name="respuesta_10" required="" value="No lo se"> No lo se<br><br>
        </form>
        <center><br>
            <button class="btn" title="Enviar">Enviar</button><br><br>

            <a href="menu_cliente.php" class="float"><i class="fas fa-arrow-circle-left" title="Atras"></i></a>
            <a href="index.HTML" class="float"><i class="fas fa-home" title="Inicio"></i></a>

            <br>
            <h4 align="center"> ©Derechos reservados EXPRESARTE.</h4><br>
        </center>
    </div>
    <link rel="stylesheet" href="CSS/estilo_encuesta.css">
</body>


</html>