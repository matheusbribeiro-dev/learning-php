<div class="title">Tipo Float</div>

<?php
    /*
        Números de ponto flutuante (também conhecidos como "floats", "doubles" ou "números reais")

        Consulte a doc para saber um pouco mais: 
            https://www.php.net/manual/pt_BR/language.types.float.php
    */
    echo 'Valores literais.';
    echo '<br>';

    echo 1.1, '<br>';
    var_dump(1.1);
    echo '<br>';

    echo 'Valor máximo suportado em float: ', PHP_FLOAT_MAX;
    echo '<br>';
    echo 'Valor mínimo: ', PHP_FLOAT_MIN, '<br>';

    echo 1.2e3, '<br>'; //Usando notação 'e': (1.2 * 10)^(3) -> 1200
    echo 13E-3;// 0.013

