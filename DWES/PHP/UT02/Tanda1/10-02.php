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
        $mb = $_POST["mb"];

        echo $mb." Mb son ".$mb*1024," Kb.";
    ?>
</body>
</html>