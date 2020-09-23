<div class="title">If else</div>

<?php
    /*
        O construtor if é um dos recursos mais importantes em muitas
        linguagens, inclusive no PHP. Permite a execução condicional de
        fragmentos de código.

        Como descrito na seção sobre expressões, expressões são avaliadas por
        seus valores Booleanos. Se uma expressão for avaliada como TRUE, o PHP
        executará a declaração, e se avaliá-la como FALSE - ignorá-la.

        Muitas vezes deseja-se executar uma instrução se uma certa condição for
        válida, e uma instrução diferente se a mesma condição não for válida.
        Para isso que o else serve. O else estende a instrução if para
        executar outras caso a expressão no if retornar FALSE.

        A instrução else só é executada se a expressão de avaliação do if for
        avaliada como FALSE, e se tiver qualquer expressão elseif - somente se
        também retornarem FALSE

        leia mais em: https://www.php.net/manual/pt_BR/control-structures.elseif.php
    */

    if(false) {//false -> não será impresso / true -> será impresso
        echo "serei impresso ?";
        echo "serei impresso novamente ?";
    }

    //if/else
    if(false) {//true -> verdadeiro / -> false -> false
        echo "<br>Verdadeiro";
    } else {
        echo "<br>Falso";
    }

    //elseIF
    if(true) {
        echo '<br>verdadeiro';
    } else if(false) {
        echo '<br>falso';
    } else {
        echo '<br>ultimo';
    }