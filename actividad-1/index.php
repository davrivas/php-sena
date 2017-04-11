<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <title>Actividad 1</title>
    </head>
    <body>
        <?php
            /* ┌────────────────────────────────────────────────────┐
             * │ DATOS DEL DESARROLLADOR:                           │
             * │ Nombre: David Santiago Rivas Agudelo               │
             * │ Programa de formación: Desarrollo Web con PHP      │
             * │ Evidencia: Taller “Instalación y prueba funcional” │
             * └────────────────────────────────────────────────────┘
             */

            echo "Nombre: David Santiago Rivas Agudelo<br>
                Número de cedula: 1.026.291.172<br>";
        ?>

        <p><strong>
            <?php
                echo "Un saludo a la instructora Vanessa Cristina Miranda Cano.";
            ?>
        </strong></p>

        <?php
            $image_url = "code-screenshot.jpg";
            $image_alt = "Captura de pantalla del código";
        ?>

        <img alt="<?php echo $image_alt; ?>" src='<?php echo $image_url; ?>'>
    </body>
</html>