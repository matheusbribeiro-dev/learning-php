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
  </head>
  <body>
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>
    <main class="main">
      <!--div content-->
      <div class="content">
        <!--nav modules-->
        <nav class="modules">
          <!--Módulo 01-->
          <div class="module green">
            <h3>Módulo 01</h3>
            <ul>
              <li>
                <a href="exercise.php?dir=1-basic&file=hello">
                  Olá PHP
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=1-basic&file=html">
                  Integração HTML
                </a>
              </li>
            </ul>
          </div>
          <!--//Módulo 01-->
        </nav>
        <!--//nav modules-->
      </div>
      <!--//div content-->
    </main>
    <footer class="footer">COD3R & ALUNOS © <?= date('Y'); ?> </footer>
  </body>
</html>
