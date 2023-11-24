<?php
class Animal
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
}

$animal = new Animal; //實例化 instant

$animal->setName('小花');
echo $animal->name;