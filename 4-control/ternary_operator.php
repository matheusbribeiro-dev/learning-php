<div class="title">Op. ternário</div>

<?php
    $age = 18;
    $status;

    /*Lógica com 'If'*/
    if($age >= 18) {
        $status = 'Maior de idade';
    } else {
        $status = 'Menor de idade';
    }

    echo "$status<br>";

    /*Com operador ternário
        (https://www.php.net/manual/pt_BR/language.operators.comparison.php)
    */

    $status = $age >= 18 /*expressão*/? 'Maior de idade'/*true*/ : 'Menor de idade'/*false*/;

    echo "$status<br>";