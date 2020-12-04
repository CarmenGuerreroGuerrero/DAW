<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado. -->
    <h1>Cuadrados y cubos</h1>
    <?php
        if (!isset($_POST['n'])) {
    ?>
        <form method="post">
            <p>Por favor, introduzca un número entero:<input type="number" name="n" autofocus></p>
            <p><input type="submit" value="Aceptar"></p>
        </form>
    <?php
        } 
        else {
          $n = $_POST['n'];
          echo "<table><tr><th>n</th><th>n<sup>2</sup></th><th>n<sup>3</sup></th></tr>";
          for ($i = $n; $i < $n + 5; $i++) {
            echo "<tr><td>$i</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
          }
          echo "</table>";
        }
    ?>
    
</body>
</html>