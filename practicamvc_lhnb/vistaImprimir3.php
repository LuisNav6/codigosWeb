<?php
include "menu.html";
 include "modelo.php";       
?>


<div style="padding-top:20px;" class="container">
        <h1>Opcion#3 para imprimir</h1>

        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sueldo</th>
                <th>Puesto</th>
            </tr>
            <?php
                foreach($empleados as $emp => $detalles)
                {
                    if($empleados[$emp]["sueldo"] >= 25000){
                        echo "<tr>";
                        echo "<td> $emp </td>";
                        foreach($detalles as $indice => $valor)
                        {
                            echo "<td> $valor </td>";
                        }
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </div>
   <div class="ultimafecha">
    <?php
            date_default_timezone_set('America/Mexico_City');
            $nombre_archivo = 'index.php';
            echo date("F d Y H:i:s.", filectime($nombre_archivo));
    ?>
    </div>