<div class="title">Herança</div>

<?php
    class Person {
        public $name;
        public $age;

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        function __destruct() {
            echo 'Excluído';
        }

        public function niceToMeet() {
            return "{$this->name}, {$this->age} anos";
        }
    }

    class User extends Person {
        public $login;

        function __construct($name, $age, $login) {
            // $this->name = $name;
            // $this->age = $age;
            parent::__construct($name, $age);/*Serve para
            referênciar a função da classe pai*/
            $this->login = $login;
        }

        function __destruct() {
            echo 'Usuário excluído';
        }

        public function niceToMeet() {
            return "@{$this->login}: " . parent::niceToMeet();/*Serve para
            referênciar a função da classe pai*/
        }
    }

    $user = new User('Matheus', 20, 'matheusribeiro.dev');
    echo $user->niceToMeet() . '<br>';