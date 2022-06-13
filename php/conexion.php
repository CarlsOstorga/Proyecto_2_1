<?php
//Estableciendo la conexion a la BD
$miconexion=mysqli_connect('localhost','root','','c022021');
if(!$miconexion)
{
	//die() detiene o termina la ejecucion del codigo php
	die("Error de conexion : " . mysqli_connect_error());
}
else
{
	//echo 'Conexion exitosa';
}
?>