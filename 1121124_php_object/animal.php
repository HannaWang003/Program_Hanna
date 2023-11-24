<?php
class Animal
{
}
interface bark
{

    function b();
}

class Dog extends Animal implements bark
{
    function b()
    {
        return "汪";
    }
}

class Cat extends Animal implements bark
{
    function b()
    {
        return "喵";
    }
}

$dog = new Dog;
$cat = new Cat;

echo $dog->b();
echo $cat->b();