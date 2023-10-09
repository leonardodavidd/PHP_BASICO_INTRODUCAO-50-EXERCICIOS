<?php 
//DATETIME

//$data = new DateTime();
//$data->setTime(23,30); //aqui eu declaro as horas e minutos - SEM OS SEGUNDOS.
//$data->setDate(2010,1,7); //aqui estamos a declarar dia, mês, ano
//echo $data->format('d-m-Y H:i:s'); //data,mes,ano / horas,minutos,segundos.

$data = new DateTime('01-01-2000 00:00:00');

//$data->add(new DateInterval('P180D'));; // ADICIONA 180 DIAS
//$data->add(new DateInterval('P12W'));; // ADICIONA 12 SEMANAS
//$data->add(new DateInterval('PT72H'));; // ADICIONA 72 HORAS 

echo $data->format('d-m-Y H:i:s');

//COM ESTE EXEMPLO ACIMA, CONSEGUIMOS ADICIONAR DIAS/SEMANAS/HORAS EM QUALQUER DATA ESPECÍFICA NA QUAL DESEJAMOS.
?>