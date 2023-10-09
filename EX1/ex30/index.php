<?php 
    //str_split
    $a = "frase de testes";
    $b = str_split($a,3);
    /*
        separa a frase de 3 em 3 : fra, se , de, tes, tes
    */
    /*
        se tiver caracters acentuados usar a função abaixo
    */
    $c = "frase para teste operação";
    $d = mb_str_split($c,3);

?>