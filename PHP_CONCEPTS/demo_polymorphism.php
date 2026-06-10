<?php

class Shape
{
    public function area()
    {
        echo "Calculating Area";
    }
}

class Circle extends Shape
{
    public function area()
    {
        echo "Area of Circle";
    }
}
$c1=new Shape();
$c = new Circle();
$c1->area(); echo "<br><br>";
$c->area();

?>