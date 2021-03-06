<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que diga si un número introducido por teclado es o no primo. Un número primo es aquel que sólo es divisible entre él mismo y la unidad. -->
    <h1>Número primo</h1>
    <?php
        if (!isset($_POST['n'])) {
    ?>
    Introduzca un número para saber si es primo o no.<br>
    <form action=16.php method="post">
        <input type="number" name="n" min="0" autofocus><br>
        <input type="submit" value="Aceptar">
    </form>
    <?php
        } else {
            $n = $_POST['n'];
            // El 0 y el 1 no se consideran primos
            if (($n == 0) || ($n == 1)) {
                    $esPrimo = false;
            } else {
                $esPrimo = true;
                for ($i = 2; $i <= $n/2; $i++) {
                    if ($n % $i == 0) {
                        $esPrimo = false;
                    }
                }
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