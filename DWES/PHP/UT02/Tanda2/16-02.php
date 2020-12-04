<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 Tanda 2 Unidad 2</title>
</head>
<body>
    <?php
        $n = $_POST["numero"];
        $array = str_split($n); /* dividir el número para meterlo en un array */

        echo "La última cifra del número introducido ".$n." es: ".end($array);
    ?>
</body>
</html>