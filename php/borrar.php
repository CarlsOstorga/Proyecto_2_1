<?php
session_start();
extract($_get);
$carro=$_SESSION['carro'];
unset($carro[md5($id)]);
$_SESSION['carro']=$carro;

header("location:catalogo.php");

?>