<div class="title">Error Handler</div>

<?php
//echo 4 / 0 . '<br>';

error_reporting(E_ERROR);
// echo 4 / 0 . '<br>';

error_reporting(E_ALL);
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL); //operador bit a bit de negação
echo 4 / 0 . '<br>';

echo '<hr>';

error_reporting(E_ALL);
include 'arq_inexistente.php';

function filterMessage($err, $errString)
{
    $text = 'include';
    // $text = 'by zero';

    return !!stripos(" $errString", $text);
}

set_error_handler('filterMessage', E_WARNING);

echo '<hr>';

echo 4 / 0 . '<br>';
include 'arq_inexistente.php';

restore_error_handler();