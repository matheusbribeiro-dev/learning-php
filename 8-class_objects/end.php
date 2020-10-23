<div class="title">Modificador final</div>

<?php
abstract class ClassAbstract
{
    abstract public function method1();

    final public function method2()
    {
        echo "Imutável";
    }
}

class ClassConcrete extends ClassAbstract
{
    public function method1()
    {
        echo "executando método 1<br>";
    }

    // public function method2() {
    //     echo "estendendo método 2<br>";
    // } não pode ser feito, pois ele foi precedido de um final lá em cima
}

final class Only
{
    public $att;
}

//Pode instanciar, mas não estender

// class Double extends Only {
//     public $att2;
// } não poderia ser feito pois a classe a ser estendida está marcada com um 'final'