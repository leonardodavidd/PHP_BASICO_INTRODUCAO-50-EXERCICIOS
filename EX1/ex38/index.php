<?php 
//vamos ler dados de um ficheiro e armazenar em outro ficheiro
$origem = fopen('tessste.txt','r'); //aqui estamos a ler o conteúdo do txt com o comando 'r'
$destino = fopen('dadosfinais.txt', 'w'); //aqui estamos a escrever o conteúdo do outro txt neste txt

//agora vamos ler a variável origem e gravar na variável destino
while(!feof($origem)){
    //enquanto não chegar no fim (!feof) da conteúdo da origem o comando abaixo será realizado
    fwrite($destino, fgets($origem)); //aqui estamos escrevendo em destino os conteúdos de origem
}
//agora iremos fechar
fclose($origem);
fclose($destino);
//percebe-se que, ao executar o programa, escrevemos todos os conteúdos de um txt em outro txt que acabamos de criar
?>