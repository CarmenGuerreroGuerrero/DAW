<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 tanda 1 unidad 2</title>
</head>
<body>
<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 13 πr 2 h. -->
    <?php
        $r = $_POST["radio"];
        $h = $_POST["altura"];
        $volumen = round(((pi()*pow($r,2)*$h)/3),2);

        echo "El volumen del cono con radio ".$r." metros y  altura ".$h." metros es ".$volumen." metros cúbicos.";

    ?>
</body>
</html>