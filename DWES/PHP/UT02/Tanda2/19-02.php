<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras.-->
    <?php
        $n = $_POST["n"];
        /*Convertir n en array*/
        $array = str_split($n);
        /*Invertir array*/
        $arrayInvertido = array_reverse($array); 
        /*Convertir array en n*/
        $n2 = implode($arrayInvertido);

        if($n == $n2){
            echo "El número ".$n." es capicúa";
        }
        else{
            echo "El número ".$n." NO es capicúa";
        }

        
    ?>
</body>
</html> 