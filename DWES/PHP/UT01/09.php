<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 1 ejercicio 9</title>
</head>
<body>
    <h1>Unidad 1 Ejercicio 9</h1>
    <p>Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar almacenada en una variable.</p>
    
    <?php
        $pesetas = 100;
        $euros = round($pesetas / 166.386,2);
        echo $pesetas. " pesetas son ". $euros. " euros.";
    ?>
</body>
</html>