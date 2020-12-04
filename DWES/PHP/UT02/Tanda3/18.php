<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos por teclado y validados como distintos, 
el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7. -->
    <h1>Incrementa de 7 en 7</h1>
    <?php
        if(!isset($_POST["n1"])&&!isset($_POST["n2"])){   
    ?>
    <form action="" method="post">
        <p>Introduce el número primero: <input type="number" name="n1" id="n1"></p>
        <p>Introduce el número segundo: <input type="number" name="n2" id="n2"></p>
        <p><input type="submit" value="Incrementa"></p>
    </form>
    <?php
        }
        else{
            $n1= $_POST["n1"];
            $n2= $_POST["n2"];

            for ($i=$n1; $i<=$n2; $i+=7){
                echo $i,' ';
            }
        }
    ?>
</body>
</html>