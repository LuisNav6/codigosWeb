<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        .box {
            height: 100px;
            width: 200px;
            border: none;
            border-radius: 5px;
            text-align: center;
            margin-left: 630px;
            font-family: 'Roboto Mono', monospace;
            padding-bottom: 20px;
        }

        .A {
            background-color: #25D366;
        }

        .F {
            background-color: #e1306c;
        }
        #btn{
            border: none;
            border-radius: 5px;
            background-color: #4EA5E9;
            font-family: 'Roboto Mono', monospace;
            margin-left: 630px;
            color: #192229;
            box-shadow: 0 0 30px 30px  #4EA5E9 inset;
            transition: box-shadow 0.3s ease-in-out;
        }
        #btn:hover{
            box-shadow: 0 0 12px 0 #4EA5E9 inset, 0 0 12px 4px #4EA5E9;
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
            font-family: 'Roboto Mono', monospace;
        }
        .col-12:hover{
            transform: scale(1.5);
        }
        .mb-3{
            font-family: 'Roboto Mono', monospace;
            color: #fff;
        }
    </style>
</head>

<body style="background-color: black;">
    <div id="resultado">
        <?php
        include "base.php";
        include "test.php";
        //intento recibir el array para controlar las preguntas utilizadas
        $control = unserialize($_POST["control"]);

        $i = 0;

        if ($_POST) {
            $i = 1;
            foreach ($control as $cont => $value) {
                //compara la respuesta con la respuesta_correcta
                if ($_POST['r' . $value] == $exam[$value]["answerT"]) {
                    $i++;
                }
            }
            //genera calificacion posterior mente se dira si esta aprobado o reprobado
            if (($i * 10 / 8) >= 6) {
                echo '<br><br><br><br><br><br><br><br><div class="box A">';

                echo '<br>Aprobado<br><br>';
                echo "Calificación: " . $i / 8 * 10;
                echo '</div>';
                echo '<br><br><br><br><br><input type="submit" value="Imprimir Constancia" id="btn">';
            } else {
                echo '<br><br><br><br><br><br><br><br><div class="box F">';

                echo '<br>Reprobado<br><br>';
                echo "Calificación: " . $i / 8 * 10;
                echo '</div>';
            }
            echo "<br><br><br>";
        }
        ?>
    </div>
</body>
<footer class="pie"  id="contacto"style="background-color: #29323c;">
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
    if ($_POST) {
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "al296427@edu.uaa.mx";
        $to = $_POST['correo'];
        $subject = "verificando funcion mail";
        $message = "¡Bienvenido a nuestro sitio!";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "correo enviado";
    }
?>