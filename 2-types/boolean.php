<div class="title">Tipo booleano</div>

<?php
    echo true;// 1
    echo '<br>';
    echo false;// vazio

    echo '<br>';
    echo 'Usando var_dump:<br>';
    echo var_dump(true). '<br>';
    echo var_dump(false). '<br>';
    echo var_dump('false'). '<br>';

    echo 'Is_bool:<br>';
    echo is_bool(false). '<br>';//1 -> true

    //Fazer as regras de conversão
    echo '<p>Regras: </p>';
    echo '<br>'. var_dump((bool) 0);//-> False. Coloca-se entre parentese o tipo e ao lado o valor que deseja converter.
    echo '<br>'. var_dump((bool) 20);//-> true
    echo '<br>'. var_dump((bool) 0.0);//-> false
    echo '<br>'. var_dump((bool) 0.000000001);//-> true
    echo '<br>'. var_dump((bool) "");//-> false
    echo '<br>'. var_dump((bool) " ");//-> true
    echo '<br>'. var_dump((bool) "0");//-> false
    echo '<br>'. var_dump((bool) "00");//-> true
    echo '<br>'. var_dump((bool) "false");//-> true

    echo '<br>';
    echo '<br>'. var_dump(!"string");//-> false
    echo '<br>'. var_dump(!!"string");//-> true