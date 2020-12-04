<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 Tanda 2 Unidad 2</title>
</head>
<body>
    <?php
        $n=$_POST["numero"];

        if($n%2==0&&$n%5==0){
            echo "El número ".$n." es par y divisible entre 5";
        }
        elseif($n%2==0&&$n%5!=0){
            echo "El número ".$n." es par pero NO divisible entre 5";
        }
        elseif($n%2!=0&&$n%5==0){
            echo "El número ".$n." NO es par pero divisible entre 5";
        }
        else{
            echo "El número ".$n." NO es par y NO es divisible entre 5";
        }
    ?>
</body>
</html>