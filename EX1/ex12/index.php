<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        //capturando os dados do formulário
        $valor11 = $_GET['valor1']??0;
        $valor22 = $_GET['valor2']??0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Valor 1 </label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma: </h2>
        <?php 
        $soma = $valor1 + $valor2;
        print "A soma entre o $valor1 e $valor2 é = $soma";
        ?>
    </section>
</body>
</html>