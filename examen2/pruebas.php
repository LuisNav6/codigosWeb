<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!--font Awesome-->
        <script src="https://kit.fontawesome.com/c5bc837744.js" crossorigin="anonymous"></script>

        <!-- letra -->
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
     <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *:focus,
        *:active {
            outline: none !important;
            -webkit-tap-highlight-color: transparent;
        }

       /* html,
        body {
            display: grid;
            height: 100vh;
            width: 100%;
            font-family: "Poppins", sans-serif;
            place-items: center;
            background: #192229;
        }*/

        .wrapper {
            display: inline-flex;
        }

        .wrapper .icon {
            position: relative;
            background: #ffffff;
            border-radius: 50%;
            padding: 15px;
            margin: 10px;
            width: 50px;
            height: 50px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            -webkit-transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -ms-transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -o-transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            font-size: 14px;
            background: #fff;
            color: #ffffff;
            padding: 5px 8px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            border-radius: 4px;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -ms-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -o-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
        }

        .wrapper .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: #fff;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -webkit-transform: translate(-50%) rotate(45deg);
            -moz-transform: translate(-50%) rotate(45deg);
            -ms-transform: translate(-50%) rotate(45deg);
            -o-transform: translate(-50%) rotate(45deg);
            -webkit-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -ms-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -o-transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon:hover .tooltip {
            top: -45px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.01);
        }

        .wrapper .facebook:hover,
        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background: #3b5999;
            color: #fff;
        }

        .wrapper .twitter:hover,
        .wrapper .twitter:hover .tooltip,
        .wrapper .twitter:hover .tooltip::before {
            background: #46c1f6;
            color: #fff;
        }

        .wrapper .instagram:hover,
        .wrapper .instagram:hover .tooltip,
        .wrapper .instagram:hover .tooltip::before {
            background: #e1306c;
            color: #fff;
        }

        img:hover{
           /* transform: scale(1.5);*/
           border-radius:50%;
           -webkit-border-radius:50%;
           box-shadow: 0px 0px 15px 15px #ec731e;
           -webkit-box-shadow: 0px 0px 15px 15px #ec731e;
           transform: rotate(360deg);
           -webkit-transform: rotate(360deg);
        }
        img{
            transition: transform .2s;
        }
        .fa-facebook-f, .fa-twitter, .fa-instagram{
         color:#192229;
        }
        h1{
            font-family:'Permanent Marker';
            color: #25D366;
            text-align: center;
            font-size: 300%;
        }
        .legend1{
            font-family: 'Permanent Marker';
            text-align: center;
            font-size: 30px;
            color:#46c1f6;
        }
        .acerca-de{
            background-color:#192229;
            width:60%;
            margin-right: 500px;
            padding: 40px;
            border-radius: 4px;
        }
        .texto{
            font-family: 'Permanent Marker';
            color: white;
        }
        .acerca-de2{
            background-color: #192229;
            width: 60%;
            margin-left: 555px;
            padding: 40px;
            border-radius: 4px;
        }
        .acerca-de:hover{
            box-shadow: 
            1px 1px #53a7ea,
            2px 2px #53a7ea,
            3px 3px #53a7ea;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px);;
        }

        .acerca-de2:hover{
            box-shadow: 
            1px 1px #e1306c,
            2px 2px #e1306c,
            3px 3px #e1306c;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px);;
        }
        .legend2{
            font-family: 'Permanent Marker';
            text-align: center;
            font-size: 30px;
            color: #e1306c;
        }
        li{
            font-family: 'Permanent Marker';
            color: white;  
        }
        .legend3{
            font-family: 'Permanent Marker';
            text-align: center;
            font-size: 30px;
            color: #A34DFD;
        }
        .acerca-de3:hover{
            box-shadow: 
            1px 1px #A34DFD,
            2px 2px #A34DFD,
            3px 3px #A34DFD;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px);;
        }
        .acerca-de3{
            background-color: #192229;
            width: 60%;
            margin-right: 500px;
            padding: 40px; 
            border-radius: 4px;
        }
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
        <br>
        <br>
        <br>
        <h1>Acerca de</h1>
        <br>
        <br>
        <div class="acerca-de">
            <form action="">
            <fieldset>
                <legend class="legend1">¿Quiénes somos?</legend>
                <p class="texto"><span>Somos una empresa de certificación de tecnología, particularmente en el área de desarrollo
                    y/o programación. Dándo capacitación a empresas, profesionistas y universitarios, formando 
                    recursos humanos especializados en alta tecnología para cubrir la demanda del mercado nacional 
                    e internacional. Tenemos alianzas con las principales marcas y universidades del país, así como 
                    con proyectos y subsidios del Gobierno Federal y Estatal, para la creación de becas en el sector 
                    Sistemas Computacionales.</span></p>
            </fieldset>
            </form>
        </div>
        <br>
        <br>
        <table>
            <tr>
                <td>
                 <div class="fotos" style="display: flex; flex-direction:row; justify-content:space-around; align-items:center">
                     <img src="img/escareño.png" style="width:18%; height:23%;">
                     <img src="img/gandhi.png" style="width:18%; height:23%;">
                     <img src="img/luis.png" style="width:18%; height:23%;">
                     <img src="img/tony.png" style="width:18%; height:23%;">
                 </div>
                </td>
            </tr>
            <tr>
                <td>
                <div class="wrapper" style="display: flex; flex-direction:row; justify-content:space-around; align-items:center;">
                 <div class="icon facebook">
                 <div class="tooltip">Facebook</div>
                 <a href="https://www.facebook.com" target="_blank">
                 <span><i class="fa-brands fa-facebook-f"></i></span>
                 </a>
                </div>
                <div class="icon twitter">
                 <div class="tooltip">Twitter</div>
                 <a href="https://twitter.com" target="_blank">
                 <span><i class="fa-brands fa-twitter"></i></span>
                 </a>
                </div>
                <div class="icon instagram">
                 <div class="tooltip">Instagram</div>
                 <a href="https://www.instagram.com" target="_blank">
                 <span><i class="fa-brands fa-instagram"></i></span>
                 </a>
                </div>
                </div>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <div class="acerca-de2">
            <form action="">
            <fieldset>
                <legend class="legend2">¿Qué nos distingue?</legend>
                <p class="texto"><span>El modelo de capacitación que brindamos ha demostrado tener un gran impacto
                    en comparación a esfuerzos similares por nuestros compañeros de las propias marcas, particularizando en:
                <li>Garantizamos la entrega del alumno de principio a fin.</li>
                <li>Asesorías personalizadas.</li>
                <li>Modelo Blended e-learning.</li>
                <li>Capacitaciones en 5 fases.</li>
                <li>Más horas por curso.</li>
                <li>Metodología "desarrollador".</li></span></p>
            </fieldset>
            </form>
        </div>
        <br>
        <br>
        <div class="acerca-de3">
            <form action="">
            <fieldset>
                <legend class="legend3">Nuestra historia</legend>
                <p class="texto"><span>Data Developer nace con la finalidad de cubrir la creciente demanda de talento en 
                    Tecnologías de Información particularmente en software, tanto en calidad como en cantidad. Desde su 
                    inicio, y a lo largo de su historia Data Developer ha buscado la integración entre marcas
                     de desarrollo de software, Gobierno, Iniciativa Privada y Academia como eje rector de sus soluciones.</span></p>
            </fieldset>
            </form>
        </div>
        <br>
        <br>
        <br>
    </body>
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