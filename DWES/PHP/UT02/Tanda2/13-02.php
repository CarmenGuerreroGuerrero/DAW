<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que ordene tres números enteros introducidos por teclado. -->
    <?php
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        /* Elaboro un array con los números introducidos por teclado. */
        $numeros = array($n1,$n2,$n3);
        sort($numeros);

        echo "Los números introducidos ordenados de menor a mayor son: ".$numeros[0].", ".$numeros[1].", ".$numeros[2];
        
    ?>
</body>
</html>