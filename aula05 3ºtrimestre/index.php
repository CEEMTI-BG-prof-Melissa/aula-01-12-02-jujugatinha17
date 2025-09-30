<html>
    <head><title>Aula 05</title></head>
    <body>
        <?php
        $n1= 2;
        $n2= $_GET["x"];

        echo "Os valores são $n1 e $n2. <br><br>";
        echo "O valor absoluto de $n1 é" .abs($n1);
        echo "<br><br>O número $n2 <sup> $n1 </sup> é igual a " .pow($n2, $n1);
        echo "<br><br>A raiz quadrada de $n2 é igual a " .sqrt($n2);
        echo "<br><br> O $n2 arredondado é igual a " .round($n2);
        echo "<br><br> O $n2 arredondado é igual a " .ceil($n2);
        echo "<br><br> O $n2 arredondado é igual a " .floor($n2);

        echo"<br><br><br>";
        echo "A parte inteira de $n2 é igual a " .intval($n2);
        echo"<br><br>";
        echo "Um pirulito custa R$".number_format($n1, 2);

        ?>
    </body>
</html>
