<?php

class User{
    public $name;
    public $age;
    public static $minPassLength=6;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }else{
            return false;
        }
    }
}
$password = 'Hello12';
if(User::validatePass($password)){
    echo 'Password valid';
}else{
    echo 'Password invalid';
}