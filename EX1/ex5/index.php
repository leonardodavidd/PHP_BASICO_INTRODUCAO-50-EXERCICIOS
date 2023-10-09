<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizando constante</title>
</head>
<body>
    <?php 
    $nome = "Leonardo";
    $sobrenome = "David";
    const pais = "Brasil";

    echo "Muito prazer, $nome $sobrenome ! Você mora no " .pais ;

    $v = 300;
    echo "Testando o tipo primitivo " , var_dump($v);

    $testecoercao = (integer) 3.20; 
    echo"Testando coercao " , var_dump($testecoercao);

    $testeboleano = true; 
    echo"Teste boleanos: ", var_dump($testeboleano);

    $testedevetor= [6,2,5,8,9, "LEOZIN", false];
    echo "teste vetor "; var_dump($testedevetor)


    ?>
</body>
</html>
