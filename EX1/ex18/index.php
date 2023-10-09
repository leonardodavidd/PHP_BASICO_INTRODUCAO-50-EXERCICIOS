<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
</head>
<body>
    <?php 
        $numero1 = $_GET['num'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
    ?>
    <main>
        <h1>Reajuste de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Informe o preço do produto</label>
        <input type="number" name="num" id="num" value="<?=$numero1?>">
        <label for="num2">Qual será o percentual de ajuste ? (<span id="p">?</span>)%</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" oninput="mudaValor()">
        <input type="submit" value="Reajustar">
    </form>
    </main>
    <?php 
        $aumento = $numero1 * $reaj / 100;
        $novopreco = $numero1 + $aumento;
    ?>
    <section>
        <h2>Resultado final</h1>
        <p>O produto que custava r$ <?=$numero1?>, com o reajuste de <?=$reaj?> passou a custar <?=$novopreco?></p>
    </section>
    <script>
        mudaValor()
        function mudaValor () {
            p.innerText = reaj.value
        }
    </script>
</body>
</html>