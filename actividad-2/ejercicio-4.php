<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Directorio</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de<br>cumpleaños</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $directorio = array(
                    //Fila 0
                    array(
                        'Diego Cepeda',
                        'Calle 24 # 40-60',
                        '3115674532',
                        '23 de febrero'
                    ),
                    //Fila 1
                    array(
                        'Melissa Pérez',
                        'Carrera 23 # 76-56',
                        '3456787',
                        '4 de julio'
                    ),
                    //Fila 2
                    array(
                        'Armando Caminos',
                        'Transversal 23B # 45-76',
                        '3135648734',
                        '30 de noviembre'
                    )
                );

                //Este ciclo recorre cada arreglo de $directorio
                foreach ($directorio as $arreglo) { 
                    //Apertura de fila
                    echo "<tr>";

                    //Este ciclo recorre cada elemento del sub arreglo
                    foreach ($arreglo as $dato) { 
                        //Apertura de columna
                        echo "<td>";

                        //Se escribe el valor de cada elemento del sub arreglo
                        echo $dato;

                        //Cierre de columna
                        echo "</td>";
                    }

                    //Cierre de fila
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>