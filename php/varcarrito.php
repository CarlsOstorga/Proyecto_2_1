<?php
session_start();
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;
?>
<!doctype html>
<html lang='es'>
<title>PRODUCTOS AGREGADOS AL CARRITO</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    <h1 align="center">Carrito de Compras</h1>
    <br>
    <?php
if($carro){
?>
    <table width="720" border="6" cellspacing="6" cellpadding="" align="center">
        <tr bycolor="" class="tit">
            <td width="105">Producto</td>
            <td width="207">Precio</td>
            <td colspan="2" align="center">Cantidad de Unidades</td>
            <td width="100" align="center">Borrar</td>

            <td width="159" align="center">Actualizar</td>
        </tr>
        <?php
$color=array("blue","blue");
$contador=0;
$suma=0;
foreach($carro as $k => $v){
$subto=$v['cantidad']*$v['precio'];
$suma=$suma+$subto;
$contador++;
//Creo una variable de sesion y le asigno el total a pagar
$_SESSION['ValorPagar']=$suma;
?>
        <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php
echo SID ?>" id="a<?php echo $v['identificador'] ?>">
            <tr bygcolor="<?php echo $color[$contador%2]; ?>" class='prod'>
                <td><?php echo $v['producto'] ?></td>
                <td><?php echo $v['precio'] ?></td>
                <td width="43" allign="center"><?php echo $v['cantidad'] ?></td>
                <td width="136" allign="center">
                    <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
                    <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>">
                </td>
                <td allign="center"><a href="delcarrito.php?<?php echo SID ?>&id=<?php echo $v['id']
?>">
                        <img src="imagenes/trash.gif" width="50" height="70" border="0"></a></td>
                <td allign="center">

                    <input name="imageField" type="image" src="imagenes/actualizar.gif" width="70" height="70"
                        border="0">
                </td>
            </tr>
        </form>
        <?php
}
?>
    </table>
    <div align="center"><span class="prod">Total de Artículos: <?php echo count($carro);
?></span>
    </div><br>
    <div align="center"><span class="prod">Total: $<?php echo number_format($suma,2);
?></span>
    </div><br>
    <div align="center"><span class="prod">Continuar la selección de productos</span>
        <a href="catalogo.php?<?php echo SID;?>">
            <img src="imagenes/continuar.gif" width="50" height="50" border="0"></a>
    </div>
    <br>
    <div align="center">
        <a href="pago_g503.php?<?php echo SID;?>">
            <img src="imagenes/comprar.jpg" border="0"></a>
    </div>
    <?php }else{ ?>
    <p align="center"> <span class="prod">No hay productos seleccionados</span>
        <a href="catalogo.php?<?php echo SID;?>">
            <img src="imagenes/continuar.gif" width="13" height="13" border="0"></a>
        <?php }?>
    </p>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
</body>

</html>