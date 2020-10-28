<?php
session_start();
session_destroy();
/*Limpando o cookie */
unset($_COOKIE['user']);
setcookie('user', '');
header('Location: login.php');
