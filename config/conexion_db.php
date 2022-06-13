<?php

$conexion = mysqli_connect("localhost", "root", "", "login");

if ($conexion) {
    echo 'Su conexion fue exitosa';
} else {
    echo 'No se pudo conectar!!';
}