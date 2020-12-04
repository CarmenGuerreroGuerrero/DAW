<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 tanda 1 unidad 2</title>
</head>
<body>
    <!-- Realiza un conversor de Mb a Kb. -->
    <?php
        $kb = $_POST["kb"];

        echo $kb." Kb son ".$kb/1024," Mb.";
    ?>
</body>
</html>