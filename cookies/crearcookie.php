<?php
setcookie('pais-seleccionado',$_GET['pais'],time()+86400,'/');
header('Location:sitioweb.php');
?>