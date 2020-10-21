<div class="title">Visibilidade</div>

<?php
    class A {
        public $public = 'Público';/*Pode ser enxergado fora da classe */
        protected $protected = 'Protegido';/*Não pode ser enxergado fora da classe,
        mas é transmitido por herança*/
        private $private = 'Privado';/*Não pode ser enxergado fora da classe e é
        restrito a sua classe pai*/

        public function accessAtributes() {
            echo "Class A) Público = {$this->public}<br>";
            echo "Class A) Protegido = {$this->protected}<br>";
            echo "Class A) Privado = {$this->private}<br>";
        }

        protected function testing() {
            echo "deu<br>";
        }

        private function notAccess() {
            echo "Não serei impresso";
        }
    }

    $a = new A();
    $a->accessAtributes();
    echo "<br>";

    class B extends A {
        public function accessAtributesB() {
            echo "Class B) Publico = {$this->public}<br>";
            echo "Class B) Protegido = {$this->protected}<br>";
            echo "Class B) Privado = {$this->private}<br>";
        }
    }
    
    $b = new B();
    $b->accessAtributes();
    echo "<br>";  
    $b->accessAtributesB();
    echo "<br>";