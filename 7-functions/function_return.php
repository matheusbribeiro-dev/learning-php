<div class="title">Retornando função</div>

<?php
    function sum($a) {
        return function($b) use ($a){
            return $a + $b;
        };
    }

    echo sum(3)(3);

    /*Exemplos */
    $twoPlus = sum(2);
    echo '<br>', $twoPlus(10);