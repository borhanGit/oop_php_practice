<?php
class Person {
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function personDetails()
    {
        echo "The person name is {$this->name} and the person age is {$this->age}";
    }
}

$personOne = new Person("Borhan Uddin","28");
$personOne->personDetails();
?>