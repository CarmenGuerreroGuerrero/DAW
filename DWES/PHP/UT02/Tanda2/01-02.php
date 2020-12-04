<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Tanda 2 Unidad 2</title>
</head>
<body>
    <!-- Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a primera hora ese día. -->
    <?php
        $dia = $_POST["dia"];

        switch ($dia) {
            case "Lunes":
                echo "DWEC";
                break;
            case "Martes":
                echo "EIE";
                break;
            case "Miércoles":
                echo "DWES";
                break;
            case "Jueves":
                echo "DAW";
                break;
            case "Viernes":
                echo "DIW";
                break;
        }
    ?>
</body>
</html>