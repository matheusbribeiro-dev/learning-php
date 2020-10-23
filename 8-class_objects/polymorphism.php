<div class="title">Polimorfismo</div>

<?php
abstract class Food
{
    public $weight;
}

class Rice extends Food
{

}

class RiceWhite extends Rice
{

}

class IceCream extends Food
{

}

class Person
{
    public $weight;

    public function __construct($instanceWeight)
    {
        $this->weight = $instanceWeight;
    }

    public function eat(Rice $food)
    {
        $this->weight += $food->weight;
    }
}

$c1 = new Rice();
$c1->weight = 0.45;

$c2 = new RiceWhite();
$c2->weight = 0.45;

$p = new Person(83.45);
$p->eat($c1);
$p->eat($c2);

echo $p->weight;
