<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício do sucessor e antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final:</h1>
        <?php 
        $numero1 = $_GET["num"];
        $numero2 = $numero1 - 1;
        $numero3 = $numero1 + 1;
        print("Número escolhido foi <strong>$numero1</strong> " );
        print("<br>Antecessor: $numero2 ");
        print("<br>Sucessor: $numero3 ");
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>