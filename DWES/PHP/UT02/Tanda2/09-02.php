<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0). -->
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];



        if (($a == 0) && ($b == 0) && ($c == 0)) {

            echo  "La ecuación tiene infinitas soluciones.";
        }
        elseif (($a == 0) && ($b == 0) && ($c != 0)) {

            echo  "La ecuación no tiene solución.";
        }

        elseif (($a != 0) && ($b != 0) && ($c == 0)) {

            echo  "x<sub>1</sub> = 0";
            echo  "<br>x<sub>2</sub> = ", (-$b / $a);
        }

        elseif (($a == 0) && ($b != 0) && ($c != 0)) {

            echo  "x<sub>1</sub> = x<sub>2</sub> = ", (-$c / $b);
        }

        else {

            $discriminante = ($b * $b) - (4 * $a * $c);
            
            if ($discriminante < 0) {
                echo  "La ecuación no tiene soluciones reales";
            } else {
                echo  "x<sub>1</sub> = ", (-$b + sqrt($discriminante)) / (2 * $a);
                echo  "<br>x<sub>2</sub> = ", (-$b - sqrt($discriminante)) / (2 * $a);
            }
        }
    ?>

</body>
</html>