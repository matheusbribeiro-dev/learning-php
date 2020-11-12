<div class="title">PDO: Excluir</div>

<?php
require_once "pdo_connection.php";

$sql = "DELETE FROM cadastro WHERE id = :id";

$connection = newConnection();
$stmt = $connection->prepare($sql);

if($stmt->execute([':id' => 7])) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}