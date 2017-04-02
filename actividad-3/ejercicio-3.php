<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        require_once 'ejercicio-3_biblioteca.php';

        $arreglo = array(
            array(
                "Mario Díaz",
                "30 años",
                "Medellín"
            ),
            array(
                "María Caño",
                "23 años",
                "Mosquera"
            ),
            array(
                "Inty Cajamarca",
                "34 años",
                "Bogotá"
            )
        );

        tabla($arreglo);
    ?>
</body>
</html>