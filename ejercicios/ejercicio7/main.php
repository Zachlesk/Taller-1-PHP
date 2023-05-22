<!-- 7. Programa que pida el ingreso del nombre y precio de un artículo y la
    cantidad que lleva el cliente. Mostrar lo que debe pagar el comprador
    en su factura. -->
<?php


    $nombre = $_POST["nombre"];
    $nombreProducto = $_POST["nombreProducto"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $total = $precio * $cantidad;


    echo "-------------------------------------------------<br><br>";
    echo "El día de hoy, siendo el mes x, del año 2023 <br><br>";
    echo "-------------------------------------------------<br><br>";
    echo "El cliente {$nombre} lleva a su cargo: <br><br>";
    echo "-------------------------------------------------<br><br>";
    echo "Articulo: {$nombreProducto} <br><br>";
    echo "Cantidad por unidad del articulo: {$cantidad} <br><br>";
    echo "Precio por unidad del articulo: $ {$precio} <br><br>";
    echo "-------------------------------------------------<br><br>";
    echo "Total a pagar <br><br>";
    echo "$ {$total} <br><br>";
    echo "-------------------------------------------------<br><br>";


?>