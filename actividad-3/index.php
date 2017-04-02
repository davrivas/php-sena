<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Actividad 3</title>
</head>
<body>
    <?php
        /* DATOS DEL DESARROLLADOR:
         * Nombre: David Santiago Rivas Agudelo
         * Programa de formación: Desarrollo Web con PHP
         * Evidencia: Taller “Uso de funciones”
         */

        /* Llamé el archivo biblioteca.php en el que se encuentra la función
         * operaciones
         */
        require_once 'biblioteca.php';

        /* Llamo la función operaciones que está en el archivo biblioteca.php y
         * le puse valores a los parámetros (me tocó colocarle echo porque de lo
         * contrario no me aparece nada)
         */
        echo operaciones(5, 3);
    ?>
</body>
</html>