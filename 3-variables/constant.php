<div class="title">Constantes</div>

<?php
    /*
        Uma constante é um identificador (nome) para um valor único.
        Como o nome sugere, esse valor não pode mudar durante a execução do
        script. As constantes são case-sensitive por padrão. Por convenção, 
        identificadores de constantes são sempre em maiúsculas.

        Saiba mais em: https://www.php.net/manual/pt_BR/language.constants.php
    */

    //Definindo constantes
    define('INTEREST_RATE', 5.9);//nome, valor
    echo INTEREST_RATE;

    //outras formas:
    const NEW_RATE = 2.5;
    echo '<br>'. NEW_RATE;

    //testes
    $variableValue = 2.8;
    // const NEW_RATE1 = $variableValue; erro
    define('NEW_RATE1', $variableValue);//Não dá erro
    echo '<br>'. NEW_RATE1;

    const NEW_RATE2 = 1.2 + 2.3;
    echo '<br>'. NEW_RATE2;

    //Algumas constantes do php
    echo '<br>'. PHP_VERSION;
    echo '<br>'. PHP_INT_MAX;

    echo '<br>'. __LINE__;//Imprimindo o número desta linha do código
    echo '<br>'. __FILE__;//path deste arquivo
    echo '<br>'. __DIR__;//diretório atual