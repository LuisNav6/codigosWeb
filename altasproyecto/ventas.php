<?php

$servidor='localhost';
$cuenta='id19790264_root';
$password='Productosdatabase1.';
$bd='id19790264_dbproductos';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'select * from productos';
$resultado = $conexion -> query($sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/miestilos.css">

<div class="container"> <br><br>

<div class="row">


<?php
    $numPro = 0;
?>
<script> var array=[];var arr=[];</script>


<?php
srand(time());
$x = rand(0,1);//el limite maximo es el numero total de articulos
echo $x;
    while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['imagen'];
        $producto = $fila['nombre'];
        $precio = $fila['precio'];
        $existencia = $fila['existencia'];
        $descripcion = $fila['descripcion']; 
?>
    <script>
    array.push("<?php echo $producto ?>");
    arr.push("<?php echo $precio ?>");
    </script>
     <?php 
     if($numPro == $x){
     ?>
    <div class="col-md-3 col-sm-6">
        <a href="#">
            <img class="img-fluid" src="images/<?php echo $imagen ?>">
        </a>
        <p><?php echo $producto ?></p>
        <p style="color: gray;"><del>$<?php echo $precio?></del></p>
        <p style="color:red">$<?php echo $precio*0.9 ?></p>
        <p>Disponibles: <?php echo $existencia ?></p>
        <p>Descripcion: <?php echo $descripcion ?></p>
        <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
            <img class="img-fluid" src="images/carrito_.png" alt="" width="50" height="15">
        </button>
    </div>
   <?php
     }else{
   ?>
    <div class="col-md-3 col-sm-6">
        <a href="#">
            <img class="img-fluid" src="images/<?php echo $imagen ?>">
        </a>
        <p><?php echo $producto ?></p>
        <p>$<?php echo $precio ?></p>
        <p>Disponibles: <?php echo $existencia ?></p>
        <p>Descripcion: <?php echo $descripcion ?></p>
        <button id="<?php echo $numPro ?>" onclick="agregar(this.id)">
            <img class="img-fluid" src="images/carrito_.png" alt="" width="50" height="15">
        </button>
    </div>

    <?php } ?>
<?php
    $numPro = $numPro+1;
    }//fin while
?>

<script>
    console.log(array); 
    console.log(arr); 
    var aleatorio = arr[Math.floor(Math.random() * arr.length)];
    console.log(aleatorio);
    var descuento = aleatorio * 0.9;
    console.log(descuento);

    function agregar(id){
        var indice = parseInt(id);
        console.log(`Elegiste ${array[indice]}`);
    }
</script>
