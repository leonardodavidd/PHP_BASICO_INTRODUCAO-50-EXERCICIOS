<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício </title>
</head>
<body>
    <h1>exemplo de php: Como pegar as horas exatas de agora ? Atualização automática ? exibir na tela ? veja abaixo:</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " .date("d/M/Y");
    echo "A hora atual é " .date("G:i:s");
    ?>
</body>
</html>