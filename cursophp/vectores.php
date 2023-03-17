<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
        <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
        <title>vectores</title>
        <style>
            .mb-3{
                width: 300px;
            }
            body{
                background-color: #f89b44;
            }
            .form-control{
                background-color: rgb(101, 211, 255);
                font-family: 'Silkscreen';
            }
            .form-label{
                font-family: 'Silkscreen';
            }
            table,td{
            border: 2px solid black;
            margin: 0 auto;
            padding: 20px;
            background-color: #ececec;
            line-height: 25px;
        }
        td{
            padding: 10px;
            text-align: center;
            font-family: 'Silkscreen';
            font-size: 1.5em;
        }
        h1,h2{
            font-family: 'Silkscreen'; 
        }
        </style> 
    </head>
    <body>
    <h1>luis navarrete</h1>
    <h2>FORMULARIO</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
        <form>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tamaño del vector: </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tam" required>
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Límite superior: </label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="sup" required>
         </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Límite inferior: </label>
           <input type="text" class="form-control" id="exampleInputPassword1" name="inf" required>
         </div>
            <button type="submit" class="btn btn-primary" style="font-family: 'Silkscreen';">Enviar</button>
        </form>
    </div>
    </form>
    <?php

    function vec($n,$min,$max){
        for($x=0;$x<$n;$x++)
         $r[$x]=rand($min,$max);
    return $r;
    }

    function promedio($v){
        $numer = $v;
        $suma = 0;
        foreach($numer as $b){
            $suma += $b;
        }
        $cantidad = count($numer);
        $promedio = $suma / $cantidad;
    return $promedio;
    }

    $txt1 = '<table>';
    $txt1.='<tr><td>vector padre</td></tr>';
    $txt1.='</table>';
    echo $txt1;

    $txt = '<table>';
    $vector = vec($_POST['tam'],$_POST['inf'],$_POST['sup']);

    $chico = min($vector);
    $grande = max($vector);

    foreach($vector as $a){
        //$txt.='<tr>';
        $txt.='<td>'.$a.'</td>'; //para que se vea horizontal, si dejamos los tr se verá en vertical
        //$txt.='</tr>';
    }
    $txt.'</table>';
    echo $txt;

    //numero menor
    $txt2 = '<table>';
    $txt2.='<tr><td>Menor</td></tr>';
    $txt2.='<tr><td>'.$chico.'</td></tr>';
    $txt2.='</table>';
    echo $txt2;
    //numero mayor
    $txt3 = '<table>';
    $txt3.='<tr><td>Mayor</td></tr>';
    $txt3.='<tr><td>'.$grande.'</td></tr>';
    $txt3.='</table>';
    echo $txt3;
    //promedio
    $txt4 = '<table>';
    $txt4.='<tr><td>Promedio</td></tr>';
    $txt4.='<tr><td>'.promedio($vector).'</td></tr>';
    $txt4.='</table>';
    echo $txt4;
    //ordenamiento ascendente
    $txt5 = '<table>';
    $txt5.='<tr><td>Ascendente</td></tr>';
    $txt5.='</table>';
    echo $txt5;

    $txt6 = '<table>';
    asort($vector);
    foreach($vector as $c){
    $txt6.='<td>'.$c.'</td>';
    }
    $txt6.='</table>';
    echo $txt6;
   
    //ordenamiento descendiente
    $txt7 = '<table>';
    $txt7.='<tr><td>Descendente</td></tr>';
    $txt7.='</table>';
    echo $txt7;
    
    $txt8 = '<table>';
    arsort($vector);
    foreach($vector as $d){
        $txt8.='<td>'.$d.'</td>';
    }
    $txt8.='</table>';
    echo $txt8;
    
    //revolver 1
    $txt9 = '<table>';
    $txt9.='<tr><td>Shuffle 1</td></tr>';
    $txt9.='</table>';
    echo $txt9;
    
    $txt10 = '<table>';
    shuffle($vector);
    foreach($vector as $e){
        $txt10.='<td>'.$e.'</td>';
    }
    $txt10.='</table>';
    echo $txt10;
    //revolver 2
    $txt11 = '<table>';
    $txt11.='<tr><td>Shuffle 2</td></tr>';
    $txt11.='</table>';
    echo $txt11;
    
    $txt12 = '<table>';
    shuffle($vector);
    foreach($vector as $f){
        $txt12.='<td>'.$f.'</td>';
    }
    $txt12.='</table>';
    echo $txt12;
    //revolver3
    $txt13 = '<table>';
    $txt13.='<tr><td>Shuffle 3</td></tr>';
    $txt13.='</table>';
    echo $txt13;
    
    $txt14 = '<table>';
    shuffle($vector);
    foreach($vector as $g){
        $txt14.='<td>'.$g.'</td>';
    }
    $txt14.='</table>';
    echo $txt14;
    ?>
    </body>
</html>