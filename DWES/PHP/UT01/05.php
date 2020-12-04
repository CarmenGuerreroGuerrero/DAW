<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 1 Ejercicio 5</title>
</head>
<body>
    <h1>Unidad 1 Ejercicio 5</h1>
    <p>Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente. 
    A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.</p>
    <?php
        $x = 144;
        $y = 999;

        $suma = $x+$y;
        $resta = $x-$y;
        $division = round($x/$y,2);
        $multiplicacion = $x*$y;


        echo "<p>Los valores de las variables son: x=".$x." y =".$y.".</p>";
        echo "<p>El resultado de la suma de x + y es: ".$suma.".</p>";
        echo "<p>El resultado de la resta de x - y es: ".$resta.".</p>";
        echo "<p>El resultado de la división de x / y es: ".$division.".</p>";
        echo "<p>El resultado de la multiplicación de x * y es: ".$multiplicacion.".</p>";




    ?>
</body>
</html>