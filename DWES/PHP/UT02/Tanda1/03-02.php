<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 tanda 1 unidad 2</title>
</head>
<body>
    <?php
        $pesetas = $_POST["pesetas"];
        $euro = round(($pesetas / 166.386), 2);

        echo $pesetas." pesetas son ".$euro." euros.";
    ?>
</body>
</html>