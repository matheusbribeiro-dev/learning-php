<div class="title">Desafio index</div>

<?php
    $list = array(
        1,
        4 => 2,
        3 => 3,
        'a' => 4,
        5,
        '9' => 6,
        '06' => 7,
        0 => 8
    );

    /*resposta:
        0 -> 8
        4 -> 2
        3 -> 3
        a -> 4
        5 -> 5
        9 -> 6
        06 -> 7
    */

    echo '<pre>';
        print_r($list);
    echo '</pre>';