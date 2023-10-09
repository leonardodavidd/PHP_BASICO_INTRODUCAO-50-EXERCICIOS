<?php 
    //COMO CONTAR O NÚMERO DE CARACTERS DE UMA STRING
    $a = "frase para testes";
    $comprimento = strlen($a);
    //echo strlen($a); //resultado 17 pq conta os espaços
    $b = '';
    $c = null;
    //quando uma variável é vazia é retornado o valor 0
    //echo strlen($b); // Resultado: 0
    //echo strlen($c); // Resultado : 0
    $sim = true;
    $nao = false;
    echo strlen($sim); // Resultado: 1
    echo strlen($nao); // Resultado: 0
    $numero = 1234;
    echo strlen($numero); // Resultado: 4
    //comando STRLEN só funciona em string, NÃO FUNCIONA EM ARRAY
    $f = "João Ribeiro";
    echo strlen($f); // vai apresentar o valor 13, mesmo contendo 12 caracter
    // para resolver isso basta usar este comando
    echo mb_strlen($f); // com este comando irá aparecer o valor 12
?>