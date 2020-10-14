<div class="title">Constantes PHP</div>

<?php
    const FRUTAS = ["Laranja", "Abacaxi"];

    // FRUTAS[0] = "banana"; erro
    // FRUTAS[] = "banana"; erro

    echo FRUTAS[0];

    const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
    echo "<br>" . CARROS["Fiat"];

    /*Outra forma de definir array em constante */
    define('CIDADES', array('Belo Horizonte', 'Recife'));
    echo '<br>' . CIDADES[1];
