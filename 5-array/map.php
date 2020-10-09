<div class="title">Mapa</div>

<?php
    $data = array(
        /*chave => valor. A chave neste caso substitui os índices */
        "age" => 25,
        "color" => "green",
        "weight" => 49.8 
    );

    echo '<pre>';
        print_r($data);
    echo '</pre>';

    echo '<p>Como acessar especificamente</p>';

    echo "{$data['age']} <br>";
    echo "{$data['color']} <br>";
    echo "{$data['weight']} <br>";

    /*Adicionando elementos */
    $newArray = array(3, 4, 5);

    $newArray[] = 6;/*Add na ultima opção */

    /*Com chave/valor */
    $newArray["quatro"] = 7;

    echo '<br>';
    print_r($newArray);