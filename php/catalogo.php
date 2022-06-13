<?php
session_start();

//Validar si YA existe algun item en el carrito
$contar=0;
if(isset($_SESSION['carro']))
{
	if($_SESSION['carro']==false)
	{
		$carro=false; //Dejando vacio el arreglo
	}else
	{
		$contar=count($_SESSION['carro']);
		$carro=$_SESSION['carro'];
	}
}
else
{
	$carro=false; //Dejando vacio el arreglo
}
?>
<!DOCTYPE html>
<html>
<head>
	<center>
	<title>Catalogo de Productos</title>
</head>
<link rel="shortcut icon" href="imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo_menu_c.css">
<body>
	<a href="index.php">salir de la pagina</a><br>
	<h1>SELECCIONE SU PRODUCTO FAVORITO</h1>
<?php
//Cargar la conexion
require("conexion.php");
//Aqui ya tengo disponible la variable $miconexion

//Ejecutar una instruccion de mysql
$sql="Select * from productos order by producto";
$consulta=mysqli_query($miconexion,$sql);

//$filas=mysqli_fetch_array($consulta);
//La variable $filas es UN ARREGLO que contiene los datos de la consulta
$totalfilas=mysqli_num_rows($consulta);




echo "<table border=''>";
echo "<tr>";
echo "<td>&nbsp;</td>";
echo "<td align='right'>Total Productos: ".$totalfilas."</td>";
echo "</tr>";
echo "<tr><td colspan='2'><hr></td></tr>";
echo "<tr>";
echo "<td>Producto</td>";
echo "<td align='center'><a href='varcarrito.php'>";
echo "<img src='imagenes/vercarrito.gif' width='100' height='35' alt='Ver Carrito' />(".$contar.")</a> productos selecionados</td>";
echo "</tr>";
echo "<tr><td colspan='2'><hr></td></tr>";
while($filas=mysqli_fetch_array($consulta)){
	echo "<tr>";
	echo "<td>";
	
	echo $filas['tamano']."<br>";
	echo $filas['resolucion']."<br>";
	echo $filas['descripcion']."<br>";

	echo "producto:".$filas['id']."<br>";
	echo $filas['producto']."<br>";
	echo "<img src='imagenes/".$filas['imagen']."' width='125' height='125' /><br>";
	echo "$".$filas['precio']."<br>";
	echo "</td>";
	echo "<td>";
	//Voy a validar que aparezca UN solo icono.
	//El icono verde si el item NO esta en el carrito
	//El icono rojo si el item SI esta en el carrito
	if(!$carro || !isset($carro[md5($filas['id'])]['identificador']) || $carro[md5($filas['id'])]['identificador']!=md5($filas['id']))
	{
	echo "<a href='addcarrito.php?id=".$filas['id']."'><img src='imagenes/productoagregado.gif' width='500' ='500' alt='Agregar al Carrito' />agregar al carrito</a>";
	}
	else
	{
	echo "<a href='delcarrito.php?id=".$filas['id']."'><img src='imagenes/productonoagregado.gif' width='100' ='500' alt='Quitar del Carrito' />quitar del carrito</a>";
	}
	echo "</td>";
	echo "</tr>";
}
echo "<tr><td colspan='2'><hr></td></tr>";
echo "</table>";
mysqli_close($miconexion);
?>
</body>
</html>
