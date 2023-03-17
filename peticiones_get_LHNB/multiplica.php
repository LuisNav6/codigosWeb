<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
        <style>
            div{
                width: 30%;
                border: 2px solid black;
                margin: 0 auto;
                margin-top: 100px;
                padding: 20px;
                background-color: #ececec;
                font-family:'Silkscreen';
                text-align: center;
                line-height: 25px;
            }
            p{
                font-size: 1.5em;
            }
            h1{
                font-family: 'Silkscreen';
            }
        </style>
    </head>
    <body>
        <?php
        echo "<h1>luis navarrete</h1>";
        echo "<div>";
        echo "<h1> tabla del: " . $_GET['num'] . "</h1>";
        $n = $_GET['num'];
        for ($x = 1; $x <= $_GET['hasta']; $x++){
            echo "<p>" . $n . "x" . $x . "=" . $x*$n . "</p>" ;
        }
        echo "</div>";
        ?>
    </body>
</html>