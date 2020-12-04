<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia. -->
    <h1>Potencia</h1>
    <?php
        if(!isset($_POST["base"]) &&  !isset($_POST["exp"])){
            echo'<form action="" method="post">';
            echo '<p>Introduce la base para calcular su potencia: <input type="number" name="base" id="base"></p>';
            echo '<p>Introduce el exponente para calcular la potencia: <input type="number" name="exp" id="exp"></p>';
            echo '<p><input type="submit" value="Potencia"></p>';
        }
        else{
            $base = $_POST["base"];
            $exp = $_POST["exp"];

            echo '<p>La potencia de la base '.$base.' con el exponente '.$exp.' es: '. pow($base, $exp);
        }
    ?>
    
</body>
</html>