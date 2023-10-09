<?php 
    $dados = [
        ['joao', 'M', 'Portugal'],
        ['pedro', 'M', 'Jamaica'],
        ['natan', 'M', 'Eua'],
        ['henrique', 'M', 'Brasil'],
    ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <table border = "5">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Genero</th>
            <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $item): ?>
                <tr>
                    <td><?= $item[0]?></td>
                    <td><?= $item[1]?></td>
                    <td><?= $item[2]?></td>
                </tr>
            <?php endforeach;?>
        </tbody>

    </table>
</body>
</html>