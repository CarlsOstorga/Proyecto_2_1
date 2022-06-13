<?php

include 'conexion_db.php';

$id_producto = $_REQUEST['id_producto'];

$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$Imagen2 = addslashes(file_get_contents($_FILES['Imagen2']['tmp_name']));
$nombre = $_POST['nombre'];
$Categoria = $_POST['Categoria'];
$Lanzamiento = $_POST['Lanzamiento'];
$Resolucion = $_POST['Resolucion'];
$Tamano = $_POST['Tamano'];
$Precio = $_POST['Precio'];
$Descripcion = $_POST['Descripcion'];


$query = " UPDATE productos SET Imagen='$Imagen', Imagen2='$Imagen2', nombre='$nombre', Categoria='$Categoria', Lanzamiento='$Lanzamiento', Resolucion='$Resolucion', Tamano='$Tamano', Precio='$Precio', Descripcion='$Descripcion' WHERE id_producto = '$id_producto'";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Modificación de producto exitosa!!!!");
        window.location = "../php/listado_productos.php"
    </script>
    ';
} else {
    echo '
    <script>
        alert("Modificación de producto fallida intenta de nuevo!!!!");
        window.location = "../php/listado_productos.php"
    </script>
    ';

    mysqli_close($conexion);
}
