<?php
class Animal
{
    private $name;

    public function __construct($name) //被new出來之前就開始執行了
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
// $animal = new Animal('小明'); //實例化 instant

// $animal->setName('小花');
// echo $animal->getName();

class Dog extends Animal
{
    function sit()
    {
        echo "坐下";
    }
}
$dog = new Dog('汪汪');
echo $dog->getName();
echo "<br>";
$dog->setName('阿旺');
echo $dog->getName();
echo $dog->sit();
