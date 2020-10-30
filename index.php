<?php require_once 'session_permission.php'?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--Title-->
    <title>Curso PHP</title>

    <!--Meta tags-->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!--Links-->
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>

    <!--nav-->
		<nav class="navigation">
      <span class="user">Usuário: <?=$_SESSION['user']?></span>
      <a href="logout.php" class="red">Logout</a>
		</nav>
    <!--//nav-->

    <main class="main">
      <!--div content-->
      <div class="content">
        <?php require_once './menu.php';?>
      </div>
      <!--//div content-->
    </main>
    <footer class="footer">COD3R & ALUNOS © <?=date('Y');?> </footer>
  </body>
</html>
