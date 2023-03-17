<?php 
$token = $_POST['token'];
include('claves.php');//necesitamos la clave privada
$url = 'https://www.google.com/recaptcha/api/siteverify';
$peticion = "$url?secret=$claves[privada]&response=$token";
$r = file_get_contents($peticion);
$json = json_decode($r,true);
$ok = $json['success'];//true si fue ok y false si fallo
if($ok === false){
    header("Location: index.php?error=Error en el captcha");
    die();//para que primero procese este if, sin que vaya a ejecutar lo demás en lo que verificamos
}

if($json['score'] < 0.7 ){//score bajo significa robot aprox 0.5 es un robot con conciencia
    header("Location: index.php?error=Eres un robot!!!! :(");
}

//si se llego acá el recaptcha se logró satisfactoriamente
if(!empty($_POST['captcha']) && $_POST['captcha'] == $_POST['respuesta'])
echo "<br> captcha correcto!";
else
 echo "<br> captcha incorrecto!";

 if(!empty($_POST['remember'])){
     setcookie("username",$_POST['username'],time()+3600*10);//10 min
     setcookie("password",$_POST['password'],time()+3600*10);//10 min
     echo "<br> cookies set successfuly";
 }else{
     setcookie("username","");
     setcookie("password","");
     echo "<br> cookies not set";
 }
?>
<p><a href="index.php">Go to login page</a>