<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Tanda 3 Unidad 2</title>
</head>
<body>

    <h1>Tabla de multiplicar</h1>
    <?php
        if(!isset($_POST["n"])){
            echo '<form action="" method="post">';
            echo'<p>Introduce un número del que deseas calcular la tabla de multiplicar: <input type="number" name="n" id="n"></p>';
            echo '<p><input type="submit" value="Tabla multiplicar"></p> ';
        }
        else{
            echo '<table>';
            $n = $_POST["n"];
            for($i=0; $i<=10;$i++){
                echo '<tr><td>'.$n.' x '.$i.' = '.$n*$i.'</tr></td>';
            }
            echo '</table>';
        }

        
    ?>

</body>
</html>