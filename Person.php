<?php
class Person {
    public $name;
    public $age;
    public $id;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function personDetails()
    {
        echo "The person name is {$this->name} and the person age is {$this->age}";
    }
    function setId($id)
    {
        $this->id = $id;
    }
    public function __destruct()
    {
        echo "Saving..";
    }
}

$personOne = new Person("Borhan Uddin","28");
$personOne->setId(12);
unset($personOne);

?>