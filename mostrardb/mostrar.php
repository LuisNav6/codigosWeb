<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
        td,
        th {
            padding: 10px;
            text-align: center;
            font-family: 'Roboto Mono',monospace;
           
        }
        
    </style>
</head>
<?php   
$servidor='localhost';
$cuenta='root';
$password='root';
$bd='Hospital';
 //conexion a la base de datos
$conexion = new mysqli($servidor,$cuenta,$password,$bd);

if ($conexion->connect_errno){
     die('Error en la conexion');
}else{
    //conexion exitosa
   //vemos datos en un tabla de html
   $sql = 'select * from pacientes';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
   $resultado = $conexion -> query($sql); //aplicamos sentencia

   if ($resultado -> num_rows){ //si la consulta genera registros
        echo '<div style="margin-left: 20px; background-image: linear-gradient(130deg, #927f75 0, #6f6d6b 16.67%, #4a5962 33.33%, #1f4459 50%, #003051 66.67%, #001e49 83.33%, #000941 100%);">';
        echo '<table class="table table-hover" style="width:50%; margin:0 auto; background-image: linear-gradient(180deg, #c0d3ff 0, #6c90d8 50%, #0053a8 100%); border-radius: 10px;">';
        
          echo '<tr>';
              echo '<th>Número de habitación</th>';
              echo '<th>Nombre del paciente</th>';
              echo '<th>Diagnóstico</th>';
              echo '<th>Nombre del médico</th>';
          echo '</tr>';
          while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
              echo '<tr>';
                  echo '<td>'. $fila['Numero_habitacion'] . '</td>';
                  echo '<td>'. $fila['nombre_paciente'] . '</td>';
                  echo '<td>'. $fila['diagnostico'] . '</td>';
                  echo '<td>'. $fila['nombre_medico'] . '</td>';
              echo '</tr>';
          }   
          echo '</table">';
       echo '</div>';
   }
   else{
       echo "no hay datos";
   }
  
}//fin 
?>