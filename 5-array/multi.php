<div class="title">Multidimensionais</div>

<?php
    $data = [
        "pessoa1" => [
            "name" => "Roberto",
            "age" => 26,
            "naturalness" => "São Paulo"
        ],
        "pessoa2" => [
            "name" => "Maria",
            "age" => 25,
            "naturalness" => "Bahia"
        ]
    ];

    echo '<pre>';
        print_r($data);
    echo '</pre>';

    echo '<p>Exibindo elementos específicos</p>';

    echo "Idade: {$data['pessoa1']['age']}";
    echo '<br>';
    echo "Idade: {$data['pessoa2']['age']}";

    $data["pessoa3"] = [
        "name" => "Florinda",
        "age" => 30,
        "naturalness" => "Cidade do México"
    ];

    echo '<br>';
    echo '<pre>';
        print_r($data);
    echo '</pre>';

    echo "Idade: {$data['pessoa3']['age']}";

    /*Removendo um elemento - o array não será reordenado*/
    unset($data["pessoa2"]);
    echo '<br>';
    
    echo '<pre>';
        print_r($data);
    echo '</pre>';
    