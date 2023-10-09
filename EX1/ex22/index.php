<?php 
    //exemplos de como retirar elementos de uma variável e como retirar espaços de uma variável
    $a = "isto é uma string";
    //echo "$a"; = "isto é uma string"
    //$a = trim($a);
    echo trim($a); //"isto é uma string" // apresenta o texto sem espaços do começo ao fim
    echo ltrim($a); //remove espaço e outros caracter do inicio ao fim da string
    echo rtrim($a); //remove espaço e outros caracter do inicio ao fim da string
    // criando outro parametro para exemplo 
    $b = "abcdef";
    echo trim($b, 'a'); //removemos o elemento A da variável. 
?>