<?php
    #LOOPS

    #FOR
    // for($i = 0;$i <= 10;$i++){
    //     echo 'Number ' . $i;
    //     echo '<br>';
    // }

    #WHILE
    // $i = 0;

    // while ($i < 10){
    //     echo $i;
    //     echo '<br>';
    //     $i++; 
    // }

    #DO..WHILE
    // always runs once
    // do{
    //     echo 'hello';
    // } while(false);

    #FOREACH
    // $people = ['Julie', 'Tom', 'Sarah'];

    // foreach($people as $person){
    //     echo $person;
    //     echo '<br>';
    // }

    $people = [
        'Julie'=>'julie@moonmarsh.com',
        'Tom'=>'tom@hollowdale.com',
        'Sarah'=>'sarah@gmail.com'
    ];

    foreach($people as $person=>$email){
        echo $person.': '.$email;
        echo '<br>';
    }
?>