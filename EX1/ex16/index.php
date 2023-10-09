<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio media aritmetica e ponderada</title>
</head>
<body>
    <?php 
        $numero1 = $_GET['num'] ?? 1;
        $numero2 = $_GET['num2'] ?? 1;
        $numero3 = $_GET['num3'] ?? 1;
        $numero4 = $_GET['num4'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">nota1</label>
        <input type="number" name="num" id="num" value="<?=$numero1?>">
        <label for="num2">nota2</label>
        <input type="number" name="num2" id="num2" value="<?=$numero2?>">
        <label for="num3">peso nota 1 </label>
        <input type="number" name="num3" id="num3" value="<?=$numero3?>">
        <label for="num4">peso nota 2 </label>
        <input type="number" name="num4" id="num4" value="<?=$numero4?>">
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <h2>Resultado final</h1>
        <?php 
            $total = ($numero1 + $numero2) / 2;
            $total2 = ($numero1 * $numero3 + $numero2 * $numero4) / ($numero3 + $numero4);
            echo "Média aritmética =  $total e Média ponderada =  $total2 "
            
        ?>
    </section>
</body>
</html>