<div class="title">Include em função</div>

<?php
echo 'Carregando: include_in_function<br>';

function arqLoading()
{
    include 'arq-include.php';

    echo $var . '<br>';
    echo sum(2, 5) . '!<br>';
}

arqLoading();

echo "Variável = {$var}<br>"; //undefined

echo 'Novamente no arquivo include_in_function<br>';

echo sum(3, 5); /*A função está disponível mesmo que chamamos o include
dentro do escopo da função*/