<?php
error_reporting(~E_NOTICE);
session_start();
/*Usando os cookies definidos */
if ($_COOKIE['user']) {
    $_SESSION['user'] = $_COOKIE['user'];
}

if (!$_SESSION['user']) {
    header('Location: login.php');
}
