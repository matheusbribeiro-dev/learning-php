<div class="title">Criar banco</div>

<?php
require_once "connection.php";

$connection = newConnection(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$returnDb = $connection->query($sql);

if ($returnDb) {
	echo "Sucesso :)";

} else {
	echo "Erro: ". $connection->error;
}


$connection->close();