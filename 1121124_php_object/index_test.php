<?php
class Animal
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

class Dog extends Animal
{
    function action()
    {
        echo "sit down";
    }
}

$animal = new Animal('小貓');
echo $animal->getName();
echo "<br>";
$animal->setName('貓咪');
echo $animal->getName();
echo "<br>";
$dog = new Dog('狗狗');
echo $dog->getName();
echo $dog->action();