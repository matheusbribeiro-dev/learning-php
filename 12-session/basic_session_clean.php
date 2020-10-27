<?php
session_start();

session_destroy(); /*Destrói uma session */
header('Location: basic.php'); /*Redirecionamento */
/*Não deu de primeira pois não tinha definido a session_start */
