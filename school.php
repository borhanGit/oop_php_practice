<?php 
interface School{
    public function mySchool();
}
interface Student {
    public function info();
}

class Teacher implements School,Student{

    public function __construct()
    {
        $this->mySchool();
        $this->info();
    }
    public function mySchool(){
        echo "I am a school teacher";
    }
    public function info(){
        echo "I am a school student";
    }

}
$teacher = new Teacher();
?>
