<?php 
    $voltas = isset($argv[1]) ? $argv[1] : 10;
    for($i=0; $i<=$voltas; $i++){
        echo $i . PHP_EOL;
    }

    $vezes = 10;
    $min = 0;
    $max = 1000;
    for($i=0; $i<$vezes;$i++){
        echo(rand($min, $max));
        echo '<br>';    
    }
    printf("O meu apelido é %s sobrenome é %s", 'joaquim', 'ribeiro');
    $oi = 65;
    echo '<br>'; 
    printf("%b", $oi);
    echo '<br>'; 
    printf("%c", $oi);
    $oi2 = 65.8;
    echo '<br>'; 
    printf("%d", $oi2);
?>