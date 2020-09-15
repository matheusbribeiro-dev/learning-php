<div class="title">Tipo inteiro</div>

<?php
    /*
        Inteiros:
            Um inteiro é um número do conjunto ℤ = {..., -2, -1, 0, 1, 2, ...}.

        Sintaxe:
            Inteiros podem ser especificados em notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2). O operador de negação pode ser usado para indicar um inteiro negativo.

        Inteiros binários literais estão disponíveis a partir do PHP 5.4.0.

        Para usar a notação octal, preceda o número com um 0 (zero). Para utilizar a notação hexadecimal, preceda o número com 0x. Para utilizar a notação binária, preceda o número com 0b.

        A partir do PHP 7.4.0, inteiros literais podem conter sublinhados (_) entre os dígitos, para melhorar a sua leitura. Estes sublinhados serão removidos pelo scanner do PHP.

        fonte: https://www.php.net/manual/pt_BR/language.types.integer.php
    */
    echo 'Demonstração com valor literal: '. 11;
    echo '<br>';

    var_dump(11);
    echo '<br>';

    echo '<br>';
    echo 'Inteiro máximo suportado por minha máquina: ';
    echo PHP_INT_MAX, '<br>';

    echo 'Inteiro mínimo suportado: ', PHP_INT_MIN, '<br>';

    echo 017, '<br>';//Base octal
    echo 0b110, '<br>'; //Base binária
    echo 0x11fcb; //Hexadecimal