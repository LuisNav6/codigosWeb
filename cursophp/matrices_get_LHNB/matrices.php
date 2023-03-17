<head>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <style>
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
    </style> 
</head>
<?php
function matriz($a,$b,$min,$max){
    for($x=0;$x<$a;$x++)
        for($y=0;$y<$b;$y++)
         $r[$x][$y]=rand($min,$max);
    return $r;
}

$txt='<table border>';
$mat = matriz($_GET['ren'],$_GET['fil'],$_GET['inf'],$_GET['sup']);//envia argumentos
//los arrays en php es altamente recomendado 
//recorrerlos con foreach
foreach($mat as $x){
    $txt.='<tr>';
    foreach($x as $xy){
        if($xy % 2 == 0)
        $txt.='<td style="color:red;">'.$xy.'</td>';
        else
        $txt.='<td style="color:blue;">'.$xy.'</td>';
    }
    $txt.='</tr>';
}
$txt.='</table>';
echo $txt;
?>