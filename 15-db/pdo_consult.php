<div class="title">PDO: Consultar</div>

<?php
require_once "pdo_connection.php";

$connection = newConnection();
$sql = "SELECT * FROM cadastro";

$returnDb = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);/*Tipos de
fetchAll:
PDO::FETCH_NUM = Retorna o array com indices numéricos.
PDO::FETCH_ASSOC = Array associativo
PDO::FETCH_CLASS = retorna os dados em forma de classe
PDO::FETCH_BOTH = Array numérico e associativo(padrão)*/

print_r($returnDb);

echo "<hr>";
//mais exemplos

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";/*limitando a 
quantidade de dados retornados. LIMIT determina a quantidade de dados limite
e o OFFSET determina "por onde começar"*/

$stmt = $connection->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);/*nestes casos é necessário
determinar o tipo*/
$stmt->bindValue(':inicio', 2, PDO::PARAM_INT);

if($stmt->execute()) {
    $returnDb = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($returnDb);
} else {
    echo "Error code: ". $stmt->errorCode();
    print_r($stmt->errorInfo());
}