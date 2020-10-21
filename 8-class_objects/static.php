<div class="title">Static</div>

<?php
    class A {
        public $notStatic = 'Variável de instância';
        public static $static = 'Variável de class (estática)';/*Não será
        instânciada, sempre pertencerá somente a classe */

        public function printA() {
            echo "Não estático = {$this->notStatic}<br>";
            //tentativa 1
            /* echo "Estática = {$this->static}<br>"; não funciona pois '$static' não
            é um atributo de instancia*/

            //tentativa2
            // echo "Estática = {self::$static}<br>";

            echo "Estática = " . self::$static . "<br>";
        }
        
        public static function printStaticA() {
            // echo "Não estático = {$this->notStatic}<br>";
            // echo "Estática = {$static}<br>"; não funciona assim
            echo "Estática = " . self::$static . "<br>";
        }
    }

    $objectA =  new A();
    $objectA->printA();
    //forma menos recomendada de usar uma function static
    // $objectA->printStaticA();

    //Forma mais recomendada
    A::printStaticA();
    A::$static = 'Alterando membro de classe';
    echo A::$static;