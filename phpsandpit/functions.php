<?php
    //simple function
    function simpleFunction(){
        echo 'Hello World<br>';
    }

    //simpleFunction();

    function sayHello($name = 'World'){
        echo 'Hello ' . $name . '<br>';
    }

    //sayHello('fred');
    //sayHello('Mikayla');
    //sayHello();

    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2,3);

    //by Reference
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "value: $myNum<br>";
    addTen($myNum);
    echo "value: $myNum<br>";
?>