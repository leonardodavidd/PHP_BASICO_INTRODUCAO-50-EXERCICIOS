<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <header>Teste de algumas funções</header>
    <main>
        <?php 
        $nome = abs(-2000);
        print("A resposta é $nome")
        // esta função retorna o valor sem sinal
        ?>
        <?php 
         $r = intdiv(5,2);
         print("A resposta é $r");
         // esta função calcula o valor inteiro
         //da divisão, para calcular o mod basta usar %
        ?>
        <?php 
        $teste = min(5,2);
        print("A resposta é $teste")
        // esta função mostra o menor valor que está dentro do parenteses,para saber qual o maior valor basta usar a função max, PODE USAR QUANTOS VALORES VC QUISER ! 
        ?>
        <?php 
        //SEMPRE QUE VC PRECISAR DO VALOR DE PI E SO USAR ESSA FUNÇÃO:
        $pi = pi();
        print("A resposta é $pi")
        ?>
        <?php 
        // para utilizar potência é só usar **
        $aa = 5 ** 2;
        print("A resposta é $aa")
        ?>
        <?php 
        // vamos calcular raiz quadrada
        // PARA VC CONCATENAR BASTA UTILIZAR . 
        $rr = sqrt(4);
        print("A resposta é $rr");
        ?>
    </main>
</body>
</html>