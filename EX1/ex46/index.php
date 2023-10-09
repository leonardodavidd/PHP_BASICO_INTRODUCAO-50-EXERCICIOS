<?php 

//DATETIME - criar uma data a partir de um formato

$datas = [
    '21-10-1998',
    '12-09-1996',
    '01-07-2001',
    '08-12-2005',
    '22-11-1987',
];

//VAMOS FAZER ASSIMILAÇÕES OK! usando método ESTATÍSTICO :)

foreach($datas as $data){
    $d = Datetime::createFromFormat('d-m-Y', $data); //createFromFormat MÉTODO ESTÁTICO
    $d->add(new DateInterval('P180D'));//adicionar 180 dias EM CADA DATA DO VETOR
    echo $d->format('Y-m-d').PHP_EOL;//mostrar resultado na tela/terminal.
}

?>