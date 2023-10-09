<?php 
//vamos pegar o texto de uma variável e jogar para dentro de um ficheiro com o exemplo abaixo

$texto = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In commodi asperiores ipsum, nisi eum accusantium dolorem alias molestias. Aspernatur quis voluptatum quibusdam numquam aperiam, temporibus corporis modi praesentium tempora repudiandae?";
file_put_contents('texto_completo.txt', $texto);

//este comando abaixo lêem o conteúdo de um ficheiro para uma variável...
$texto = file_get_contents('texto_completo.txt');
echo $texto //aqui mostramos o resultado na tela
?>