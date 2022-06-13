<?php
session_start();
extract($_REQUEST);
//$id=$_GET['id'],$nom=$_POST['nom']
//Cargar la sesion del carrito
$carro=$_SESSION['carro'];
//Borrar el item seleccionado
unset($carro[md5($id)]);
//Vuelvo a guardar la session actualizada
$_SESSION['carro']=$carro;
if(isset($ori)||$ori=='v')
{
	header('location:vercarrito.php');
}else
{
	header('location:catalogo.php');
}
?>