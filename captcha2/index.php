<?php 
include('claves.php');//esto carga los array de las claves
function randomText($length){
    $key="";
    $pattern = "0123456789abcdefghijkmlnopqrstvwxyz";
    for($i=0;$i<$length;$i++){
        $key.=$pattern{rand(0,35)};
    }
    return $key;
}
$captcha = randomText(6);
?>
<head>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $claves['publica'];?>"></script>
    <style>
     .login{
         font-family: 'Roboto Mono',monospace;
         background-image: radial-gradient(circle at 120.71% 50%, #ff8590 0, #ff7a9c 6.25%, #ff6ea9 12.5%, #ff63b5 18.75%, #ff57c2 25%, #ff4dce 31.25%, #ff44da 37.5%, #ff3ee6 43.75%, #f23cf2 50%, #d43ffd 56.25%, #b145ff 62.5%, #824eff 68.75%, #2b57ff 75%, #005fff 81.25%, #0065ff 87.5%, #006bff 93.75%, #006fff 100%);
         color: white;
         width: 400px;
         margin-left:500px;
         margin-top: 8%;
         border-radius: 10px;
         border: none;
         padding: 10px;
     }
     #cajita{
         width: 200px;
         border-radius: 4px;
         border:none;
         font-family: 'Roboto Mono',monospace;
     }
     #cajita2{
         width: 175px;
         border-radius: 4px;
         border:none;
         font-family: 'Roboto Mono',monospace;
     }
     #cajita3{
         border-radius: 4px;
         border:none;
         font-family: 'Roboto Mono',monospace;
     }
     #cajita4{
        border-radius: 4px;
        border:none;
        font-family: 'Roboto Mono',monospace;
        transition: 0.2s;
        background-color: white;
       
     }
     #cajita4:disabled,#cajita4[disabled]{
         filter: grayscale(1);
         cursor: default;
     }
     #cajita4:hover{
      transform: scale(1.2);
      color:white;
      background-image: linear-gradient(270deg, #6d5e73 0, #5a496a 16.67%, #413361 33.33%, #1f1f59 50%, #000e51 66.67%, #00004b 83.33%, #000045 100%);
     }
     h1{
         text-align: center;
         color: #fff;
         font-family: 'Roboto Mono',monospace;
     }
     body{
        background-image: linear-gradient(270deg, #6d5e73 0, #5a496a 16.67%, #413361 33.33%, #1f1f59 50%, #000e51 66.67%, #00004b 83.33%, #000045 100%);
     }
     .error{
         color: darkred;
     }
    </style>
</head>
<body>
<h1>luis navarrete</h1>
<div class="login">
<form action="page1.php" method="post">
    <?php
    if(isset($_GET['error'])){
      echo "<p class='error'>$_GET[error]</p>";
    }
    ?>
    <p style="text-align:center;">
        usuario:
        <input type="text" name="username" id="cajita" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>">
    </p>
    <p style="text-align:center;">
        contraseña:
        <input type="password" name="password"  id="cajita2" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
    </p>
    <p style="text-align:center;">
        ingresar texto: <span><?php echo $captcha?> </span> <br>
        <input type="text" name="respuesta" size="10" style="border-radius: 4px; border:none; font-family:'Roboto Mono',monospace;">
        <input type="hidden" name="captcha" value="<?php echo $captcha?>">
    </p>
    <p style="text-align:center;">
        <input type="checkbox" name="remember" id="cajita3"/>Recordar usuario y contraseña
    </p>
    <p>
        <input type="hidden" name="token" id="token">
    </p>
    <p style="text-align:center;">
        <input type="submit" id="cajita4" value="login" disabled>
    </p>
</form>
</div>
<script>
    grecaptcha.ready(function(){
      grecaptcha.execute('<?php echo $claves['publica'];?>',{action: 'formulario'}).then(function(respuesta_token){const itoken = document.getElementById('token'); const btn = document.getElementById('cajita4');itoken.value = respuesta_token;btn.disabled = false;
      })
    });
</script>
</body>