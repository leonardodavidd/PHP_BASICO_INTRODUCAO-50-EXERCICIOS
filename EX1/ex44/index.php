<?php
//echo time();
//echo microtime(true);
//DATATIME é atualmente a melhor opção para se utilizar em manipulação de datas em PHP;
//podemos operar com datas e horas, efetuando cálculos e apresentando valores

$agora = new Datetime(); //a variável agora vai receber a data e hora definida, manter a informação estática
echo $agora->format('d-m-Y H:i:s');
echo PHP_EOL;


?>