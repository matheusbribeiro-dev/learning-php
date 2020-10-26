<?php
echo 'Carregando: include_once.php<br>';

$var = 'Estou definida';

if (!function_exists('sum')) {
    function sum($a, $b)
    {
        return $a + $b;
    }
}
