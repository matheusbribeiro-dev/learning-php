<div class="title">Tipo inteiro</div>

<?php
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