<?php 
//Vamos escrever 1 valor em cada linha do nosso ficheiro
//permitindo a leitura de frase por frase

$ficheiro = fopen('dados.txt', 'a');
for($i =1; $i <=10; $i++){
    fwrite($ficheiro, "Esta linha contém o valor" .rand(0,100) . PHP_EOL);
}
fclose($ficheiro);
//se executar mais de uma vez os valores são somados
?>