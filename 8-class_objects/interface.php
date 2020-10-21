<div class="title">Interface</div>

<?php
    /*Use uma interface quando o conceito que precisa ser traduzido para o código é
    muito genérico.
    Em interface apenas defina os métodos, em interfaces não os implemente*/

    interface Animal {/*Definindo uma interface com nome de animal */
        /*A diferença entre class e interface é que dentro da interface
        devo definir métodos e comportamentos a partir das classes*/

        /*Em interface os métodos são públicos por padrão e não é possível mudar
        este modificador de visibilidade*/

        public function breathe();/*Bom, com isso estou basicamente dizendo: Animais
        respiram, mas não sei como isso se dá, porém estou registrando que respiram
        Este método existe.*/

        /*Ao criar uma classe a partir desta interface ganharemos uma obrigação de
        implementar a função respirar*/
    }

    interface Mammal {
        public function suck(): string;
    }

    interface Canine extends Animal, Mammal {
        public function bark(): string;/*Obrigatoriamente o retorno deverá ser do tipo
        string*/
    }

    class Dog implements Canine {/*Palavra reservada para definir uma class a partir de uma interface. Uma classe pode implementar múltiplas interfaces*/
        public function breathe() {
            return "Puxa e solta oxigênio";
        }

        public function bark(): string {
            return "Latindo !";
        }
        
        public function suck(): string {
            return "Mamando";
        }
    }

    $dog1 = new Dog();
    echo $dog1->breathe(), "<br>";
    echo $dog1->bark(), "<br>";
    echo $dog1->suck(), "<br>";

    echo "<br>";
    var_dump($dog1 instanceof Dog);
    var_dump($dog1 instanceof Canine);