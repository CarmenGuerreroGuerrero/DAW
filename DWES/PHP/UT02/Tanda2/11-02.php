<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche. -->
    <?php
        $hora = $_POST['hora'];
        $minuto = $_POST['minuto'];

        $segundosTranscurridos = ($hora * 3600) + ($minuto * 60);
        $segundosHastaMedianoche = (24 * 3600) - $segundosTranscurridos;
        echo "Desde las " . date('h:i', mktime($hora, $minuto)) ." hasta la medianoche faltan ".$segundosHastaMedianoche." segundos.";
    ?>
</body>
</html>