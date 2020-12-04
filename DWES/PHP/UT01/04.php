<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 1 Ejercicio 4</title>
</head>
<body>
    <h1>Unidad 1 Ejercicio 4</h1>
    <p>Escribe un programa que muestre tu horario de clase mediante una tabla. 
    Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP para familiarizarte con éste último.</p>
    <?php
        echo '<table>
            <caption>Horario de Clase</caption>
            <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <tr>
                <th>8:30-9:30</th>
                <td>DWEC</td>
                <td>EIE</td>
                <td>DWES</td>
                <td>DAW</td>
                <td>DIW</td>
            </tr>
            <tr>
                <th>9:30-10:30</th>
                <td>DWEC</td>
                <td>EIE</td>
                <td>DWES</td>
                <td>EIE</td>
                <td>DIW</td>
            </tr>
            <tr>
                <th>10:30-11:00</th>
                <td colspan="5">RECREO</td>
            </tr>
            <tr>
                <th>11:00-12:00</th>
                <td>DIW</td>
                <td>DAW</td>
                <td>DIW</td>
                <td>EIE</td>
                <td>DWES</td>
            </tr>
            <tr>
                <th>12:00-13:00</th>
                <td>DIW</td>
                <td>DAW</td>
                <td>DIW</td>
                <td>DWES</td>
                <td>DWES</td>
            </tr>
            <tr>
                <th>13:00-14:00</th>
                <td>DWES</td>
                <td>DWES</td>
                <td>DWEC</td>
                <td>DWES</td>
                <td>DWEC</td>
            </tr>
            <tr>
                <th>14:00-15:00</th>
                <td>DWES</td>
                <td>DWES</td>
                <td>DWEC</td>
                <td>DWES</td>
                <td>DWEC</td>
            </tr>
        </table>'
    
    
    ?>
</body>
</html>