<?php 

//exemplo de função para calcular idade

$data_nascimento = new DateTime('10-10-1999'); //recebe esta data para realização de cálculos

echo calcular_idade($data_nascimento); //mostrar resultado na tela da função

function calcular_idade($data_nascimento){
    $agora = new Datetime(); //data de hoje
    //calculo dos anos
    if($agora->format('Y') == $data_nascimento->format('Y')){
        //VERIFICA se estamos no mesmo ANO
        $anos = 1;
    } else{
        $anos = $agora->format('Y') - $data_nascimento->format('Y'); //ANO ATUAL - ANO DE NASCIMENTO
    }
    //RESTANTE DAS VALIDAÇÕES
    if($agora->format('m') < $data_nascimento->format('m')){
        $anos--; //se o mês que estamos agora é menor do que a data, temos um decremento
    } elseif($agora->format('m') == $data_nascimento->format('m')){
        //estamos no mês de aniversário
        //vamos verificar se o dia já chegou
        if($agora->format('d') < $data_nascimento->format('d')){
            $anos--;
        }
    }
    return $anos != 1 ? "$anos anos" : "1 ano"; //se anos for diferente de 1, então colocamos que temos X anos, ou então eu faço 1 ano
}

?>