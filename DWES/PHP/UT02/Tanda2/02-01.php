<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. 
Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado. -->
    <h1>Saludo</h1>
    <form action="02-02.php" method="post">
        <p>Introduce la hora: <input type="number" name="hora" id="hora" min=0 max=23>h</p>
        <p><input type="submit" value="Saludo"></p>
    </form>

</body>
</html>