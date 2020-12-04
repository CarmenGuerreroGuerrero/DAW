<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0). -->
    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a == 0) {
            echo "Esa ecuación no tiene solución real.";
          } else {
            echo "x = ". (-$b / $a);
          }

    ?>
</body>
</html>