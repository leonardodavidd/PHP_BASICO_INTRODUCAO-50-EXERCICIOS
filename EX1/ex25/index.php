<?php 
//COMO CRIAR STRING COM REPETIÇÕES CONCATENADAS
$a = str_repeat('oi', 20);
echo($a);
$valor = 100;
echo str_pad($valor, '30', '.', STR_PAD_LEFT);
//COM O comando acima nós colocamos 30 pontos concatenados para posteriormente mostrar o valor da variável
?>