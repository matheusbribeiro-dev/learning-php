<div class="title">Comparação</div>

<?php   
    $array1 = ["name" => "Maria", "age" => 20];
    $array2 = ["name" => "Maria", "age" => 20];

    /*Comparação básica */
    var_dump($array1 == $array2);
    var_dump($array1 === $array2);

    $array3 = ["age" => 20, "name" => "Maria"];
    echo '<br>';

    var_dump($array1 == $array3);
    var_dump($array1 === $array3);

    echo '<br>';
    $array4 = ["age" => '20', "name" => "Maria"];
    var_dump($array1 == $array4);
    var_dump($array1 === $array4);