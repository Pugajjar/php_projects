<?php

interface Animal
{
    public function sound();
}

class Cat implements Animal
{
    public function sound()
    {
        echo "Cat Meows";
    }
}

$c = new Cat();

$c->sound();

?>