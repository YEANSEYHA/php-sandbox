<?php
// Declearing Function
function Sayhello(){
    echo 'Hello from php world';
    
}

// Calling a function
Sayhello();
echo '<br>';

// Declearing a function with arguments
function greeting($name){
    echo 'Hello'.$name;
}

greeting('Seyha');
echo '<br>';

// Specific a default value
function greeting2($name="Jimmy"){
    echo 'Hello'.$name;
}
greeting2();
echo '<br>';

// Returning a value from a function
function restaurant_check($meal,$tax,$tip){
    $tax_amount=$meal*($tax/100);
    $tip_amount=$meal*($tip/100);
    $total_amount=$meal+$tax_amount+$tip_amount;

    echo 'Total'.$total_amount;
}
restaurant_check(100,2,1);



?>