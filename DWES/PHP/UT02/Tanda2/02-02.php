<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Tanda 2 Unidad 2</title>
</head>
<body>
<!--     Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. 
    Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado. -->
    <?php
        $hora = $_POST["hora"];

        if($hora>=6&&$hora<=12){
            echo "¡BUENOS DÍAS!";
        }
        elseif($hora>=13&&$hora<=20){
            echo "¡BUENAS TARDES!";
        }
        else{
            echo "¡BUENAS NOCHES!";
        }
    ?>
</body>
</html>