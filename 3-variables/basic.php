<div class="title">Variáveis</div>

<?php
    /*As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome
     da variável. Os nomes de variável são case-sensitive.
     https://pt.wikipedia.org/wiki/Case-sensitive

        Nomes de variável seguem as mesmas regras como outros rótulos no PHP.
        Um nome de variável válido inicia-se com uma letra ou sublinhado, 
        seguido de qualquer número de letras, números ou sublinhados.

        Não é necessário inicializar variáveis no PHP, contudo é uma ótima
        prática. Variáveis não inicializadas tem um valor padrão de tipo
        dependendo do contexto no qual são usadas - padrão de booleanos é
        FALSE, de inteiros e ponto-flutuantes é zero, strings são definidas
        como vazia e arrays tornam-se um array vazio.
        
        fonte: https://www.php.net/manual/pt_BR/language.variables.basics.php
    */

    $numberA = 13;//Variáveis em PHP devem obrigatoriamente começar com '$'.
    echo $numberA, '<br>';
    var_dump($numberA);//-> int(13)

    echo '<br>';
    $a = 3;
    $b = 16;
    $sum = $a + $b;
    echo $sum;

    //Verificar se uma variável está 'setada':
    echo '<br>';
    $test = 0;
    echo 'isset: ', isset($sum);//-> 1 = true.

    echo '<br>';
    echo 'isset: ', isset($test);/*-> 1 = true(Neste caso o zero
    não é considerado 'false').*/

    //retirar o valor de uma variável:
    echo '<br>';
    unset($test);// NULL
    echo 'unset: ', $test;//-> vazio = false.

    //Alguns testes:
    $variable = 10;
    echo '<br>' . $variable;
    
    $variable = "Agora sou uma string";
    echo '<br>' . $variable;

    //Nomes de variáveis - é importante usar um padrão, vou utilizar o camelCase 
    $var = 'Válida';
    $var2 = 'Válida';
    $VAR3 = 'Válida';
    $_var_4 = 'Válida';
    //$vâr5 = 'Válida'; Mas evite!!!
    // $6var = 'invalida';
    // $%var7 = 'invalida';
    // $var8% = 'invalida';

    //Variáveis pré definidas(https://www.php.net/manual/pt_BR/reserved.variables.php), exemplo:
    echo '<br>';
    echo '<pre>';//Tag 'pre' dá uma certa estrutura a informação
        var_dump($_SERVER["HTTP_HOST"]);//É um array, por isso exibi desta maneira
    echo '<pre>';

    

    