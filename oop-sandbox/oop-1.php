<?php
// Define a class
class User{
    // Properties(attributes)
    public $name;

    //Methods(function)
    public function sayHello(){
        return $this->name.'Say Hello';
    }
}

// Instantiate a user Objet from the user classes

$user1=new User();
echo $user1->name='User1';
echo '<br>';
echo $user1->sayHello();


 
?>