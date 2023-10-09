<?php 
//vamos falar sobre arrays - Versão mais básica
//são coleções ordenados de dados
//a definição dos arrays podem ser strings, ou inteiro 0,1,2....
//Não temos em um array indice -1

//a definição de um array pode ser feita de várias formas:
$nomes1 = array('a','b','c');
$nomes2 = ['a','b','c'];
$nomes3[] = 'João';

print_r($nomes3);

$cliente = [
    'nome' => 'Carlos',
    'idade' => 35,
    'profissão' => 'advogado',
];
print_r($cliente); // print_r : Exibe informação sobre uma variável em uma maneira que é legível para humanos.

$cliente1['nome'] = 'Joao';
print_r($cliente1);


?>