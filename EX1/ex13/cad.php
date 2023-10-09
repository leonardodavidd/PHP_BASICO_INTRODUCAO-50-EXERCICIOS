<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisão</title>
</head>
<body>
    <main>
        <h1>Realizando Divisão</h1>
        <?php 
        $numero1 = $_REQUEST["n"];
        $numero2 = $_REQUEST["n2"];
        $resultado = $numero1 / $numero2;
        echo "O número divisivel e $numero1 o divisor e $numero2 e o resultado dessa divisão é : $resultado"
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>