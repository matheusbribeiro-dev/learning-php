<?php 

function newConnection($db = 'curso_php') {
    $server = '127.0.0.1';//:3306
    $user = 'root';
    $password = '';

    try {
        $connection = new PDO("mysql:host=$server;dbname=$db", $user, $password);
        return $connection;
    } catch (PDOException $e) {
        die('Error: '. $e->getMessage());
    }
}

newConnection();

echo "Fim";