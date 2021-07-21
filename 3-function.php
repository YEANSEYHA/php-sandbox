<?php
    #Function - Block of code that can be repeatedly called

    function simpleFunction(){
        echo 'Hello World';
    }

    simpleFunction();
    simpleFunction(); 

    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }

    function addNumbers($num1, $num2){
        return $num1+$num2;
    }

    echo addNumbers(10,2);

?>