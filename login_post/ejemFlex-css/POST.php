<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       <fieldset>

       <label for="name">Usuario:</label>
       <input type="text" id="name" name="username"><br>
       <label for="passw">contraseña:</label>
       <input type="password" id="passw" name="password"><br>
       <input type="submit" value="Enviar">
        </fieldset>
   </form>
   <br>


   <?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if($username=="uaa" AND $password="123*"){
        echo "<p> Bienvenido ". $username . "!</p>";
    }else{
        echo "<p> Acceso denegado</p>";
    }
}
?>
    
</body>
</html>