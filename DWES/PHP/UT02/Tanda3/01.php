<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for . -->
    <h1>Múltiplos de 5 de 0 a 100 con bucle for</h1>
    <?php

        for($i=0; $i<=100; $i++){
            if($i%5==0){
               echo $i." ";
            }  
        }
    ?>
</body>
</html>