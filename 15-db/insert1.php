<div class="title">Inserir registro #01</div>

<?php
require_once "connection.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
VALUES (
	'Luziana',
	'1400-05-14',
	'luziana@gmail.com',
	'https://luziana.sites.com.br',
	4,
	50000
)";

$connection = newConnection();
$returnDb = $connection->query($sql);

if ($returnDb) {
	echo "Sucesso :)";

} else {
	echo "Erro: ". $connection->error;
}

$connection->close();