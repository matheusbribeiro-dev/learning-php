<div class="title">Desafio impressão</div>

<!--
    -imprima valores do array que contem índice par
    -Valores esperados: AAA, CCC, EEE
-->

<?php
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    foreach($array as $key => $value) {
        if($key % 2 !== 0) {
            continue;
        }
        echo "$value <br>";
    }