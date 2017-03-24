<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        /*
        *  Datos del creador de la página:
        *  David Santiago Rivas Agudelo
        *  e-mail: d.rivas95@hotmail.com
        */

        //Empiezan datos de la empresa
    ?>

    <h3>Nombre de la empresa</h3>

    <?php
        echo "Electrivas S.A";
    ?>

    <h3>NIT</h3>

    <?php
        echo "234.657.244-1";
    ?>

    <h3>Dirección</h3>

    <?php
        echo "Cra. 21 # 23 - 45 Bogotá, Colombia";        
    ?>

    <h3>Teléfono</h3>

    <?php
        echo "3124567855 - 3224576";
        
        //Empiezan los servicios que presta
    ?>

    <h3>Servicios que presta</h3>

    <ul>
        <li>
            <?php
                echo "Comercio al por mayor "
                . "y al por menor de productos electrónicos";
            ?>
        </li>
        <li>
            <?php
                echo "Mantenimiento de productos electrónicos";
            ?>
        </li>
        <li>
            <?php
                echo "Envíos a domicio a nivel nacional.";
            ?>
        </li>
    </ul>
</body>
</html>