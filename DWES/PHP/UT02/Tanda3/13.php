<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos. -->
    <h1>Positivos y negativos</h1>
    <?php
        if (!isset($_POST['n'])) {
            $cuentaNumeros = 0;
            $positivos = 0;
        } else {
            $n = $_POST['n'];
            $cuentaNumeros = $_POST['cuentaNumeros'];
            $positivos = $_POST['positivos'];
            $cuentaNumeros++;
            if ($n >= 0) {
                $positivos++;
            }
        }

        if ($cuentaNumeros == 0) {
            echo "Este programa lee una lista de diez números y determina cuántos son positivos, ";
            echo " y cuántos son negativos.<br>";
        } else {
            echo "<br>";
        }

        if ($cuentaNumeros < 10) {
    ?>
        <form action="13.php" method="post">
            Número <?php echo $cuentaNumeros+1; ?> <input type="number" name="n" autofocus>
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="hidden" name="positivos" value="<?php echo $positivos; ?>">
            <input type="submit" value="Aceptar">
        </form>
    <?php
        }
        if ($cuentaNumeros == 10) {
            echo "Se han introducido $positivos números positivos y ", (10 - $positivos), " números negativos.<br>";
        }
    ?>
    
</body>
</html>