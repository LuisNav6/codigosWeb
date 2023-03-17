<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
   <style>
       body{
           background-color: black;
       }
     .formulario{
        margin-left: 500px;
        margin-top: 13%;
         background-color: #55D548;
         font-family: 'Roboto Mono',monospace;
         width: 300px;
         box-shadow: 1px 10px 17px white;
         border-radius: 5px;
     }
     .cont{
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center;
     }
     #btn:hover{
       transform: scale(1.5);
     }
     #btn{
        background-color: black;
         color:white;
         border-radius: 4px;
         transition: 0.2s;
         border: none;
     }
     h1{
         text-align: center;
         color: white;
         font-family: 'Roboto Mono',monospace;
     }
    </style>
<body>
    <h1>LUIS NAVARRETE</h1>
    <div class="formulario">
    <form action="validacion.php" method="post" target="_blank">
    <div class="cont">
  <label for="usuario">usuario:</label>
  <input type="text" id="usuario" name="usuario">
    </div>
    <div class="cont">
  <label for="contra">contraseña:</label>
  <input type="password" id="contra" name="contra">
  </div>
  <div class="cont">
  <label>Recordar?</label>
  <input type="checkbox" name="remember" id="remember">
  </div>
  <div class="cont">
  <input type="submit" value="login" id="btn">
    </div>
</form>
</div>
<!-- bootstrap js -->
</body>
</html>
<?php
if(isset($_COOKIE['usuario']) && isset($_COOKIE['contra'])){
$user = $_COOKIE['usuario'];
$pass = $_COOKIE['contra'];
echo "<script>
   document.getElementById('usuario').value = '$usuario';
   document.getElementById('contra').value = '$contra';       
</script>";
}