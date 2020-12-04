<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable o sobresaliente). -->
    <h1>Media de notas ampliado</h1>
    <form action="08-02.php" method="post">
        <p>Introduce nota 1: <input type="number" name="n1" id="n1" min=0 max=10></p>
        <p>Introduce nota 2: <input type="number" name="n2" id="n2" min=0 max=10></p>
        <p>Introduce nota 3: <input type="number" name="n3" id="n3" min=0 max=10></p>
        <p><input type="submit" value="Calcular media"></p>
    </form>
</body>
</html>