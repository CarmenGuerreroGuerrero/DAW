<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 Tanda 3 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que sume los 100 números siguientes a un número entero y positivo introducido por teclado. 
Se debe comprobar que el dato introducido es correcto (que es un número positivo). -->
    <h1>Suma de 100</h1>
    <form action="" method="post">
        Introduce numero: <input type="number" name="number" min="0" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if (isset($_POST["number"])) {
            $number = $_POST["number"];
            $limit = ($number + 100);
            $total = 0;
            for ($i = $number; $i < $limit; $i++) {
                $total += $i;
            }
            echo "La suma total es " . $total;
        }
    ?>
    
</body>
</html>