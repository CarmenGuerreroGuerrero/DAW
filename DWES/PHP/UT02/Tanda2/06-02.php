<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica t=√2h/g
siendo g = 9.81m/s2 -->
    <?php
        $h = $_POST["h"];
        $g=9.81;
        $t = sqrt((2*$h)/$g);

        echo "El tiempo que tarda en caer un objeto desde la altura ".$h." es ".round($t,2)." segundos.";
    ?>
</body>
</html>