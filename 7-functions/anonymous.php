<div class="title">Funções anônimas</div>

<?php
    $som = function ($a, $b) { return $a + $b; };/*Variável recebendo função */

    echo $som(1, 2) . '<br>';

    /*Passando função como parâmetro para outra função */
    function exe($a, $b, $op, $function) {
        $result = $function($a, $b);

        return "$a $op $b = $result<br>";
    }

    echo exe(2, 3, '+', $som);

