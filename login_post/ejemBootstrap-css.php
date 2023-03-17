<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LoginBootstrap</title>
</head>


<body>

    <form class="needs-validation" novalidate method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div style="width:50%; padding:50px;">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Usuario</label>
                    <input type="text" class="form-control" id="validationTooltip01" required name="username">
                    <div class="valid-tooltip">
                        Bien!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Contrasena</label>
                    <input type="password" class="form-control" id="validationTooltip02" required name="password">
                    <div class="valid-tooltip">
                        Bien!
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>



    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $username = $_POST["username"];
            $password = $_POST["password"];  

            if($username == "uaa" AND $password == "123")
            {
                echo '<div style="width:20%;margin-left:50px;" class="alert alert-success" role="alert"> <h4 class="alert-heading">Bienvenido!</h4></div>';
            }
            else{
                echo '<div style="width:20%;margin-left:50px;" class="alert alert-danger" role="alert"><h4 class="alert-heading">Acceso denegado</h4></div>';
            }
        }
    
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
