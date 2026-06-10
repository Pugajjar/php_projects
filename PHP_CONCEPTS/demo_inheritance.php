<?php

// Parent class
class Animal
{
    public function sound()
    {
        echo "Animal makes sound";
    }
}

// Child class
class Dog extends Animal
{
    public function bark()
    {
        echo "<br>Dog barks";
    }
}

$d1 = new Dog();

$d1->sound();
$d1->bark();

?>