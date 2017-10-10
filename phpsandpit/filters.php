<?php
    //check for posted Data
    // if(filter_has_var(INPUT_POST, 'data')) {
    //   echo 'Data found';
    // } else {
    //   echo 'No Data';
    // }

    if(filter_has_var(INPUT_POST, 'data')) {

      $email = $_POST['data'];
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      echo $email.'<br>';
      // if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
      if (filter_var($email, FILTER_SANITIZE_EMAIL)) {
                # code...
        echo 'email valid';
      } else {
        echo 'Not an email';
      }
    }
?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data"/>
    <button type="submit" name="submit">Submit</button>
  </form>
