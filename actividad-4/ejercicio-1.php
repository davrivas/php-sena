<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Ejercicio 1</title>
</head>
    <?php
    if (isset($_GET['fuente'])) {        
        $fuente = $_GET['fuente'];

        echo "<body style='font-family: $fuente'>";
    ?>

        <p>El tipo de letra de esta página fue cambiado a 
            <strong><?php echo $fuente ?>.</strong></p>

    <?php
        unset($_GET);
    ?>        
        <a href = 'ejercicio-1.php'>Volver al inicio</a>
    
    <?php
    } else {
    ?>
        <body>
        
        <h3>Al dar clic en cualquiera de los siguientes hipervínculos 
            podrás cambiar la fuente de la página</h3>

    <?php
        $fuentes = array(
            'Georgia',
            'Garamond',
            'Tahoma',
            'Comic Sans Ms'
        );

        foreach ($fuentes as $valor) {
            echo "<a href='ejercicio-1.php?fuente=$valor'>$valor</a><br>";
        }        
    }
    ?>
</body>
</html>