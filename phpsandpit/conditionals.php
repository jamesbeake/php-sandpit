<?php

    #Double Equals ==
    #Triple Equals ===

    $num = 6;

    if ($num == 5)
        echo '5 passed';
    elseif($num == 6)
        echo '6 passed';
    else
        echo 'Did not pass';


    if($num > 4)
        if($num < 10)
            echo "<br>$num passed";

    if($num > 4 XOR $num < 10)
        echo "<br>$num passed";
    else
        echo "<br>Did not pass XOR $num";

    $favColour = 'magenta';

    switch($favColour){
        case 'red':
            echo "<br> fav colour is red";
            break;
        case 'blue':
            echo "<br> fav colour is blue";
            break;
        default:
            echo "<br>fav colour $favColour is unknown to me";
    }
?>