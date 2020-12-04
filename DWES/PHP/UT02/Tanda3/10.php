<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. 
A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo. -->
    <h1>Media</h1>
    <?php
        if(!isset($_POST["n"])){
            $n=0;
            $suma =0;
            $totalN=0;
        }
        else{
            $n=$_POST["n"];
            $suma = $_POST["suma"];
            $totalN = $_POST["totalN"];
        }

        if($n>=0){
            $suma += $n;
            $totalN++;
            echo '<form action="" method="post">';
            echo '<p>Introduce un número <input type="number" name="n" id="n"></p>';
            echo '<p><input type="hidden" name="suma" value="'. $suma.'"></p>';
            echo '<p><input type="hidden" name="totalN" value="'.$totalN.'"</p>';
            echo '<p><input type="submit" value="Número de dígitos"></p>';
        }
        else{
            echo'<p>La media de los números introducidos son: '.$suma/($totalN-1);
        }
    ?>
    
</body>
</html>