<div class="title">Atribuição por referência</div>

<?php
    /*
        O PHP também oferece um outro meio de atribuir valores a variáveis:
        atribuição por referência. Isto significa que a nova variável
        simplesmente referencia (em outras palavras, "torna-se um apelido
        para" ou "aponta para") a variável original. Alterações na nova 
        variável afetam a original, e vice versa.

        Para atribuir por referência, simplesmente adicione um e-comercial (&)
        na frente do nome da variável que estiver sendo atribuída (variável de
        origem)

        antes de continuar leia: https://www.php.net/manual/pt_BR/language.references.php
    */
    echo '<p>Por valor</p>';
    $var = 'valor inicial';
    echo $var;
    
    $varValue = $var;/*Atribuição por valor, ou seja, dois espaços na memória
    com valores iguais, porém independentes*/
    echo "<br>$varValue";

    $varValue = 'novo valor';
    echo "<br>$var";
    echo "<br>$varValue";

    echo '<p>Por referência</p>';
    $varReference = &$var;
    $varReference = 'mesma referência';

    echo $var;
    echo "<br>$varReference";