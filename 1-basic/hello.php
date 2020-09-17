<div class="title">Olá PHP</div>
<h2>Com echo:</h2>
<?php
    /*
    echo: Exibe todos os parâmetros.
        não é uma função atualmente (construtor da linguagem) então não é
        obrigatório usar parênteses. echo (diferente de outro construtor da 
        linguagem) não se comporta como uma função, então ele nem sempre é
        usado no contexto de uma função. Sendo assim, se você quer passar mais
        de um parâmetro para echo, os parâmetros não precisam estar entre 
        parênteses.

        echo também tem um sintaxe curta, onde você pode imediatamente abrir a 
        tag com o sinal de igual.
            Ex: <?= #conteúdoASerImpresso ?>

        fonte: www.php.net/manual/pt_BR
    */
    echo 'Olá ';
    echo 'Mundo!';
?>

<h2>Tag curta de impressão:</h2>
<?="<br>String: Outra forma de imprimir !" ?>
<?= "<br>Operações: 2 + 2 = ",2 + 2 ?>

<?php
    phpinfo();