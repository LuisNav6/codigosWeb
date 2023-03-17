<?php
  if(isset($_POST)){
      $captcha_cookie = $_COOKIE['captcha'];
      $captcha_user = $_POST['captcha'];

      if($captcha_cookie == sha1($captcha_user)){
          echo "captcha correcto";
          setcookie("captcha","",time()-3600);//destruyendo captcha
      }else{
          echo "captcha incorrecta";
      }
  }
?>
