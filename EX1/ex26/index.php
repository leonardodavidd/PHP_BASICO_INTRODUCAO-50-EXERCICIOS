<?php 
//EXEMPLO COM STRINGS CONCATENADAS
echo '<pre>';
$valores = [100,101,102,103];
foreach($valores as $valor){
    echo str_pad($valor, '30', '.', STR_PAD_LEFT) . '<br>';
}
?>