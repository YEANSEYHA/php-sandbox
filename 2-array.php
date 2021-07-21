<?php
    /* Type of Arrays
    -Index
    -Associative
    -Multi-dimensional
    */
    // Indexed
    $people=array('Hazard','Seyha','Kai Havert');
     /* echo $people[2]; */
    
    $ids=array(12,22,19);
    $cars=['Mazda','Honda','BMW'];
    $cars[]='BMW2';

    //echo count($cars);

    //print_r($cars);

    //echo $cars[3];

    // Associative Arrays

    $people = array('Brad'=> 10,'Werner'=> 23);
    $ids = [22=>'Brad', 22=>'Jose'];
    echo $ids[22];
    //echo $people['Brad'];



?>