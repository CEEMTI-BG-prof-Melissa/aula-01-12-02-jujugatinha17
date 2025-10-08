<html>
    <head>
        <title> Aula 07 </title>
    </head>
    <body>
        <h2> Operadores de Atribuição </h2>
        <hr>
        <?php 
            //Valor inicial
            $a=10;
            //mostra o valor inicial 
            echo "O valor inicial é $a";
            echo "<br><br>";
            //soma 5
            $a+=5;
            //mostra o resultado da soma
            echo "Agora A é igual a $a. ";
            echo "<br><br>";
            //subtrai 2
            $a-=2;
            // mostra o resultado da subtração
            echo "Agora A é igual a $a. ";
            echo "<br><br>";
            //multiplica por 3
            $a*=3;
            //mostra o resultado da subtração
            echo "Agora A é igual a $a. ";
            echo "<br><br>";
            //divide por 2
            $a/=2;
            //mostra o resultado da subtração
            echo "Agora A é igual a $a. ";
            echo "<br><br>";
            //insere uma linha de quebra
            echo "<hr>";
            //mostra o valor pré-incremento
            echo "O valor pré-incremento é ".(++$a);
            echo "<br><br>";
            //mostra o valor pós-incremento
            echo "O valor pós-incremento é ".($a++);
            echo "<br><br>";
            //mostra o valor pré-decremento
            echo "O valor pré-decremento é ".(--$a);
            echo "<br><br>";
            //mostra o valor pós-decremento
            echo "O valor pós-decremento é ".($a--);
            echo "<br><br>";
            //mostra o valor final
            echo "O valor final é $a. "
        php/?>
    </body>
</html>


