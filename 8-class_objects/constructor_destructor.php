<div class="title">Construtor e Destrutor</div>

<?php
    class Person {
        public $name;
        public $age;

        /*Definindo o construtor, o construtor é chamado no momento em que
        se está instânciando uma class, nos possibilitando passar por parâmetro
        os valores que aquele objeto instância receberá*/
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        /*Outro método especial é o destruct. Método chamado sempre que o objeto
        for destruído*/
        function __destruct() {
            echo 'Morreu !';
        }

        public function niceToMeet() {
            return "{$this->name}, {$this->age} anos<br>";
        }
    }

    $person = new Person('Geovanne', 42);
    echo $person->niceToMeet();