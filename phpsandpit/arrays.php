<?php

    #Indexed
    $people = array('Kevin', 'Sam', 'Sarah');
    $ids = array(23, 54, 65);
    $cars = ['Honda', 'Toyota', 'Holden'];
    $cars[3] = 'Mazda';
    $cars[] = "Porche";

    //var_dump($cars);
    //print_r($cars);
    //echo $cars[4];
    //echo count($cars);

    #Associative
    $people = ['Brad' => 35, 'Jose' => 32, 'William' => 37];
    $people['Jill'] = 42;

    //print_r($people);
    //var_dump($people);
    //echo $people['Jill'];
    //echo $people['Brad'];


    #Multi-dimentional
    $cars = array(
        array('Honda', 20, 10),
        array('Mazda', 45, 21),
        array('Toyota', 21, 2),
    );

    //echo $cars[2][0];
    

?>