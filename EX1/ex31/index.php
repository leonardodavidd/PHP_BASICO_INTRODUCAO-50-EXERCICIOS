<?php 
    /*
    retorna o resto da string a partir de uma ocorrencia, exemplo abaixo
    */
    $a = "Frase de testes no sistema";
    echo strstr($a, 'de'); //de testes no sistema
    echo "<br>";
    echo strstr($a, 'n');
    /*
    encontrar a posição índice da primeira ocorrencia
    quando tiver acentuação deve se usar mb_strpos()
    PARA achar a posição da ultima ocorrencia da string tem que utilizar strrpos
    */
    $b = "Esta frase serve para testes";
    $pos = strpos($a, 'se'); // 3
    echo ($pos);
    echo "<br>";
    $pos2 = strpos($b, 'se', 10); // 3
    echo "<br>";
    echo ($pos2);
    
    $seila = "Este quarto tem luz";
    echo "<br>";
    $pos4 = strpos($seila, 'T'); //12
    $pos3 = stripos($seila, 'T'); //2
    /*se for usar acentuação deve usar o mb_stripos() ou mb_strripos */
    echo ($pos3);
    echo ($pos4);
?>