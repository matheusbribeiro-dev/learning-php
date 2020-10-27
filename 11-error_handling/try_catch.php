<div class="title">Try/Catch</div>

<?php
/*QUANDO SE TRATA ERRO COM TRY/CATCH A EXECUÇÃO DO CÓDIGO NÃO SERÁ INTERROMPIDA */

// echo 7 / 0; Não gera erro mas tende ao infinito
//echo intdiv(7, 0); gera erro

/*Como é uma sentença que dará problema, podemos usar o try/catch*/

try { //se usa quando temos dúvidas sobre o retorno da sentança
    echo intdiv(7, 0);
} catch (Error $e) { /* try ou cath individualmente não funciona, deve-se definir os dois.
Em catch é obrigatório definir o tipo que neste caso é 'Error'*/
    echo "Deu erro aqui 1<br>";
} catch (Exception $e) { /*Pode-se ter mais de um catch, mas obviamente com tipos diferentes */
    echo "Teve erro aqui 2<br>";
}

/*try com  exception */

try {
    throw new Exception("Error Processing Request"); /*Exception é um tipo de erro mais 'leve' que 'error'*/
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) { //Erro específico
    echo 'divisão por zero<br>';
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'sempre executado<br>';
}

echo 'Execução continua';