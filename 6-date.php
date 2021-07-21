<?php
    //echo date('d'); //day
    //echo date('m'); // month
    //echo date('y'); 
    //echo date('l');
    //echo date('d/m/y');

    //echo date('h'); // hour
    //echo date('s'); // second
    //echo date('a'); // Am Or PM

    //Set Time Zone
    date_default_timezone_set('Asia/Phnom_Penh');
    
    echo('Phnom Penh');
    echo date('h:i:sa');

    $timestamp2 = strtotime('11:00pm March 31 1999');
    echo $timestamp2;
    
?>