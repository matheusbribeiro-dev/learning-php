<div class="title">Laço For</div>

<?php   
    for($cont = 1; $cont <= 5; $cont++) {
        echo "$cont <br>";
    }

    echo '<hr>';
    for(; $cont <= 10; $cont++) {
        echo "$cont <br>";
    }

    echo '<hr>';
    for(; $cont <= 15;) {
        echo "$cont <br>";

        $cont++;
    }

    /*usando array */
    $array = [
        1 => "Domingo",
        "Segunda",
        "Terça",
        "Quarta",
        "Quinta", 
        "Sexta",
        "Sábado" 
    ];

    print_r($array);
    echo '<hr>';

    for($i = 1; $i <= count($array); $i++) {
        echo "{$array[$i]} <br>";
    }

    $arrayMulti = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    echo '<hr>';
    for($i = 0; $i < count($arrayMulti); $i++) {
        for($j = 0; $j < count($arrayMulti[$i]); $j++) {
            echo "{$arrayMulti[$i][$j]} ";
        }

        echo '<br>';
    }