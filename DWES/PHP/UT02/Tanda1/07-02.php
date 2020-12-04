<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 tanda 1 unidad 2</title>
</head>
<body>
<!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. -->
    <?php
        $base = $_POST["base"];
        $iva = 0.21;
        $total = $base+($base*$iva);
        echo "El total de la factura, con una base imponible de ".$base."€ y el iva al 21%, es: ".$total."€.";
    ?>
</body>
</html>