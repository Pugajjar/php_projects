<?php

abstract class Vehicle
{
    abstract public function start();
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike Started";
    }
}

$b = new Bike();

$b->start();

?>