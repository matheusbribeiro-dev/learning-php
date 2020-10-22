<div class="title">Classe abstrata</div>

<?php
    abstract class ClassAbstract {/*Classes marcadas com 'abstract' não poderão ser instânciadas.
        então a utilidade de uma classe abstrata seria reuso de código, ou seja, ela pode ser herdada*/
        abstract public function method1();
        abstract protected function method2($param);
    }

    abstract class SanClassAbstract extends ClassAbstract {
        public function method1() {
            echo "executando método 1<br>";
        }


        abstract public function method3();
    }

    /*Class concreta */
    class Concrete extends SanClassAbstract {/*Quando eu extends uma class abstract serei obrigado a implementar os métodos definidos nos próprios */

        public function method1(){
            echo "Executando estendido";

            parent::method1();
        }
        
        protected function method2($param){
            echo "agr vai";
        }

        public function method3() {
            echo "deu ?";
        }
    }