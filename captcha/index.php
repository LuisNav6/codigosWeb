<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script type="text/javascript" src="/jquery/dist/jquery.js"></script>
    <script type="text/javascript">
      $(function(){
          $('#btn_recargar').click(function(){
              document.location.reload();
              return false;
          });

          $('#btn_iniciar').click(function(e){
              e.preventDefault();
              var data = $('#frm').serialize();
              $.ajax({
               url : "/validar.php",
               type : "post",
               data : data,
               success: function(res){
                 alert(res);
               }
              });
          });
      });
    </script>
   <style>
     /*  body{
           background-color: black;
       }*/
     .formulario{
        margin-left: 500px;
        margin-top: 13%;
         background-color: #55D548;
         font-family: 'Roboto Mono',monospace;
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
   /*  h1{
         text-align: center;
         color: white;
         font-family: 'Roboto Mono',monospace;
     }*/
    </style>
<body>
    <h1>LUIS NAVARRETE</h1>
 <h2>Login</h2>
 <form id="frm">
     <table>
         <tr>
             <td>Usuario</td><td><input type="text" name="user"></td>
         </tr>
         <tr>
             <td>Password</td><td><input type="password" name="pass"></td>
         </tr>
         <tr>
             <td><img src="captcha.php"></td><td><input type="text" name="captcha"></td><td><button id="btn_recargar">Recargar</button></td>
         </tr>
         <tr>
             <td></td><td><input type="submit" id="btn_iniciar" value="login"></td>
         </tr>
     </table>
 </form>
<!-- bootstrap js -->
</body>
</html>