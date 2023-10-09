<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício para verificar parte inteira e fracionária</title>
</head>
<body>
    <main>
        <h1>Verificador de partes inteiras e fracionárias</h1>
        <?php 
        $valor = $_REQUEST["nome"];
        $valorint = (int) $valor;
        $valorfracionado = $valor - $valorint;
        print"A parte inteira do número é <strong>$valorint</strong><br>
        A parte fracionada é <strong>$valorfracionado</strong>"
        ?>
    </main>
</body>
</html>