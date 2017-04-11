<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Actividad 2</title>
</head>
<body>
    <!-- ┌────────────────────────────────────────────────────┐
         │ DATOS DEL DESARROLLADOR:                           │
         │ Nombre: David Santiago Rivas Agudelo               │
         │ Programa de formación: Desarrollo Web con PHP      │
         │ Evidencia: Taller “Uso de arreglos”                │
         └────────────────────────────────────────────────────┘
    -->
        

    <h1>Directorio</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de<br>cumpleaños</th>
                <th>Color<br>favorito</th>
                <th>Significado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                /* Creo una función para no tener que repetir líneas de código
                 * al asignarle el valor al significado del color. Le agrego el
                 * argumento de la variable $color que más adelante será
                 * definida dentro de los subarreglos
                 */
                function significadoColor($color) {
                    //Arreglo de los colores
                    $colores = array(
                        'azul' => 'Poder y sabiduría.',
                        'verde' => 'Vida y naturaleza.',
                        'rojo' => 'Fortaleza.',
                        'negro' => 'Resistencia.'
                    );

                    /* En este punto yo lo que hice fue crear la variable
                     * para el significado del color. Verifiqué si la
                     * llave almacenada en la variable $color existía en el
                     * arreglo $colores. El '?' me verifica si la llave
                     * existe en el arreglo y le asigno el valor de esa
                     * llave a la variable $significado; y los ':' me dice
                     * que no existe la llave en el arreglo, así que le
                     * asigno el valor de 'No se encuentra el significado.'
                     */
                    $significado = array_key_exists($color, $colores) 
                                   ? $colores[$color] 
                                   : 'No se encuentra el significado.';
                    
                    /* Le digo que me arroge el valor de $significado para que
                     * después se escriba al recorrer el ciclo foreach
                     */
                    return $significado;
                }

                //Arreglo que se va a llenar en la tabla
                $directorio = array(
                    array(
                        'Diego Cepeda',
                        'Calle 24 # 40-60',
                        '3115674532',
                        '23 de febrero',
                        //Creé una variable para el color
                        $color = 'verde',
                        /* Llamo a la función significadoColor con el argumento
                         * de la variable $color que está definida en la línea
                         * de arriba
                         */
                        significadoColor($color)
                    ),

                    array(
                        'Melissa Pérez',
                        'Carrera 23 # 76-56',
                        '3456787',
                        '4 de julio',
                        $color = 'rosado',
                        significadoColor($color)
                    ),

                    array(
                        'Armando Caminos',
                        'Transversal 23B # 45-76',
                        '3135648734',
                        '30 de noviembre',
                        $color = 'negro',
                        significadoColor($color)
                    )
                );
                

                //Este ciclo recorre cada arreglo de $directorio
                foreach ($directorio as $arreglo) { 
            ?>

            <!-- Apertura de fila -->
            <tr>

                <?php
                    //Este ciclo recorre cada elemento del sub arreglo
                    foreach ($arreglo as $dato) { 
                ?>
            
                <!-- Apertura de columna -->
                <td>

                    <?php
                        //Se escribe el valor de cada elemento del sub arreglo
                        echo $dato;
                    ?>

                <!-- Cierre de columna -->
                </td>

                <?php
                    }
                ?>

            <!-- Cierre de fila -->
            </tr>

            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>