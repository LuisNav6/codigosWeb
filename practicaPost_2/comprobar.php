<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comprobar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        span {
            font-weight: bold;

        }

        body {
            margin: 20px;
            background-color: beige;
            font-size: 20px;
            display: flex;
            justify-content: center;
        }
        section{
            background-color:antiquewhite;
        }
        
    </style>
</head>

<body>
    <section>
        <h1>Tus datos de suscripción: </h1>
        <p>Estos son los datos que nos has enviado</p>
        <?php
    
    echo "<span>Nombre: </span>"; echo $_POST['nombre']; echo "<br>";
    echo "<span>Apellidos: </span>"; echo $_POST['apellidos']; echo "<br>";
    echo "<span>E-mail: </span>"; echo $_POST['email']; echo "<br>";
    echo "<span>Contraseña: </span>"; echo $_POST['contras']; echo "<br>";
    echo "<span>Sexo: </span>"; echo $_POST['sexo']; echo "<br>";
    echo "<span>Estudios: </span>"; echo $_POST['estudios']; echo "<br>";
    echo "<span>Aficiones: \"on\" seleccionado</span><br><br>";
    
    if(!empty($_POST['musica'])){
      echo "<span>Musica: </span>"; echo $_POST['musica']; echo "<br>";
    }
    if(!empty($_POST['deportes'])){
      echo "<span>Deportes: </span>"; echo $_POST['deportes']; echo "<br>"; 
    }
    if(!empty($_POST['cine'])){
      echo "<span>Cine: </span>"; echo $_POST['cine']; echo "<br>"; 
    }
    if(!empty($_POST['libros'])){
      echo "<span>Libros: </span>"; echo $_POST['libros']; echo "<br>";  
    }
   if(!empty($_POST['ciencia'])){
      echo "<span>Ciencia: </span>"; echo $_POST['ciencia']; echo "<br>";
    }
    
    echo "<br><span>Dia de la semana: </span>"; echo $_POST['dia']; echo "<br>";
    echo "<span>Tu comentario: </span>"; echo $_POST['comentario']; echo "<br>";
    ?>
        <p>Comprueba tus datos antes de enviarlos, si no esta bien vuelve a escribirlos.</p>

        <p>Los datos son correctos: <a href="aviso.html"><button type="button" class="btn btn-primary btn-lg">Enviar</button></a>
            <p>Los datos no son correctos: <a href="formulario1.html"><button type="button" class="btn btn-secondary btn-lg">Volver a escribirlos</button></a>
    </section>

</body>

</html>