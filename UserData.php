<?php 
class UserData {
    public $user;
    public $userId;

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

}
$user = "borhan";
$userId = 123;

$userObj = new UserData($user,$userId);
?>