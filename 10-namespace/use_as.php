<?php namespace Other\Name?>
<div class="title">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

require_once 'use_as_arq.php'; /*Arquivo que contém um namespace */

function sum($a, $b)
{ /*Causando conflito */
    return $a . $b;
}

class ClassTesting
{
    public $var;

    public function func()
    {
        echo (__NAMESPACE__ .
            ' -> ' . __CLASS__ .
            ' -> ' . __METHOD__ . '<br>');
    }
}
echo \Name\The\Big\constant . '<br>';

use const Name\The\Big\constant;
echo constant . '<br>';

/*encurtando o nome */

use Name\The\Big as ctx;

echo sum(1, 2) . '<br>';

echo ctx\sum(1, 2) . '<br>';

/*usando função de outro namespace */

use function Name\The\Big\sum as sumOther; /*setei um apelido pois neste arquivo já existe
uma função com este nome */

echo sumOther(1, 3) . '<br>';

$a = new ClassTesting();
$a->func();

/*Usando class de outro namespace */
$b = new ctx\ClassTesting();
$b->func();