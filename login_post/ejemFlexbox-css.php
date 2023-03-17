<head>
    <style>
        table{
            padding: 20px;
            background-color: lightblue;
            border-radius: 10px;
            border: 2px solid aliceblue;
        }
        
        div{
            padding-top: 40px;
            display: flex;
            justify-content: center;
            
        }

    </style>
</head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <div>
   <table>
       <tr>
           <td><label for="name">Usuario: </label></td>
           <td><input type="text" id="name" name="username" required><br></td>
       </tr>
       <tr>
           <td><label for="passw">Contraseña: </label></td>
           <td><input type="password" id="passw" name="password" required><br></td>
       </tr>
       <tr>
           <td colspan="2" style="text-align: center"><input type="submit" value="Enviar"></td>
       </tr>
   </table>
    </div>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $username=$_POST["username"];
    $password=$_POST["password"];
if($username=="isc" AND $password=="1234"){
    echo "<div style='color: blue'><h3>Bienvenido " .$username . "!</h3></div>";
}else{
    echo "<div style='color: red'><h3>Acceso denegado</h3> </div>;";
}
}
?>