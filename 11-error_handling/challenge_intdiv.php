<?php
namespace Arithmetic;

/* \ serve para acessar o namespace raiz do php pois a class Exception que estamos utilizando
foi definida lá */
class notIntegerException extends \Exception
{

}

function intdiv($a, $b)
{
    if ($b == 0) {
        throw new \DivisionByZeroError();
    }

    if (($a % $b) > 0) {
        throw new notIntegerException();
    }

    return $a / $b;
}
