<?php namespace App;

?>
<div class="title">Sub namespace</div>

<?php

echo __NAMESPACE__ . '<br>';
const constant = 123;

/*Criando um sub-namespace*/

namespace App\Content;

echo __NAMESPACE__ . '<br>';
const constant = 456;

namespace App\Content\Specific;

echo __NAMESPACE__ . '<br>';
const constant = 789;

echo constant . '<br>';

/*Acessando outros namespaces */
echo \App\constant . '<br>';
echo \App\Content\constant . '<br>';
echo \App\Content\Specific\constant;