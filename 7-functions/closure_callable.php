<div class="title">Closure e Callable</div>

<?php
    /*Ao definir uma função anônima, internamente o php insere esta função numa classe*/
    $som1 = function ($a, $b) {
        return $a + $b;
    };

    echo $som1(2, 3) . '<br>';
    echo (is_callable($som1) ? 'Sim': 'Não') . '<br>';

    $som1 = 1;
    echo (is_callable($som1) ? 'Sim': 'Não') . '<br>';

    var_dump($som1);