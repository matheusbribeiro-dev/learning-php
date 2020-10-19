<div class="title">Recursividade</div>

<?php
    /*Somando determinado número até 1 usando for*/
    function addUpToOne($number) {
        $result = $number;
        $start = $number - 1;

        for($i = $start; $i >= 1; $i--){
            $result += $i;
        }

        return $result;
    }

    echo addUpToOne(5) . '<br>';

    /*Somando de forma RECURSIVA
        Dois pontos fundamentais em recursividade:
            1. Condição de parada.
            2.A quebra de problemas maiores em problemas menores, neste caso
            a função chamando a si diminuindo a complexidade do problema
    */

    function addUpToOneRecursion($number) {
        if($number === 1) {/*Condição de parada*/

            return 1;/*Se $number é igual a 1, teremos a resposta para o
            problema*/
        }

        return $number + addUpToOneRecursion($number - 1);
    }

    echo addUpToOneRecursion(5) . '<br>';

    /*Outras formas de implementação */
    function addRecursionEconomy($number) {
        return $number === 1 ? 1 : $number + addRecursionEconomy($number - 1);
    }

    echo addUpToOneRecursion(5) . '<br>';