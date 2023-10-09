<?php 
    $valor = 100;
    echo number_format($valor, 0, null, null);
    echo "<br>";
    echo number_format($valor, 2, ',', null);
    $valor2 = 100.45;
    echo "<br>";
    echo number_format($valor2, 3, ',', null);
    echo "<br>";
    echo number_format($valor2, 1, ',', null);
    echo "<br>";
    $valor3 = 123456.789;
    echo number_format($valor3, 2, ',','.');
    echo "<br>";
    $valor4 = 123.2;
    echo number_format($valor4, 2, ',', null) . '$';
?>
