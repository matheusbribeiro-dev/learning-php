<div class="title">Traits #01</div>

<?php
/*Definindo uma trait */

trait valid
{
    public function stringValidator($string)
    {
        $isSet = isset($string);
        $isString = is_string($string);

        return $isSet and $isString; //is_string($string);
    }
}

trait goodValidator
{
    private $c = 'valor privado';

    public function goodValidatorString($str)
    {
        return isset($str) and trim($str); //trim retira espaços em branco das extremidades
    }
}

//Usando uma trait

class User
{
    use valid, goodValidator; //Os métodos já estão funcionando a partir da trait

    public function printValuePrivate()
    {
        echo "$this->c <br>";
    }
}

$user = new User();
$user->printValuePrivate();