<?php

class Employee
{
    private $salary = 50000;

    public function getSalary()
    {
        return $this->salary;
    }
}

$e1 = new Employee();

echo $e1->getSalary();

?>