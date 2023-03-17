<?php
if(!$_COOKIE['pais-seleccionado']){
  header('Location:ubicacion.php');
}else if($_COOKIE['pais-seleccionado'] == 'mx'){
  header('Location:mexico.php');
}else if($_COOKIE['pais-seleccionado'] == 'us'){
  header('Location:estadosunidos.php');
}else if($_COOKIE['pais-seleccionado'] == 'fr'){
  header('Location:francia.php');
}
?>