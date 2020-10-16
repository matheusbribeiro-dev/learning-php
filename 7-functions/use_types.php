<div class="title">Usando tipos</div>

<?php   
    function som1($a, $b) {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo som1(1, 2) . "<br>";

    /*Usando tipos*/

    function som2(int $a, int $b) {/*Tipando os valores de entrada na função*/
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo som2(1.2, 2.3) . "<br>";/*Não irá dar erro, pois ele vai converter
    os valores para int */

    function som3($a, $b): int { /*Tipando a saída de dado da função */
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo som3(1.2, 2.3) . "<br>";