<div class="title">Include vs Required</div>

<?php
//ini_set('display_errors', 1); exibe os erros. Use caso os erros não estiverem aparecendo

echo 'Usando include com arquivo inexistente...<br>';
include 'arq_absent.php'; /*Warning. Porém a renderização não será interrompida */

echo 'Usando require com arquivo inexistente...<br>';
require 'arq_absent.php'; /*Diferente do include o require gera um erro fatal caso o arquivo
requerido não exista, ou seja, a renderização será interrompida*/

echo 'Não exibe<br>';