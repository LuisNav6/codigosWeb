<head>
    <style>
        body{
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
</head>
<body>
<h1>programa 2</h1>
<h2>Luis Navarrete</h2>

<?php
#comentario
//comentario
/*comentario*/
print("hola mundo");
echo "<h3> hola mundo </3>";
$carrera="ISC";
$texto="<p>Estudiante de la carrera $carrera</p>";
echo $texto;
$texto="<p>Estudiante de la carrera ".$carrera."</p>";
echo $texto;

if(isset($_GET["base"]) && isset($_GET["altura"])){
    $base= $_GET["base"];
    $altura= $_GET["altura"];
    
    echo "base= $base <br>";
    echo "altura= $altura <br>";
    
    $area=calcularArea($base,$altura);
    echo "<h3 style='background:green;color:white;'> el área del triángulo es: $area </h3>";
}
else
echo "<h3 style='background:red;color:white;'> No procede el cálculo del área del triángulo</h3>";

$personas= ["Carlos","Luis","Bety","Ana","Guillermo"];
echo "<h4> $personas[0] $personas[1] $personas[4] </h4>";


function calcularArea($base,$altura){
    return ($base * $altura)/2.0;
}
?>

<h1>LISTADO DE NOMBRES</h1>
<ul>
    <?php
     foreach($personas as $name){
        echo "<li>$name</li>";
     }
    ?>
</ul>
</body>