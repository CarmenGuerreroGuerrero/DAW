<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 Tanda 2 Unidad 2</title>
</head>
<body>
    <?php
        $n = $_POST["n"];
        $array = str_split($n); /* dividir el número para meterlo en un array */

        echo "La primera cifra del número introducido ".$n." es: ".$array[0];
    ?>
</body>
</html> 