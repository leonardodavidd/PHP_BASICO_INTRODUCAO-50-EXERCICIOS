<?php 
$localizacao = 'da sala';
$total_pessoas = 123;
echo sprintf("Existem %s pessoas dentro %s", $total_pessoas, $localizacao);
echo '<br>'; 
echo sprintf("Existem %d pessoas dentro %s", $total_pessoas, $localizacao);
echo '<br>'; 
echo sprintf('Dentro %2$s foram encontrados %1$d pessoas', $total_pessoas, $localizacao);
echo '<br>'; 
echo sprintf('Dentro %2$s foram encontradas %1$d. %1$d é a capacidade máxima %2$s', $total_pessoas, $localizacao);
echo '<br>'; 
echo sprintf("Capacidade:%'-10d", $total_pessoas);
echo '<br>'; 
echo sprintf('Dentro %2$s estão %1$08d pessoas', $total_pessoas, $localizacao)
?>