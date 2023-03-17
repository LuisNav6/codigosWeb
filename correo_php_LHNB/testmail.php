<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "al296427@edu.uaa.mx";
    $to = $_POST['correo'];
    $subject = "verificando funcion mail";
    $message = "¡Bienvenido a nuestro sitio!";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "<html>
           <head>
            <link href='https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap' rel='stylesheet'>
            <style>
            body{
                background-image: url('fondo_formulario3.jpeg');
            }
            h1{
                font-family: 'Fuzzy Bubbles';
                text-align: center;
                color: white;
            }
            </style>
           </head>
           <body>
           <h1>¡Felicidades por unirte!</h1>
           </body>
           </html>";
?>