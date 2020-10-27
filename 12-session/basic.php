<div class="title">Básico sobre sessão</div>

<?php
/*Quando for utilizar sessão, é necessário um session_start */

session_start();

//Array com os dados da sessão
print_r($_SESSION);
echo '<br>';

if (!$_SESSION['name']) {
    $_SESSION['name'] = 'Matheus';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'matheus@hotmail.com';
}

?>

<p>
    <a href="./12-session/basic_session_alter.php">
        Alterar sessão
    </a>
</p>