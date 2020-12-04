<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que calcule la media de tres notas. -->
    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $media = ($n1+$n2+$n3)/3;

        echo "La media de las tres notas introducidas es: ".$media;
    ?>
</body>
</html>