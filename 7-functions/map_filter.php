<div class="title">Map & Filter</div>

<?php
    $grades = [5.8, 7.3, 9.8, 6.7];
    $endGrades = [];

    /*Com foreach */
    foreach($grades as $value) {
        $endGrades[] = round($value);
    }

    print_r($endGrades);
    echo '<br>';

    /*Usando Map:*/
    $endGrades2 = array_map(round, $grades);/*Primeiro parâmetro: função.
    Segundo: array*/

    echo "<span>Map: </span>";
    print_r($endGrades2);
    echo '<br>';

    /*Percorrendo e fazendo teste lógico. Com foreach:*/
    foreach($grades as $element) {
        if($element >= 7) {
            $onlyApproved[] = $element;
        }
    }

    print_r($onlyApproved);

    /*Com filter */
    function approved($value) {
        return $value >= 7;
    }

    echo '<br>';
    $onlyApproved2 = array_filter($grades, approved);/*Primeiro parâmetro:
    ARRAY. Segundo: FUNÇÃO*/

    echo "<span>Filter: </span>";
    print_r($onlyApproved2);
    
