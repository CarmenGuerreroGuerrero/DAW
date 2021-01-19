<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job08 DAW</title>
</head>

<body>
    <h1>Enviar Email</h1>
    <?php if (isset($_POST['nombre'])) : ?>

        <?php
        $name = $_POST['nombre'];
        $email = $_POST['correo'];
        $subject = $_POST['asunto'];
        $message = 'Hola ' . $name . ".\n";
        $message = $message . $_POST['texto'];
        try {
            mail($email, $subject, $message);
        } catch (Exception $e) {
            echo "<p>ha ocurrido un error</p>";
        }
        if (!isset($e)) {
            echo "<h3>Correo enviado con exito</h3>";
        }


        ?>

        <button onclick="location.href='<?= $_SERVER['PHP_SELF'] ?>'">Enviar otro correo</button>
    <?php else : ?>

        <form action="job08.php" method="post">
            <label>
                <p>Nombre del destinatario: <input type="text" name="nombre"></p>
            </label>
            <label>
                <p>Correo de destino: <input type="email" name="correo"></p>
            </label>
            <label> 
                <p>Asunto del mensaje: <input type="text" name="asunto"></p> 
            </label>
            <label>
                <p>Texto del mensaje: <input type="text" name="texto"></p>
            </label>
           <p><input type="submit" value="Enviar"></p> 
        </form>

    <?php endif; ?>
</body>

</html>