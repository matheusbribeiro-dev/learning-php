<?php

function newConnection($db = 'curso_php') {
	$server = '127.0.0.1';//:3306
	$user = 'root';
	$password = '';

	$connection = new mysqli($server, $user, $password, $db);

	if ($connection->connect_error) {
		die('Erro: '. $connection->connect_error);
	}

	return $connection;
}