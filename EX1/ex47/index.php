<?php 
//DATETIME - INTERVALO ENTRE 2 DATAS
$data_divida = new Datetime('10-03-1997'); //AQUI ESTÁ A DATA EM QUE A DÍVIDA FOI CRIADA
$agora = new DateTime(); //DATA DE HOJE :)

$intervalo = $data_divida->diff($agora); //AQUI ESTAMOS A VER QUAL A DIFERENÇA DA DATA DE DIVIDA COM A DATA DE HOJE

echo $intervalo->days; // obter o resultado de quantos dias decorreram até o dia em que a dívida foi criada.

//O QUE SIGNIFICA -> EM PHP?
//R:Este é um operador usado para acessar os métodos de um objeto.

print_r($intervalo);//aqui nos mostramos quantos anos,meses,dias,horas,minutos,segundos que se passaram da dívida até hoje

?>