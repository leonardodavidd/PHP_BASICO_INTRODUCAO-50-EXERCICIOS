<?php 
//exemplo de verificação se existe uma string dentro da outra
$a = 'Esta e uma frase para exemplo';
// str_contains - verifica se existe uma string dentro da outra
$b = 'para';
if(str_contains($a, $b)){
    echo 'sim';
} else{
    echo 'não';
}
echo '<br>';

$c = 'USA';
if(str_contains($c, $a)){
    echo 'sim';
}
else{
    echo 'não';
}
// para descobrir se uma string começa ou acaba com uma determinada string
// utilizamos a função str_ends_with() e str_starts_with()
if (str_starts_with($a, 'E')){
    echo '<br>';
    echo 'sim';
} else{
    echo '<br>';
    echo'não';
}
if (str_ends_with($a, 'p')){
    echo '<br>';
    echo 'sim';
}else {
    echo '<br>';
    echo 'não';
}
?>