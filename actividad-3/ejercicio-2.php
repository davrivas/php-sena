<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        function parametros(&$filas, $columnas = 3) {
    ?>

    <table border="1">

    <?php
            for ($i=0; $i < $filas; $i++) {
    ?>
            
            <tr>

            <?php
                for ($j=0; $j < $columnas; $j++) { 
            ?>

                <td>&emsp;</td>
            
            <?php      
                }
            ?>

            </tr>
            
        <?php
            }
        ?>

    </table>

    <?php
        }

        $filasNuevas = 3 * (2 + 3);
        parametros($filasNuevas);
    ?>

    
</body>
</html>