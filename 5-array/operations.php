<div class="title">Operações com array</div>

<?php
    /*Outra forma de definir um array -> [] */
    $data1 = [
        "name" => "Jose",
        "age" => 28
    ];

    $data2 = [
        "naturalness" => "Fortaleza"
    ];

    // $data2[] = 'Rua a'; adiciona o elemento na ultima posição do array
    $data2["address"] = "Rua A";/*Adiciona elemento na ultima posição do array
        com índice 'end'
    */

    $dataCompleted = $data1 + $data2;/*Somando dois array e
    armazenando num terceiro array que neste caso é: $dataCompleted */

    echo '<pre>';
        print_r($dataCompleted);

    /*result
        Array(
            [name] => Jose
            [age] => 28
            [naturalness] => Fortaleza
        )
    */

    /*is_array() ->  Verifica se a variável é um array
        fonte: https://www.php.net/manual/pt_BR/function.is-array
    */

    echo '<br>is_array: '. is_array($dataCompleted);/*-> 1 = true*/
    
    /*count();-> Conta o número de elementos de uma variável, ou propriedades
    de um objeto
        fonte: https://www.php.net/manual/pt_BR/function.count
    */
    echo '<br>count($dataCompleted): '. count($dataCompleted);

    echo '<br>';
    /*Obtendo índice de um elemento num array de forma randômica*/
    $index = array_rand($dataCompleted);
    echo "$index = $dataCompleted[$index]";

    echo '<br>';
    echo "{$dataCompleted['age']}";/*É necessário delimitar com chaves para
    interpolar quando se tem [''] depois do array*/

    /*Remover determinado elemento em um array */
    unset($dataCompleted['name']);
    echo '<br>';
    print_r($dataCompleted);

    /*Exemplos */
    $odd = [1, 3, 5, 7, 9];
    $pairs = [0, 2, 4, 6, 8];

    $decimals = $odd + $pairs;/*O elemento a esquerda tem preferência*/
    echo '<br>';
    print_r($decimals); /*Neste caso irá exibir apenas os números pares, pois
    esta soma acontece através dos indices, são arrays diferentes e tem a
    mesma quantidade de elementos, ou seja, possuem os mesmos indices e
    consequentemente o php entende que não tem o que somar*/

    /*Para resolver este problema acima pode-se usar a função array_merge()*/
    $decimals = array_merge($odd, $pairs);/* -> Combina um ou mais arrays
        Leia mais em: https://www.php.net/manual/pt_BR/function.array-merge
    */
    echo '<br>';
    sort($decimals);/*-> Ordena um array.
        leia mais em: https://www.php.net/manual/pt_BR/function.sort
    */
    print_r($decimals);