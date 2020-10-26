<?php namespace context;

/*namespace precisa ser a primeira sentça de código */
?>

<div class="title">Exemplo básico</div>

<?php
echo __NAMESPACE__ . '<br>';

const constant1 = 123;

/*Definindo constante com define em namespace */
define('constant2', 234); //namespace raiz do php

define(__NAMESPACE__ . '\constant2', 1234);
/*definindo constrante em um namespace diferente */
define('other_context\constant3', 456);

echo constant1 . '<br>';
echo constant2 . '<br>'; //1234

echo \constant2 . '<br>'; //acessando o namespace raiz

/*Acessando de outro namespace */

echo \other_context\constant3 . '<br>'; /*sem o \ no começo o php entenderia que eu estaria acessando
um sub namespace dentro do atual*/

function sum($a, $b)
{
    return $a + $b;
}

/*formas de acessar */
echo \context\sum(1, 2) . '<br>';
echo sum(1, 2) . '<br>'; //funciona pois estamos dentro do namespace em que esta função foi definida
