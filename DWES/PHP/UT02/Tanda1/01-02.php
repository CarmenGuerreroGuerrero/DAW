<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Tanda 1 Unidad 2</title>
</head>
<body>
    <?php
        $x=$_POST["x"]; /* con $ _POST se recopila los datos del formulario, en este caso el valor introducido por el usuario en los inputs */
        $y=$_POST["y"];

        echo $x." x ".$y." = ". $x*$y;
    ?>
</body>
</html>