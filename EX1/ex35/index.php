<?php 
//criando pastas em PHP
//para criar uma pasta em PHP usamos a função mkdir
mkdir('pasta1'); //Com este comando nós criamos uma pasta

$ficheiro = fopen('dados1.txt','w'); //o w significa, se o ficheiro não existe crie-o, e se existe apaga tudo
//se quiser acrescentar texto que já se tem no ficheiro utilizar append, ou seja, 'a'
fwrite($ficheiro, 'Primeira Frase'); //inserir estes dados no txt
fwrite($ficheiro, 'Segunda Frase'); //inserir estes dados no txt
fclose($ficheiro); //fechar o ficheiro

//$ficheiro2 = fopen('dados1.txt','a');
//fwrite($ficheiro2, 'Primeira Frase');
//fclose($ficheiro); 

?>