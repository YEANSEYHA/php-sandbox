<?php
class User{
    public $name;
    public $age;

    // constructor
    public function __construct($name, $age){
        echo __CLASS__.' instantiated';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        return $this->name. ' Said Hello';
    }
    // Called when on other reference to a certain object
    public function __destruct(){
        //echo 'Destructor ran';
    }
}

$user1 = new User('Seyha',22);
echo '<br>';
echo $user1->name;
echo '<br>';
echo $user1->age;
echo '<br>';
echo $user1->sayHello();



?>