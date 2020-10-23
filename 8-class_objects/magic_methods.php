<div class="title">Métodos mágicos</div>

<?php
/*Leia https://www.php.net/manual/pt_BR/language.oop5.magic.php */

class Person
{
    public $name;
    public $age;

    public function __construct($instanceName, $instanceAge)
    {
        echo "Construtor invocado !<br>";

        $this->name = $instanceName;
        $this->age = $instanceAge;
    }

    public function __destruct()
    {
        echo 'Foi de base';
    }

    public function __toString()
    { /*Método chamado quando o objeto precisa ser convertido para string*/
        return "{$this->name} tem {$this->age} anos";
    }

    public function niceToMeet()
    {
        echo $this . "<br>"; //apontando para o $this e assim ele executará o __toString
    }

    public function __get($arg)
    {
        echo "Lendo um atrb não declarado: {$arg}";
    }

    public function __set($atrb, $value)
    { /*Método chamado sempre que tentarmos setar atributos inexistentes */
        echo "Alterando atributo não declarado: {$atrb}/{$value}";
    }

    public function __call($method, $params)
    { /*É sempre chamado quando se instancia um objeto e chama um outro
    método que não existe*/
        echo "Tentando executar o método '{$method}'";
        echo ", com parâmetros: ";

        print_r($params);
    }
}

$person = new Person('Matheus', 20);
// $person->niceToMeet();

/*Assim tb será chamado o __toString */
// echo "$person <br>";

// echo "<p>---Usando método get----</p>";
// $person->nameCompleted = 'Legal'; -> método __set()
// $person->nameCompleted; -> método__get()

$person->exec(2, 3, 4);