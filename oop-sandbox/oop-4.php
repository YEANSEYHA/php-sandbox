<?php
class User{
    protected $name='Jimmy Brown';
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}
// Customer can access User Properties and Methods
class Customer extends User{
    private $balance;

    public function __construct($name,$age,$balance){
        //Called Parent constructor
        parent::__construct($name,$age);
        $this->balance = $balance;
    }

    public function pay($amount){
        return $this->name . 'paid $' . $amount;
    }
    
    public function getBalance(){
        return $this->balance;
    }
}

$customer1 = new Customer('New Jimmy Brown', 100,5000);
echo $customer1->pay(200);
echo '<br>';
echo $customer1->getBalance();
