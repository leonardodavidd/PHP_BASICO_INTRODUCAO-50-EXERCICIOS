<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio da calculadora do tempo</title>
</head>
<body>
    <?php 
        $numero1 = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>MAQUINA DO TEMPO</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Qual é o total de segundos ? </label>
        <input type="number" name="num" id="num" value="<?=$numero1?>">
        <input type="submit" value="Calcululadora do tempo">
    </form>
    </main>
    <section>
        <h2>Resultado final</h1>
        <?php
            $sobra = $numero1;
            $totalsemanas = (int) ($sobra / 604_800);
            $sobra = $sobra % 604_800; 
            $totaldias = (int) ($sobra / 86_400);
            $sobra = $sobra % 84_400; 
            $totalhoras = (int) ($sobra / 3_600);
            $sobra = $sobra % 3_600; 
            $totalminutos = (int) ($sobra / 60);
            $sobra = $sobra % 60;
            $segundo = $sobra;

            echo "Total de semanas $totalsemanas , Total de dias $totaldias, Total de horas $totalhoras, Total de minutos $totalminutos, total de segundos $segundo "
        ?>
    </section>
</body>
</html>