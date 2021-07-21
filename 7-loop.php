<?php
    # Loops
    /* 
        For
        While
        Do... While
        Foreach
    */

    # For loop
    # params - init , condtition , inc

    /* for($i=0;$i<10;$i++){
        echo 'Number'.$i;
        echo '<br>';
    } */

    #While...Loop
    # params - condition
    /* $i=0;
    while($i<10){
        echo $i;
        echo '<br>';
        $i++;
    }
 */
    #Do...While
    /* $i=0;
    do{
        echo $i;
        echo '<br>';
        $i++;
    }
    while($i<10); */

    # Foreach Loop - For arrays

    $people=array('Seyha','Jimmy','Havert');
    foreach($people as $person){
        echo $person;
        echo '<br>';
    }

?>