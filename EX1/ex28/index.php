<?php
//COMO MOSTRAR ELEMENTOS DE UMA VARIÁVEL
$a = 'Esta é uma frase para testes';
$b = substr($a, 5, 10);
echo($b);
echo '<br>';
$c = mb_substr($a, 0, 3); // com este comando só e mostrado do valor 0 da variavel até o valor 2
echo($c);
echo '<br>';
$d = mb_substr($a, 10); // só e mostrado os valores após o valor 10 da variavel até o final
echo($d);
echo '<br>';
$e = mb_substr($a, -4, 2);  
echo($e);
echo '<br>';
$f = mb_substr($a, -4); 
echo($f);
echo '<br>';
$g = mb_substr($a, 8, -3); 
echo($g);
echo '<br>';
$f = mb_substr($a, 5); 
echo($f);
echo '<br>';
?>