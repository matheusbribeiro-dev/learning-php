<div class="title">Foreach</div>

<?php
    /*
        O construtor foreach fornece uma maneira fácil de iterar sobre arrays.
        O foreach funciona somente em arrays e objetos, e emitirá um erro ao 
        tentar usá-lo em uma variável com um tipo de dado diferente ou em uma
        variável não inicializada.

        leia mais em: https://www.php.net/manual/pt_BR/control-structures.foreach.php
    */
    $array = [
        1 => "Domingo",
        "Segunda",
        "Terça",
        "Quarta",
        "Quinta", 
        "Sexta",
        "Sábado" 
    ];

    foreach($array as $value) {
        echo "$value <br>";
    }

    echo '<hr>';
    /*Percorrendo o valor e o índice */
    foreach($array as $index => $value) {
        echo "{$index} => {$value} <br>";
    }

    echo '<p>Percorrendo array multidimensional</p>';
    $arrayMulti = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach($arrayMulti as $row) {
        foreach($row as $value) {
            echo $value;
        }
        echo '<br>';
    }

    /*percorrendo por referência e dobrando valores dentro de um array */
    $numbers = [1, 2, 3, 4, 5];
    print_r($numbers);
    echo '<br>';
    
    foreach($numbers as &$double) {
        $double *= 2;
    }
    print_r($numbers);