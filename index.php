<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion del objeto producto</title>
</head>

<body>
    <h2>CREACION DE UN NUEVO PRODUCTO:</h2>

    <form id="producto_form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="name">Nombre: </label><input id="name" type="text" placeholder="Introduczca el nombre de su producto" require><br>
        <label for="price">Precio: </label><input id="price" type="number" value="1" min="1" require><br>
        <label for="description">Descripcion: </label><textarea id="description" form="product_form"></textarea><br>
        <label for="stock_number">Stock: </label> <input id="stock_number" type="number" value="1" min="1" require><br>

    </form>
</body>

</html>