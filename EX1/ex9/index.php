<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de gerar números aleatórios...</title>
</head>
<body>
    <main>
        <h1>vamos gerar números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo"gerando um número aleatório entre $min e $max ...<br>
            O valor gerado foi <strong>$num</strong>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>