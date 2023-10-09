<?php 

$ficheiro = fopen('dados.txt', 'r'); //o r serve para ler o txt, no caso estou inserindo um txt que já foi criado dentro da pasta
while(!feof($ficheiro)) {
    // !feof significa enquanto o fim for false, irá realizar o comando abaixo
    echo fgets($ficheiro);
}
fclose($ficheiro); //se a condição for true irá cair aqui, ou seja, se tiver acabado a lista irá mostrar o resultado
?>

