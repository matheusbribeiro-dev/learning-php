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
          <!--Module 01-->
          <div class="module green">
            <h3>Básico</h3>
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
              
              <li>
                <a href="exercise.php?dir=1-basic&file=css">
                  Integração CSS
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=1-basic&file=comment">
                  Comentário no PHP
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=1-basic&file=challenge">
                  Desafio
                </a>
              </li>
            </ul>
          </div>
          <!--//Module 01-->

          <!--Module 02-->
          <div class="module red">
            <h3>Tipos</h3>
            <ul>
              <li>
                <a href="exercise.php?dir=2-types&file=int">
                  Tipo inteiro
                </a>
              </li>
              
              <li>
                <a href="exercise.php?dir=2-types&file=float">
                  Tipo float
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=2-types&file=arithmetic">
                  Op. aritméticas
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=2-types&file=challenge_precedence">
                  Desafio precedência
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=2-types&file=string">
                  Tipo string
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=2-types&file=challenge_string">
                  Desafio string
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=2-types&file=boolean">
                  Tipo booleano
                </a>
              </li>

              <li>
                <a href="exercise.php?dir=2-types&file=conversion">
                  Conversões
                </a>
              </li>
            </ul>
          </div>
          <!--//Module 02-->

          <!--Module 03-->
          <div class="module blue">
            <h3>Variáveis</h3>
            <ul>
              <li>
                <a href="exercise.php?dir=3-variables&file=basic">
                  Básico
                </a>
              </li>
            </ul>
          </div>
          <!--//Module 03-->
        </nav>
        <!--//nav modules-->
      </div>
      <!--//div content-->
    </main>
    <footer class="footer">COD3R & ALUNOS © <?= date('Y'); ?> </footer>
  </body>
</html>
