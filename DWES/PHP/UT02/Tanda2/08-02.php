<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Tanda 2 Unidad 2</title>
</head>
<body>
    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $media = round((($n1+$n2+$n3)/3),2);

        if($media<5){
            echo "La media de las tres notas introducidas es: ".$media.", INSUFICIENTE";
        }
        elseif($media<6){
            echo "La media de las tres notas introducidas es: ".$media.", SUFICIENTE";
        }
        elseif($media<7){
            echo "La media de las tres notas introducidas es: ".$media.", BIEN";
        }
        elseif($media<8){
            echo "La media de las tres notas introducidas es: ".$media.", NOTABLE";
        }
        else{
            echo "La media de las tres notas introducidas es: ".$media.", SOBRESALIENTE";
        }
    ?>
</body>
</html>