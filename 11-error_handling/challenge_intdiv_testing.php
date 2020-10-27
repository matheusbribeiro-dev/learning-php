<div class="title">Desafio intdiv</div>

<?php
require_once 'challenge_intdiv.php';

use function \Arithmetic\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch (\Arithmetic\notIntegerException $e) {
    echo "Resultado não é um número inteiro<br>";
}

try {
    echo intdiv(8, 0) . '<br>';

} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';