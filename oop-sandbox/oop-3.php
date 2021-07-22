<?php
Class User{
    private $name;
    private $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    //__get Magic Methods
    public function __get($property){
        if(property_exists($this,$property)){
            return $this->$property;
        }
    }

    //__set Magic Methods
    public function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property=$value;
        }
        return $this;
    }
}

$user1 = new User('Jimmy Brown',20);
//Can not access
//echo $user1->name;
//Using getting to access the name 
echo $user1->getName();
echo '<br>';
echo 'Access property using magic method';
echo '<br>';
$user1->__set('age',22);
echo $user1->__get('name');
echo $user1->__get('age');

echo '<br>';

?>