<?php

class User{
    
    public $username = 'Jimmy Brown';
    public $email = 'brown@gmail.com';

}

$userOne = new User();
$userTwo = new User();

echo ''.get_class($userOne);


?>