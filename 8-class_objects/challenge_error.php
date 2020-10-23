<div class="title">Desafio dos erros</div>

<?php
    interface Template {
        function method1();
        public function method2($param);
    }

    abstract class ClassAbstract implements Template {
        function method1() {
            echo "Cumprindo obrigação";
        }

        public function method2($param) {
            echo "Sim $param";
        }

        public function method3() {
            echo "Estou funcionando";
        }
    }

    class ClassConcrete extends ClassAbstract {
        function __construct($args) {
            echo "Sim ta funcionando $args<br>";
        }

        public function method3() {
            parent::method3();
        }
    }

    $exemple = new ClassConcrete('teste');
    $exemple->method3();