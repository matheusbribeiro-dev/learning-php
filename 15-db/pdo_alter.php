<div class="title">PDO: Alterar</div>

<?php
require_once "pdo_connection.php";

$sql = "UPDATE cadastro
SET nome = :nome,
    nascimento = :nascimento,
    email = :email,
    site = :site,
    filhos = :filhos,
    salario = :salario
WHERE id = :id";

$connection = newConnection();
$stmt = $connection->prepare($sql);

$returnDb = $stmt->execute([
    ':nome' => 'Guilherme',
    ':nascimento' => '1980-12-12',
    ':email' => 'guilherme@gmail.com',
    ':site' => 'http://guilherme.site.com',
    ':filhos' => 2,
    ':salario' => 3000,
    ':id' => 9,
]);

if($returnDb) {
   echo "Sucesso :)"; 
} else {
    print_r($stmt->errorInfo());
}