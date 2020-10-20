<div class="title">Primeira classe</div>

<?php
    class Client {
        //atributos
        public $name = 'Anônimo';/*O 'public' serve para dizer que este atributo poderá
        ser 'enxergado' fora da classe. Ou seja, este valor antes do nome do atributo
        serve para definir seu nível de visibilidade e a definição do nível é
        obrigatória*/
        public $age = 18;

        public function niceToMeet() {
            return "Nome: {$this->name} Idade: {$this->age}";/*O 'this' serve para
            conseguirmos acessar a variável definida no construtor da própria classe*/
        }
    }

    $c1 = new Client();/*Palavra reservada 'new', serve para instânciar um objeto.
    Ou seja, 'c1' nada mais é que um objeto instância da classe Client*/
    $c1->name = 'Matheus';
    $c1->age = 20;

    /*Mais instâncias */
    $c2 = new Client;
    $c2->name = 'Gabriel';
    $c2->age = 32;

    echo $c1->niceToMeet(), '<br>';
    echo $c2->niceToMeet(), '<br>';