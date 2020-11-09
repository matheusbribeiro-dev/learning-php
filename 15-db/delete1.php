<div class="title">Excluir registros #01</div>

<?php
require_once "connection.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$connection = newConnection();
$returnDb = $connection->query($sql);

if($returnDb) {
    echo "Sucesso :)";
} else {
    echo "Erro: ". $connection->error;
}

$connection->close();