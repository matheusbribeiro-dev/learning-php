<?php require_once 'session_permission.php'?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--Title-->
		<title>Exercício</title>

		<!--Meta tags-->
		<meta charset="UTF-8" />

		<!--Links-->
		<link
		href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
		rel="stylesheet"
		/>
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/exercise.css" />
	</head>
	<body class="exercise">
		<header class="header">
			<h1>Curso PHP</h1>
			<h2>Visualização do exercício</h2>
		</header>
		<!--nav-->
		<nav class="navigation">
			<span class="user">Usuário: <?=$_SESSION['user']?></span>

			<a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="green">
				Sem formatação
			</a>
			<a href="./index.php">Voltar</a>
			<a href="logout.php" class="red">Logout</a>
		</nav>
		<!--//nav-->
		<main class="main">
			<!--div content-->
			<div class="content">
				<?php include __DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php";?>
			</div>
			<!--//div content-->
		</main>
		<footer class="footer">COD3R & ALUNOS © <?=date('Y');?> </footer>
	</body>
</html>
