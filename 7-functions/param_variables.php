<div class="title">Parâmetros variáveis</div>

<?php
    function parametersVariables(...$numbers) {
        print_r($numbers);

        $som = 0;
        foreach($numbers as $value) {
            $som += $value;
        }

        return $som;
    }

    echo parametersVariables(2, 2, 2, 2);

    $array = [6, 7, 8];

    echo parametersVariables(...$array);/*equivalente a passar cada numero como
    parâmetro */