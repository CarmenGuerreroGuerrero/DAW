<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 tanda 1 unidad 2</title>
</head>
<body>
<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. 
Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->
    <?php
        $horas = $_POST["horas"];
        $SBase = $horas*12;
        echo "El salario base semanal en función a ".$horas." horas trabajadas, con un precio de 12€/hora, es ".$SBase."€.";

    ?>
</body>
</html>