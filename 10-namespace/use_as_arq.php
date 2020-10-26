<?php
namespace Name\The\Big;

echo __NAMESPACE__ . '<br>';

const constant = 123;

function sum($a, $b)
{
    return $a + $b;
}

class ClassTesting
{
    public $var;

    public function func()
    {
        echo (__NAMESPACE__ .
            '->' . __CLASS__ .
            '->' . __METHOD__ . '<br>');
    }
}
