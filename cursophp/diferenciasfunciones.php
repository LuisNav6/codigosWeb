<body>
    <h1>LUIS NAVARRETE</h1>
  <?php
  //diferencias var_dump vs print_r
   $x = array( 5, 0.0, "hola", false, '');
   var_dump ($x);
   echo "<br>";
   print_r($x);
   echo "<br>";
   //otra forma de print_r
   $salida = print_r($x,true);
   echo $salida;
   echo "<br>";
   //diferencias isset vs empty
   echo "<h1> Luis Navarrete</h1>";
   $fruit = 'luis';
 
   if(isset($fruit)) {
       echo 'Do you like '.$fruit.'?';
   }
    echo "<br>";
   // Output:  Do you like ?
   if(!empty($fruit)){
       echo 'you do not like '.$fruit.'?';
       // No Output si la cadena tuviera algo tambien imprimera este
   }
  ?>
</body>