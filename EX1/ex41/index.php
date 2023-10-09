<?php 

//carregar todos os dados de um ficheiro de texto diretamente para um array
$paises = file(dirname(__FILE__).'/paises.txt', FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES); //qual é o local onde está o ficheiro
//FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES este comando serve para eliminar os expaços existentes
print_r($paises); //apresentação de cada um dos paises dentro do ficheiro

?>