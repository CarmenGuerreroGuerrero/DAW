<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana. -->
    <?php
        $n = $_POST["numero"];

        switch ($n) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "domingo";
                break;
        }
    ?>
</body>
</html>