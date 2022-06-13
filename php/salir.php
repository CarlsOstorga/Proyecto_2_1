<?php
session_start();

//Borramos las sesiones
session_destroy();
header('location:login.HTML');

?>