<div class="title">Atribuições</div>

<?php
    $title = 'Atribuições';
    $number = 1000;

    //Decremento
    //(pode ser feito assim: --$number; também)

    $number--;//-> $numero = $numero - 1;
    echo '<br>' . $number;
    
    //Incremento - ++$number(tb é aceito)
    $number++;//-> $number = $number + 1;
    echo '<br>' . $number;

    //Operações
    $number -= 1; // ->$numero = $numero - 1;
    echo '<br>' . $number;

    $number += 1.5;
    echo '<br>' . $number;

    $number *= 10;
    echo '<br>' . $number;

    $number /= 2;
    echo '<br>' . $number;

    $number %= 2;
    echo '<br>' . $number;

    $number **= 2;
    echo '<br>' . $number;
    
    //Com strings
    $text = 'Essa é uma string';
    echo '<br>' . $text;
    
    $text = $text . ' qualquer';
    echo '<br>' . $text;
    //ou
    $text .= ' de verdade';
    echo '<br>' . $text;

    //Atribuir valores default
    // $nonexistentVariable = 'Valor inexistente';

    $value = $nonexistentVariable ?? 'Valor default';/*Ou seja, se
    $nonexistentVariable não existir a variável $value assumirá o valor
    presente depois do '??' que neste caso é 'valor default'*/
    echo '<br>Valor de $value: ' . $value;