<div class="title">Criar tabela</div>

<?php
require_once "connection.php";

$sql = "CREATE TABLE IF NOT EXISTS cadastro (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	nascimento DATE,
	email VARCHAR(100) NOT NULL,
	site VARCHAR(100),
	filhos INT,
	salario FLOAT
)";

$connection = newConnection();
$returnDb = $connection->query($sql);

if ($returnDb) {
	echo "Sucesso :)";

} else {
	echo "Erro: ". $connection->error;
}

$connection->close();