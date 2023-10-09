<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
        $nomee = $_REQUEST["nome"];
        $valordolar = 5.00;
        $resultado = $nomee / $valordolar;
        echo "Valor do real transformado em dolar: $resultado";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>