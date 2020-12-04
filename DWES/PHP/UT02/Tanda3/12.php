<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. 
El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, 
por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe introducir por teclado. -->
    <h1>Serie Fibonacci</h1>
    <?php
        if (!isset($_POST['n'])) {
    ?>
        <form method="post">
            <p>Por favor, introduzca un número entero:<input type="number" name="n" autofocus></p>
            <p><input type="submit" value="Fibonacci"></p>
        </form>
    <?php
        } 
        else {
            $i = 1;
            $f1 = 0;
            $f2 = 1;
            $n = $_POST['n'];
            if ($n >= 1) {
              switch ($n) {
                case 1:
                  echo "0";
                  break;
                case 2:
                  echo "0 1";
                  break;
                default:
                  echo "0 1";
                  while($n > 2) {
                    $aux = $f1;
                    $f1 = $f2;
                    $f2 = $aux + $f2;
                    echo " $f2";
                    $n--;
                  }
                }
              } else {
                echo "Introduzca un valor con sentido";
              }
          }
    ?>
    
</body>
</html>