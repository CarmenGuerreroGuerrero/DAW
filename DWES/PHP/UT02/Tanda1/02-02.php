<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Tanda 1 Unidad 2</title>
</head>
<body>
    <?php
        $euro = $_POST["euro"];
        $pesetas = $euro * 166.386;

        echo $euro." € son ".$pesetas." pesetas.";
    ?>
</body>
</html>