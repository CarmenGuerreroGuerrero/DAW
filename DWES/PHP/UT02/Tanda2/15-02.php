<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 Tanda 2 Unidad 2</title>
</head>
<body>
    <?php
        $puntos = $_POST["p1"]+$_POST["p2"]+$_POST["p3"]+$_POST["p4"]+$_POST["p5"]+$_POST["p6"]+$_POST["p7"]+$_POST["p8"]+$_POST["p9"]+$_POST["p10"];
        if($puntos>=0&&$puntos<=10){
            echo "Has conseguido ".$puntos.". ¡Enhorabuena! tu pareja parece ser totalmente fiel.";
        }
        elseif($puntos>=11&&$puntos<=21){
            echo "Has conseguido ".$puntos.". Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";   
        }
        else{
            echo "Has conseguido ".$puntos.". Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
        }
    ?>
</body>
</html>