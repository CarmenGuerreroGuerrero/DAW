<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while . -->
    <h1>Múltiplos de 5 de 0 a 100 con bucle do-while</h1>
    <?php
        $i=0;
        do{
            if($i%5==0){
                echo $i." ";
            }
            $i++;
        }
        while($i<=100);
        
    ?>
</body>
</html>