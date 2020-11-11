<div class="title">PDO: Inserir</div>

<?php
require_once "pdo_connection.php";

$sql = "INSERT INTO cadastro 
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guilherme Filho',
    'guidagalera@gmail.com',
    '1999-7-21',
    'https://guidagalera.com.br',
    0,
    3000
)";

$connection = newConnection();
//print_r(get_class_methods($connection));

if($connection->exec($sql)) {
    $id = $connection->lastInsertId();/*pegando o valor do id na últma inserção
    no banco*/

    echo "Novo cadastro - id = $id.";
} else {
    echo $connection->errorCode() . "<br>";

    print_r($connection->errorInfo());
}

$connection = null;