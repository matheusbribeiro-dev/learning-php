<div class="title">Desafio recursividade</div>

<?php
    /*
       
    */
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

    function printArray($array, $level = '>') {

        foreach($array as $element) {
            if(is_array($element)) {
                printArray($element, $level . $level[0]);
            } else {
                echo "$level $element<br>";
            }
        }
        
    }

    printArray($array);