<div class="title">Require & Return</div>

<?php

$returnVar = require 'return_use.php';

echo "$returnVar<br>";
echo "$varReturn<br>"; /*Também consigo acessar as variáveis definidas sem que sejam retornadas*/

echo __DIR__ . '<br>'; //constante que armazena o path do arquivo atual

$returnVar2 = require __DIR__ . '/return_none_use.php';

echo "$returnVar2<br>"; // 1 = true. Ou seja, o arquivo existe
echo "$definedVar<br>";
