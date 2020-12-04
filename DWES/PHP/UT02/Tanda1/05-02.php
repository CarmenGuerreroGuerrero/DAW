<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 tanda 1 unidad 2</title>
</head>
<body>
    <?php
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $area = $base*$altura;
        echo "El área del rectangulo con base ".$base." y altura ".$altura." es ".$area.".";
    ?>
</body>
</html>