<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. 
Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. 
Tendremos cuatro oportunidades para abrir la caja fuerte. -->
    <h1>Caja Fuerte</h1>
    <?php
        /*isset significa si está definida la variable, en este caso, si la variable oportunidades no está definida, oportunidades vale 4 y el numero introducido es 55555,
        si está definida, las oportunidades en este caso es 4 y el número introducido será $numeroIntroducido*/
          if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 55555;
            $oportunidades = 4;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }
          /*Se crea el número secreto*/
          $numeroSecreto = 1234;
          /* si el número secreto es igual al número introducido, la caja fuerte se abre. 
            si no es igual y se han agotado las oportunidades, se han agotado.
            y si no, se vuelve a poner introduce un número y las oportunidades que quedan.
          */
          if ($numeroIntroducido == $numeroSecreto) {
            echo "<p>La caja fuerte se ha abierto.</p>";
            echo '<p><img src="https://m.gifmania.com/Gif-Animados-Objetos/Imagenes-Dinero/Cajas-Fuertes/Caja-Fuerte-Lingotes-Oro-81890.gif"  alt=""></p>';
          } elseif ($oportunidades == 0) {
            echo "<p>Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.</p>";
          } else {
            
            echo "<h2>Introduce un número de cuatro cifras.</h2>";
            echo "<p>Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.</p>";
            $oportunidades--;
            echo '<form action="07.php" method="post">';
            echo '<p><input type="number" min=0 max=9999 name="numeroIntroducido" autofocus></p>';
            echo '<p><input type="hidden" name="oportunidades" value="', $oportunidades, '"></p>';
            echo '<p><input type="submit" value="Continuar"></p>';
            echo '</form>';
          }
    ?>
</body>
</html>