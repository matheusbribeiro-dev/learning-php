<div class="title">Variáveis variáveis</div>

<?php
    $a = 'valorA';
    $$a = 'valorAA';/* Isto é o mesmo que pegar o valor de $a e com este valor 
    criar uma variável. $$a = $valorA*/

    echo "$a {$$a} $valorA";/*Sem o {} ele não conseguiria interpretar
    os dois '$$'*/

    echo '<br>';
    $epa = 'opa';
    $opa = 'vix';
    echo "$epa {$$epa}";/*$$epa = variável com valor dentro de $epa.
    Neste caso o php irá procurar uma variável cujo o nome é o mesmo
    que o conteúdo de $epa*/

    //mais exemplos: encadeamento
    $sim = 'nao';
    $nao = 'talvez';
    $talvez = 'confirmo';
    echo "<br>$sim {$$sim} {$$$sim}";// -> nao talvez confirmo