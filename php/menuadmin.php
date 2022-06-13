<?php
//Activar el uso de sesiones
session_start();
require('validaadmin.php');
echo '<h1>Portal de Administradores</h1>';
echo 'Bienvenido '.$_SESSION['vsNombre'].$_SESSION['vsApellido'];
echo '| '.$_SESSION['vsTipo'];
echo '| <a href="salir.php">Salir</a>';

?>