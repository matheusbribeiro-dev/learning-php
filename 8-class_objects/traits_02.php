<div class="title">Trait #02</div>

<?php
trait valid
{
    public function stringValidator($str)
    {
        $isSet = isset($str);
        $isString = is_string($str);

        return $isSet and $isString; //is_string($string);
    }
}

trait goodValidator
{
    private $c = 'valor privado';

    public function stringValidator($str)
    {
        return isset($str) and trim($str); //trim retira espaços em branco das extremidades
    }
}

class User
{
    use valid, goodValidator { /*resolvendo conflito de nomes */
        goodValidator::stringValidator insteadof valid; /*Use o stringValidator
        do goodValidator ao invés de valid */

        valid::stringValidator as simpleValid; /*Mudando o nome da função dentro
    de valid somente no contexto User */
    }
}

$user = new User();
var_dump($user->stringValidator(' '));