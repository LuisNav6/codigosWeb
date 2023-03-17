<?php
    $exam = array(
    "1" => array
        (
            "question"=>" ¿En qué lugar se ejecuta el código PHP?",
            "answerT"=>" Servidor",
            "answer2"=>" Cliente (ordenador propio)",
            "answer3"=>" Terminal",
            "answer4"=>" En la nube"

        ),
    "2" => array
        (
            "question"=>" ¿Cuáles de estas son marcas para la inserción del código PHP en las páginas HTML?",
            "answer2"=>" < php >< /php >",
            "answerT"=>" < ? y ? >",
            "answer3"=>" <# y #>",
            "answer4"=>" <> </>"
        ),
    "3" => array
        (
            "question"=>" ¿En qué atributo de un formulario especificamos la página a la que se van a enviar los datos del mismo?",
            "answer2"=>" name",
            "answer3"=>" file",
            "answerT"=>" action",
            "answer4"=>" description"
        ),

    "4" => array
        (
            "question"=>" ¿Cuál de estas instrucciones está correctamente escrita en PHP?",
            "answer2"=>" if (a=0) print a",
            "answer3"=>" if (a==0) { echo ok }",
            "answerT"=>" if (a==0) echo “hola mundo”;",
            "answer4"=>" if (a==0): print a;"
        ),
    "5" => array
        (
            "question"=>" ¿Cuál de estas instrucciones PHP imprimirá por pantalla correctamente el mensaje “Hola Mundo” en letra negrita?",
            "answer2"=>" print < strong >Hola Mundo < /strong>;",
            "answer3"=>" print (< strong>Hola Mundo< /strong>);",
            "answerT"=>' print ("< strong>Hola Mundo < /strong>");',
            "answer4"=>" print (<b>Hola mundo</b>);"
        ),
    "6" => array
        (
            "question"=>" Dos de las formas de pasar los parámetros entre páginas PHP son:",
            "answer2"=>" Require e Include",
            "answer3"=>" Get y Put",
            "answerT"=>" Post y Get",
            "answer4"=>" Into e Include"
        ),
    "7" => array
        (
            "question"=>" ¿Cuál de estas instrucciones se utiliza para realizar una consulta a una base de datos MySQL?",
            "answer2"=>" mysql_access",
            "answerT"=>" mysql_query",
            "answer3"=>" mysql_db_access",
            "answer4"=>" mysql_server_login"
        ),
        
    
    "8" => array
        (
            "question"=>" Un array es...",
            "answer2"=>" Un conjunto de caracteres alfanuméricos",
            "answer3"=>" Un sistema para convertir una variable de texto en un número",
            "answerT"=>" Un conjunto de elementos",
            "answer4"=>" Una caja de datos ordenados ascedentemente"
        ),
        
    
    "9" => array
        (
            "question"=>" ¿Cómo se define una variable de tipo string en PHP?",
            "answer2"=>" char str;",
            "answer3"=>" string str;",
            "answerT"=>" En PHP no se define el tipo de las variables explícitamente",
            "answer4"=>" Varchar str;"
        ),
        
    "10" => array
        (
            "question"=>" Tenemos el siguiente código: \$a=”10”; \$b=\$a + 2; ¿Cuál será el valor de \$b?",
            "answer2"=>" \"12\"",
            "answerT"=>" 12",
            "answer3"=>" \"102\"",
            "answer4"=>" Ninguno (no se puede sumar un número a una cadena)"
        ),
        
    "11" => array
        (
            "question"=>" ¿Para qué sirve el siguiente código?: if (isset(\$variable)){} ",
            "answer2"=>" Recorre un array de nombre \$variable",
            "answer3"=>" Crea una variable de nombre \"\$variable\"",
            "answerT"=>' Verifica si la variable "$variable" está definida y tiene un valor no nulo',
            "answer4"=>" Ninguna de las anteriores"
        ),
    
    "12" => array
        (
            "question"=>" ¿Con qué símbolo se debe empezar el nombre de una variable en PHP?",
            "answer2"=>" =",
            "answer3"=>" ==",
            "answerT"=>' $',
            "answer4"=>" //"
        ),

    "13" => array
        (
            "question"=>" ¿Con qué símbolo se debe envolver un valor numérico en una variable?",
            "answer2"=>" \\\\",
            "answer3"=>" \/**/",
            "answerT"=>' Ninguno, sólo se escribe el número',
            "answer4"=>" ="
        ),
    "14" => array
        (
            "question"=>" ¿Cuál de las siguientes variables está declarada de forma correcta?",
            "answer2"=>" edad = 25;",
            "answer3"=>' edad = "25"',
            "answer4"=>' $edad == 25;',
            "answerT"=>' $edad = 25;'
        ),
    "15" => array
        (
            "question"=>" ¿Cuáles son operadores relacionales?",
            "answerT"=>" +, -, *, /, %, ++, --",
            "answer3"=>" <, >, <=, >=, ==, !=",
            "answer2"=>' &&, ||, and, or, !',
            "answer4"=>" $, &, //, /* */, { }"
        ),
    "16" => array
        (
            "question"=>" ¿Cuál de las siguientes variables ha sido declarada en forma incorrecta?",
            "answer2"=>' $alumnos = 50;',
            "answer3"=>' $5alumnos = 50;',
            "answerT"=>' $_alumnos = 50;',
            "answer4"=>' $alumnos_clase = 50;'
        ),
    );

?>