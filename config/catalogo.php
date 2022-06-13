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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="shortcut icon" href="../imagenes/0001.png">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo_catalogo.css">
</head>

<body>
    <center>
        <br>
        <h1> <i class="fab fa-playstation"></i> CATALOGO DE EXPRESARTE <i class="fab fa-xbox"></i></h1>
        <div class="table-absolute">
            <table>
                <tbody class="catal">
                    <?php

                    include 'conexion_db.php';
                    $query = "SELECT * FROM productos";
                    $consulta = $conexion->query($query);
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
echo "<img src='imagenes/v' width='100' height='35' alt='Ver Carrito' />(".$contar.")</a> productos selecionados</td>";
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
mysqli_close($conexion);
?>
                    <div class="esti">
                        <tr>
                            <div class="imagen_c">
                                <td>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img width="396" height="200"
                                                    src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" />
                                            </div>
                                            <div class="carousel-item">
                                                <img width="396" height="200"
                                                    src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen2']); ?>" />
                                            </div>
                                        </div>
                                    </div>
                            </div><br>
                            <h1 class="espe">ESPECIFICACIONES</h1>
                            <div>
                                <label> • Nombre: </label> <?php echo $row['Nombre'] ?><br>
                                <label> • Categoria: </label> <?php echo $row['Categoria'] ?><br>
                                <label> • Lanzamiento: </label> <?php echo $row['Lanzamiento'] ?><br>
                                <label> • Resolución: </label> <?php echo $row['Resolucion'] ?><br>
                                <label> • Tamaño: </label> <?php echo $row['Tamano'] ?><br>
                                <label> • Precio: </label> $<?php echo $row['Precio'] ?><br>
                                <label> • Descripción: <br></label><br><?php echo $row['Descripcion'] ?>

                                <div class="carrito">
                                    <a href="#"> <i class="fas fa-cart-plus" title="Aregar al carrito"></i></a>
                                </div><br>
                            </div>
                            </td>
                        </tr>
                    </div>
                    <?php
                
                    ?>
                </tbody>
            </table>
        </div>
    </center>
    <div class="redi">
        <a href="menu_cliente.php"><i class="fas fa-arrow-circle-left" title="Atras"></i></a>
        <a href="index.html" class="float"><i class="fas fa-home" title="Inicio"></i></a>
        <a href="../pago_g503.php" class="float"><i class="fas fa-shopping-cart" title="Ver carrito"></i></a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<br><br>
<h4 align="center"> ©Derechos reservados EXPRESARTE.</h4>

</html>