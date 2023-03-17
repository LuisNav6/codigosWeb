<head>
    <meta charset="UTF-8">
    <style>
        .cuerpo{
            background: black;
            font-family: 'Roboto Mono', monospace;
            color: #25D366;
            padding: 30px;
        }
        .preg{
          color: white;
          display: inline;  
        }
        .btnenviar{
         text-align: center;
        }
        #enviar:hover{
            border-radius:50%;
           -webkit-border-radius:50%;
           box-shadow: 0px 0px 15px 15px white;
           -webkit-box-shadow: 0px 0px 15px 15px white;
           transform: rotate(360deg);
           -webkit-transform: rotate(360deg);
        }
        .Information{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin: auto;
    padding-top: 100px;
    padding: 80px 80px;
    background: #1f1d1d;
    background-size: cover;
    font-size: 10px;
}
    </style>
</head>
<div class="cuerpo">  
    
    <?php
        include "base.php";
        include "test.php";
        
        $i=0;
        echo '<br><br><br><br><br><br><br><form action="calification.php" method="post">';
        $rand = range(1, 16);
        shuffle($rand);

    $waiting_day = 1637210196;
    $time_left = $waiting_day - time();

    $days = floor($time_left / (60*60*24));
    $time_left %= (60 * 60 * 24);

    $hours = floor($time_left / (60 * 60));
    $time_left %= (60 * 60);

    $min = floor($time_left / 60);
    $time_left %= 60;

    $sec = $time_left;

    echo "Remaing time: $days days and $hours hours and $min min and $sec sec left";
    
        foreach ($rand as $val ) {
            //se guardan las preguntas utilizadas
            $control[]= $val;
            $i++;

            echo '<br><p class="preg">'.$i.'.-</p>';
            echo '<p class="preg">'.$exam[$val]["question"].'<br><br></p>';
            echo '<input type="radio" name ="r'.$val.'"value="'.$exam[$val]["answerT"].'">'.$exam[$val]["answerT"].'<br>';
            echo '<input type="radio" name ="r'.$val.'"value="'.$exam[$val]["answer2"].'">'.$exam[$val]["answer2"].'<br>';
            echo '<input type="radio" name ="r'.$val.'"value="'.$exam[$val]["answer3"].'">'.$exam[$val]["answer3"].'<br>';
            echo '<input type="radio" name ="r'.$val.'"value="'.$exam[$val]["answer4"].'">'.$exam[$val]["answer4"].'<br>';
            echo "<hr>";
            if($i == 8) break;

        }
        //intento enviar estre array para controlar las preguntas que se utilizaron
        echo '<input type="hidden" name="control" value="'.serialize($control).'">'


    ?>
    <p class="btnenviar"><input type="submit" value="Verificar" style="background-color: #25D366; color:white; border: none; border-radius:4px; transition: transform .2s;" id="enviar"></p>
</form>
<footer>
    <div class="Information">
        <p class="der">© 2022 Develop Talent & Technology.
            Todos los derechos reservados</p>
        <p class="cel">Tel. (55) 6723-7012
            contacto@develop.com.mx</p>
        <p class="aut">Sitio creado por:
            Jimenez Romo Jose Antonio
            Luis Humberto Navarrete Balandrán
            Gandhi Arturo
            Armando Escareño
        </p>
    </div>
</footer>