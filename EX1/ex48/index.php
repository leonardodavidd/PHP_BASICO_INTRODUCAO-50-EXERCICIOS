<?php 
//DATETIME - DATEZONE
//SABER CRIAR A DATA DE ACORDO COM O SERVIDOR, OU SEJA, DE ACORDO A QUAL PAÍS

$brasil = new Datetime('now', new DateTimeZone('America/Recife')); //AQUI ESTAMOS A MOSTRAR O HORÁRIO DO BRASIL
$portugal = new Datetime('now', new DateTimeZone('Europe/Lisbon')); //AQUI ESTAMOS A MOSTRAR O HORÁRIO DO BRASIL

echo $brasil->format('d-m-Y H:i:s').PHP_EOL;
echo $portugal->format('d-m-Y H:i:s').PHP_EOL;

//CASO VOCÊ QUEIRA ADICIONAR MINUTOS,HORAS,DIAS,MESES,ANOS, é só utilizar as fórmulas abaixo

//$portugal->modify('+1 minute');
//$portugal->modify('+10 minutes');
//$portugal->modify('+10 hours');
//$portugal->modify('+1 day');
//$portugal->modify('+7 days');
//$portugal->modify('+3 months');
//$portugal->modify('+12 years');
//$portugal->modify('+1 year + 6 months');
//$portugal->modify('+1 hour + 20 minutes');
//$portugal->modify('-1 hour - 20 minutes');


?>