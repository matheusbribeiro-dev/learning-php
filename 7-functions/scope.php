<div class="title">Função & Escopo</div>

<?php
    function printMessage() {
        echo "Olá ";
        echo "Até a próxima ! <br>";
    }

    printMessage();

    $var = 1;

    function changeValue() {
        $var = 2;
        echo "Durante a função $var <br>";
    }

    echo "Antes: $var <br>";
    changeValue();
    echo "Depois: $var <br>";/*Não mudou, pois apesar do  nome ser igual
    são variáveis de escopo diferente*/

    echo "<hr>";
    /*Como acessar a var desejada ? use a palavra reservada 'global' */
    function changeValueTrue() {
        global $var;
        $var = 3;

        echo "Durante a função: $var <br>";
    }

    echo "Antes: $var <br>";
    changeValueTrue();
    echo "Depois: $var <br>";