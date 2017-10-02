<?php

    #DATE
    date_default_timezone_set('Australia/Brisbane');

    // echo date('d'); //day
    // echo date('m'); //month
    // echo date('Y');
    //echo date('Y/m/d l');

    //echo date(' h:i:s a');

    $birthday = mktime(15, 30, 45, 3, 15, 1966);
    //echo date('d/m/Y', $birthday);
    $birthday2 = strtotime('5:23:05am 15 March 1966');
    $birthday3 = strtotime('tomorrow');
    $time1 = strtotime('next Sunday');
    $time2 = strtotime('+2 days');
    echo date('d/m/Y h:i:sa', $time1);
?>