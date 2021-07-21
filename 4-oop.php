<?php
// Access Modifier
// 1.Public can access outside the class 
// 2.Private can not access outside the class 
// 3.protected only class extend can access
class Customer{
    public $id=1;
    public $name;
    protected $email;
    public $balance;

    // Constructor
    public function __construct($id,$name,$email,$balance){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->balance=$balance;
    }

    public function getEmail(){
        return $this->email;
    }

   
}

//  Instantiate Class
$customer = new Customer(1,'Jimmy','Jimmy@gmail',0);
echo $customer->name;
echo '<br>';
echo $customer->getEmail();


// Extend class
class Subscriber extends Customer{
    public $plan;

    public function __construct($id,$name,$email,$balance, $plan){
        parent::__construct($id,$name,$email,$balance);
        $this->plan=$plan;
    }

    

}

$subscriber = new Subscriber(1,'Jimmy','Jimmy@gmail',0,'Pro');
echo '<br>';
echo $subscriber->getEmail();


?>