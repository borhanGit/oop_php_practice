<?php 
class UserData {
    public $user;
    public $userId;
    const NAME = "MR.BORHAN UDDIN";
    public static $age = 30;

    public function __construct($user,$userId)
    {
        $this->user = $user;
        $this->userId = $userId;
        echo "the user is {$this->user} and the user id is {$this->userId}";
    }

    public function __destruct()
    {
        unset($this->user);
        unset($this->userId);
    }
    public static  function display()
    {
        echo "the age is : " . self::$age;
        echo "The Full Name is :". UserData::NAME;
    }

}
$user = "borhan";
$userId = 123;

$userObj = new UserData($user,$userId);
echo "<br>";
$userObj->display();
UserData::display();




?>