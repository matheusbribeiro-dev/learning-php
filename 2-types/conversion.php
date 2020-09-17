<div class="title">Conversões </div>

<?php
    echo is_int(PHP_INT_MAX);//-> 1 = true. function que verifica se um determinado valor é inteiro ou não

    //int para float
    echo '<br>';
    echo var_dump(PHP_INT_MAX + 1);/*Ultrapassamos o máximo suportado
    pelos inteiros em php então mesmo que não tenha casas decimais
    esta operação resultará em float*/