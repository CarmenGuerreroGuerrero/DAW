<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while. -->
    <h1>Números del 320 al 160 de 20 en 20 con bucle do-While</h1>
    <?php
        $i=320;
        do{
            if($i%20==0){
                echo $i." ";
            }
            $i--;
        }
        while($i>=160);
    ?>
</body>
</html>