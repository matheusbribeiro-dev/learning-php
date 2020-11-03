<div class="title">Escrever arquivo</div>

<?php

$file = fopen('teste.txt', 'w');/*Abrindo arquivo que não existe. Ele irá criar*/
fwrite($file, "Valor inicial \n");

$str = "Segunda linha\n";
fwrite($file, $str);

/*Se abrimos o arquivo é preciso fechar*/
fclose($file);

/*Abrindo novamente e inserindo conteúdos. Serão sobreescritos*/
$file = fopen('teste.txt', 'w');
fwrite($file, "Novo conteúdo");
fclose($file);

/*Abrindo no modo append, ou seja adicionar novas linhas*/
$file = fopen('teste.txt', 'a');
fwrite($file, "com novos valores\n");
fwrite($file, "Adicionados em um segundo momento\n");
fclose($file);

/*Garantindo que abriremos um arquivo novo, ou seja que ainda não existe mas que criaremos*/
// $file = fopen('teste.txt', 'x');
/*Vai dar erro, pois este arquivo existe*/