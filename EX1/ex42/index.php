<?php 
//o php permite guardar dados de um array num ficheiro CSV
$dados = [
    ['leo', 'Profissão', 47],
    ['leo', 'Profissão', 47],
    ['leo', 'Profissão', 47],
    ['leo', 'Profissão', 47],
];
$f = fopen('dados.csv', 'w'); //PARA ESCREVER
foreach($dados as $linha){
    //interação entre todos os lados dos ficheiros, cada um dados se tornará uma linha
    fputcsv($f, $linha); //$linha é onde vai guardar a informação, $f escrevemos as informações
}
fclose($f); //PARA FECHAR
//criação do ficheiro, valores separados por virgula, isso é uma tabela
?>