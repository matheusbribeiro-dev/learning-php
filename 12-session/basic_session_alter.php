<?php
session_start(); /*inicializando sessão */
print_r($_SESSION);
?>

<p>
    <strong>Nome: </strong><?=$_SESSION['name']?>
</p>

<p>
    <strong>Email: </strong><?=$_SESSION['email']?>
</p>

<?php
$_SESSION['email'] = 'mstheusfilho@hotmail.com';
?>

<p>
    <a href="basic.php">Voltar</a>
</p>

<p>
    <a href="basic_session_clean.php">Limpar a sessão</a>
</p>