<div class="title">Conversões </div>

<?php
    echo is_int(PHP_INT_MAX);//-> 1 = true. function que verifica se um determinado valor é inteiro ou não

    //int para float
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);/*Ultrapassamos o máximo suportado
    pelos inteiros em php então mesmo que não tenha casas decimais
    esta operação resultará em float*/
    echo '<br>';
    var_dump(1 + 1.0); //float
    echo '<br>';
    var_dump((float) 3);/*Neste caso não se perde a informação
    mas no caso contrário, existe o risco de perder sim*/

    //float para int
    echo '<p>Float para int:</p>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump(intval(2.8, 10));/* intval -> Retorna o valor integer de 2.8,
    usando a base especificada para a conversão (o padrão é a base 10).
    https://www.php.net/manual/pt_BR/function.intval*/
    echo '<br>';

    var_dump((int) round(2.8)); /*Sem o (int) o resultado seria float,
    pois ele faz o arredondamento mas não a conversão de tipos*/

    //Operações com strings:
    echo '<p>Strings: </p>';
    var_dump(3 + "2");// int(5)

    echo '<br>';
    var_dump("3" + 2);

    echo '<br>';
    var_dump("3" . 2);//string(32)

    echo '<br>';
    echo is_string("3" . 2); // 1 = true
    echo is_string("3" + 2); // vazio = false

    echo '<br>';
    var_dump(1 + "cinco");// -> 1. Ignorou após o +

    echo '<br>';
    var_dump(1 + "5 cinco");// -> int(6).
    echo '<br>';
    var_dump(1 + "cinco 5");// -> int(1) = ignorou após o +

    echo '<br>';
    var_dump(1 + "2+5");// -> int(3), ignorou o restante da string

    echo '<br>';
    var_dump(1 + "3.2");// -> float(4.2).

    echo '<br>';
    var_dump(1 + "-3.2e2");// -> float(-319).

    echo '<br>';
    var_dump((int) "10.5");// -> int(10).

    echo '<br>';
    var_dump((float) "10.5");// -> float(10.5).