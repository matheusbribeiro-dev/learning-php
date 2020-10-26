<?php namespace context;

/*namespace precisa ser a primeira sentça de código */
?>

<div class="title">Exemplo básico</div>

<?php
echo __NAMESPACE__ . '<br>';

const constant1 = 123;

/*Definindo constante com define em namespace */
define('context\constant2', 234);