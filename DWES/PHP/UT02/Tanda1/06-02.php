<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 tanda 1 unidad 2</title>
</head>
<body>
    <?php
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $area = ($base*$altura)/2;

        echo "El área del triángulo con ".$base." de base y ".$altura." de altura es: ".$area.".";
    ?>
</body>
</html>