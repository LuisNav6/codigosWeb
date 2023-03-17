<?php 
//si reconoce estos datos si ingresará, si no, mandará msj de error
$myuser = "luishnb4";
$mypass = "luis123";

if(!isset($_POST['login'])){
   $usuario = $_POST['usuario'];
   $contra = $_POST['contra'];
  if($usuario == $myuser && $contra ==  $mypass){ 
    if(isset($_POST['remember'])){
        setcookie('usuario',$usuario, time()+60*60*7);//valido por 7 dias
        setcookie('contra',$contra, time()+60*60*7);//valido por 7 dias
    } 
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("location: welcome.php");
  }else{
    echo "usuario o contraseña son incorrectos <br><a href='login.php'> click para volver a intentar</a>";
  }
}else{
    header("location: login.php");//para devolver al usuario si quiere brincaerse el aso
}
?>