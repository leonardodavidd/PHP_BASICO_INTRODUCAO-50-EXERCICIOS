<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">número</label>
        <input type="number" name="num" id="num" value="<?=$num?>">
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <h2>Resultado final</h1>
        <?php 
            $total = $num ** (1/2);
            $total2 = $num ** (1/3);
            
            echo"Raiz quadrada =  $total e raiz cubica =  $total2 "
        ?>
    </section>
</body>
</html>