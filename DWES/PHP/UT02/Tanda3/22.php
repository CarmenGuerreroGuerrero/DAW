<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22 Tanda 3 Unidad 2</title>
</head>
<body>
<!--Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.-->
    <h1>Muestra números primos entre 2 y 100</h1>
    <?php
       $esPrimo = true;
        for($i=2;$i<=100;$i++){
            if ($n % $i == 0) {
                $esPrimo = false;
            }

            if ($esPrimo) {
                echo "El $n es primo.";
            } else {
                echo "El $n no es primo.";
            }
        }
    
    ?>
</body>
</html>