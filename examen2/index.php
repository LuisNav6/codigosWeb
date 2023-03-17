<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
    <style>
.pie{
                display: flex;
                align-items: center;
                justify-content: center;
                 background-color: #29323c;
            }
        .form-dudas{
            box-shadow: 7px 13px 37px #25D366;
            padding: 20px;
            border-radius: 4px;
            margin: 20px;
        }
        .col-12{
            transition: transform .2s;
            color: black;
            border: none;
            font-family: 'Permanent Marker';
        }
        .col-12:hover{
            transform: scale(1.5);
        }
        .mb-3{
            font-family: 'Permanent Marker';
            color: #fff;
        }
    </style>
</head>

<body style="background-color: black;">
    <?php include 'base.php';?>
    <!-- comenzamos con la página de inicio-->
    <!-- carrusel -->
    <div class="carruselindex" style="width: 0.5fr; height: 0.5fr;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/lenguajes-programacion.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/52714.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/programacion-sintaxis_1920x1080_xtrafondos.com.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- imagenes -->
    <div class="imagenes" style="display: flex; flex-direction:row; justify-content:center; align-items:center;">
        <img src="img/HD-wallpaper-programming-coding-language.jpg" alt="">
    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- presentación cursos -->

    <div class="cursos"
        style="display: flex; flex-direction:row; justify-content:space-around; align-items:center; padding: 35px;">
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header" style="text-align: center;">C++</div>
            <div class="card-body">
              <center>
              <img src="img/ISO_C++_Logo.png" style="height:10%; width:15%; text-align:center;">
              </center>
                <h5 class="card-title" style="text-align: center;">¡Obtén tu certificado!</h5>
                <p class="card-text" style="text-align: center;">Realiza un examen, en donde evaluaremos tus conocimientos. Si quieres saber más, ¡dale click!</p>
            </div>
        </div>

        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header" style="text-align: center;">JavaScript</div>
            <div class="card-body">
              <center>
              <img src="img/javascript-icon-png-23.png" style="height: 10%; width: 15%; text-align:center;" rel="">
              </center>
                <h5 class="card-title" style="text-align: center;">¡Obtén tu certificado!</h5>
                <p class="card-text" style="text-align: center;">Realiza un examen, en donde evaluaremos tus conocimientos. Si quieres saber más, ¡dale click!</p>
            </div>
        </div>

        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header" style="text-align: center;">Python</div>
            <div class="card-body">
            <center>
            <img src="img/Python-logo-notext.png" style="height: 10%; width: 15%; text-align:center;" rel="">
            </center>
                <h5 class="card-title" style="text-align: center;">¡Obtén tu certificado!</h5>
                <p class="card-text" style="text-align: center;">Realiza un examen, en donde evaluaremos tus
                    conocimientos. Si quieres saber más, ¡dale click!</p>
            </div>
        </div>

        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header" style="text-align: center;">PHP</div>
            <div class="card-body">
              <center>
            <img src="img/logo-php" style="height: 10%; width: 15%; text-align:center;" rel="">
            </center>
                <h5 class="card-title" style="text-align: center;">¡Obtén tu certificado!</h5>
                <p class="card-text" style="text-align: center;">Realiza un examen, en donde evaluaremos tus
                    conocimientos. Si quieres saber más, ¡dale click!</p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="pie" style="background-color: #29323c;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-dudas">
            <div class="mb-3" style="text-align: center;">
                <label for="exampleFormControlInput1" class="form-label" style="color: #25D366;">Ingresa tu correo electrónico *</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@gmail.com" name="correo">
            </div>
            <div class="mb-3" style="text-align: center;">
                <label for="exampleFormControlTextarea1" class="form-label" style="color: #25D366;">Dános tu comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12" style="display: flex; flex-direction:row; justify-content:center; align-items:center;">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </div>
    </form>
    </footer>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>
</html>

<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "al296427@edu.uaa.mx";
    $to = $_POST['correo'];
    $subject = "verificando funcion mail";
    $message = "¡Bienvenido a nuestro sitio!";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "correo enviado";
?>