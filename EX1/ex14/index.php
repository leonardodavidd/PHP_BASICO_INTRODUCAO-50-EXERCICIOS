<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?php 
    $minimo = 1000;
    $salario = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Salário</label>
        <input type="number" name="sal" id="sal" value="<?=$salario?>">
        <p>Considerando o salário mínimo de 1000 reais</p>
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <h2>Resultado final</h1>
        <?php 
            $total = intdiv($salario, $minimo);
            $dif = $salario % $minimo;
            
            echo"Ganha $total de salários mínimos + $dif reais"
        ?>
    </section>
</body>
</html>