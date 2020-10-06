<div class="title">Array</div>

<?php
    /*Leia: https://www.php.net/manual/pt_BR/function.array*/
    $list = array(1, 2, 3.4, "texto");

    /*Forma inadequada de exibir um array */
    echo "$list <br>";

    /*Formas de exibir
        var_dump    
    */
    echo '<pre>';/*
    https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/pre */
        var_dump($list);
    echo '</pre><br>';

    /*print_r*/
    echo '<pre>';
        print_r($list);
    echo '</pre>';

    /*Acessando elementos num array*/
    echo "<br>$list[0]";
    echo "<br>$list[1]";
    echo "<br>$list[2]";
    echo "<br>$list[3]";
    echo "<br>";

    /*Acessando letras de uma frase */
    $text = "Cuidado com acentos pq acessar strings assim com acentos pode não ter bom resultados";
    echo "<br> $text[0]";
    echo "<br> $text[1]";
    echo "<br> $text[2]";

    /*Acessando letras de uma frase da melhor forma*/
    echo '<br>';
    echo mb_substr($text, 12, 1);