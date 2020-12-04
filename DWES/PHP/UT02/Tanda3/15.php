<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), 
saque por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente introducido. 
No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y el 5, se deberán mostrar 21, 22, 23, 24, 25. -->
    <h1>Potencias</h1>
    <?php
        if (!isset($_POST["base"]) and !isset($_POST["exponente"])) {
    ?>
    <form action="15.php" method="post">
        Introduce la base: <input type="number" name="base">
        Introduce el exponente: <input type="number" name="exponente">
        <input type="submit" value="Calcular">
    </form>
    <?php
        } else {

            $base = $total = $_POST["base"];
            $exponente = intval($_POST["exponente"]);

        for ($i = 1; $i <= $exponente; $i++) {
            echo $total . " ";
            $total *= $base;
        }
  }
  ?>
    
</body>
</html>