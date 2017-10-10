<?php
    // if(isset($_GET['name'])){
    //     //print_r($_GET);
    //     //$name = htmlentities($_GET['name']);
    //     //echo $name;
    // }

    if(isset($_POST['name'])){
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    }

    // if(isset($_REQUEST['name'])){
    // // print_r($_REQUEST);
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM processing</title>
</head>
<body>
    <form action="get_post.php" method="POST">
        <div>
            <label for="firstname">Name</label><br>
            <input type="text" name="name" id="firstname">
        </div>    
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>