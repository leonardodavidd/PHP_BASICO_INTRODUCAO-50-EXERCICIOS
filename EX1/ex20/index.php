<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio do for e do if else</title>
</head>
<body>
    <?php 
    for($i = 0; $i <10; $i++){
        echo"$i";
    }
    ?>
    <?php 
    $apresentar = false;
    ?>
    <?php 
    if($apresentar == true){
        echo'<p>Mostrar este paragrafo</p>';
    }
    else{
        echo'acho que não';
    }
    ?>
</body>
</html>