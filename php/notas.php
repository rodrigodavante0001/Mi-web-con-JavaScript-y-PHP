<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi nota media</title>
</head>
<body>
    <h1>Práctica 4 de Rodrigo Delgado Romero</h1>
    <h2>Mi nota media</h2>

    <?php
        // 1. Guardo el nombre de un módulo en una variable
        $modulo = "Aplicaciones Web";

        // 2. Guardo tres notas inventadas en tres variables
        $nota1 = 7;
        $nota2 = 6;
        $nota3 = 8;

        // 3. Calculo la media usando paréntesis para sumar primero y dividir después
        $media = ($nota1 + $nota2 + $nota3) / 3;

        // 4. Muestro el resultado con echo uniendo textos y variables
        echo "$modulo: mis notas son $nota1, $nota2 y $nota3. Mi media es $media.<br>";

        // 5. Indico si está aprobado (5 o más) o suspenso con un if / else
        if ($media >= 5) {
            echo "Aprobado";
        } else {
            echo "Suspenso";
        }
    ?>

    <p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>