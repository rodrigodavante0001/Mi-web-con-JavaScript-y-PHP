<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inscripción recibida</title>
</head>
<body>
    <h1>Práctica 4 de Rodrigo Delgado Romero</h1>
    <h2>Inscripción recibida</h2>

    <?php
        // 1. Recojo los datos del formulario con $_POST y convierto la edad en número entero con intval()
        $nombre = $_POST['nombre'];
        $edad = intval($_POST['edad']);
        $ciclo = $_POST['ciclo'];

        // 2. Muestro el saludo con el nombre y el ciclo usando echo
        echo "Hola, $nombre. Te has inscrito en $ciclo.<br>";

        // 3. Compruebo si es mayor de edad (18 o más) o menor con un if / else
        if ($edad >= 18) {
            echo "Eres mayor de edad ($edad años).";
        } else {
            echo "Eres menor de edad ($edad años).";
        }
    ?>

    <p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>