<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso. 
Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. 
Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos en las diferentes asignaturas del curso. -->
    <?php
        $puntos = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'];
        echo "Ha obtenido $puntos puntos.";
    ?>
</body>
</html>