<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <title>Creacion del objeto producto</title>
    <?php require_once("./Producto.php"); ?>
</head>

<body>
    <h2>CREACION DE UN NUEVO PRODUCTO:</h2>

    <form id="product_form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="name">Nombre: </label>
        <input name="nombre" id="name" type="text" placeholder="Introduczca el nombre de su producto" required><br>
        <label for="price">Precio (€): </label>
        <input name="precio" id="price" type="number" value="" min="1" required><br>
        <label for="stock_number">Stock: </label>
        <input name="stock" id="stock_number" type="number" value="" min="1"><br>
        <label id="description_label" for="description">Descripcion: </label>
        <textarea name="descripcion" id="description" form="product_form" placeholder="Descripción detallada del producto" required></textarea><br>
        <input name="botonEnviar" id="new_product" type="submit" value="Crear nuevo producto">
    </form>
</body>

</html>

<?PHP
if (isset($_POST['botonEnviar'])) {

    //Se ha pulsado el submit del formulario
    $nombreProd = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = 0;
    $descripcion = $_POST['descripcion'];

    $producto = new Producto($nombreProd, $precio, $descripcion);

    //Se comprueba si se han introducido los datos opcionales
    if (isset($_POST['stock']) && !empty($_POST['stock'])) {
        $stock = $_POST['stock'];
        $producto->descripcion = $descripcion;
    }

    echo "<p style = \"background-color:white; width:40%; margin: 2%; border: 2px solid black; padding: 15px \">" . $producto . "</p>";
}
?>