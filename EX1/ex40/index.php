<?php 

//como ler dados de um arquivo csv, o ficheiro se separa por virgulas, aspas, etc
//Iremos ver um exemplo abaixo

$file = fopen('dados.csv', 'r'); //leitura do ficheiro
$max_lines = 1;
//ler todo conteúdo que está dentro do ficheiro ou uma parte dele
while(!feof($file)){
    //enquanto não chegar no fim (!feof) da conteúdo do $file o comando abaixo será realizado
    $l = fgetcsv($file);
    print_r($l); //atribuir ao $l o resultado da função (fgetcsv), função do php 
    if($max_lines-- == 0){
        //com este exemplo serão carregados 2 linhas do ficheiro
        // == 0 vai ler até o final da linha
        die('terminado');
    }
}
fclose($file); //fechar o nosso ficheiro

?>