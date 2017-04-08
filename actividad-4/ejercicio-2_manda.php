<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Ejercicio 2 (manda)</title>
</head>
<body>
    <h3>Por favor seleccione el par de valores que quiera mandar:</h3>

    <?php
        $datos = array(
            'Carro' => 'Car',
            'Leer' => 'Read',
            'Caliente' => 'Hot',
            'Pero' => 'But'
        );

        foreach ($datos as $es => $en) {
    ?>
            <a href = <?php echo "ejercicio-2_recibe.php?espanol=$es"
            . "&ingles=$en"?>><?php echo $es . " y " . $en ?></a><br>
    <?php
        }
    ?>
</body>
</html>