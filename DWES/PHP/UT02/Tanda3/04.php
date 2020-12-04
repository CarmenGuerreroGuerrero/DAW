<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for . -->
    <h1>Números del 320 al 160 de 20 en 20 con bucle for</h1>
    <?php
        for($i=320; $i>=160; $i--){
            if($i%20==0){
                echo $i." ";
            }
        }
    ?>
</body>
</html>