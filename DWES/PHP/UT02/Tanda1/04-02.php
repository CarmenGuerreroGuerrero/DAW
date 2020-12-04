<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 tanda 1 unidad 2</title>
</head>
<body>
    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $suma = $n1+$n2;
        $resta = $n1-$n2;
        $multiplicacion = $n1*$n2;
        $division = $n1/$n2;
        echo "<p>La suma de ".$n1." y ".$n2." es ".$suma."."."</p>";
        echo "<p>La resta de ".$n1." y ".$n2." es ".$resta."."."</p>";
        echo "<p>La multiplicación de ".$n1." y ".$n2." es ".$multiplicacion."."."</p>";
        echo "<p>La división de ".$n1." y ".$n2." es ".$division."."."</p>";
    ?>
</body>
</html>