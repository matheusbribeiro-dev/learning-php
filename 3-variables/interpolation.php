<div class="title">Interpolação</div>

<?php
    $number = 10;
    echo $number;

    echo '<br>Sem aspas duplas: $number';
    echo "<br>Com aspas duplas: $number";

    //Exemplos:
    $text = "A sua nota é : $number";
    echo "<br>$text";

    $objeto = 'caneta';
    echo "<br>Eu tenho 5 $objetos";
    //Desejo add um 's' no final. para isso use: {}
    echo "<br>Eu tenho 5 {$objeto}s";
