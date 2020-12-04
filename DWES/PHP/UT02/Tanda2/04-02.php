<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. 
Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. 
A partir de la hora 41, se pagan a 16 euros la hora. -->
    <?php
        $hora = $_POST["horas"];
        if ($hora<= 40) {
            $salario = 12 * $hora;
        } 
        else {
            $salario = (40 * 12) + (($hora - 40) * 16);
        }

        echo "El salario base semanal en función a ".$hora." horas trabajadas, con un precio de 12€/horaOrdinaria y 16€/horaExtraordinaria, es ".$salario."€.";
    ?>
</body>
</html>