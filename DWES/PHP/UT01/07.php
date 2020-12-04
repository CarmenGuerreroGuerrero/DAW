<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 1 ejercicio 7</title>
</head>
<body>
    <h1>Unidad 1 Ejercicio 7</h1>
    <p>Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. 
    Muestra los valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.</p>
    
    <?php
        $nombreCompleto = 'María del Carmen Guerrero Guerrero';
        $direccion = 'Plaza Lalala, bloque 14';
        $telefono = '6600468888';

        echo "<p>Nombre completo: ".$nombreCompleto.".</p>"."<p>Dirección: ".$direccion.".</p>"."<p>Teléfono ".$telefono.".</p>";
    ?>
</body>
</html>