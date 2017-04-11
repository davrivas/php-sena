﻿<?php
    /* Incluyo la variable $escenarioVacio que se encuentra en el archivo
     * "escenarioVacio.php", para generar los valores iniciales de $escenario
     * cuando no se ha hecho interacción con los valores de $escenario
     */
    include "escenarioVacio.php";

    function escenario($escenario) {
        //Esto funciona para llenar los espacios en el escenario
?>
        <table id="escenario">
            <thead>
                <tr>
                    <th colspan="6" id="iconoEscenario">ESCENARIO</th>
                </tr>
                <tr>
            <?php
                //Genero las columnas
                for ($num=0; $num <= 5; $num++) {
            ?>
                    <th>
                <?php
                    if($num == 0) {
                        //Lo hago para que cuando $num = 0 sea igual a ""
                        $num = "";
                    }

                    echo $num
                ?>            
                    </th>
            <?php
                }
            ?>
                </tr>
            </thead>
            <tbody>    
            <?php
                //Coloco los numeros de fila, por eso defino $i como 1
                $i=1;
                foreach ($escenario as $filas) {
                    //Coloco cada arreglo de $escenario
            ?>
                <tr class="filas">
                    <th><?php echo $i; ?></th>
                <?php
                    foreach ($filas as $puestos) {
                ?>
                    <!-- Genero cada valor de la matriz -->
                    <td class="puestos"><?php echo $puestos; ?></td>
                <?php
                    }
                ?>
                </tr>
                <?php
                    //Aumento cada numero de fila
                    $i++;
                    }
                ?>
            </tbody>
        </table>
<?php
    }
?>