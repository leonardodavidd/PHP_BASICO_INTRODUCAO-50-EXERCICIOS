<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //exemplo de utilização do explode
    $str_nomes = ['joao','leonardo','david','luiz'];
    $nomes = implode('|', $str_nomes);
    echo ($nomes)
    //exemplo acima é de inserção de elementos
    ?>
    <?php
    //exemplos de substituição
    $ab = "texto para teste";
    echo "<br>";
    echo str_replace('te', 'OI', $ab);
    echo "<br>";
    echo str_replace(' ', '-->', $ab);
    //exemplos de exclusão de caracters.
    $cd = "Este texto serve para testar o sistema, banana, chiclete, dedo, estilista";
    $vogais = ['a', 'b', 'c', 'd', 'e'];
    $resultado = str_replace($vogais, "", $cd);
    echo "<br>";
    echo($resultado);
    ?>
    <?php
    //exemplos de exclusão de caracters maiusculos ou minusculos 
    $a = 'Este texto serve para textar o sistema';
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O','U'];
    $b = str_replace($vogais, "", $a);
    echo "<br>";
    echo($b)
    ?>
    <?php
    //exemplo de substituição de caracters 
    $a = 'Este jantar está muito bom';
    $original = ['jantar', 'bom'];
    $novos = ['almoço', 'mau'];
    $final = str_replace($original, $novos, $a);
    echo "<br>";
    echo($final)
    ?>
</body>
</html>