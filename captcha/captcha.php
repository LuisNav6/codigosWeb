<?php 
header("content-type: image/png");
$imagen = imagecreate(90,50);
$color_fondo = imagecolorallocate($imagen,59,66,255);//azul
$color_texto = imagecolorallocate($imagen,255,255,255);//blanco

function generar_caracteres($chars,$length){
  $captcha = null;
   for($i = 0;$i<$length;$i++){
      $rand = rand(0,count($chars)-1);
      $captcha .= $chars[$rand];
   }
   return $captcha;
}

$captcha = generar_caracteres(array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k'),4);
setcookie('captcha',sha1($captcha),time()+60*10);//10 min
imagettftext($imagen,22,10,15,35,$color_texto,"/COMICATE.TTF",$captcha);
imagepng($imagen);
?>