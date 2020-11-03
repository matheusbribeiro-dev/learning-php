<div class="title">Ler arquivo</div>

<?php
$file = fopen('teste.txt', 'r');/*Abrindo em modo de leitura*/
echo fread($file, 10);/*1: arquivo; 2: quantidade de byte que deseja ler*/
echo "<br>";
echo fread($file, 10);
fclose($file);

echo "<hr>";

$file = fopen('teste.txt', 'r');
echo fread($file, filesize('teste.txt'));/*filesize: função que detecta o tamanho(em conteúdo) do arquivo*/
fclose($file);

echo "<hr>";

$file = fopen('teste.txt', 'r');
echo fgets($file);/*Lendo arquivos linha a linha*/
fclose($file);

echo "<hr>";

/*Percorrendo todas as linhas de um arquivo. feof -> final do arquivo*/
$file = fopen('teste.txt', 'r');
while (!feof($file)) {
	echo fgets($file), '<br>';
}
fclose($file);

echo "<hr>";
/*Lendo caractere por caractere*/

$file = fopen('teste.txt', 'r');
while (!feof($file)) {
	echo fgetc($file);/*fgetc ao invés de fgets*/
}
fclose($file);

echo "<hr>";

/*modo de abertura que possibilita leitura e escrita*/
$file = fopen('teste.txt', 'r+');
echo fgets($file), '<br>';
echo fgets($file), '<br>';
// fwrite($file, "\nAdicionado durante a leitura");
fclose($file);