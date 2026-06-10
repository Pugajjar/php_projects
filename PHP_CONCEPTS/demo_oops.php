<?php

// Creating a class
class Student
{
    // Properties (Data Members)
    public $name;
    public $course;

    
    // Constructor
    // Automatically called when object is created
    function __construct($studentName, $studentCourse)
    {
        echo "<h3>Constructor Called</h3>";

        // Initializing properties
        $this->name = $studentName;
        $this->course = $studentCourse;
    }


    // Method to display student details
    function display()
    {
        echo "Student Name : " . $this->name;
        echo "<br>";

        echo "Student Course : " . $this->course;
        echo "<br>";
    }


    // Destructor
    // Automatically called when object is destroyed
    function __destruct()
    {
        echo "<br><h3>Destructor Called</h3>";
        echo "Object Destroyed Successfully";
    }
}


// --------------------------------------------------
// Creating Object
// --------------------------------------------------

$s1 = new Student("Rahul", "B.Tech");


// Calling Method
$s1->display();

?>