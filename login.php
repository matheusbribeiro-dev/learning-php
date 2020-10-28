<?php
session_start();

$isSetEmail = isset($_POST['email']);
$isSetPassword = isset($_POST['password']);

if ($isSetEmail and $isSetPassword) {
    $users = [
        [
            "name" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "password" => "123456",
        ],
        [
            "name" => "Outro aluno",
            "email" => "outro@email.com.br",
            "password" => "654321",
        ],
    ];

    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        $validEmail = $email === $user['email'];
        $validPass = $password === $user['password'];

        if ($validEmail and $validPass) {
            $_SESSION['errors'] = null;
            $_SESSION['user'] = $user['name'];
            /*Ciando cookie e definido tempo de expiração*/
            $expire = time() + (60 * 60 * 24 * 30);

            /*definindo um cookie*/
            setcookie('user', $user['name'], $expire); /*1: nome do cookie;
            2: valor a ser guardado; 3: tempo de expiração*/
            header('Location: index.php');
        }
    }

    if (!$_SESSION['user']) {
        $_SESSION['errors'] = ['Usuário/Senha inválida!'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--Title-->
    <title>Curso PHP</title>

    <!--Meta tags-->
    <meta charset="UTF-8" />

    <!--Links-->
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>
  <body class="login">
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Seja Bem Vindo</h2>
    </header>
    <main class="main">
      <!--div content-->
      <div class="content">

        <h3>Identifique-se</h3>
        <!--sintaxe alternativa para if -->
        <?php if ($_SESSION['errors']): ?>

          <div class="errors">
            <?php foreach ($_SESSION['errors'] as $error): ?>
              <p><?=$error?></p>
            <?php endforeach?>
          </div>

        <?php endif?>
        <form action="#" method="post">
          <div>
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email">
          </div>

          <div>
            <label for="password">Senha: </label>
            <input type="password" name="password" id="password">
          </div>

          <button>Entrar</button>
        </form>
      </div>
      <!--//div content-->
    </main>
    <footer class="footer">COD3R & ALUNOS © <?=date('Y');?> </footer>
  </body>
</html>
