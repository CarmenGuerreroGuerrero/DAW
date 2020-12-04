<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 Tanda 3 Unidad 2</title>
</head>
<body>

    <h1>¿Cuántos digitos tiene el número?</h1>
    <?php
        if(!isset($_POST["n"])){
            echo '<form action="" method="post">';
            echo '<p>Introduce un número <input type="number" name="n" id="n"></p>';
            echo '<p><input type="submit" value="Número de dígitos"></p>';
        }
        else{
            $n=$_POST["n"];
            $nCifras = strlen($n);
    
            echo '<p>El número de cifras del número '.$n.' es: '.$nCifras;
        }
    ?>
</body>
</html>