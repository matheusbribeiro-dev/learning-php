<div class="title">Tipo string</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump("Eu também");//var_dump exibe infos sobre determinado parâmetro
    echo '<br>';

    //Concatenação
    echo "Nós também" . ' somos';
    echo '<br>';
    echo "Também aceito", " vírgulas";
    echo '<br>';

    print("Existe também a função 'print' para impressão");
    echo '<br><br>';

    //Algumas funções:
    echo strtoupper('maximizado') . '<br>';//Função que deixa as letras maiúsculas.
    echo strtolower('MINIMIZADO') . '<br>';//Função que deixa as letras minusculas.
    echo ucfirst("só a primeira letra") . '<br>';
    echo ucwords("a primeira letra de cada palavra") . '<br>';
    echo '<br>';

    echo strlen("Quantas letras ?");
    echo '<br>';
    echo mb_strlen("Eu também", "utf-8"); //Definindo o encoding para não ter problemas na contagem.
    
    echo '<br>';
    echo substr("Só uma parte mesmo", 7,6);//substr($string, $start, $end)

    echo '<br>';
    echo str_replace('isso', 'aquilo', 'Trocar isso');
