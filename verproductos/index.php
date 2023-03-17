<?php

$servidor='localhost';
$cuenta='root';
$password='';
$bd='productos';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'select * from prendas';
$resultado = $conexion -> query($sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="miestilo.css">

<div class="container"> <br><br>

<div class="row">


<?php
    $numPro = 0;
?>
<script> var array=[];</script>


<?php
    while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['imagen'];
        $producto = $fila['producto'];
        $precio = $fila['precio'];
?>
    <script>
    array.push("<?php echo $producto ?>");
    
    </script>
    
    <div class="col-md-3 col-sm-6 ">
        <a href="#">
            <img class="img-fluid" width="250" height="250" src="images/<?php echo $imagen ?>">
        </a>
        <p><?php echo $producto ?></p>
        <p>$<?php echo $precio ?></p>
        <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
            <img class="img-fluid" src="images/carrito_.png" alt="" width="50" height="15">
        </button>
    </div>
    

<?php
        $numPro = $numPro+1;
    }//fin while
?>

<script>
    console.log(array);    
    
    function agregar(id){
        var indice = parseInt(id);
        console.log(`Elegiste ${array[indice]}`);       
         
    }
    
</script>
