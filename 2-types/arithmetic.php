<div class="title">Operações Aritméticas</div>

<?php
    echo 1 + 1, '<br>';
    var_dump(1 + 1);
    echo '<br>';

    echo 'Soma: ', 1 + 2.5, '<br>';
    echo 'Subtração: ',10 - 2, '<br>';
    echo 'Multiplicação; ',2 * 5, '<br>';
    echo 'Divisão: ',7 / 4, '<br>';//resultado float
    echo 'Módulo: ',7 % 4, '<br>'; //Módulo
    echo 'Exponenciação: ', 4 ** 2, '<br>';//4^(2)

    echo 'Divisão inteira: ', intdiv(7, 4), '<br>';//Forçando resultado inteiro. 
    //https://www.php.net/manual/pt_BR/function.intdiv

    echo 'Arredondamento de valor: ', round(7 / 4), '<br>'; //Arredonda algum valor  
    
    //Precedência de operadores:
    // () => ** => / * % => + -

    echo '<p>Precedência</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
 
