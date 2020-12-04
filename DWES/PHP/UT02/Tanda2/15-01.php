<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 Tanda 2 Unidad 2</title>
</head>
<body>
<!-- Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo infiel. 
El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes utilizar radio buttons. 
Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas contestadas con falso no suman puntos. 
Utiliza el fichero test_infidelidad.txt para obtener las preguntas y las conclusiones del programa. -->
    <h1>Test de infidelidad</h1>
    <form action="15-02.php" method="post">
        <ol>
            <li>
                Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.
                <p><input type="radio" name="p1" value=3>Verdadero</p>
                <p><input type="radio" name="p1" value=0>Falso</p>
            </li>
            <li>
                Ha aumentado sus gastos de vestuario.
                <p><input type="radio" name="p2" value=3>Verdadero</p>
                <p><input type="radio" name="p2" value=0>Falso</p>
            </li>
            <li>
                Ha perdido el interés que mostraba anteriormente por ti.
                <p><input type="radio" name="p3" value=3>Verdadero</p>
                <p><input type="radio" name="p3" value=0>Falso</p>
            </li>
            <li>
                Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer).
                <p><input type="radio" name="p4" value=3>Verdadero</p>
                <p><input type="radio" name="p4" value=0>Falso</p>
            </li>
            <li>
                No te deja que mires la agenda de su teléfono móvil.
                <p><input type="radio" name="p5" value=3>Verdadero</p>
                <p><input type="radio" name="p5" value=0>Falso</p>
            </li>
            <li>
                A veces tiene llamadas que dice no querer contestar cuando estás tú delante.
                <p><input type="radio" name="p6" value=3>Verdadero</p>
                <p><input type="radio" name="p6" value=0>Falso</p>
            </li>
            <li>
                Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a.
                <p><input type="radio" name="p7" value=3>Verdadero</p>
                <p><input type="radio" name="p7" value=0>Falso</p>
            </li>
            <li>
                Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo.
                <p><input type="radio" name="p8" value=3>Verdadero</p>
                <p><input type="radio" name="p8" value=0>Falso</p>
            </li>
            <li>
                Has notado que últimamente se perfuma más.
                <p><input type="radio" name="p9" value=3>Verdadero</p>
                <p><input type="radio" name="p9" value=0>Falso</p>
            </li>
            <li>
                Se confunde y te dice que ha estado en sitios donde no ha ido contigo.
                <p><input type="radio" name="p10" value=3>Verdadero</p>
                <p><input type="radio" name="p10" value=0>Falso</p>
            </li>
        </ol>
        <p><input type="submit" value="Comprobar"></p>
    </form>
</body>
</html>