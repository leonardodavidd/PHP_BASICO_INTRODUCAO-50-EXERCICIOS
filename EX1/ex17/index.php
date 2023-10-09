<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio maquina do tempo</title>
</head>
<body>
    <?php 
        $numero1 = $_GET['num'] ?? 0;
        $numero2 = $_GET['num2'] ?? 0;
    ?>
    <main>
        <h1>MAQUINA DO TEMPO</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Informe o ano em que você nasceu</label>
        <input type="number" name="num" id="num" value="<?=$numero1?>">
        <label for="num2">Quer saber a sua idade em que ano ? </label>
        <input type="number" name="num2" id="num2" value="<?=$numero2?>">
        <input type="submit" value="Calcular maquina do tempo">
    </form>
    </main>
    <section>
        <h2>Resultado final</h1>
        <?php 
            $total2 = $numero2 - $numero1;
            echo "Ano de nascimento =  $numero1 e idade que irá estar em $numero2 =  $total2 "
        ?>
    </section>
</body>
</html>