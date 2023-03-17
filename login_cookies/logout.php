<?php
session_start();
session_destroy();
if(isset($_COOKIE['usuario']) && isset($_COOKIE['contra'])){
$usuario = $_COOKIE['usuario'];
$contra = $_COOKIE['contra'];
setcookie('usuario',$usuario, time()-1);//valido por 7 dias
setcookie('contra',$contra, time()-1);//valido por 7 dias
}
echo "Saliste de sesión! <br><a href='login.php'> click para volver al inicio</a>";
?>
