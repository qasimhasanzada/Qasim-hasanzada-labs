<?php

class Student
{
    public $name;
    public $studentId;
    public $department;

    function __construct($name, $studentId, $department)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

// First object
$student1 = new Student(
    "Ahmad",
    1001,
    "Computer Science"
);

// Second object
$student2 = new Student(
    "Sara",
    1002,
    "Information Systems"
);

$student1->showInfo();

echo "<br>";

$student2->showInfo();

?>